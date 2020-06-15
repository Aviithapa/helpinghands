<?php
/**
 * Created by PhpStorm.
 * User: Saurav KC
 * Date: 2/14/2018
 * Time: 11:41 AM
 */

namespace App\Modules\Backend\Authentication\User\Requests;

use App\Modules\Framework\Request;

class UpdateUserRequest extends Request
{

    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }
}