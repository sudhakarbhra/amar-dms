  <div class="container d-flex flex-column justify-content-between vh-100">
  <div class="row justify-content-center mt-5">
    <div class="col-xl-5 col-lg-6 col-md-10">
      <div class="card">
        <div class="card-header bg-primary">
          <div class="app-brand">
            <a href="/index.html">
              <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33"
                viewBox="0 0 30 33">
                <g fill="none" fill-rule="evenodd">
                  <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                  <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                </g>
              </svg>
              <span class="brand-name">SRI AMAR BIKES</span>
            </a>
          </div>
        </div>
        <div class="card-body p-5">

          <h4 class="text-dark mb-5">Sign In</h4>
          <form role="form">
            <div id="message"></div>
            <div class="row">
              <div class="form-group col-md-12 mb-4">
                <input type="email" class="form-control input-lg" id="login_uname" aria-describedby="emailHelp" placeholder="Email address">
              </div>
              <div class="form-group col-md-12 mb-4">
                  <div class="input-group input-group-merge input-group-alternative">
                   <input type="password" class="form-control input-lg pwd" id="login_pwd" placeholder="Password">
                    <span class="input-group-append">
                        <button class="theme-btn reveal" type="button"> <i class="mdi mdi-eye-outline"></i></button>
                      </span>
                  </div>
                </div>

             
              <div class="form-group  col-md-12" id="otpInputContainer" style="display: none;">
                  <label>OTP has been sent you your phone number,</label>
                  <input type="tel" placeholder="Enter your OTP here" id="otpInput" onkeyup="verifyOTP(this.value)" maxlength="4" name="otp" class="form-control mb-3 text-center" />
              </div>
                        


              <div class="col-md-12">
                <button type="button"  id="OTP_submit" class="btn btn-lg btn-primary btn-block mb-4">Get OTP</button>
                <button type="button" style="display: none;" id="login_submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright pl-0">
    <p class="text-center">&copy; <span id="copy-year">2019</span> Copyright Sri Amar Bikes by
      <a class="text-light" href="https://sudhakarbhra.github.io/portfolio/" target="_blank">sdrplk</a>.
    </p>
  </div>
</div>
