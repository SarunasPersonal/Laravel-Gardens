<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
    <style>
        .div_center {
            text-align: center;
            padding: 2px;
        }
        .h2_font {
            font-size: 30px;
            padding-bottom: 30px;
        }
        .input_color{
            color:black;
        }
        .center{
            margin: auto;
            width: 65%;
            border: 3px solid white;
            margin-top: 10px;
            text-align: center;
        }
        label{
            display: inline-block;
            width: 200px;
        }
        .div_design{
            padding-bottom: 25px;
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                <!-- partial -->
                <div class="container-fluid page-body-wrapper">
                    <!-- partial:partials/_navbar.html -->
                    @include('admin.navbar')

                    <div class="main-panel">
                        <div class="content-wrapper">
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="closeMessage()">x</button>
                                {{ session()->get('message') }}
                            </div>
                            @endif

                            <!-- Adding message if category added -->
                            <div class="main-panel">
                                <div class="content-wrapper">
                                    <div class='div_center'>
                                        <div class="font_size">
                                            <h1>Edit Product</h1>
                                            <div class="div_design">
                                                <form method="POST" action="/update_product_confirm/{{ $product->id }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="div_design">
                                                        <label>Product Title:</label>
                                                        <input class="input_color" type="text" name="title" placeholder="Enter Product Name" required value="{{ $product->title }}">
                                                    </div>
                                                    <div class="div_design">
                                                        <label>Product Description:</label>
                                                        <input class="input_color" type="text" name="description" placeholder="Enter Product Description" required value="{{ $product->description }}">
                                                    </div>
                                                    <div class="div_design">
                                                        <label>Product Price:</label>
                                                        <input class="input_color" type="number" step="0.01" name="price" placeholder="Enter Product Price" required value="{{ $product->price }}">
                                                    </div>
                                                    <div class="div_design">
                                                        <label>Discount Price:</label>
                                                        <input class="input_color" type="number" step="0.01" name="discount_price" placeholder="Enter Discount Price" required value="{{ $product->discount_price }}">
                                                    </div>
                                                    <div class="div_design">
                                                        <label>Product Quantity:</label>
                                                        <input class="input_color" type="number" name="quantity" placeholder="Enter Product Quantity" required value="{{ $product->quantity }}">
                                                    </div>
                                                    <div class="div_design">
                                                        <label>Product Category:</label>
                                                        <select class="input_color" name="category" required>
                                                            <option value="{{ $product->category }}" selected>{{ $product->category }}</option>
                                                            @foreach ($category as $category)
                                                                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="div_design">
                                                        <label class="input_color">Current Product Image:</label>
                                                        <img style="margin:auto;" height="100" width="100" src="/product/{{ $product->image }}">
                                                    </div>
                                                    <div class="div_design">
                                                        <label class="input_color">Change Product Image:</label>
                                                        <input type="file" name="image">
                                                    </div>
                                                    <div class="div_design">
                                                        <input type="submit" value="Update Product" class="btn btn-primary">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.css')
        @include('admin.footer')
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
</html>
