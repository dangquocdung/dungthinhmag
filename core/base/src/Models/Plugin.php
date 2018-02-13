<?php

namespace Botble\Base\Models;

use Eloquent;

class Plugin extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'plugins';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'provider',
        'author',
        'url',
        'version',
        'description',
    ];
}
