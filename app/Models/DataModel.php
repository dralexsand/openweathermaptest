<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * App\Models\DataModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|DataModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DataModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DataModel query()
 * @mixin \Eloquent
 */
class DataModel extends Model
{
    use HasFactory;

    protected $pathData = "data/wb/";
    //protected $pathData = "wb/";
    protected $pathUserData = "usrs/";
    protected $currentUserId = 257;

    public function getData()
    {
        $filePath = '257-3060-qs';
        $pathFull = $this->pathData . $this->pathUserData . $filePath;

        $fileData = "wb/usrs/257-3060-qs";

        //$content = Storage::path($pathFull);
        $content = Storage::disk('data')->get($fileData);

        return $content;
    }

}
