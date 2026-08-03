<?php

namespace App\Http\Requests\Concerns;

use App\Services\UserAssignmentService;
use Illuminate\Validation\Validator;

trait ValidatesUserTenant
{
    protected function addTenantRoleValidation(Validator $validator): void
    {
        $validator->after(function (Validator $validator): void {
            $errors = app(UserAssignmentService::class)->validationErrors(
                backpack_user(),
                (array) $this->input('roles', []),
                $this->input('tenant_id')
            );

            foreach ($errors as $field => $message) {
                $validator->errors()->add($field, $message);
            }
        });
    }
}
