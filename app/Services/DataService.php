<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class DataService
{

    protected string $pathData = "wb/usrs";
    protected int $currentUserId;
    protected int $pid;

    public function __construct(int $pid, int $currentUserId = 257)
    {
        $this->currentUserId = $currentUserId;
        $this->pid = $pid;
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

    public function getData()
    {
        $filesPaths = $this->getDataFilesList();
        return $this->getContentData($filesPaths);
    }

    public function getDataFilesList()
    {
        $content = Storage::disk('data')->allFiles($this->pathData);

        $pattern = "{$this->currentUserId}-{$this->pid}";

        $excluded = [
            "{$pattern}-qs1",
            "{$pattern}-qs2",
        ];

        $files = [];

        foreach ($content as $item) {
            $file = trim(str_replace('wb/usrs/', '', $item));

            if (str_contains($file, $pattern)) {
                if (!in_array($file, $excluded)) {
                    $files[] = $file;
                }
            }
        }

        return $files;
    }

    public function readTextFile($path)
    {
        $fp = fopen(Storage::disk('data')->path($path), "r");

        $excluded = [
            '\n',
            '\r'
        ];

        $data = [];

        while (!feof($fp)) {
            $data[] = trim(str_replace($excluded, '', fgets($fp)));
        }
        fclose($fp);

        return $data;
    }

    public function getContentData(array $filesPaths)
    {
        $data = [];

        foreach ($filesPaths as $filePath) {
            $data[] = $this->readTextFile("{$this->pathData}/{$filePath}");
        }

        //$filePath = '257-3060-qs';
        //$fileData = "wb/usrs/257-3060-qs";

        return $data;
    }

}