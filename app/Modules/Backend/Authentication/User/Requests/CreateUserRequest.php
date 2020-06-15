<?php
/**
 * Created by PhpStorm.
 * User: Saurav KC
 * Date: 2/14/2018
 * Time: 11:36 AM
 */


namespace App\Modules\Backend\Authentication\User\Requests;

use App\Modules\Framework\Request;

class CreateUserRequest extends Request
{

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ];
    }
}
