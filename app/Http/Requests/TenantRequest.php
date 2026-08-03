<?php

namespace App\Http\Requests;

use App\Rules\ValidCpfCnpj;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TenantRequest extends FormRequest
{
    public function authorize(): bool
    {
        return backpack_auth()->check();
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'document_type' => strtolower((string) $this->input('document_type')),
            'document' => preg_replace('/\D+/', '', (string) $this->input('document')),
            'postal_code' => preg_replace('/\D+/', '', (string) $this->input('postal_code')),
            'phone' => $this->filled('phone')
                ? preg_replace('/\D+/', '', (string) $this->input('phone'))
                : null,
            'whatsapp' => $this->filled('whatsapp')
                ? preg_replace('/\D+/', '', (string) $this->input('whatsapp'))
                : null,
            'state' => strtoupper((string) $this->input('state')),
            'country_code' => strtoupper((string) $this->input('country_code', 'BR')),
        ]);
    }

    public function rules(): array
    {
        $tenantId = $this->route('id') ?? $this->input('id');

        return [
            'name' => ['required', 'string', 'max:255'],
            'document_type' => ['required', Rule::in(['cpf', 'cnpj'])],
            'document' => [
                'required',
                'string',
                Rule::unique('tenants', 'document')->ignore($tenantId),
                new ValidCpfCnpj((string) $this->input('document_type')),
            ],
            'contact_name' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'email:rfc', 'max:255'],
            'phone' => ['nullable', 'digits_between:10,11'],
            'whatsapp' => ['nullable', 'digits_between:10,11'],
            'postal_code' => ['required', 'digits:8'],
            'street' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:30'],
            'complement' => ['nullable', 'string', 'max:255'],
            'district' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'size:2'],
            'country_code' => ['required', 'string', 'size:2'],
            'active' => ['required', 'boolean'],
            'logo' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'remove_logo' => ['nullable', 'boolean'],
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'nome',
            'document_type' => 'tipo de documento',
            'document' => 'CPF ou CNPJ',
            'contact_name' => 'nome do contato',
            'email' => 'e-mail',
            'phone' => 'telefone',
            'whatsapp' => 'WhatsApp',
            'postal_code' => 'CEP',
            'street' => 'logradouro',
            'number' => 'número',
            'complement' => 'complemento',
            'district' => 'bairro',
            'city' => 'cidade',
            'state' => 'estado',
            'country_code' => 'país',
            'active' => 'status',
            'logo' => 'logo',
        ];
    }
}
