<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SAA'DA</title>

  <link rel="stylesheet" type="text/css" href="{{asset('css/SAADA.css')}}" />
  <link rel="icon" href="{{asset('Logo/link pic.jpg')}}">

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">


        <form action="{{ route('login_post') }}" method="POST" id="myForm" onsubmit="return validateForm()" class="sign-in-form">
          @csrf
          
      
          <h2 class="title">Sign In</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input id="user" type="text" name="username" placeholder="Username" />
            <div id="usernameError" class="error1"></div>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input id="Passwordd" type="password" name="password" placeholder="Password" />
            <div id="passwordError" class="error1"></div>
          </div>
          @if (session('error'))
          <div class="validerror alert alert-danger">
              {{ session('error') }}
          </div>
        @endif
          <input type="submit" value="Login" class="btn solid" />

          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>




        <form action="{{route('register_post')}}" method="POST" id="form"  class="sign-up-form">
            @csrf
          <h2 class="title">Sign Up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input id="username" type="text" name="username" placeholder="Username" />
            <div class="error"></div>
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input id="email" type="email" name="email" placeholder="Email" />
            <div class="error"></div>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input id="password" type="password" name="password" placeholder="Password" />
            <div class="error"></div>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input id="confirmPassword" type="password" name="confirmPassword" placeholder="confirm Password" />
            <div class="error"></div>
          </div>
          <input type="submit" value="Sign Up" class="btn solid" />

          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here?</h3>
          <p>happines Starts here.</p>
          <button class="btn transparent" id="sign-up-btn">Sign Up</button>
        </div>
      </div>

      <div class="panel right-panel">
        <div class="content">
          <h3>One of us?</h3>
          <p>happines Starts here.</p>
          <button class="btn transparent" id="sign-in-btn">Sign In</button>
        </div>
      </div>
    </div>
  </div>

  <script src="{{asset('js/SAADA.js')}}"></script>
</body>

</html>