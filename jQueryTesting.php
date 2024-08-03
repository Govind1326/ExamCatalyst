<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="stle.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>

  <body class="bg-white">
  <h1>Govind from source tree</h1>  
  <div class="container p-1">
      <div class="col-lg-6 m-auto d-block p-3 bg-white">
        <h2 class="pb-3 text-success">
          Registration Form 
        </h2>
        <div id="message"></div>
        <form method="POST" id="myform">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="user1"> Username: </label>
              <input
                type="text"
                name="username"
                id="username"
                class="form-control"
              />
              <span class="error" id="username_err"> </span>
            </div>
            <div class="form-group col-md-6">
              <label for="user1"> Email: </label>
              <input
                type="email"
                name="email"
                id="email"
                class="form-control"
              />
              <span class="error" id="email_err"> </span>
            </div>
            <div class="form-group col-md-12">
              <label for="mob"> Mobile </label>
              <input
                type="text"
                name="mobile"
                id="mobile"
                class="form-control"
              />
              
              <span class="error" id="mobile_err"> </span>
            </div>

            <div class="form-group col-md-12">
              <label for="password"> Password: </label>
              <div class="input-group">
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="form-control"
                />
                <div class="input-group-append">
                  <span
                    class="input-group-text"
                    onclick="password_show_hide();"
                  >
                    <i class="fas fa-eye" id="show_eye"></i>
                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                  </span>
                </div>
              </div>
              <span class="error" id="password_err"> </span>
            </div>

            <div class="form-group col-md-12">
              <label for="conpassword"> Confirm Password: </label>
              <input
                type="password"
                name="cpass"
                id="cpassword"
                class="form-control"
              />
           
              <span class="error" id="cpassword_err"> </span>
            </div>

            <div class="col-md-12">
              <button type="button" id="submitbtn" class="btn btn-primary">
                Submit
              </button>
            </div> 
          </div>
        </form>
      </div>
    </div>

    <!--call js here-->
    <script src="sript.js"></script>
  </body>
</html>
