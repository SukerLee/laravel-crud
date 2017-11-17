<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Article
 * @package App\Models
 * @version November 16, 2017, 10:02 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property string art_title
 * @property string art_tag
 * @property string art_description
 * @property string art_keywords
 * @property string art_content
 * @property string art_thumb
 * @property string|\Carbon\Carbon art_time
 * @property string art_editor
 * @property integer art_view
 * @property integer cate_id
 */
class Article extends Model
{
    use SoftDeletes;

    public $table = 'article';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'art_title',
        'art_tag',
        'art_description',
        'art_keywords',
        'art_content',
        'art_thumb',
        'art_time',
        'art_editor',
        'art_view',
        'cate_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'art_id' => 'integer',
        'art_title' => 'string',
        'art_tag' => 'string',
        'art_description' => 'string',
        'art_keywords' => 'string',
        'art_content' => 'string',
        'art_thumb' => 'string',
        'art_editor' => 'string',
        'art_view' => 'integer',
        'cate_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
