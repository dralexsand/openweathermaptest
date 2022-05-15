<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CardsWb
 *
 * @property int $id
 * @property int $art
 * @property string|null $title
 * @property string|null $last_cats
 * @property string|null $last_cats_ids
 * @property int|null $subjectId
 * @property string|null $brand
 * @property int|null $brand_id
 * @property int|null $changes
 * @property string|null $change_dt
 * @method static \Illuminate\Database\Eloquent\Builder|CardsWb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CardsWb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CardsWb query()
 * @method static \Illuminate\Database\Eloquent\Builder|CardsWb whereArt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardsWb whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardsWb whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardsWb whereChangeDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardsWb whereChanges($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardsWb whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardsWb whereLastCats($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardsWb whereLastCatsIds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardsWb whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardsWb whereTitle($value)
 * @mixin \Eloquent
 */
class CardsWb extends Model
{
    use HasFactory;

    protected $table = "cards_wb";
    protected $guarded = [];
}
