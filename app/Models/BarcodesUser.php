<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BarcodesUser
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $barcode
 * @property string|null $dt
 * @method static \Illuminate\Database\Eloquent\Builder|BarcodesUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BarcodesUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BarcodesUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|BarcodesUser whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BarcodesUser whereDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BarcodesUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BarcodesUser whereUserId($value)
 * @mixin \Eloquent
 */
class BarcodesUser extends Model
{
    use HasFactory;

    protected $table = "barcodes_users";
    protected $guarded = [];
}
