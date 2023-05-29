<?php

namespace App\Http\Resources\Payment;

use App\Models\PaymentSystem;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SystemListRequestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return PaymentSystem::where(['active' => PaymentSystem::ACTIVE])->get()->toArray();
    }
}
