<?php

namespace Botble\SimpleSlider\Models;

use Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Botble\SimpleSlider\Models\SimpleSlider
 *
 * @mixin \Eloquent
 */
class SimpleSlider extends Eloquent
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'simple_sliders';

    protected $fillable = [
        'title',
        'description',
        'link',
        'image',
        'status',
        'order',
    ];
}
