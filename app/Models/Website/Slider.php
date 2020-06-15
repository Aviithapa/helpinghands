<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    protected $table = 'sliders';

    protected $fillable = [
        'name',
        'link',
        'title',
        'image',
        'status',
        'type'
    ];

    public function getImage()
    {
        if(isset($this->image)) {
            return uploadedAsset('slider', $this->image);
        }
        else {
            return imageNotFound();
        }
    }
}
