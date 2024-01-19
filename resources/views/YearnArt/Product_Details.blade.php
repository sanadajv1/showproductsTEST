<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
@include('YearnArt.css')
<style>
    h1{
        font-weight: bold;
       
    }
</style>

</head>
<body>
@include('home.header')

<div class="">
               
        <div class="box" style="margin: auto; width:50%; padding: 30px; display: flex; align-items: center;">
        <div class="img-box">
            <img src="product/{{$products->image}}" alt="">
        </div>
        <div class="detail-box" style="margin-left: 20px;">
            <h1 style="padding-bottom: 10%; font-weight: bold;  font-size: 2em;">
                {{$products->product_name}}
            </h1>
            <h6 style="padding-bottom: 10%;">
                Description: {{$products->product_description}}
            </h6>
            <h2 style="padding-bottom: 10%;">
                Price: ₱{{$products->price}}
            </h2>
            <h5 style="padding-bottom: 10p%;">
                Processing Time: {{$products->processing_time}}
            </h5>
        </div>
        </div>
             
</div>

  



<script src="assets/javascript/home.js"></script>
@include ('YearnArt.chatbot')
@include ('YearnArt.script')
</body>
</html>

