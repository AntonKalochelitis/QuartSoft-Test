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
     * @OA\Post(
     *  path="/api/admin/list",
     *  summary="Admin users list",
     *  description="Admin users list",
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
     * @OA\Post(
     *  path="/api/admin/add",
     *  summary="Add user to admin list",
     *  description="Add user to admin list",
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
     * @OA\Post(
     *  path="/api/admin/subscription/add",
     *  summary="Add new subscription",
     *  description="Add new subscription",
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
     * @OA\Post(
     *  path="/api/admin/subscription/edit",
     *  summary="Edit subscription by id",
     *  description="Edit subscription",
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
     * @OA\Post(
     *  path="/api/admin/subscription/delete",
     *  summary="delete subscription by id",
     *  description="delete subscription",
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
