<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <!-- Add these in your HTML -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    @include('YearnArt.css')
    <style>
        /* Add this to your CSS or style tag */
        .color-option {
            display: none; /* Hide default radio button */
        }


        /* Add hover effect if desired */
        .color-option-label:hover {
            border: 2px solid #000; /* Add border on hover */
        }

        .selected {
            border: 2px solid #000; /* Add border when selected */
        }

        .disabled {
            pointer-events: none; /* Disable pointer events for the label */
            opacity: 0.5; /* Add a visual cue that the option is disabled */
        }

    </style>
</head>
<body>
    @include('home.header')
<div class="main-panel">
    <div class="content-wrapper">


    @if(session()->has('message'))

    <div class='alert alert-success'>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{session()->get('message')}}
    </div>

    @endif


    <form action="{{url('add_cart', $products->id)}}" method="Post" >



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
                <h5 style="padding-bottom: 10%;">
                    Processing Time: {{$products->processing_time}}
                </h5>
                <h5>
                    Color:
                </h5>

                @csrf
                <h5 style="padding-top: 10px; margin-left: 20px;">Primary:
                    <div class="color-box" style="">
                        <input type="radio" name="colorOption" id="colorOption1" value="#67598E" class="color-option" style="display: none;" >
                        <label for="colorOption1" class="color-option-label" style="background-color: #67598E; width: 30px; height: 30px; margin-right: 10px; cursor: pointer; display: inline-block;"></label>

                        <input type="radio" name="colorOption" id="colorOption2" value="#D66B78" class="color-option" style="display: none;">
                        <label for="colorOption2" class="color-option-label" style="background-color: #D66B78; width: 30px; height: 30px; margin-right: 10px; cursor: pointer; display: inline-block;"></label>

                        <input type="radio" name="colorOption" id="colorOption3" value="#D4D66B" class="color-option" style="display: none;">
                        <label for="colorOption3" class="color-option-label" style="background-color: #D4D66B; width: 30px; height: 30px; margin-right: 10px; cursor: pointer; display: inline-block;"></label>

                        <input type="radio" name="colorOption" id="colorOption4" value="#6BD689" class="color-option" style="display: none;">
                        <label for="colorOption4" class="color-option-label" style="background-color: #6BD689; width: 30px; height: 30px; margin-right: 10px; cursor: pointer; display: inline-block;"></label>

                        <input type="radio" name="colorOption" id="colorOption5" value="#D6986B" class="color-option" style="display: none;">
                        <label for="colorOption5" class="color-option-label" style="background-color: #D6986B; width: 30px; height: 30px; margin-right: 10px; cursor: pointer; display: inline-block;"></label>

                        <input type="radio" name="colorOption" id="colorOption6" value="#D46BD6" class="color-option" style="display: none;">
                        <label for="colorOption6" class="color-option-label" style="background-color: #D46BD6; width: 30px; height: 30px; margin-right: 10px; cursor: pointer; display: inline-block;"></label>
                    </div>
                </h5>

                <h5 style="padding-top: 10px; margin-left: 20px;">Secondary:
                    <div class="color-box" style="">
                        <input type="radio" name="secondaryColor" id="secondaryColorOption1" value="#A3D0EF" class="color-option" style="display: none;" >
                        <label for="secondaryColorOption1" class="color-option-label" style="background-color: #A3D0EF; width: 30px; height: 30px; margin-right: 10px; cursor: pointer; display: inline-block;"></label>

                        <input type="radio" name="secondaryColor" id="secondaryColorOption2" value="#D66B78" class="color-option" style="display: none;">
                        <label for="secondaryColorOption2" class="color-option-label" style="background-color: #D66B78; width: 30px; height: 30px; margin-right: 10px; cursor: pointer; display: inline-block;"></label>

                        <input type="radio" name="secondaryColor" id="secondaryColorOption3" value="#D4D66B" class="color-option" style="display: none;">
                        <label for="secondaryColorOption3" class="color-option-label" style="background-color: #D4D66B; width: 30px; height: 30px; margin-right: 10px; cursor: pointer; display: inline-block;"></label>

                        <input type="radio" name="secondaryColor" id="secondaryColorOption4" value="#6BD689" class="color-option" style="display: none;">
                        <label for="secondaryColorOption4" class="color-option-label" style="background-color: #6BD689; width: 30px; height: 30px; margin-right: 10px; cursor: pointer; display: inline-block;"></label>

                        <input type="radio" name="secondaryColor" id="secondaryColorOption5" value="#D6986B" class="color-option" style="display: none;">
                        <label for="secondaryColorOption5" class="color-option-label" style="background-color: #D6986B; width: 30px; height: 30px; margin-right: 10px; cursor: pointer; display: inline-block;"></label>

                        <input type="radio" name="secondaryColor" id="secondaryColorOption6" value="#D46BD6" class="color-option" style="display: none;">
                        <label for="secondaryColorOption6" class="color-option-label" style="background-color: #D46BD6; width: 30px; height: 30px; margin-right: 10px; cursor: pointer; display: inline-block;"></label>
                    </div>
                </h5>
                <h5 style="padding-top: 10px; ">Size:
                    <div class="size-box" style="margin-left: 20px;">
                        <input type="radio" name="sizeOption" id="sizeOptionSmall" value="small" class="size-option" style="display: none;" required="">
                        <label for="sizeOptionSmall" class="size-option-label" style="border-radius: 50px; background: #Ffff; width: 70px; height: 30px; margin-right: 10px; cursor: pointer; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); display: inline-flex; align-items: center; justify-content: center;">Small</label>

                        <input type="radio" name="sizeOption" id="sizeOptionMedium" value="medium" class="size-option" style="display: none;" >
                        <label for="sizeOptionMedium" class="size-option-label" style="border-radius: 50px; background: #Ffff; width: 70px; height: 30px; margin-right: 10px; cursor: pointer; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); display: inline-flex; align-items: center; justify-content: center;">Medium</label>

                        <input type="radio" name="sizeOption" id="sizeOptionLarge" value="large" class="size-option" style="display: none;">
                        <label for="sizeOptionLarge" class="size-option-label" style="border-radius: 50px; background: #Ffff; width: 70px; height: 30px; margin-right: 10px; cursor: pointer; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); display: inline-flex; align-items: center; justify-content: center;">Large</label>


                        <!-- Add more size options as needed -->
                    </div>
                </h5>
                <h5 style="padding-top: 10px; ">Quantity
                    <input type="number" name="quantity" value="1" min="1" max="5" style=" border-radius: 5px; border: 1px solid #7D5452; width: 100px; height: 30px;" required="">
                </h5>

                <button type="submit" style="cursor: pointer; margin-top: 20px; border: 2px solid rgba(125, 84, 82, 0.70); background: rgba(125, 84, 82, 0.50); width: 150px; height: 50px; color: #E4D8CC; font-family: Inter;font-size: 15px; font-style: normal; line-height: normal;" >Add to Cart</button>
            </div>
        </div>
    </form>
    </div>
</div>


    <script src="assets/javascript/home.js"></script>
    @include ('YearnArt.chatbot')
    @include ('YearnArt.script')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Set the first color and size options as default
            const defaultColorOption = document.getElementById('colorOption1');
            const defaultSizeOption = document.getElementById('sizeOptionSmall');
            const defaultSecondaryColorOption = document.getElementById('secondaryColorOption1');
            defaultColorOption.checked = true;
            defaultSizeOption.checked = true;
            defaultSecondaryColorOption.checked = true;

            // Trigger change event to update selected style
            const colorChangeEvent = new Event('change');
            const sizeChangeEvent = new Event('change');
            const secondaryColorChangeEvent = new Event('change');
            defaultColorOption.dispatchEvent(colorChangeEvent);
            defaultSizeOption.dispatchEvent(sizeChangeEvent);
            defaultSecondaryColorOption.dispatchEvent(secondaryColorChangeEvent);
        });

        // Add event listeners to update selected style for color options
        const colorOptions = document.querySelectorAll('.color-option');
        colorOptions.forEach(option => {
            option.addEventListener('change', updateSelectedStyle);
        });

        // Add event listeners to update selected style for size options
        const sizeOptions = document.querySelectorAll('.size-option');
        sizeOptions.forEach(option => {
            option.addEventListener('change', updateSelectedStyle);
        });

        // Add event listeners to update selected style for secondary color options
        const secondaryColorOptions = document.querySelectorAll('.secondary-color-option');
        secondaryColorOptions.forEach(option => {
            option.addEventListener('change', updateSelectedStyle);
        });

        function updateSelectedStyle(event) {
            const selectedLabel = document.querySelector(`[for="${event.target.id}"]`);
            if (event.target.checked) {
                // Remove 'selected' class from all labels of the same type
                const optionsOfType = document.querySelectorAll(`[name="${event.target.name}"]`);
                optionsOfType.forEach(option => option.nextElementSibling.classList.remove('selected'));

                selectedLabel.classList.add('selected');
            }
        }
    </script>
</body>
</html>
