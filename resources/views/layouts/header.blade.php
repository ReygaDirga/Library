  <header id="header" class="site-header">
    <nav id="header-nav" class="navbar navbar-expand-lg py-3">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="images/Librora.png" class="logo" width="155px" height="60px" >
        </a>
        <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
          </svg>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
          <div class="offcanvas-header px-4 pb-0">
            <a class="navbar-brand" href="index.html">
              <img src="images/main-logo.png" class="logo">
            </a>
            <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"
              data-bs-target="#bdNavbar"></button>
          </div>
          <div class="offcanvas-body">
            <ul id="navbar"
              class="navbar-nav text-uppercase justify-content-start justify-content-lg-center align-items-start align-items-lg-center flex-grow-1">
              <li class="nav-item">
                <a class="nav-link me-4 active" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4" href="index.html">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link me-4 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu animate slide border">
                  <li>
                    <a href="index.html" class="dropdown-item fw-light">About</a>
                  </li>
                  <li>
                    <a href="index.html" class="dropdown-item fw-light">Shop</a>
                  </li>
                  <li>
                    <a href="index.html" class="dropdown-item fw-light">Single Product</a>
                  </li>
                  <li>
                    <a href="index.html" class="dropdown-item fw-light">Cart</a>
                  </li>
                  <li>
                    <a href="index.html" class="dropdown-item fw-light">Checkout</a>
                  </li>
                  <li>
                    <a href="index.html" class="dropdown-item fw-light">Blog</a>
                  </li>
                  <li>
                    <a href="index.html" class="dropdown-item fw-light">Single Post</a>
                  </li>
                  <li>
                    <a href="index.html" class="dropdown-item fw-light">Contact</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4" href="index.html">Contact</a>
              </li>
            </ul>
            <div class="user-items d-flex">
              <ul class="d-flex justify-content-end list-unstyled mb-0">
                <li class="search-item pe-3">
                  <a href="#" class="search-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                  </a>
                </li>
                <li class="pe-3">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>
                  </a>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="tabs-listing">
                            <nav>
                              <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
                                <button class="nav-link text-capitalize active" id="nav-sign-in-tab"
                                  data-bs-toggle="tab" data-bs-target="#nav-sign-in" type="button" role="tab"
                                  aria-controls="nav-sign-in" aria-selected="true">Sign In</button>
                                <button class="nav-link text-capitalize" id="nav-register-tab" data-bs-toggle="tab"
                                  data-bs-target="#nav-register" type="button" role="tab" aria-controls="nav-register"
                                  aria-selected="false">Register</button>
                              </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                              <div class="tab-pane fade active show" id="nav-sign-in" role="tabpanel"
                                aria-labelledby="nav-sign-in-tab">
                                <div class="form-group py-3">
                                  <label class="mb-2" for="sign-in">Username or email address *</label>
                                  <input type="text" minlength="2" name="username" placeholder="Your Username"
                                    class="form-control w-100 rounded-3 p-3" required>
                                </div>
                                <div class="form-group pb-3">
                                  <label class="mb-2" for="sign-in">Password *</label>
                                  <input type="password" minlength="2" name="password" placeholder="Your Password"
                                    class="form-control w-100 rounded-3 p-3" required>
                                </div>
                                <label class="py-3">
                                  <input type="checkbox" required="" class="d-inline">
                                  <span class="label-body">Remember me</span>
                                  <span class="label-body"><a href="#" class="fw-bold">Forgot Password</a></span>
                                </label>
                                <button type="submit" name="submit" class="btn btn-dark w-100 my-3">Login</button>
                              </div>
                              <div class="tab-pane fade" id="nav-register" role="tabpanel"
                                aria-labelledby="nav-register-tab">
                                <div class="form-group py-3">
                                  <label class="mb-2" for="register">Your email address *</label>
                                  <input type="text" minlength="2" name="username" placeholder="Your Email Address"
                                    class="form-control w-100 rounded-3 p-3" required>
                                </div>
                                <div class="form-group pb-3">
                                  <label class="mb-2" for="sign-in">Password *</label>
                                  <input type="password" minlength="2" name="password" placeholder="Your Password"
                                    class="form-control w-100 rounded-3 p-3" required>
                                </div>
                                <label class="py-3">
                                  <input type="checkbox" required="" class="d-inline">
                                  <span class="label-body">I agree to the <a href="#" class="fw-bold">Privacy
                                      Policy</a></span>
                                </label>
                                <button type="submit" name="submit" class="btn btn-dark w-100 my-3">Register</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>