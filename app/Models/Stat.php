<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Stat
 *
 * @property int $id
 * @property int|null $art
 * @property string|null $q
 * @property string $pos
 * @property int|null $pos2
 * @property string $dt
 * @property int|null $rating
 * @property int|null $price
 * @property int|null $stock
 * @method static \Illuminate\Database\Eloquent\Builder|Stat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Stat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Stat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Stat whereArt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stat whereDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stat wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stat wherePos2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stat wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stat whereQ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stat whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stat whereStock($value)
 * @mixin \Eloquent
 */
class Stat extends Model
{
    use HasFactory;

    protected $table = "stats";
    protected $guarded = [];
}
