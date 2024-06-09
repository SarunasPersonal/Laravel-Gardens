<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- start plugin css for this page -->
    @include('admin.css')
    
      <!-- partial:partials/_sidebar.html -->
      @include('admin.side_bar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        
          <!-- content-wrapper ends -->
          @include('admin.main_panel')
          <!-- partial:partials/_footer.html -->
          @include('admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>admin/