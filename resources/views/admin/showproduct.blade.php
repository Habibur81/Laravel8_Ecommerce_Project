<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

        @include('admin.sidebar')


        <div class="container-fluid page-body-wrapper">

            @include('admin.navber')

            <div class="main-panel">
                <div class="content" style="padding-top: 20px;">

                    <h1 align="center" style=" padding-buttom:20px; font-size:20px; "> Product Show Edit & Delete </h1>

                    @if ( session()->has('message') )

                        <div  class="alert alert-danger" role="alert">

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
                            {{session()->get('message')}}

                        </div>

                    @endif

                    <table align="center">
                        <thead style="background-color: gray;">
                          <tr>
                            <th style="padding:1vw;"> Title </th>
                            <th style="padding:1vw;"> Price </th>
                            <th style="padding:1vw;"> Description </th>
                            <th style="padding:1vw;"> Quentity </th>
                            <th style="padding:1vw;"> Image </th>
                            <th style="padding:1vw;"> Edit </th>
                            <th style="padding:1vw;"> Delete </th>
                          </tr>
                        </thead>
                        <tbody style="background-color: black;">

                          @foreach ( $data as $product )
                            <tr align="center">
                                <td>{{$product->title}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->quentity}}</td>
                                <td>
                                    <img src="/productImage/{{$product->image}}" width="80" height="80">
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{url('update', $product->id)}}"> Update </a>
                                </td>
                                <td>
                                    <a onclick="return confirm('Are You Sure Delete Product')" class="btn btn-danger" href="{{url('deleteproduct', $product->id)}}"> delete </a>
                                </td>
                            </tr>
                          @endforeach

                        </tbody>
                    </table>
                    <br> <br> <br>
                </div>

            </div>

        </div>
    </div>

    @include('admin.script')

  </body>
</html>
