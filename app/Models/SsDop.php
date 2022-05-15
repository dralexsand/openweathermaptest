<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SsDop
 *
 * @property int $id
 * @property int $user_id
 * @property string $key_row
 * @property string $key_col
 * @property string $value
 * @method static \Illuminate\Database\Eloquent\Builder|SsDop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SsDop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SsDop query()
 * @method static \Illuminate\Database\Eloquent\Builder|SsDop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SsDop whereKeyCol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SsDop whereKeyRow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SsDop whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SsDop whereValue($value)
 * @mixin \Eloquent
 */
class SsDop extends Model
{
    use HasFactory;

    protected $table = "ss_dops";
    protected $guarded = [];
}
