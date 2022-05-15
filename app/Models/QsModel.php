<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\QsModel
 *
 * @property int $id
 * @property string|null $q
 * @property int|null $total
 * @property string|null $dt
 * @property int|null $popular
 * @property string|null $pop_dt
 * @property int|null $total_ozon
 * @method static \Illuminate\Database\Eloquent\Builder|QsModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QsModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QsModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|QsModel whereDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QsModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QsModel wherePopDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QsModel wherePopular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QsModel whereQ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QsModel whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QsModel whereTotalOzon($value)
 * @mixin \Eloquent
 */
class QsModel extends Model
{
    use HasFactory;

    protected $table = "qs";
    protected $guarded = [];
}
