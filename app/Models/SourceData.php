<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property string $group
 * @property int    $gid
 * @property string $date
 * @property string $text
 * @property string $agnc
 * @property string $created_at
 * @property string $updated_at
 */
class SourceData extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'source_data';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['group', 'gid', 'date', 'text', 'agnc', 'created_at', 'updated_at'];
}
