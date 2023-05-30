<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
