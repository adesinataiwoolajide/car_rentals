<?php 
    include("header.php");
    
?>
       
 <!-- Breadcromb Area Start -->
 <section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>Login Page</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Login</li>
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
                        <i class="fa fa-key"></i>
                        <h3>sign in</h3>
                     </div>
                     <form>
                        <div class="account-form-group">
                           <input type="text" placeholder="Username or Email" name="username">
                           <i class="fa fa-user"></i>
                        </div>
                        <div class="account-form-group">
                           <input type="password" placeholder="Password" name="password">
                           <i class="fa fa-lock"></i>
                        </div>
                        <div class="remember-row">
                           <p class="lost-pass">
                              <a href="#">forgot password?</a>
                           </p>
                           <p class="checkbox remember">
                              <input class="checkbox-spin" type="checkbox" id="Freelance">
                              <label for="Freelance"><span></span>Keep Me Signed In</label>
                           </p>
                        </div>
                        <p>
                           <button type="submit" class="gauto-theme-btn">Login now</button>
                        </p>
                     </form>
                     <div class="login-sign-up">
                        <a href="register.html">Do you need an account?</a>
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