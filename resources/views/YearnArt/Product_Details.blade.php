<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
@include('YearnArt.css')

</head>
<body>
@include('home.header')

{{$products->product_name}}

  



<script src="assets/javascript/home.js"></script>
@include ('YearnArt.chatbot')
@include ('YearnArt.script')
</body>
</html>

