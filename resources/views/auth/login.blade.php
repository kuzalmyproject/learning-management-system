<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script
      src="https://kit.fontawesome.com/1935d064dd.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
  <section id="header">
    
    <h2>The Open University of Sri Lanka</h2>

</section>
    <section class="main">
    
      <div class="container box">
        <!-- Login section -->
        <div class="login main-container">
    
				
          <div class="login-img img-container">
            <img src="assets/images/login.svg" alt="login" />
          </div>
     
          <div class="login-form form-container">
        
          <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
            @csrf
              <h2 class="text-center pb-3">Login</h2>
              <input
                type="email" name="email"
                class="form-control form-control-lg mb-3"
                placeholder="Username"
              />
              @error('email')
					<span style="font-weight:bold"class="text-danger">{{ $message }}</span>
					@enderror
           
              <input
                type="password" name="password"
                class="form-control form-control-lg mb-3"
                placeholder="Password"
              />

              @error('password')
					<span style="font-weight:bold"class="text-danger">{{ $message }}</span>
					@enderror
             
              <div class="d-grid">
                <button class="btn btn-primary btn-lg">Login</button>
              </div>
              <a href="#" class="forgot-link">Forgot password?</a>
              
            </form>
          </div>
        </div>

     

        
       <div class="forgot main-container">
          <div class="forgot-form form-container">
            <form action="">
              <h2 class="text-center pb-3">Reset Password</h2>

              <input
                type="password"
                class="form-control form-control-lg mb-3"
                placeholder="Password"
              />
              <div class="d-grid">
                <button class="btn btn-primary btn-lg">Reset Password</button>
              </div>

              <span> We will send you a reset link!!! </span>
            </form>
            <div class="close">
              <i class="fas fa-times"></i>
            </div>
          </div>
          <div class="forgot-img img-container">
            <img src="assets/images/forgot.svg" alt="forgot" />
          </div>
        </div> 
      </div>
    </section>

    <script src="assets/js/script.js"></script>
  </body>
</html>
