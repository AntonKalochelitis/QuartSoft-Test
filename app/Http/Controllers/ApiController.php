<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\AbstractPaginator;
use Symfony\Component\HttpFoundation\Response;

/**
 * @OA\Info(
 *     title="QuartSoft API",
 *     version="0.1",
 *     @OA\Contact(
 *          email="fire.anton@gmail.com"
 *     ),
 * )
 */
class ApiController extends Controller
{
    /**
     * Base response.
     *
     * @param mixed $data
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function response($data = [], $code = Response::HTTP_OK)
    {
        return response()->json(
            (object)$data,
            $code
        );
    }

    /**
     * Base error response.
     *
     * @param string $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseError($message = '', $code = Response::HTTP_BAD_REQUEST)
    {
        return response()->json(
            (object)[
                'error' => true,
                'message' => $message,
            ], $code);
    }
}
