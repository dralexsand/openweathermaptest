<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Project
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $name
 * @property string|null $status
 * @property string|null $dt
 * @property string|null $dt2
 * @property string|null $prog
 * @property string|null $last_upd
 * @property string|null $last_edit
 * @property string|null $dt2_index
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDt2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDt2Index($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereLastEdit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereLastUpd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereProg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUserId($value)
 * @mixin \Eloquent
 */
class Project extends Model
{
    use HasFactory;

    protected $table = "projects";
    protected $guarded = [];
}
