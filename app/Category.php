<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Category extends Model
{
    use SyncsWithFirebase;
    protected $table = 'category';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function product(){
        return $this->hasMany('App\Product');
    }
}
