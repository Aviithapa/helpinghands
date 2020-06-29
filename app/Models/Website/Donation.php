<?php


namespace App\Models\Website;


use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
  protected $table="Donation";

  protected $fillable=['name','email','address','city','district','zip','phoneNumber','mobileNumber','event_id','image'];
    public function getImage(){
        if(isset($this->image)) {
            return uploadedAsset('donor_pic', $this->image);
        }
        else {
            return imageNotFound();
        }
    }
}
