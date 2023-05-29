<?php

namespace App\Http\Resources\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if (is_null($request->user()->email_verified_at)) {
            return [
                'email_verified_at' => $request->user()->email_verified_at
            ];
        }

        return [
            'user_id' => $request->user()->id,
            'access_token' => $this->plainTextToken,
            'token_type' => 'Bearer',
            'email_verified_at' => $request->user()->email_verified_at
        ];
    }
}
