{{-- ito yung sa cart --}}

<!DOCTYPE html>
<html lang="en">
<head>
    @include('YearnArt.css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .center{
            margin: auto;
            width: 60%;
            text-align: center;
            padding: 30px;
        }
        table, td, th{
            border: 1px solid #D0A59F;
        }
        .th-deg{
            font-size: 15px;
            padding: 5px;
            background: #D0A59F;
        }
        .img-deg{
            width: 200px;
            height: 150px;
        }
        body{
            background-color: #E4D8CC;
        }

    </style>

<title>Yearn Art | My Orders</title>
<link rel="icon" href="assets/image/Yearn.jpg" type="image/png">

</head>
<body>
@include('home.header')


 <div class="center">
    @if(session()->has('message'))

    <div class='alert alert-success'>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{session()->get('message')}}
    </div>
    @endif

    <table>
        <tr>
            <th class="th-deg">Image</th>
            <th class="th-deg">Product Name</th>
            <th class="th-deg">Price</th>
            <th class="th-deg">Processing Time</th>
            <th class="th-deg">Primary Color</th>
            <th class="th-deg">Secondary</th>
            <th class="th-deg">Size</th>
            <th class="th-deg">Quantity</th>
            <th class="th-deg">Action</th>
        </tr>
        @foreach ($cart as $cart)

        <tr>
            <td><img class="img-deg" src="/product/{{$cart->image}}" alt=""></td>
            <td>{{$cart->product_name}}</td>
            <td>{{$cart->price}}</td>
            <td>{{$cart->processing_time}}</td>
            <td style="background-color: {{$cart->primaryclr}}"></td>
            <td style="background-color: {{$cart->secondaryclr}}"></td>
            <td>{{$cart->size}}</td>
            <td>{{$cart->quantity}}</td>
            <td><a class="btn btn-danger" href="{{url('/remove_cart', $cart->id)}}" onclick="return confirm('Are you sure to delete it in you CART?')">Remove Product</a></td>
        </tr>
        @endforeach
    </table>

 </div>


{{-- SCRIPTTT --}}
<script src="assets/javascript/home.js"></script>

<div class="chatbot">
    <div class="chatbox">
        <div class="chatbox__support">
            <div class="chatbox__header">
                <div class="chatbox__content--header">
                    <h4 class="chatbox__heading--header">YearnBot</h4>
                </div>
            </div>
            <div class="chatbox__messages">
                <div>
                    <div class="messages__item messages__item--visitor">
                        Can you let me talk to the support?
                    </div>
                    <div class="messages__item messages__item--operator">
                        Sure!
                    </div>
                    <div class="messages__item messages__item--visitor">
                        Need your help, I need a developer in my site.
                    </div>
                    <div class="messages__item messages__item--operator">
                        Hi... What is it? I'm a front-end developer, yay!
                    </div>
                    <div class="messages__item messages__item--typing">
                        <span class="messages__dot"></span>
                        <span class="messages__dot"></span>
                        <span class="messages__dot"></span>
                    </div>
                </div>
            </div>
            <div class="chatbox__footer">
                <div class="file">
                    <img src="assets/image/file.png" alt="file">
                </div>
                <input type="text" placeholder="Write a message...">
                <div class="icon">
                    <img src="assets/image/send.png" alt="Send">
                </div>
            </div>
        </div>
        <div class="chatbox__button">
            <button>button</button>
        </div>
    </div>
</div>
<script src="assets/javascript/Chat.js"></script>
<script src="assets/javascript/app.js"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="assets/javascript/script.js"></script>


  <script>
    const menuLinks = document.querySelectorAll('.menu-link');

    menuLinks.forEach(link => {
      link.addEventListener('click', () => {
        menuLinks.forEach(otherLink => otherLink.classList.remove('active-link'));
        link.classList.add('active-link');
      });
    });
  </script>
</body>
</html>

