<?php


namespace App\Models\Website;


use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
  protected $table="Donation";

  protected $fillable=['name','email','address','city','district','zip','phoneNumber','mobileNumber','event_id','image','user_id','donation_amount'];
    public function getImage(){
        if(isset($this->image)) {
            return uploadedAsset('voucher', $this->image);
        }
        else {
            return imageNotFound();
        }
    }
}
