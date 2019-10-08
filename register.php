<?php 
    include("header.php");
    
?>
       
 <!-- Breadcromb Area Start -->
 <section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>Registration Page</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="./">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li><i class="fa fa-user"></i></li>
                        <li><a href="register">Register</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Register</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Login Area Start -->
      <section class="gauto-login-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="login-box">
                     <div class="login-page-heading">
                        <i class="fa fa-user"></i>
                        <h3> Registration Form</h3>
                     </div>
                     <form method="post" action="handlers/registration/process-registration.php" name="register">
                        <div class="account-form-group">
                           <input type="text" placeholder="Enter Full Name" name="full_name" required>
                           <i class="fa fa-user"></i>
                        </div>
                        <div class="account-form-group">
                           <input type="email" placeholder="Username or Email" name="user_name" required>
                           <i class="fa fa-envelope"></i>
                        </div>
                        <div class="account-form-group">
                           <input type="password" placeholder="Enter Password" name="password" required>
                           <i class="fa fa-lock"></i>
                        </div>
                        <div class="account-form-group">
                           <input type="password" placeholder="Repeat YourPassword" name="repeat" required>
                           <i class="fa fa-lock"></i>
                        </div>
                        <div class="remember-row">
                           <p class="lost-pass">
                              <a href="forgot">forgot password?</a>
                           </p>
                           <p class="checkbox remember">
                              <input class="checkbox-spin" type="checkbox" id="Freelance">
                              <label for="Freelance"><span></span>Keep Me Signed In</label>
                           </p>
                        </div>
                        <p>
                           <button type="submit" class="gauto-theme-btn" name="register">REGISTER</button>
                        </p>
                     </form>
                     <div class="login-sign-up">
                        <a href="login">Already have an account?</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Login Area End -->
       
<?php 
    include("footer.php");
?>