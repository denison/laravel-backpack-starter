<?php

return [
    'required' => 'O campo :attribute é obrigatório.',
    'email' => 'O campo :attribute deve ser um endereço de e-mail válido.',
    'confirmed' => 'A confirmação do campo :attribute não confere.',
    'unique' => 'O valor informado para :attribute já está em uso.',

    'attributes' => [
        'name' => 'nome',
        'email' => 'e-mail',
        'password' => 'senha',
        'password_confirmation' => 'confirmação de senha',
        'roles' => 'grupo de acesso',
        'permissions' => 'permissões',
        'display_name' => 'nome de exibição',
        'guard_name' => 'guard',
    ],
];
