<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SebesVal
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $barcode
 * @property string|null $art
 * @property int|null $sebes
 * @method static \Illuminate\Database\Eloquent\Builder|SebesVal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SebesVal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SebesVal query()
 * @method static \Illuminate\Database\Eloquent\Builder|SebesVal whereArt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SebesVal whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SebesVal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SebesVal whereSebes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SebesVal whereUserId($value)
 * @mixin \Eloquent
 */
class SebesVal extends Model
{
    use HasFactory;

    protected $table = "sebes_vals";
    protected $guarded = [];
}
