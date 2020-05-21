<?php

namespace App\Models\Show;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Show\Season
 *
 * @property int $id
 * @property int $show_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Show\Episode[] $episodes
 * @property-read int|null $episodes_count
 * @property-read \App\Models\Show\Show $show
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Show\Season newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Show\Season newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Show\Season query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Show\Season whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Show\Season whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Show\Season whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Show\Season whereShowId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Show\Season whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Season extends Model
{
    protected $table = 'seasons';

    public function episodes(): HasMany
    {
        return $this->hasMany(Episode::class);
    }

    public function show(): BelongsTo
    {
        return $this->belongsTo(Show::class);
    }
}
