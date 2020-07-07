<?php


namespace App\Models\Website;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable=['title','content','excerpt','image','type','slug','start_date','end_date','status','bank_Account','user_id','bank_branch'];

    public function getImage(){
        if(isset($this->image)) {
            return uploadedAsset('events_pic', $this->image);
        }
        else {
            return imageNotFound();
        }
    }



}
