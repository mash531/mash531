<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    protected $fillable = [
        'image_path',
        'user_id',
        'file_name'
    ];
}
