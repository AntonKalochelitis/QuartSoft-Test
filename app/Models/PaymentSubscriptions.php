<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property integer subscription_id
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 */
class PaymentSubscriptions extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'subscription_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
