<body>
    
      <!-- partial -->
 
      @include('admin.sidebar')


        @include('admin.navbar')

        <!-- partial -->
       
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                
            <h1 class="title">Add Blog</h1>

            @if(session()->has('message'))

            <div class="alert alert-success">


            <button type="buttom" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

            </div>

            @endif

            <form action="{{url('uploadblog')}}" method="post" enctype="multipart/form-data">

                @csrf

            <div style="padding: 15px;">
                <label>Product Title</label>

                <input style="color:black;" type="text" name="title" placeholder="Give a product title" required="">
            </div>

           

            
            <div style="padding: 15px;">
                <label>Description</label>

                <input style="color:black;" type="text" name="des" placeholder="Give a description" required="">
            </div>

            

            
            <div style="padding: 15px;">
                <input type="file" name="file">
            </div>


            <div style="padding: 15px;">
               <input class="btn btn-success" type="submit">
            </div>

            </form>





            </div>

        </div>    

          <!-- partial -->
          
          @include('admin.script')

  </body>