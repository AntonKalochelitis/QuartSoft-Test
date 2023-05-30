<?php

namespace App\Models;

use App\Http\Requests\Admin\EditSubscriptionRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * @property int id
 * @property string name
 * @property float price
 * @property integer count_available_publication
 * @property boolean active
 * @property string created_at
 * @property string updated_at
 */
class Subscription extends Model
{
    public const ACTIVE = 1;
    public const NOACTIVE = 0;

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'price',
        'count_available_publication',
        'active',
        'created_at',
        'updated_at'
    ];

    public static function editSubscription(EditSubscriptionRequest $request): bool
    {
        DB::beginTransaction();

        try {
            /** @var Subscription $object */
            $object = (new Subscription)->find($request->id);
            $object->name = $request->name;
            $object->price = $request->price;
            $object->count_available_publication = $request->count_available_publication;
            $object->active = $request->active;
            $object->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            return false;
        }

        return true;
    }

    public static function deleteSubscription(int $id)
    {
        DB::beginTransaction();

        try {
            Subscription::destroy([
                'id' => $id
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            return false;
        }

        return true;
    }
}
