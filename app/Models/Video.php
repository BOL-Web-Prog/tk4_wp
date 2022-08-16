<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table ='tbl_videos';
    protected $fillable = [
        'video_title',
        'video_filename'
    ];
}
