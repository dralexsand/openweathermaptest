<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Cat
 *
 * @property int $id
 * @property string $q
 * @property int|null $count
 * @property string|null $xcatalogShard
 * @property string|null $xcatalogQuery
 * @method static \Illuminate\Database\Eloquent\Builder|Cat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereQ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereXcatalogQuery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereXcatalogShard($value)
 * @mixin \Eloquent
 */
class Cat extends Model
{
    use HasFactory;

    protected $table = "cats";
    protected $guarded = [];
}
