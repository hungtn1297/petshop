<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <link href="http://localhost/petshop/public/style.css" rel="stylesheet" type="text/css" />
  <link href="http://localhost/petshop/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="http://localhost/petshop/public/owlcarousel/owl.carousel.min.js"></script>
  <script src="https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js"></script>
  <script src="http://localhost/petshop/public/myjs.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <title>HOME</title>
  <style>
    body {
      font-family: Poetsen One;
    }
  </style>
  <script> new WOW().init(); </script>
</head>

<body>
  <!--Header-->
  <div id="mySidenav" class="sidenav" style="font-family: Din17;">
    <a href="javascript:void(0)" class="closebtn text-right a1" onclick="closeNav()">&times;</a>
    <a href="home.html" class="text-center a1"><u>HOME</u></a>
    <div class="container" style="text-align: right">
      @foreach (Session::get('category') as $cate)
      <div class="diveffect" id="ShopP">
        <p>
          <a href="{{url('Cate/'.$cate->id)}}" style="text-decoration: none; font-size: large;" data-toggle="collapse" id="SHOP">
            {{$cate->name}}
          </a>
        </p>
      </div>
      @endforeach
      <br>
      <br>
      <br>
      
      <a href="{{url('cart')}}" style="color: black;">
        <p style="writing-mode: vertical-lr; margin-left: 90%;">CART</p>
      </a>
      <a href="#" style="color: black;" data-toggle="modal" data-target="#modelSearch">
        <p style="writing-mode: vertical-lr; margin-left: 90%;">SEARCH</p>
      </a>
    </div>
  </div>
  <div id="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #E7B90C;">
            <a class="navbar-brand coolBeans" style="padding-left: 3%;">
              <img id="huyconcac" src="picture/buttons.png" alt="" width="60%" height="60%;" onclick="openNav()">
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <p class="nav-link">
                    <img src="picture/Pet Shop.png" alt="" width="60%" height="60%" style="margin-left: 30%;">
                  </p>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- End Header-->

    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form class="login">
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password">
            <button>Login</button> <span style="padding: 1vw"></span>
            <button>Register</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Payment -->
    <div class="modal fade" id="modelPayment" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content" style="font-family: Din17; margin: 5%; width: 100%; height: auto;">
            <div class="modal-header"></div>
            <div class="modal-body">
                <div class="container">
                    <div class="row" style="text-align: center;">
                        <img src="picture/Group 73.png" alt="" style="margin-left: 15%;">
                    </div>
                    <hr style="border: dashed #E16E1E 1px;">
                    <br>
                    <form action="{{url('payment')}}" method="post">
                      {{ csrf_field() }} 
                      <p>Name</p>
                      <input type="text" name="name" class="form-control" style="border-radius: 25px;">
                      <p>Phone</p>
                      <input type="text" name="phone" class="form-control" style="border-radius: 25px;">
                      <p>Email</p>
                      <input type="text" name="email" class="form-control" style="border-radius: 25px;">
                      <p>Address</p>
                      <input type="text" name="address" class="form-control" style="border-radius: 25px;"><br>
                      <input name="" id="" class="btn btn-primary" type="submit" value="Payment">
                    </form>       
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"
        aria-hidden="true"></i></button>