<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\StatsCache
 *
 * @property int $id
 * @property int|null $art
 * @property string|null $q
 * @property string $last_upd
 * @property string $pos_dt
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCache newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCache newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCache query()
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCache whereArt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCache whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCache whereLastUpd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCache wherePosDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCache whereQ($value)
 * @mixin \Eloquent
 */
class StatsCache extends Model
{
    use HasFactory;

    protected $table = "stats_cache";
    protected $guarded = [];
}
