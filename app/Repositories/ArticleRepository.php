<?php

namespace App\Repositories;

use App\Models\Article;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ArticleRepository
 * @package App\Repositories
 * @version November 16, 2017, 10:02 am UTC
 *
 * @method Article findWithoutFail($id, $columns = ['*'])
 * @method Article find($id, $columns = ['*'])
 * @method Article first($columns = ['*'])
*/
class ArticleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Article::class;
    }
}
