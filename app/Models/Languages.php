<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'code',
    ];

    /**
     * Get all of the countries that are assigned this language.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function countries()
    {
        return $this->morphedByMany(Countries::class, 'languagable');
    }

    /**
     * Get all of the cities that are assigned this language.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function cities()
    {
        return $this->morphedByMany(Cities::class, 'languagable');
    }
}
