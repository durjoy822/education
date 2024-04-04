<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edifiaction | Register</title>
    <link rel="stylesheet" href="{{asset('web')}}/assets/css/login.css">
    @include('web.layouts.head')
    <style>
        body{
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            /* opacity: 1; */
        }
    </style>
</head>

<body style="background-image: url('https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA1L3Y1NDZiYXRjaDMtbXludC0zMS1iYWRnZXdhdGVyY29sb3JfMS5qcGc.jpg');">
    <section class="wrapper">
        <div class="form signup">
          <div class="sign_up_logo">
            <a href="{{route('home')}}"><img  src="http://127.0.0.1:8000/web/assets/images/icon/logo-black.png"></a>
          </div>
          <header class="my-3">Register </header>
          <form  action="#">
            <input type="text"  placeholder="Full name" required />
            <input type="text" placeholder="Email address" required />
            <input type="password" placeholder="Password" required />
            <input type="comfirm_password" placeholder="Repeted Password" required />
            <div class="checkbox">
              <input type="checkbox" id="signupCheck" />
              <span for="signupCheck">I accept all <a href="#" data-toggle="modal" data-target="#staticBackdrop">terms & conditions</a></span>
            </div>
            <input type="submit" class="btn btn-sm btn-warning " value="Signup" />
          </form>
          <a href="{{route('student.login')}}"><div class="text-center pt-4">Already have a Account</div></a>
        </div>
      </section>







<!-- terms & conditions showing modal  -->
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">All terms & conditions </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           <h5> Terms and Conditions</h5>
            1. INTRODUCTION


            The Site reserves the right to change, modify, add, or remove portions of these Terms and Conditions at any time without any prior notification. Changes will be effective when posted on the Site with no other notice provided. Please check these Terms and Conditions regularly for updates. Your continued use of the Site following the posting of changes to Terms and Conditions of use constitutes your acceptance of those changes.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Done</button>
        </div>
      </div>
    </div>
  </div>
@include('web.layouts.script')
</body>
</html>
