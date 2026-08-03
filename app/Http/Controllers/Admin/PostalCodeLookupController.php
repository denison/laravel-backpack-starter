<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\PostalCodeService;
use Illuminate\Http\JsonResponse;
use Throwable;

class PostalCodeLookupController extends Controller
{
    public function __invoke(string $postalCode, PostalCodeService $postalCodeService): JsonResponse
    {
        abort_unless(
            backpack_user()?->canAny(['tenants.create', 'tenants.edit']),
            403
        );

        try {
            $address = $postalCodeService->lookup($postalCode);
        } catch (Throwable $exception) {
            report($exception);

            return response()->json([
                'message' => 'Não foi possível consultar o CEP agora.',
            ], 503);
        }

        if (! $address) {
            return response()->json([
                'message' => 'CEP não encontrado.',
            ], 404);
        }

        return response()->json(['data' => $address]);
    }
}
