<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')

        
            <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto; width:50%; padding:1%;">
            
            <div class="img-box" >
                  <img src="product/{{$product->image}}" style="border-radius: 5%; box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);" alt="">
               </div>
               <div class="detail-box" >
                  <h5>
                     {{$product->title}}
                  </h5>

                  @if ($product->discount_price != NULL)
                  <h6 style="color: red">
                     Discount price
                     <br>
                    £{{$product->discount_price}}
                  </h6>

                  <h6 style="text-decoration: line-through;">
                     £{{$product->price}}
                  </h6>

                  @else 
                  <h6>
                     Price
                     £{{$product->price}}
                  </h6>
                  
                  @endif

                    <h6>
                        Category: {{$product->category}}

                    </h6>
                    <h6>
                        Description:<br>{{$product->description}}
                    </h6>
                    <h6 style="color:red;">
                        @if($product->quantity < 20)
                        <span >Low Stock<br></span>
                       Quantity: {{$product->quantity}}
                    </h6>   
                        @else
                            Quantity: {{$product->quantity}}
                        @endif
                    </h6>

                    <a href="" class="btn btn-primary"> Add to Cart</a>
                 
               </div>
            </div>
         
         
          </div>


         <!-- end header section -->
         <!-- slider section -->
         
        <!-- footer starts -->
       @include('home.footer')
      <!-- footer end -->
    
        <!-- Javascript files-->
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>