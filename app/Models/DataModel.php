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
    protected $currentUserId;
    protected array $headers;

    //protected $currentUserId = 257;

    public function __construct(int $currentUserId = 257)
    {
        parent::__construct();
        $this->currentUserId = $currentUserId;
        $this->headers = ['Content-Type', 'application/json'];
    }

    public function getDataFilesList(int $pid)
    {
        $content = Storage::disk('data')->allFiles('wb/usrs');

        //return response()->json($content, 200, $this->headers);
        return json_encode($content, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }

    public function readTextFile($path)
    {
        //$fp = fopen(Storage::path('public/' . $path), "r");
        $fp = fopen(Storage::disk('data')->path($path), "r");
        $result = [];
        while (!feof($fp)) {
            $result[] = fgets($fp);
        }
        fclose($fp);

        return $result;
    }

    public function getData(int $currentUserId = 257)
    {
        $filePath = '257-3060-qs';
        $pathFull = $this->pathData . $this->pathUserData . $filePath;

        $fileData = "wb/usrs/257-3060-qs";

        //$content = Storage::path($pathFull);
        //$content = Storage::disk('data')->get($fileData);
        $content = $this->readTextFile($fileData);

        $contentData = [];

        foreach ($content as $item) {
            $contentData[] = trim(str_replace('\n', '', $item));
        }

        //return response()->json($content, 200, $this->headers);
        return json_encode($contentData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }

    /*
    257-3060-arts
    257-3060-qs
    257-3301-qs_dop_11
    257-3060-testqs
    257-3060-qs1
    257-3060-qs2
    257-3060-testqs
    */

    public function getData1(int $currentUserId = 257)
    {
        $filePath = '257-3060-qs';
        $pathFull = $this->pathData . $this->pathUserData . $filePath;

        $fileData = "wb/usrs/257-3060-qs";

        //$content = Storage::path($pathFull);
        $content = Storage::disk('data')->get($fileData);

        return $content;
    }

}
