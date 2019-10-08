
@include('header')
    <!--Slider-->
    <div class="container-fluid">
      <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselId" data-slide-to="0" class="active"></li>
          <li data-target="#carouselId" data-slide-to="1"></li>
          <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img src="picture/Untitled-2.png" alt="First slide" style="width: 100%">
          </div>
          <div class="carousel-item">
            <img src="picture/animal-beagle-canine-460823.png" alt="Second slide" style="width: 100%">
          </div>
          <div class="carousel-item">
            <img src="picture/113.png" alt="Third slide" style="width: 100%">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


    <div style="padding-top:7%"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 threelogo" style="text-align: center">
          <img src="picture/Untitled-3.png" alt=""> <br>
          <p style="padding-top: 3vw">24/7 Free Support</p>
        </div>
        <div class="col-sm-4 threelogo" style="text-align: center">
          <img src="picture/give-money.png" alt=""> <br>
          <p style="padding-top: 2vw">Money Back Gurantee</p>
        </div>
        <div class="col-sm-4" style="  text-align: center">
          <img src="picture/delivery.png" alt=""> <br>
          <p style="padding-top: 4vw">Free shipping</p>
        </div>
      </div>
    </div>


    <!--New Product-->
    <div class="container">
      <div style="padding-top:7%"></div>
      <div class="row"></div>
      <h2 class="hr-text" data-content="New Products"></h2>
    </div>

    <div style="padding-top:3%"></div>

    <div class="owl-carousel4 owl-carousel owl-theme" style="width: 100%; padding-left: 5%">

      @foreach ($products as $pro)
      <div style="text-align: center">
        <a href="{{url('product/'.$pro->id)}}">
          <div class="container">
            <div data-wow-delay="0.5s" class="wow rollIn">
              <img src="{{$pro->image}}">
            </div>
            <div class="middle">
              <div>
                <div class="icon-container"><img src="image/heart.png"></div>
                <a data-fancybox="gallery" href="image/product2.png">
                  <div class="icon-container"><img src="image/eye.png"></div>
                </a>
              <a href="{{'addtocart/'.$pro->id}}">
                  <div class="icon-container"><img src="image/carts.png"></div>
                </a>
              </div>
            </div>
          </div>
        </a>
        <p>{{$pro->name}}</p>
        <p style="color: #E6BA20">${{$pro->price}}</p>
      </div>
      @endforeach
    </div>


    <!--Review-->
    <div class="container-fluid">
      <div style="padding-top: 7%"></div>
      <div class="row justify-content-center">
        <div class="col-sm-4"><img src="picture/Untitled-1.png" alt="" style="width: 100%" /></div>
      </div>

      <div class="row review">

        <div class="col-offset-1 col-sm-2" style="text-align: center">
          <img src="image/review1.png" alt="" style="width: 70%" />
          <p style="color: white; font-size: x-large; margin-top: -15%;">Mr.Willam</p>
        </div>
        <div class="col-sm-9">
          <div style="padding-top:4%;"> </div>
          <p style="font-family: Din17">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
            euismod tincidunt ut
            laoreet
            dolore magna <br>
            aliquam erat volutpat.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
            nisl ut aliquip ex <br>
            ea commodo consequat.Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
            consequat,

          </p></br></br></br></br></br>
          <div class="col-sm-1">
          </div>

        </div>
      </div>
    </div>

    <!--Map to Shop-->
    <div class="container-fluid">
      <div style="padding-top: 7%"></div>
      <div class="col-sm-12" style="text-align: center;">
        <p style="font-size: xx-large">Map to Shop</p>
      </div>

      <div style="padding-top: 5%"></div>
      <div class="container-fluid">
        <img src="picture/Ảnh chụp Màn hình 2018-10-30 lúc 16.57.46.png" alt="" width="100%">
      </div>
    </div>

    <!--Top Brand for Pet-->
    <div class="container-fluid">
      <div style="padding-top:7%;"></div>
      <div class="row">
        <div class="col-sm-12" style="text-align: center;">
          <p style="font-size: xx-large">Top Brand for Pet</p>
        </div>
      </div>
      <div style="padding-top: 3%"></div>
      <hr style="border: dashed #E16E1E 1px;">
      <br>
      <div class="owl-carousel3 owl-carousel owl-theme">
        <div><img class="" alt="" src="image/brand1.png"></div>
        <div><img class="" alt="" src="image/brand2.png"></div>
        <div><img class="" alt="" src="image/brand3.png"></div>
        <div><img class="" alt="" src="image/brand4.png"></div>
        <div><img class="" alt="" src="image/brand5.png"></div>
      </div>
      <br>
      <hr style="border: dashed #E16E1E 1px;">
    </div>




    <div style="padding-top: 7%;"></div>


@include('footer')