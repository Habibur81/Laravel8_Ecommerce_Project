<!DOCTYPE html>
<html lang="en">
  <head>
      <style>
          .title{
              padding: 5vh !important;
              font-size: 2rem !important;
          }
          label{
              padding: 2vh !important;
              margin: 0rem !important;
              display: inline-block !important;
              width: 15vw !important;
          }
          input{
              width: 15vw !important;
              text-align: center !important;
              display: inline-block !important;
              color: black !important;
          }
      </style>
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
          <div class="content" align="center">

            @if( session()->has('message') )

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>

            @endif

            <h1 class="title"> Add Products </h1>

            <form action="{{url('pro_insert')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div>
                    <label>Product Title</label>
                    <input type="text" name="title" placeholder="product titlt" required>
                </div>

                <div>
                    <label>Product Price</label>
                    <input type="number" name="price" placeholder="product price" required>
                </div>

                <div>
                    <label>Product Description</label>
                    <input type="text" name="des" placeholder="product description" required>
                </div>

                <div>
                    <label>Product Quentity</label>
                    <input type="number" name="quentity" placeholder="product quentity" required>
                </div>

                <div>
                    <label>Product Image</label>
                    <input type="file" name="file" required>
                </div>

                <div>
                    <input class="btn btn-success" type="submit">
                </div>

            </form>

          <!-- content-wrapper ends -->
          {{-- @include('admin.footer') --}}
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

