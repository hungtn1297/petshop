<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Order extends Model
{
    use SyncsWithFirebase;
    protected $table = 'orderproduct';
    protected $fillable = ['orderdate, customername, phone, email, address, status'];
    public $timestamps = false;

    public function orderDetail(){
        return $this->hasMany('App\OrderDetail');
    }

}
