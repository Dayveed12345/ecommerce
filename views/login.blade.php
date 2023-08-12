<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrapIcons/font/bootstrap-icons.css')}}">
    <style>
        
        </style>
</head>
<body>
   <div class="contain d-flex  justify-content-start align-items-center overflow-hidden" style="height:100vh; width:100%;">
<div class="col-lg-7 col-sm-0 "style="height:100vh; background-image:url({{asset('images/landing-cloth2.jpg')}});background-size:cover; background-repeat:no-repeat;">
<!-- <img src=""alt="Landing Image" height="100vh" width="100%"> -->
</div>
    <div class="col-lg-5 col-sm-10  p-0">
        <!-- @if(session('status'))
        <P class="alert alert-success">{{session('status')}}</P>
        @else
        <P class="alert alert-danger">{{session('error')}}</P>
        @endif -->
        <div style="float:left;"  class="col-9 offset-2 ">
    <!-- <h1 class="text-center p-4  shadow">Shop<>X</h1> -->
    <h3 class="text-center ">Welcome Back</h3>
        <form  method="POST">
            @csrf
            <div class="input-group" style="margin-top:20px;">
                <span class="input-group-text" ><span class="bi bi-envelope "></span></span>
                <input type="email" name="email" placeholder="Email" class="form-control ">
            </div>
            <div class="input-group" style="margin-top:20px;">
                <span class="input-group-text "><span class="bi bi-key "></span></span>
                <input type="password" name="password" placeholder="Password" class="form-control ">
            </div>
            <button class="btn btn-primary shadow col-12" type="submit" style="margin-top:20px;">Login</button>
            <a href="/register" style="margin-left:-16px;" class="nav nav-link">Don't have an account? </a>
        </form>
    </div>
    </div>
   </div>
</body>
<!-- Using Ajax to send Request  -->
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#login').click(function () {
            // var email = $('#fname').val().trim();
            // var password = $('#password').val().trim();
            event.preventDefault();
            let form = $('#myForm')[0];
            let formData= new FormData(form);
                $.ajax({
                   
                    type: 'post', //the way you want to send data to your URL
                    data: form,
                    dataType: 'json',//expected data format from server
                    processData: false,
                    contentType: false,
                    beforeSend: function () {

                    },
                    success: function (response) {//on successful request, do something with response
                        if (!response['errors']) {
                            // Using Sweat Alert
                            window.location = "/";
                        } else {
                            console.log("Error");
                        }
                    }, error: function () 
                    {
                        //handle errors here
                        console.log("Errors in AJAX call.");
                    }
                });
    })
})
</script>
</html>