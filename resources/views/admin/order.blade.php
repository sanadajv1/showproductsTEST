<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
   <style>
    .title-deg {
        text-align: center;
        font-size: 25px;
        font-weight: bold;
    }
    .table-deg {
        border: 2px solid white;
        width: 100%; /* Set the width of the table */
        margin: auto;
        text-align: center;
        table-layout: fixed; /* Ensure fixed layout */
    }
    .table-deg th, .table-deg td {
        width: auto; /* You can set fixed widths for each column as needed */
        padding: 10px; /* Add padding for better appearance */
        word-wrap: break-word; /* Allow word wrapping for long content */
    }
    .img-size{
        width: 100px;
        height: 100px;
    }
   </style>

  </head>
  <body>

    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="title-deg">All Orders</h1>
                <table class="table-deg">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>


                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Processing Time</th>
                        <th>Primary Color</th>
                        <th>Secondary Color</th>
                        <th>Size</th>


                        <th>Payment Status</th>
                        <th>Order Status</th>


                    </tr>
                    @foreach ($order as $order)


                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->phone}}</td>


                        <td>{{$order->product_name}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->processing_time}}</td>
                        <td style="background-color: {{$order->primaryclr}}"></td>
                        <td style="background-color: {{$order->secondaryclr}}"></td>
                        <td>{{$order->size}}</td>


                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->order_status}}</td>


                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>
