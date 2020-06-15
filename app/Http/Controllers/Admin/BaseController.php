<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {

    }

    public function view($view, $data = array(), $mergeData = array())
    {
        return View::make('admin.'.$view, $data, $mergeData);
    }

    /**
     * Save only image file
     * @param Request $request
     * @param $fieldName
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function fileUpload(Request $request, $fieldName)
    {
        $this->validate($request, array(
            $fieldName.'_image' =>  'image',
        ));

        try{
            $path =  $request->{$fieldName.'_image'}->store('public/'.$fieldName);
            if (!$path)
                return url('storage');
            $dirs = explode('/', $path);
            if ($dirs[0] === 'public')
                $dirs[0] = 'storage';
            $response['full_url'] = url(implode('/', $dirs));
            $response['image_name'] = ($request->{$fieldName.'_image'})->hashName();
            return $response;


        }
        catch (\Exception $e)
        {
            dd($e);
        }
    }

    /**
     * Save nay file with any extension
     * @param Request $request
     * @param $fieldName
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function anyFileUpload(Request $request, $fieldName)
    {
        try{
            $path =  $request->{$fieldName.'_image'}->store('public/'.$fieldName);
            if (!$path)
                return url('storage');
            $dirs = explode('/', $path);
            if ($dirs[0] === 'public')
                $dirs[0] = 'storage';
            $response['full_url'] = url(implode('/', $dirs));
            $response['image_name'] = ($request->{$fieldName.'_image'})->hashName();
            return $response;

        }
        catch (\Exception $e)
        {
            dd($e);
        }
    }
}
