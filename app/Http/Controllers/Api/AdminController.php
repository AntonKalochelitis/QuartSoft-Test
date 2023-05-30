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
use App\Http\Resources\Admin\ShowAdminListResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class AdminController extends ApiController
{
    /**
     * @OA\Get(
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
     * @param ShowAdminListRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function showAdminList(ShowAdminListRequest $request): JsonResponse
    {
        try {
            return $this->response(ShowAdminListResource::make($request));
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * @OA\Post(
     *  path="/api/admin/delete",
     *  summary="Payment system list",
     *  description="Payment system list",
     *  @OA\Parameter(
     *     in="header",
     *     name="",
     *     description="Accept:application/json;"
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
            /** @var User $user */
            $user = $request->user();

            if (!$user->isAdmin()) {
                throw new UnprocessableEntityHttpException(__('admin.is_not_admin'));
            }

            return $this->response(['admin_delete' => $user->deleteUserAdmin($request->user_admin_id)]);
        } catch (\Exception $e) {

            throw $e;
        }
    }

    /**
     * @OA\Get(
     *  path="/api/admin/subscription/list",
     *  summary="Get subscription list",
     *  description="Get subscription list",
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
     *  @OA\RequestBody(
     *      required=true,
     *      description="Pass user credentials",
     *      @OA\JsonContent(
     *          required={"user_admin_id"},
     *          @OA\Property(property="user_admin_id", type="integer", format="text", example="11"),
     *      ),
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
            /** @var User $user */
            $user = $request->user();

            if (!$user->isAdmin()) {
                throw new UnprocessableEntityHttpException(__('admin.is_not_admin'));
            }

            return $this->response(['admin_add' => $user->addUserAdmin($request->user_admin_id)]);
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
     * @OA\Delete(
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
