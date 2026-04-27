<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateCrudRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check();
    }

    public function rules()
    {
        $id = $this->get('id') ?? request()->route('id');

        return [
            'email' => 'required|email|unique:'.config('backpack.permissionmanager.models.user', 'users').',email,'.$id,
            'name' => 'required',
            'password' => 'nullable|confirmed',

            // precisa manter pelo menos um grupo/role no usuário
            'roles' => 'required|array|min:1',
            'roles.*' => 'exists:roles,id',
        ];
    }

    public function messages()
    {
        return [
            'roles.required' => 'Selecione um grupo de acesso para o usuário.',
            'roles.array' => 'Selecione um grupo de acesso válido.',
            'roles.min' => 'Selecione um grupo de acesso para o usuário.',
            'roles.*.exists' => 'O grupo de acesso selecionado é inválido.',
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'e-mail',
            'name' => 'nome',
            'password' => 'senha',
            'roles' => 'grupo de acesso',
        ];
    }
}
