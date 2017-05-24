<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'code',
    ];

    /**
     * Return cities that belong to country.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities()
    {
        return $this->hasMany(Cities::class);
    }

    /**
     * Get all of the languages for the country.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function languages()
    {
        return $this->morphToMany(Languages::class, 'languagable');
    }
}
