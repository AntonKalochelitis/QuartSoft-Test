<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends ApiController
{
    public function publish():JsonResponse
    {
        try {
            return $this->response();
        } catch (\Exception $e) {

            throw $e;
        }
    }

    public function unpublish():JsonResponse
    {
        try {
            return $this->response();
        } catch (\Exception $e) {

            throw $e;
        }
    }

    public function deletePublish():JsonResponse
    {
        try {
            return $this->response();
        } catch (\Exception $e) {

            throw $e;
        }
    }
}
