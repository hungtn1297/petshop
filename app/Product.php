<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use Mpociot\Firebase\SyncsWithFirebase;

class Product extends Model
{
    use SyncsWithFirebase;
    protected $table = 'product';
    protected $fillable = ['name','price','quantity','image','description','category_id'];
    public $timestamps = false;

    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }
}
