<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Payment\SystemListRequest;
use App\Http\Resources\Payment\SystemListRequestResource;
use Illuminate\Http\Request;

class PaymentController extends ApiController
{
    public function showSystemList(SystemListRequest $request)
    {
        return $this->response(
            SystemListRequestResource::make($request)
        );
    }
}
