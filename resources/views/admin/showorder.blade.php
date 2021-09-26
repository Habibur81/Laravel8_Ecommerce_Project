<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style>

        .content{
            padding-top: 4vh !important;
        }

        .content table thead{
            padding-top: 10vh !important;
            background-color: gray !important;
        }
        .content table th{
            font-size: 15px !important;
            padding: 15px !important;
        }
        .content table tbody{
            background-color: black !important;
        }
        .content table td{
            font-size: 16px !important;
            text-align: center !important;
            color: white !important;
            padding: 10px !important;
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
        @include('admin.navber')
        <!-- partial -->


        <div class="main-panel">
          <div class="content" align="center">

            <table>
                <thead>
                    <tr>
                        <th> Customer Name </th>
                        <th> Customer Phone </th>
                        <th> Customer Address </th>
                        <th> Product Title </th>
                        <th> Product Quentity </th>
                        <th> Product Price </th>
                        <th> Status </th>
                        <th> Action </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ( $showorder as $order )
                        <tr>
                            <td>{{$order->name}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->product_title}}</td>
                            <td>{{$order->quentity}}</td>
                            <td>{{$order->price}}</td>
                            <td>{{$order->status}}</td>
                            <td>
                                <a class="btn btn-success" href="{{url('updatestatus', $order->id)}}">
                                    Delivered
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>


        </div>
        <!-- main-panel ends -->

      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    @include('admin.script')

  </body>
</html>
