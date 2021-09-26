<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->

      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navber')
        <!-- partial -->


        <div class="main-panel">
          <div class="content-wrapper">

            @include('admin.body')
          <!-- content-wrapper ends -->
            @include('admin.footer')
          <!-- partial:partials/_footer.html -->

          <!-- partial -->
        </div>
        <!-- main-panel ends -->

      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    @include('admin.script')

  </body>
</html>
