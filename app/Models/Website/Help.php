<?php


namespace App\Models\Website;


use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    protected $table = 'help';
    protected $fillable=['name','email','phone','problem','message'];
}
