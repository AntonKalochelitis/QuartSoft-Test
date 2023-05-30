<?php

namespace App\Http\Resources\Admin;

use App\Models\UsersAdmin;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowAdminListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return UsersAdmin::all()->toArray();
    }
}
