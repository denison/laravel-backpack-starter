<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidCpfCnpj implements ValidationRule
{
    public function __construct(
        private readonly string $type
    ) {}

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $document = preg_replace('/\D+/', '', (string) $value);
        $valid = match (strtolower($this->type)) {
            'cpf' => $this->isValidCpf($document),
            'cnpj' => $this->isValidCnpj($document),
            default => false,
        };

        if (! $valid) {
            $fail('O :attribute informado é inválido.');
        }
    }

    private function isValidCpf(string $document): bool
    {
        if (strlen($document) !== 11 || preg_match('/^(\d)\1{10}$/', $document)) {
            return false;
        }

        for ($digit = 9; $digit < 11; $digit++) {
            $sum = 0;

            for ($index = 0; $index < $digit; $index++) {
                $sum += ((int) $document[$index]) * (($digit + 1) - $index);
            }

            $checkDigit = (10 * $sum) % 11;
            $checkDigit = $checkDigit === 10 ? 0 : $checkDigit;

            if ((int) $document[$digit] !== $checkDigit) {
                return false;
            }
        }

        return true;
    }

    private function isValidCnpj(string $document): bool
    {
        if (strlen($document) !== 14 || preg_match('/^(\d)\1{13}$/', $document)) {
            return false;
        }

        $weights = [
            [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2],
            [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2],
        ];

        foreach ($weights as $digit => $digitWeights) {
            $sum = 0;

            foreach ($digitWeights as $index => $weight) {
                $sum += ((int) $document[$index]) * $weight;
            }

            $remainder = $sum % 11;
            $checkDigit = $remainder < 2 ? 0 : 11 - $remainder;

            if ((int) $document[12 + $digit] !== $checkDigit) {
                return false;
            }
        }

        return true;
    }
}
