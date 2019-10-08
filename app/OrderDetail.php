<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class OrderDetail extends Model
{
    use SyncsWithFirebase;
    protected $table = 'orderdetail';
    protected $fillable = ['orderid','productid','quantity','productPrice'];
    public $timestamps = false; 

    public function order(){
        return $this->belongsTo('App\Order','orderid');
    }
    
    public function product(){
        return $this->belongsTo('App\Product','productid');
    }
}
