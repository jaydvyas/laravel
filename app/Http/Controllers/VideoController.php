<?php

namespace App\Http\Controllers;

use FFMpeg\Filters\Video\VideoFilters;
use Illuminate\Http\Request;
use FFMpeg\Format\Video\X264;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class VideoController extends Controller
{
    public function play()
    {
        echo "Converting.....";
        FFMpeg::fromDisk('assets')
            ->open('1703760802.mp4')
            ->export()
            ->addFilter(function (VideoFilters $filters) {
                $filters->resize(new \FFMpeg\Coordinate\Dimension(640, 480));
            })
            ->onProgress(function ($percentage) {
                echo "{$percentage}% transcoded";
            })
            ->toDisk('songs')
            ->inFormat(new X264("aac"))
            ->save('aunew1.aac');
    }

    public function join(){
        echo "Concatenating two videos";
        FFMpeg::fromDisk("assets")
            ->open(["1703760802.mp4","1703760453.mp4"])
            ->export()
            ->concatWithoutTranscoding()
            ->save("merge.mp4");
    }
}
