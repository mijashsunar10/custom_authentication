<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="{{asset('assets/css/register.css')}}">
  <title>Register</title>
  <style>
   
  </style>
</head>
<body>
<div class="container register">
<div class="row">
  <div class="col-md-3 register-left">
    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
    <h3>Welcome</h3>
    <p>You are 30 seconds away from earning your own money!</p>
    <input type="submit" name="" value="Login"/><br/>
  </div>

  <div class="col-md-9 register-right">
    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <h3  class="register-heading">Registration Form</h3>
                <div class="row register-form">
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                    </div>
                </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                    </div>
                      <div class="form-group">
                        <div class="maxl">
                          <label class="radio inline"> 
                            <input type="radio" name="gender" value="male" checked>
                            <span> Male </span> 
                          </label>
                          <label class="radio inline"> 
                              <input type="radio" name="gender" value="female">
                              <span>Female </span> 
                          </label>
                        </div>
                      </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                            <option>What is your Birthdate?</option>
                            <option>What is Your old Phone Number</option>
                            <option>What is your Pet Name?</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="`Answer *" value="" />
                    </div>
                    <input type="submit" class="btnRegister"  value="Register"/>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
