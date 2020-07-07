<?php

namespace App\Models\Auth;

use App\Models\Additional\Facility;
use App\Models\Hotels\Hotel;
use App\Models\TravelGuide\GuideExperience;
use App\Models\TravelGuide\GuideProfile;
use App\Models\Trip\TripDestination;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;


class User extends Authenticatable
{
    use Notifiable, LaratrustUserTrait, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'user_name',
        'email',
        'status',
        'phone_number',
        'mobile_number',
        'address',
        'company_name',
        'state',
        'postal_code',
        'city',
        'country',
        'website',
        'company_registration_number',
        'vat_pan_no',
        'contact_name',
        'contact_email',
        'contact_phone_number',
        'contact_mobile_number',
        'password',
        'password_reference',
        'password_change_code',
        'image',
        'provider',
        'provider_id',
        'event_id',
        'bank_voucher',
        'type',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * Checks if user is super admin
     * @return bool
     */
    public function isSuperAdmin()
    {
        return $this->hasRole(['administrator']) ? true : false;

    }

    /**
     * Displays the single role of user from many-many relationship
     * @return mixed
     */
    public function mainRole()
    {
        return self::join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->select('roles.*')
            ->where('users.id', $this->id)->first();
    }

    public function active()
    {
        if($this->status == 'active') {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * @return string
     */
    public function getImage()
    {
        if(isset($this->image)) {
            return uploadedAsset('user', $this->image);
        }
        else {
            return imageNotFound();
        }
    }
    public function voucherImage(){
        if(isset($this->image)) {
            return uploadedAsset('voucher', $this->image);
        }
        else {
            return imageNotFound();
        }
    }
}
