<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Payment\SystemListRequest;
use App\Http\Resources\Payment\SystemListRequestResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PaymentController extends ApiController
{
    /**
     * @OA\Post(
     *  path="/api/payment/system/list",
     *  summary="Payment system list",
     *  description="Payment system list",
     *  @OA\Parameter(
     *     in="header",
     *     name="",
     *     description="Accept:application/json;",
     *  ),
     *  @OA\Response(
     *    response="200",
     *    description="Success response"
     *  )
     * )
     *
     * @param SystemListRequest $request
     * @return JsonResponse
     */
    public function showSystemList(SystemListRequest $request): JsonResponse
    {
        return $this->response(
            SystemListRequestResource::make($request)
        );
    }

    /**
     * @OA\Post(
     *  path="/api/payment/subscription/buy",
     *  summary="Buy subscription",
     *  description="Buy subscription",
     *  @OA\Parameter(
     *     in="header",
     *     name="",
     *     description="Accept:application/json;",
     *  ),
     *  @OA\Response(
     *    response="200",
     *    description="Success response"
     *  )
     * )
     *
     * @return JsonResponse
     */
    public function subscriptionBuy(): JsonResponse
    {
        return $this->response();
    }

    /**
     * @OA\Post(
     *  path="/api/payment/subscription/show",
     *  summary="Buy subscription",
     *  description="Buy subscription",
     *  @OA\Parameter(
     *     in="header",
     *     name="",
     *     description="Accept:application/json;",
     *  ),
     *  @OA\Response(
     *    response="200",
     *    description="Success response"
     *  )
     * )
     *
     * @return JsonResponse
     */
    public function subscriptionShow(): JsonResponse
    {
        return $this->response();
    }

    /**
     * @OA\Post(
     *  path="/api/payment/subscription/cancel",
     *  summary="Cancel subscription",
     *  description="Cancel subscription",
     *  @OA\Parameter(
     *     in="header",
     *     name="",
     *     description="Accept:application/json;",
     *  ),
     *  @OA\Response(
     *    response="200",
     *    description="Success response"
     *  )
     * )
     *
     * @return JsonResponse
     */
    public function subscriptionCancel(): JsonResponse
    {
        return $this->response();
    }
}
