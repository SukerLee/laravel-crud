<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 * @version November 16, 2017, 10:04 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property integer sort_order
 * @property string pic
 * @property string title
 * @property string description
 * @property string introduction
 * @property boolean isshow
 * @property boolean istop
 * @property boolean status
 * @property decimal price
 * @property string spec
 * @property string|\Carbon\Carbon create_time
 * @property string|\Carbon\Carbon update_time
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'product';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'sort_order',
        'pic',
        'title',
        'description',
        'introduction',
        'isshow',
        'istop',
        'status',
        'price',
        'spec',
        'create_time',
        'update_time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'sort_order' => 'integer',
        'pic' => 'string',
        'title' => 'string',
        'description' => 'string',
        'introduction' => 'string',
        'isshow' => 'boolean',
        'istop' => 'boolean',
        'status' => 'boolean',
        'spec' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
