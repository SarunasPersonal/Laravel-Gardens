<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
    <style>
      .div_center {
        text-align: center;
        padding: 80px;
      }
      .h2_font {
        font-size: 40px;
        padding-bottom: 20px;
        text-align: center;
      }
      .input_color{
        color:black;
      }
      .center{
        margin: auto;
        width: 65%;
        border: 3px solid white;
        margin-top: 60px;
        text-align: center;
      }
      .img_size
      {
        width: 150px;
        height: 150px;
      }
      .th_color
      {
        background-color: grey;
      }
      .th_design
      {
        padding:20px;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <div class="main-panel">
            <div class="content-wrapper">
                <h2 class="h2_font">All Products</h2>

                <table class="center">
                    <tr class="th_color">
                        <th class="th_design">Description</th>
                        <th class="th_design">Product title</th>
                        <th class="th_design">Quantity</th>
                        <th class="th_design">Category</th>
                        <th class="th_design">Price</th>
                        <th class="th_design">Discount Price</th>
                        <th class="th_design">Product Image</th>
                    </tr>
                    @foreach ($product as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td>
                            <img class="img_size" src="/product/{{$product->image}}">
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
       
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.css')

    
  

  
          <!-- partial -->
         
            @include('admin.footer')
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
      <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
      <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
      <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="admin/assets/js/off-canvas.js"></script>
      <script src="admin/assets/js/hoverable-collapse.js"></script>
      <script src="admin/assets/js/misc.js"></script>
      <script src="admin/assets/js/settings.js"></script>
      <script src="admin/assets/js/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="admin/assets/js/dashboard.js"></script>
      <!-- End custom js for this page -->
    </body>
  