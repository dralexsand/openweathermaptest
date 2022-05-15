<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\StatsCat
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
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCat query()
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCat whereArt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCat whereDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCat wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCat wherePos2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCat wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCat whereQ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCat whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatsCat whereStock($value)
 * @mixin \Eloquent
 */
class StatsCat extends Model
{
    use HasFactory;

    protected $table = "stats_cats";
    protected $guarded = [];
}
