<?php

namespace Botble\Base\Models;

use Eloquent;

abstract class AbstractEloquentModel extends Eloquent
{
    public function newEloquentBuilder($query)
    {
        return new EloquentBuilder($query);
    }
}
