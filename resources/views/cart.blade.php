<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
</head>
<body>
    @include('header')


    <div class="container">
            <div class="col-sm-5" style="font-size: larger">
                <span style="border-right: dashed black 1px; padding: 2%; margin: 3%;">
                    <a href="home.html" target="_blank" style="color: black;"><i class="fa fa-home"
                            aria-hidden="true"></i></a>
                </span>
                Your Cart
            </div>
        </div>

        <div style="padding-top: 5%;"></div>   
        <div class="container" style="text-align: center; font-family: Din17">
        @if (Session::exists('cart'))
            <div class="table-responsive">
                <table class="table table-condensed" id="table" style="border-spacing: 0 15px;">
                    <tr>
                        <th></th>
                        <th>Item</th>
                        <th>Amount</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                    </tr>
                    <?php $total = 0?>
                    @foreach (Session::get('cart') as $items)
                    <tr>
                        <td>
                            <div class="col-sm-5">
                            <img src="{{$items->image}}" alt=""
                                    style='height: auto; width: 100%; '>
                            </div>
                        </td>
                        <td>{{$items->name}} </td>
                        <td style="font-size: larger">
                            <a href="#" style="color: #E16E1E" onclick="downQua1()">-</a>
                            <span id="quaPro1">{{$items->quantity}}</span>
                            <a href="#" style="color: #E16E1E" onclick="upQua1()">+</a>
                        </td>
                        <td>{{$items->price}}</td>
                        <td>{{$items->price*$items->quantity}}</td>
                        <?php $total += $items->price*$items->quantity?>
                    </tr>
                    @endforeach
                        
                    

                </table>
            </div>
            <br><br><br><br>
            <hr style="border: dashed #E16E1E 1px;">
            <div class="row" style="text-align: right; font-size: x-large; font-family: Poetsen One;">
                <div class="col-9">Total: </div>
                <div class="col-3">{{$total}}</div>
            </div>
        </div>
        <div style="padding-top: 5%"></div>
        <div class="offset-sm-1">
                <button class="btn btn-warning" onclick="goBack()" style="color: white; font-size: x-large;
                text-decoration: underline; border-radius: 25px">Back to shop</button>
            </div>
        
        <div class="col-sm-11" style="font-size: large; text-align: right;">
            <button type="button" class="btn btn-warning" style="color: white; font-size: x-large;
            text-decoration: underline; border-radius: 25px" ; data-toggle="modal" ;
                data-target="#modelPayment">Payment</button>
        </div>
        @else
        <div class="col-12" style="text-align: center">
            <h1>Nothing in your cart</h1>
            <div class="offset-sm-1">
                <button class="btn btn-warning" onclick="goBack()" style="color: white; font-size: x-large;
                text-decoration: underline; border-radius: 25px">Back to shop</button>
            </div>
        </div>
        @endif
        <div class="footerpadding">
            <div style="padding-top: 10%"></div>
        </div>  

    <script>
        function goBack(){
            window.history.back();
        }
    </script>
    @include('footer');