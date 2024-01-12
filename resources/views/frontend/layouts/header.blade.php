<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
      <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a
          href=""
          class="navbar-brand font-weight-bold text-secondary"
          style="font-size: 50px"
        >
          <!-- <i class="flaticon-043-teddy-bear"></i> -->
          <img src="{{asset('assets/img/logo-white-1.png')}}" alt="">
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarCollapse"
        >
          <div class="navbar-nav font-weight-bold mx-auto py-0">
            <a href="" class="nav-item nav-link active">Home</a>
            <!-- <a href="" class="nav-item nav-link">About</a> -->
            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                >About Us</a
              >
              <div class="dropdown-menu rounded-0 m-0">
                <a href="" class="dropdown-item">About</a>
                <a href="" class="dropdown-item">Why Choose Us</a>
                <a href="" class="dropdown-item">Team</a>
              </div>
            </div>
            <a href="" class="nav-item nav-link">Services</a>
            <a href="" class="nav-item nav-link">Our Partner</a>
            <a href="" class="nav-item nav-link">Quality Control</a>
            <a href="" class="nav-item nav-link">AOP</a>
            <a href="" class="nav-item nav-link">Contact</a>
          </div>
          <a href="{{url('login')}}" class="btn btn-primary px-4">Login</a>
          <a href="{{url('register')}}"  class="btn btn-primary px-4" style="margin-left:12px;">Register</a>
        </div>
      </nav>
    </div>
    <!-- Navbar End -->