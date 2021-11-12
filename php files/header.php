<header>
      <div class="container-fluid">
          <div class="row align-items-start">
            <div class=" column col-lg-4 col-md-12 col-sm-12">
              <div class="row_align_items_start row align-items-start">
                
                
                  <div class="med_logo col-4">
                    <a href="../index.php">
                      <img src="../images/663347.png" alt="MED-LOGO">
                    </a>
                                 
                  </div>
                  <div class="col-8 ">
                    <a href="../index.php">
                      <h1>MED MUSIC</h1>
                    <h5>for high quality music</h5>
                    </a>
                    
                  </div>
                
                
              </div>
            </div>
            <div class="column col-lg-4 col-md-12 col-sm-12">
              <nav class="navbar_start navbar navbar-expand-lg navbar-light">
                
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="nav_bar collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav_bar_nav navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav_item1 nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav_item2 nav-item ">
                        <a class="nav-link active" href="#">Latest Playlist</a>
                      </li>
                      <li class="nav_item3 nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Services
                        </a>
                        <ul class="dropdown_menu dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Burn music on CD</a></li>
                          <li><a class="dropdown-item" href="#">Music on flash disks</a></li>
                          <!-- <li><hr class="dropdown-divider"></li> -->
                          <li><a class="dropdown-item" href="#">Music promotion</a></li>
                        </ul>
                      </li>
                      <li class="nav_item4 nav-item">
                        <a class="nav-link active" href="php files/contact us.php" aria-disabled="true">Contact Us</a>
                      </li>
                      <li class="nav_item5 nav-item">
                        <a class="nav-link active" href="#" aria-disabled="true">About Us</a>
                      </li>
                    </ul>
                    
                  </div>
                
              </nav>
            </div>
            <div class="btn_col column col-lg-4 col-md-12 col-sm-12">
              <div class=" button">
                <button class="header_btn login-btn btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#loginstaticBackdrop">LOGIN</button>
 
               <button class="header_btn signup-btn btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#signupstaticBackdrop">SIGNUP</button>

                <!-- login modal -->
                <div class="modal fade" id="loginstaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form action="php files/controller.php" method="GET">
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                              </div>
                              <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" autocomplete="off">
                                <label class="form-check-label" for="exampleCheck1" >Remember me</label>
                              </div>
                              <button type="login" class="btn btn-primary">LOGIN</button>
                            </form>
                      </div>
                      <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">login</button> -->
                      </div>
                    </div>
                  </div>
                </div>

                <!-- signup modal -->

                <div class="modal fade" id="signupstaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Register</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form action="php files/controller.php" method="POST">
                            <div class="mb-3">
                              <label for="exampleInputSurname" class="form-label">Surname</label>
                              <input type="text" class="form-control" id="exampleInputSurname" name="surname">
                            </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                              </div>
                              <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" autocomplete="off">
                                <label class="form-check-label" for="exampleCheck1">Accept terms and conditions</label>
                              </div>
                              <button type="submit" class="btn btn-primary">SIGNUP</button>
                            </form>
                      </div>
                      <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">login</button> -->
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
      </div>
    </header>