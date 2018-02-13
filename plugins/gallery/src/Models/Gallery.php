<?php

namespace Botble\Gallery\Models;

use Botble\ACL\Models\User;
use Botble\Slug\Traits\SlugTrait;
use Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Eloquent
{
    use SoftDeletes;
    use SlugTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'galleries';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['deleted_at'];

    /**
     * The date fields for the model.clear
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'parent_id',
        'featured',
        'order',
        'image',
        'status',
    ];

    /**
     * @var string
     */
    protected $screen = GALLERY_MODULE_SCREEN_NAME;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * @author Sang Nguyen
     */
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}
