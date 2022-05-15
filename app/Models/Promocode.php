<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Promocode
 *
 * @property int $id
 * @property int $user_id
 * @property string $code
 * @property string $dt
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode query()
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode whereDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode whereUserId($value)
 * @mixin \Eloquent
 */
class Promocode extends Model
{
    use HasFactory;

    protected $table = "promocodes";
    protected $guarded = [];
}
