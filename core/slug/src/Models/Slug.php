<?php

namespace Botble\Slug\Models;

use Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Botble\Slug\Models\Slug
 *
 * @mixin \Eloquent
 */
class Slug extends Eloquent
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'slugs';

    /**
     * @var array
     */
    protected $fillable = [
        'key',
        'reference',
        'reference_id',
    ];
}
