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
        .modal-dialog{
            max-width: 900px;
        }

        .modal-body select {
        border: 1px solid #efefef;
        margin-bottom: 20px;
        padding: 10px 15px;
        width: 100%;

        }
        .modal-body textarea {
        border: 1px solid #efefef;
        margin-bottom: 20px;
        padding: 10px 15px;
        width: 100%;
        }

    </style>
</head>

<body style="background-image: url('https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA1L3Y1NDZiYXRjaDMtbXludC0zMS1iYWRnZXdhdGVyY29sb3JfMS5qcGc.jpg');">
    <section class="wrapper">
        <div class="form signup">
          <div class="sign_up_logo">
            <a href="{{route('home')}}"><img  src="http://127.0.0.1:8000/web/assets/images/icon/logo-black.png"></a>
          </div>
          <header class="my-3"><h4>Register</h4> </header>
          <form  action="{{route('auth.store')}}" method="post" >
            @csrf

            <input type="text"  name="name" value="{{old('name')}}" placeholder="Full name"  />
            <div class="text-danger"> @error('name') {{$message}} @enderror</div>
            <input type="text" name="email"  value="{{old('email')}}" placeholder="Email address"  />
            <div class="text-danger"> @error('email') {{$message}} @enderror</div>
            <input type="password" name="password" placeholder="Password"  />
            <div class="text-danger"> @error('password') {{$message}} @enderror</div>
            <input type="password" name="confirm_password" placeholder="Repeted Password"  />
            <div class="text-danger"> @error('confirm_password') {{$message}} @enderror</div>
            <div class="checkbox">
              <input type="checkbox" id="signupCheckbox" />
              <span for="signupCheck">I accept all <a href="#" data-toggle="modal" data-target="#staticBackdrop">terms & conditions</a></span>
            </div>
            <input type="submit" class="btn btn-sm btn-warning" id="signUp" disabled="disabled" value="Signup" />
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
          {!!$terms->terms!!}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Done</button>
        </div>
      </div>
    </div>
  </div>
@include('web.layouts.script')
<script>
    $(document).ready(function(){
        $('#signupCheckbox').change(function(){
            if(this.checked){
                $('#signUp').removeAttr('disabled');
            } else {
                $('#signUp').attr('disabled', 'disabled');
            }
        });
    });
</script>
</body>
</html>
