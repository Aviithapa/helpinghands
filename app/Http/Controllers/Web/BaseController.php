<?php

namespace App\Http\Controllers\Web;

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
        return View::make('web.'.$view, $data, $mergeData);
    }

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
