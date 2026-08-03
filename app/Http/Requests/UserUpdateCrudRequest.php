<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\ValidatesUserTenant;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class UserUpdateCrudRequest extends FormRequest
{
    use ValidatesUserTenant;

    public function authorize(): bool
    {
        return backpack_auth()->check();
    }

    public function rules(): array
    {
        $id = $this->get('id') ?? request()->route('id');
        $userModel = config('backpack.permissionmanager.models.user');

        return [
            'email' => ['required', 'email', Rule::unique($userModel, 'email')->ignore($id)],
            'name' => 'required',
            'password' => 'nullable|confirmed',
            'active' => 'required|boolean',
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'remove_avatar' => ['nullable', 'boolean'],

            // precisa manter pelo menos um grupo/role no usuário
            'roles' => 'required|array|min:1|max:1',
            'roles.*' => 'exists:roles,id',
            'permissions' => 'nullable|array',
            'permissions.*' => 'exists:permissions,id',
            'tenant_id' => ['nullable', Rule::exists('tenants', 'id')->whereNull('deleted_at')],
        ];
    }

    public function withValidator(Validator $validator): void
    {
        $this->addTenantRoleValidation($validator);
    }

    public function messages(): array
    {
        return [
            'roles.required' => 'Selecione um grupo de acesso para o usuário.',
            'roles.array' => 'Selecione um grupo de acesso válido.',
            'roles.min' => 'Selecione um grupo de acesso para o usuário.',
            'roles.*.exists' => 'O grupo de acesso selecionado é inválido.',
        ];
    }

    public function attributes(): array
    {
        return [
            'email' => 'e-mail',
            'name' => 'nome',
            'password' => 'senha',
            'active' => 'status',
            'roles' => 'grupo de acesso',
            'tenant_id' => 'empresa',
            'avatar' => 'foto',
        ];
    }
}
