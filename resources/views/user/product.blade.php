<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
            <h2> Our Products</h2>
            <a href="{{url('#')}}">view all products <i class="fa fa-angle-right"></i></a>

            <form action="{{url('search')}}" method="get"  class="float-right form-inline">
                @csrf
                <input class=" form-control text-center p-1" type="search" name="search" placeholder="search product">
                <input class=" btn btn-success p-1" type="submit" value="Submit">
            </form>
            <br><br>

            </div>
        </div>

        @foreach ( $data as $product )
        <div class="col-md-4">
            <div class="product-item">
                 <a href="#"><img src="/productImage/{{$product->image}}"></a>

                <div class="down-content">

                    <a href="#"><h4 class="m-0"> {{$product->title}} </h4></a>
                    <h6 class="m-0"> ৳{{$product->price}} </h6>
                    <p class="m-0"> {{$product->description}} </p>

                    <form action="{{url('addcart', $product->id)}}" method="POST">
                        @csrf
                        <input class="input-t form-control" type="number" value="1" min="1" name="quentity">
                        <input class="input-b btn btn-primary" type="submit" value="Add Cart">
                    </form>

                </div>

            </div>

        </div>
        @endforeach

        <section>
            @if(method_exists($data, 'links'))
                <div class="d-flex justify-content-center">

                    {!! $data->links() !!}

                </div>
            @endif

        </section>
    </div>
  </div>
