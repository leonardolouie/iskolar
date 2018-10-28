<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from colorlib.com/preview/theme/essence/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 06:56:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>ISKOLAR CREATIVES</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('ISKOLAR/2.jpg')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('front/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('front/style.css')}}">

</head>

<body>







         @include('front.inc.header')


         @yield('content')


         @include('front.inc.footer')
   

  



    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('front/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('front/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('front/js/plugins.js')}}"></script>
    <!-- Classy Nav js -->
    <script src="{{asset('front/js/classy-nav.min.js')}}"></script>
    <!-- Active js -->  
    <script src="{{asset('front/js/active.js')}}"></script>


     <script>
        

     
        $(document).on('click', '.btn_add_cart', function(){
        
            //var prod_id = $(this).attr("id");
         // var prod_name = $('#name'+prod_id+'').val();
         // var prod_price = $('#price'+prod_id+'').val();
         // var prod_quan = $('#quantity'+prod_id).val();
         // var action = "add";
                alert(ADDED VALUE);
             
            });





    </script>


  

</body>


<!-- Mirrored from colorlib.com/preview/theme/essence/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 06:56:22 GMT -->
</html>