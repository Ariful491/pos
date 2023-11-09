<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @param string $message
     * @param string|null $redirectUrl
     * @param array $data
     * @return JsonResponse
     */
    public function successResponse(string $message, string $redirectUrl = null, array $data = []): JsonResponse
    {
        $data = [
            'status' => true,
            'message' => !empty($message) ? $message : 'success',
            'data' => $data
        ];
        if (!empty($redirectUrl)) {
            $data['redirectUrl'] = $redirectUrl;
        }
        return response()->json($data);
    }

}
