<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
   <style>
      h1 {
        color: white;
      }
      label{
        display: inline;
        width: 200px;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
            <h1>Add Products</h1>
            </div>
            @if (session()->has('message'))
            <div class="alert alert-success">
              <button type="button class="close" data-dismiss="alert">x</button>
              {{session()->get('message')}}
            </div>
            
            @endif
            <form action="{{ url('/uploadproduct') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div style="padding:15px">
                    <label for="">Product title</label>
                    <input style="color: black;" type="text" name="title" placeholder="Product title" required>
                </div>
                <div style="padding:15px">
                    <label for="">Product price</label>
                    <input style="color: black;" type="number" name="price" placeholder="Product price" required>
                </div>
                <div style="padding:15px">
                    <label for="">Product Description</label>
                    <input style="color: black;" type="text" name="description" placeholder="Product Description" required>
                </div>
                <div style="padding:15px">
                    <label for="">Product Quantity</label>
                    <input style="color: black;" type="text" name="quantity" placeholder="Product Quantity" required>
                </div>
                <div style="padding:15px">
                    <input style="color: black;" type="file" name="file">
                </div>
        
                <div style="padding:15px">
                    <input type="submit">
                </div>

            </form>
        </div>
        @include('admin.script')
  </body>
</html>