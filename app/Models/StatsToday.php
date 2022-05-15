<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\StatsToday
 *
 * @property int $id
 * @property int|null $art
 * @property string|null $q
 * @property string|null $pos
 * @property int|null $pos2
 * @property string $dt
 * @property int|null $rating
 * @property int|null $price
 * @property int|null $stock
 * @method static \Illuminate\Database\Eloquent\Builder|StatsToday newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatsToday newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatsToday query()
 * @method static \Illuminate\Database\Eloquent\Builder|StatsToday whereArt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsToday whereDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsToday whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsToday wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsToday wherePos2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsToday wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsToday whereQ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsToday whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsToday whereStock($value)
 * @mixin \Eloquent
 */
class StatsToday extends Model
{
    use HasFactory;

    protected $table = "stats_today";
    protected $guarded = [];
}
