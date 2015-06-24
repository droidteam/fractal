<?php

namespace Appkr\Fractal\Example;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'resources';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'manager_id',
        'description',
        'deprecated'
    ];

    # Relationships

    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }

}
