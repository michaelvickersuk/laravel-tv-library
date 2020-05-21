<?php

namespace App\Models\Genre;

use App\Models\Show\Show;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Genre\Genre
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Show\Show[] $shows
 * @property-read int|null $shows_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Genre\Genre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Genre\Genre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Genre\Genre query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Genre\Genre whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Genre\Genre whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Genre\Genre whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Genre\Genre whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Genre extends Model
{
    protected $table = 'genres';

    public function shows(): BelongsToMany
    {
        return $this->belongsToMany(Show::class, 'shows_genres');
    }
}
