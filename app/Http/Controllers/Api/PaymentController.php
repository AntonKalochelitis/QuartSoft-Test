<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Payment\SystemListRequest;
use App\Http\Resources\Payment\SystemListRequestResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PaymentController extends ApiController
{
    public function showSystemList(SystemListRequest $request): JsonResponse
    {
        return $this->response(
            SystemListRequestResource::make($request)
        );
    }

    public function subscriptionBuy(): JsonResponse
    {
        return $this->response();
    }

    public function subscriptionShow(): JsonResponse
    {
        return $this->response();
    }

//    public function subscriptionBuy(): JsonResponse
//    {
//        return $this->response();
//    }

    public function subscriptionCancel(): JsonResponse
    {
        return $this->response();
    }
}
