<div class="latest-products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Latest Products</h2>
          <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>

          <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding: 10px;">

            @csrf
            <input class="form-control" type="search" name="search" placeholder="search">

            <input type="submit" value="Search" class="btn btn-dark">
          </form>

        </div>
      </div>


      @foreach($data as $product)

      <div class="latest-products">
        <div class="container">
          <div class="row">
            <div class="card mb-3 ml-4 mr-4 mt-3" style="width: 20rem;">
              <div class="product-item">
                <a href="#"><img height="300px" width="100px" src="/productimage/{{$product->image}}" alt=""></a>
                <div class="down-content">
                  
                  <h4>{{$product->title}}</h4>
                  
                  <h6>{{$product->price}}</h6>
                  <p>{{$product->description}}</p>
                  <form action="{{url('addcart',$product->id)}}" method="POST">
                    @csrf
                    <input type="number" name="quantity" value="1" min="1" class="form-control" style="width:100px;">
                    <br>
                    <input class="btn btn-danger" type="submit" value="Tambah Ke Keranjang">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    

    </div>

    @if(method_exists($data,'links'))

    <div class="d-flex justify-content-center">
      {!! $data->links()!!}
    </div>

@endif
  </div>
</div>
</div>