<?php

namespace Botble\ACL\Activations;

use Illuminate\Database\Eloquent\Model;

class EloquentActivation extends Model implements ActivationInterface
{
    /**
     * {@inheritDoc}
     */
    protected $table = 'activations';

    /**
     * {@inheritDoc}
     */
    protected $fillable = [
        'code',
        'completed',
        'completed_at',
    ];

    /**
     * Get mutator for the "completed" attribute.
     *
     * @param  mixed $completed
     * @return bool
     */
    public function getCompletedAttribute($completed)
    {
        return (bool)$completed;
    }

    /**
     * Set mutator for the "completed" attribute.
     *
     * @param  mixed $completed
     * @return void
     */
    public function setCompletedAttribute($completed)
    {
        $this->attributes['completed'] = (bool)$completed;
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        return $this->attributes['code'];
    }
}
