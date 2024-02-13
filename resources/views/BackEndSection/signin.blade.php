<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <!-- Sweet Alert -->
     <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a> 
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="SignInForm">
              @csrf
              <h1>Login Form</h1>
              <div>
                <input type="email" class="form-control" placeholder="Email" id="loginemail" />
                <p id="lemailerror" class="text-danger"></p>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" id="loginpassword" />
                <p id="lpassworderror" class="text-danger"></p>
              </div>
              <div>
                <a class="btn btn-default submit" id="login">Log in</a>
                <a class="reset_pass" href="#">Lost Your Password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form id="registerform">
              @csrf
              <h1>Create Account</h1>
              <div id="successMessage">
                
              </div>
              <div>
                <input type="text" class="form-control" id="username" placeholder="Username"/>
                {{-- @error('name')<p class="text-danger">{{ $message }}</p>@enderror --}}
                <p id="nameerror" class="text-danger"></p>
              </div>
              <div>
                <input type="email" class="form-control" id="email" placeholder="Email" />
                {{-- @error('email')<p class="text-danger">{{ $message }}</p>@enderror --}}
                <p id="emailerror" class="text-danger"></p>
              </div>
              <div>
                <input type="password" class="form-control" id="password" placeholder="Password" />
                {{-- @error('password')<p class="text-danger">{{ $message }}</p>@enderror --}}
                <p id="passworderror" class="text-danger"></p>
              </div>
              <div>
                <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" />
                {{-- @error('password')<p class="text-danger">{{ $message }}</p>@enderror --}}
                <p id="errorCpass" class="text-danger"></p>
              </div>
              <div>
                <a class="btn btn-default submit" id="createAccount">Submit</a>
              </div>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />
                <div id="errormessage">

                </div>
                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>


{{-- Ajax And Javascript Code Here --}}

<script>
  $("#login").on("click", function(e){
    e.preventDefault();
    let loginemail= $("#loginemail").val();
    let loginpassword=$("#loginpassword").val();
    let _token= $("input[name=_token]").val();
    // console.log("email"+lemail+"pass"+lpassword+"token"+_token);
    if(loginemail == ""||loginemail == null|| loginemail == undefined||loginpassword == null|| loginpassword == undefined || loginpassword == ""){
      if (loginemail == "") {
        $( "#lemailerror" ).text( "Please Enter Email" );
        
      }
      if (loginpassword == "") {
        $( "#lpassworderror" ).text( "Please Enter Password" );
        
      }
    }
    else{
      $.ajax({
            type: "POST",
            url: "/loginadmin",
            data: {
              loginemail,loginpassword,_token
            },
            // dataType: 'json',
            success: function(response){
                console.log('response',response);
                // $("#registerform")[0].reset();
                if (response.statuscode) {
                    window.location = response.redirect;
                }
            },
            error :  function(data1){
              let error=data1.responseJSON;
              $.each(error.errors,function(key,value){
               $('#'+key+'error').text(value);
              });
            } 
      });

    }
        
  });


$("#createAccount").on("click", function(e) {
    e.preventDefault();  
    let name= $('#username').val();
    let email= $('#email').val();
    let password= $('#password').val();
    let password_confirmation= $('#cpassword').val();
    let _token= $("input[name=_token]").val();
        if(name == ""||name == null|| name == undefined||email == null|| email == undefined || email == ""||password == null||
        password == undefined || password == ""||password_confirmation == null|| password_confirmation == undefined || password_confirmation == ""){
            if (name == "") {
              $( "#nameerror" ).text( "Please Enter Name" );
            }
            if (email == null|| email == undefined || email == "") {
              $( "#emailerror" ).text( "Please Enter Email" );
            }
            if (password == null|| password == undefined || password == "") {
              $( "#passworderror" ).text( "Please Enter Password" );
            }
            if (password_confirmation == null|| password_confirmation == undefined || password_confirmation == "") {
              $( "#errorCpass" ).text( "Please Enter Confirm Password" );
            }
        }
        else {
            $.ajax({
            type: "POST",
            url: "/registration",
            data: {
              name,email,password,password_confirmation,_token
            },
            // dataType: 'json',
            success: function(response){
                //console.log('response',response);
                $("#successMessage").html('<p class="alert alert-success" ><strong>User!</strong>Account Create Successful .</p>')
                swal("Success!", " User Account create Successful!", "success")
                $("#registerform")[0].reset();
            },
            error :  function(data1){
              let error=data1.responseJSON;
              $.each(error.errors,function(key,value){
                //$('#errormessage').text(value);
                //console.log(key);
               $('#'+key+'error').text(value);
                 });
            } 
        }
        
        );
      }



        });
  </script>


  </body>
</html>
