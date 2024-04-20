<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edifiaction | Login</title>
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/login.css">
    @include('web.layouts.head')
    <style>
        body {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            /* opacity: 1; */
        }
    </style>
</head>

<body
    style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiv-xvX5aEoJ04BZZ7L2s-z2SxgR3KY4scTGAF8U1Yk_76lX2v11zGmSOilHOqOtEXWh4&usqp=CAU);">
    <section class="wrapper">
        <div class="form signup">
            <div class="sign_up_logo">
              <a href="{{route('home')}}"><img src="http://127.0.0.1:8000/web/assets/images/icon/logo-black.png"></a>
            </div>
            <header><h4>Login</h4></header>
            <form action="{{route('login.checked')}}" method="post">
                @csrf
                <input type="text" placeholder="Email address" value="{{old('email')}}" name="email"  />
                <div class="text-danger">@error('email') {{$message}} @enderror</div>
                <input type="password" placeholder="Password" name="password"  />
                <div class="text-danger">@error('password') {{$message}} @enderror</div>
               <a href="" class="text-center"><span > forgot password</span></a>
                <input type="submit" class="btn btn-sm btn-warning mt-0 " value="Signin" />
            </form>
             <a href="{{route('student.register')}}"><div class="text-center pt-4"> Creating Account</div></a>
        </div>
    </section>
</body>

</html>
