<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Admin\AddToAdminListRequest;
use App\Http\Requests\Admin\AddToSubscriptionListRequest;
use App\Http\Requests\Admin\DeleteFromAdminListRequest;
use App\Http\Requests\Admin\DeleteFromSubscriptionListRequest;
use App\Http\Requests\Admin\EditSubscriptionRequest;
use App\Http\Requests\Admin\ShowAdminListRequest;
use App\Http\Requests\Admin\ShowSubscriptionListRequest;
use Illuminate\Http\JsonResponse;

class AdminController extends ApiController
{
    /**
     * @param ShowAdminListRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function showAdminList(ShowAdminListRequest $request): JsonResponse
    {
        try {
            return $this->response();
        } catch (\Exception $e) {

            throw $e;
        }
    }

    /**
     * @param DeleteFromAdminListRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function deleteFromAdminList(DeleteFromAdminListRequest $request): JsonResponse
    {
        try {
            return $this->response();
        } catch (\Exception $e) {

            throw $e;
        }
    }

    /**
     * @param ShowSubscriptionListRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function showSubscriptionList(ShowSubscriptionListRequest $request): JsonResponse
    {
        try {
            return $this->response();
        } catch (\Exception $e) {

            throw $e;
        }
    }

    /**
     * @param AddToAdminListRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function addToAdminList(AddToAdminListRequest $request): JsonResponse
    {
        try {
            return $this->response();
        } catch (\Exception $e) {

            throw $e;
        }
    }

    /**
     * @param AddToSubscriptionListRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function addToSubscriptionList(AddToSubscriptionListRequest $request): JsonResponse
    {
        try {
            return $this->response();
        } catch (\Exception $e) {

            throw $e;
        }
    }

    /**
     *
     *
     * @param EditSubscriptionRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function editSubscription(EditSubscriptionRequest $request): JsonResponse
    {
        try {
            return $this->response();
        } catch (\Exception $e) {

            throw $e;
        }
    }

    /**
     * @param DeleteFromSubscriptionListRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function deleteFromSubscriptionList(DeleteFromSubscriptionListRequest $request): JsonResponse
    {
        try {
            return $this->response();
        } catch (\Exception $e) {

            throw $e;
        }
    }
}
