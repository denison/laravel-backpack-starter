<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use RuntimeException;

class PostalCodeService
{
    public function lookup(string $postalCode): ?array
    {
        return Cache::remember(
            "postal-code:{$postalCode}",
            now()->addDays(30),
            fn () => $this->fetch($postalCode)
        );
    }

    private function fetch(string $postalCode): ?array
    {
        $response = Http::baseUrl(config('services.viacep.url'))
            ->acceptJson()
            ->timeout(5)
            ->retry(2, 200, throw: false)
            ->get("{$postalCode}/json/");

        if (! $response->successful()) {
            throw new RuntimeException('ViaCEP request failed with status '.$response->status().'.');
        }

        $address = $response->json();

        if (! is_array($address)) {
            throw new RuntimeException('ViaCEP returned an invalid response.');
        }

        if (($address['erro'] ?? false) === true) {
            return null;
        }

        return [
            'postal_code' => preg_replace('/\D+/', '', (string) ($address['cep'] ?? $postalCode)),
            'street' => (string) ($address['logradouro'] ?? ''),
            'complement' => (string) ($address['complemento'] ?? ''),
            'district' => (string) ($address['bairro'] ?? ''),
            'city' => (string) ($address['localidade'] ?? ''),
            'state' => (string) ($address['uf'] ?? ''),
            'country_code' => 'BR',
        ];
    }
}
