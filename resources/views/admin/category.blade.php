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
      .center{
        margin: auto;
        width: 65%;
        border: 3px solid white;
        margin-top: 60px;
        text-align: center;
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
        <!-- Adding message if category added -->
        <div class="main-panel">
          <div class="content-wrapper">
            @if(session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="closeMessage()">x</button>

              {{session()->get('message')}}
            </div>
            @endif
            <div class="div_center">
              <h2 class="h2_font">Add Category</h2>
              <form action="{{url('/add_category')}}" method="POST">
                @csrf
                <input class="input_color" type="text" name="category" placeholder="Enter Category name" >
                <input type="submit" name="submin" class="btn btn-primary" value="Add Category">
              </form>
              <table class='center'>
                <tr>  
                  <td>Category</td>
                  <td>Action</td>
                </tr>
                @foreach($data as $item)
                <tr>
                  <td>{{ $item->category_name }}</td>
                  <td>
                    <a onclick="return confirm('Press Ok to Delete Category.')" class="btn btn-danger" href="{{ url('delete_category', $item->id) }}">Delete</a>
                  </td>
                </tr>
                @endforeach

              </table>
                
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->

      <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <script>
      function closeMessage() {
        document.querySelector('.alert').style.display = 'none';
      }
    </script>
  </body>
</html>
