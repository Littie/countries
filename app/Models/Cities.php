<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Return country of which the city belong.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Countries::class, 'countries_id');
    }

    /**
     * Get all of the languages for the city.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function languages()
    {
        return $this->morphToMany(Languages::class, 'languagable');
    }
}
