<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    protected $fillable = ['gid', 'note', 'rin', 'name', 'description', 'is_active', 'type_id', 'group'];

    protected $attributes = ['is_active' => false];

    protected $casts = ['is_active' => 'boolean'];

    public function person()
    {
        return $this->belongsToMany(Person::class);
    }
}
