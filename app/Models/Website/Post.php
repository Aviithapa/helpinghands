<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable=['title','content','excerpt','image','logo_image','type','meta_link','meta_description','slug','facebook','twitter','LinkedIn','instagram','portfolio_type'];

    public function getImage(){
        if(isset($this->image)) {
            return uploadedAsset('banner', $this->image);
        }
        else {
            return imageNotFound();
        }
    }
    public function getTestimonialImage(){
        if(isset($this->image)) {
            return uploadedAsset('testimonial_pic', $this->image);
        }
        else {
            return imageNotFound();
        }
    }

    //for cms content image
    public function getPostImage(){
        if(isset($this->image)) {
            return uploadedAsset('post_pic', $this->image);
        }
        else {
            return imageNotFound();
        }
    }
    public function getNewsImage(){
        if(isset($this->image)) {
            return uploadedAsset('news_pic', $this->image);
        }
        else {
            return imageNotFound();
        }
    }
    public function getPartnerImage(){
        if(isset($this->image)) {
            return uploadedAsset('partner_pic', $this->image);
        }
        else {
            return imageNotFound();
        }
    }


    public function getLogoImage(){
        if(isset($this->logo_image)) {
            return uploadedAsset('logo_image', $this->logo_image);
        }
        else {
            return imageNotFound();
        }
    }






}
