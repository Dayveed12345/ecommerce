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
    <div class="contain d-flex justify-content-start align-items-center overflow-hidden"
        style="height:100vh; width:100%;">
        <div class="col-lg-5 col-sm-10  p-0">
            <!-- @if(session('status'))
        <P class="alert alert-success">{{session('status')}}</P>
        @else
        <P class="alert alert-danger">{{session('error')}}</P>
        @endif -->
            <div style="float:left;" class="col-9 offset-2">
                <h3 class=text-center>Create Your Account</h3>
                <form action='register' method="POST">
                    @csrf
                    <div class="input-group">
                        <span class="input-group-text"><span class="bi bi-person"></span></span>
                        <input type="text" name="firstname" placeholder="First Name" class="form-control">
                    </div>
                    <div class="input-group" style="margin-top:20px;">
                        <span class="input-group-text"><span class="bi bi-person"></span></span>
                        <input type="text" name="lastname" placeholder="Last Name" class="form-control">
                    </div>
                    <div class="input-group" style="margin-top:20px;">
                        <span class="input-group-text"><span class="bi bi-envelope"></span></span>
                        <input type="text" name="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="input-group" style="margin-top:20px;">
                        <span class="input-group-text"><span class="bi bi-telephone"></span></span>
                        <input type="text" name="pnumb" placeholder="Phone Number" class="form-control">
                    </div>
                    <div class="input-group" style="margin-top:20px;">
                        <span class="input-group-text"><span class="bi bi-house-door"></span></span>
                        <input type="text" name="address" placeholder="Address" class="form-control">
                    </div>
                    <div class="input-group" style="margin-top:20px;">
                        <span class="input-group-text"><span class="bi bi-key"></span></span>
                        <input type="text" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="input-group" style="margin-top:20px;">
                        <span class="input-group-text"><span class="bi bi-key"></span></span>
                        <input type="text" name="cpassword" placeholder="confirm Password" class="form-control">
                    </div>
                    <div class="input-group" style="margin-top:20px;">
                        <input type="checkbox">Agree to terms and condition
                    </div>
                    <button class="btn btn-primary shadow col-12" type="submit"
                        style="margin-top:20px;">Register</button>
                    <a href="/" style="margin-left:-20px;" class="nav nav-link">Already have an account </a>
                </form>
            </div>
        </div>
        <div class="col-lg-7 col-sm-0 "style="height:100vh; background-image:url({{asset('images/landing-cloth2.jpg')}});background-size:cover; background-repeat:no-repeat;">
            <!-- <img src=""alt="Landing Image" height="100vh" width="100%"> -->
        </div>
    </div>
</body>
<!-- Using Ajax to send Request to the backend -->
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#register').click(function () {
            // var firstname = $('#fname').val().trim();
            // var lastname = $('#fname').val().trim();
            // var email = $('#fname').val().trim();
            // var phone = $('#phone').val().trim();
            // var address = $('#address').val().trim();
            // var password = $('#password').val().trim();
            // var confirmPassword = $('#cpassword').val().trim();
            
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