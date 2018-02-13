<?php

namespace Botble\Translation\Models;

use DB;
use Eloquent;

/**
 * Translation model
 *
 * @property integer $id
 * @property integer $status
 * @property string $locale
 * @property string $group
 * @property string $key
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Translation extends Eloquent
{

    const STATUS_SAVED = 0;
    const STATUS_CHANGED = 1;

    /**
     * @var string
     */
    protected $table = 'translations';

    /**
     * @var array
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    /**
     * @param $query
     * @param $group
     * @return mixed
     */
    public function scopeOfTranslatedGroup($query, $group)
    {
        return $query->where('group', $group)->whereNotNull('value');
    }

    /**
     * @param $query
     * @param $ordered
     * @return mixed
     */
    public function scopeOrderByGroupKeys($query, $ordered)
    {
        if ($ordered) {
            $query->orderBy('group')->orderBy('key');
        }

        return $query;
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeSelectDistinctGroup($query)
    {
        switch (DB::getDriverName()) {
            case 'mysql':
                $select = 'DISTINCT `group`';
                break;
            default:
                $select = 'DISTINCT "group"';
                break;
        }

        return $query->select(DB::raw($select));
    }
}
