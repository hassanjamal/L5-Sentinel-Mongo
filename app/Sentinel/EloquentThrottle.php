<?php
namespace App\Sentinel;

use Jenssegers\Mongodb\Model;

class EloquentThrottle extends Model
{
    /**
     * {@inheritDoc}
     */
    protected $table = 'throttle';

    /**
     * {@inheritDoc}
     */
    protected $fillable = [
        'ip',
        'type',
    ];
}
