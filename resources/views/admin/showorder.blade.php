
<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')


  </head>
  <body>
    
      <!-- partial -->
 
      @include('admin.sidebar')


        @include('admin.navbar')

        <!-- partial -->
       
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <table>
                    <tr style="background-color: grey;">
                        <td style="padding: 20px;">Customer name</td>
                        <td style="padding: 20px;">Phone</td>
                        <td style="padding: 20px;">Address</td>
                        <td style="padding: 20px;">Product title</td>
                        <td style="padding: 20px;">Price</td>
                        <td style="padding: 20px;">Quantity</td>
                        <td style="padding: 20px;">Status</td>
                        <td style="padding: 20px;">Action</td>
                    </tr>

                    @foreach($order as $orders)

                    <tr align="center" style="background-color: black;">
                        <td style="padding: 50px;">{{$orders->name}}</td>
                        <td style="padding: 50px;">{{$orders->phone}}</td>
                        <td style="padding: 50px;">{{$orders->adderss}}</td>
                        <td style="padding: 50px;">{{$orders->product_name}}</td>
                        <td style="padding: 50px;">{{$orders->price}}</td>
                        <td style="padding: 50px;">{{$orders->quantity}}</td>
                        <td style="padding: 50px;">{{$orders->status}}</td>
                        <td style="padding: 50px;">
                            <a class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">
                                Delivered                                
                            </a>
                        </td>
                    </tr>

                    @endforeach
                </table>
            </div>
        </div>

          <!-- partial -->
          
          @include('admin.script')

  </body>
</html>
