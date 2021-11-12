<header>
  <style>
    /* .name[data-error] .input1{
      color: red;
      border-color: red;
      background: white;
    }
    .name[data-error]::after{
      content: attr(data-error);
      color: red;
      display: block;
      font-size: 1rem;
      margin: 10px 10px;
    }

    .input1{
      transition: background 0.2s, border 0.2s;
    } */
    

#login-box {
  position: relative;
  margin: -15px;
    width: 497px;
  height: 400px;
  background: #FFF;
  border-radius: 2px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

.left {
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
}

h1 {
  margin: 0 0 20px 0;
  font-weight: 300;
  font-size: 28px;
}

input[type="text"],
input[type="password"] {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 48px;
  border: none;
  border: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 19px;
  transition: 0.2s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}

input[type="submit"] {
  margin-top: 28px;
  width: 120px;
  height: 32px;
  background: #16a085;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

input[type="submit"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}


  </style>
    <div class="container-fluid">
        <div class="row align-items-start">
          <div class="logo row align-items-start col-lg-4 col-md-12 col-sm-12">
            <!-- logo and name -->
            <div class="col-3">
                <img src="images/logo2.png">
              </div>
              <div class="col-9 header-text">
                <h1>
                    RACHEAL DEVELOPERS
                </h1>
              </div>
            

          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 ">
            <!-- nav bar -->
            <nav class="navigation navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a> 
                      </li>
                      <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            services
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">web designing</a></li>
                            <li><a class="dropdown-item" href="#">web hosting</a></li>
                            <li><a class="dropdown-item" href="#">logo designing</a></li>
                            <li><a class="dropdown-item" href="#">internet setup</a></li>
                            <li><a class="dropdown-item" href="#">networking</a></li>
                          </ul>
                        </li>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          about us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">vision</a></li>
                          <li><a class="dropdown-item" href="#">mission</a></li>
                          <li><a class="dropdown-item" href="#">motto</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">help</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12">
            <!-- header buttons -->
            <div class="Button">
                <button type="button" class="btn btn-primary signupbtn" data-bs-toggle="modal" data-bs-target="#signupstaticBackdrop">
                    Sign Up
                  </button>
                  <button class="btn btn-primary loginbtn" data-bs-toggle="modal" data-bs-target="#loginstaticBackdrop">Login</button>
                  <!-- Modal login -->
                    <div class="modal fade" id="loginstaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">log in</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form action="php files/loginaction.php" method="GET">
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Password</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                </div>
                                <div class="mb-3 form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                </div>
                                <button type="login" class="btn btn-primary">LOG IN</button>
                              </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- signup Modal -->
                        <div class="modal fade" id="signupstaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">sign up</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    
                                        <!-- <h1>SIGN UP</h1> -->
                                         <?php include "php files/action.php"; ?>
                                        <form action="<?Php $_SERVER['PHP_SELF']; ?>" method="POST"> 
                                        <div id="login-box">
                                        <div class="left">
                                         <input type="text" name="name" placeholder="name" />
                                         <span class="error"><?= $name_error; ?></span>
                                          <input type="text" name="email" placeholder="Email" />
                                          <span class="error"><?= $email_error; ?></span>
                                          <input type="text" name="phone_number" placeholder="Phone number" />
                                          <span class="error"><?= $phone_error; ?></span>
                                          
                                          <input type="password" name="password" placeholder="password" />
                                          <span class="error"><?= $password_error; ?></span>
                                          <button type="submit" class="btn btn-primary">SIGN UP</button>
                                          <!-- <input type="submit" name="signup_submit" value="Sign up" /> -->
                                        </div>
                                        
                                      </div>
                                        <!-- <form action="php files/action.php" method="POST"> 
                                            <div class="name" data-error="username required">
                                                <label for="input">Name</label>
                                                <input type="text" class="input1" name="name" value="">
                                            </div>
                                            <div class="number"> 
                                                <label for="input">phone number</label>
                                                <input type="text" name="phone_number" >
                                            </div>
                                            <div class="email">
                                                <label for="input">Email address</label>
                                                <input type="email" name="email">
                                            </div>
                                            <div class="date-of-birth">
                                                <label for="input">Password</label>
                                                <input type="password" name="password">
                                            </div>
                                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                                            <button class="send">SEND</button>-->
                                        </form>
                                        <!-- <button class="back2">BACK TO HOME</button> -->
                                    
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
          </div>
        </div>
      
 </header>