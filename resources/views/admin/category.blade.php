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
        padding-bottom: 40px;
      }
      .input_color{
        color:black;
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
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="div_center">
              <h2 class="h2_font">Add Category</h2>
              <form>
                <input class="input_color" type="text" name="category" placeholder="Enter Category name" required>
                <input type="submit" name="submin" class="btn btn-primary" value="Add Category">
              </form>
            </div>
          </div>
       </div>
      
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  </body>
