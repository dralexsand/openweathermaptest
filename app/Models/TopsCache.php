<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TopsCache
 *
 * @property int $id
 * @property int|null $art
 * @property string|null $dt
 * @property int|null $pop
 * @property int|null $top
 * @property int|null $price
 * @property float|null $rating
 * @property int|null $stock
 * @property int|null $cats
 * @property string|null $ts
 * @property string|null $ps
 * @method static \Illuminate\Database\Eloquent\Builder|TopsCache newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TopsCache newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TopsCache query()
 * @method static \Illuminate\Database\Eloquent\Builder|TopsCache whereArt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopsCache whereCats($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopsCache whereDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopsCache whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopsCache wherePop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopsCache wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopsCache wherePs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopsCache whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopsCache whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopsCache whereTop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopsCache whereTs($value)
 * @mixin \Eloquent
 */
class TopsCache extends Model
{
    use HasFactory;

    protected $table = "tops_cache";
    protected $guarded = [];
}
