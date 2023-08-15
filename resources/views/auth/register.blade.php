<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <title>Project Management | Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="project Management Web Apps" name="description" />
  <meta content="Dhika Syaiful Bahri" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

  <!-- Bootstrap Css -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

  <div class="account-pages my-5 pt-sm-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
          <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
              <div class="row">
                <div class="col-7">
                  <div class="text-primary p-4">
                    <h5 class="text-primary">Free Register</h5>
                    <p>Get your free Skote account now.</p>
                  </div>
                </div>
                <div class="col-5 align-self-end">
                  <img src="{{ asset('assets/images/profile-img.png') }}" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="card-body pt-0">
              <div>
                <a href="index.html">
                  <div class="avatar-md profile-user-wid mb-4">
                    <span class="avatar-title rounded-circle bg-light">
                      <img src="{{ asset('assets/images/logo.svg') }}" alt="" class="rounded-circle"
                        height="34">
                    </span>
                  </div>
                </a>
              </div>
              <div class="p-2">
                <form class="needs-validation" novalidate action="{{ route('store') }}" method="post">
                  @csrf
                  @method('POST')

                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                      placeholder="Enter email" name="email" required>
                    @if ($errors->has('email'))
                      <div class="invalid-feedback">
                        Please Enter Valid Email
                      </div>
                    @endif
                  </div>

                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="username"
                      placeholder="Enter username" name="name" required>
                    @if ($errors->has('name'))
                      <div class="invalid-feedback">
                        Username has already exist
                      </div>
                    @endif
                  </div>

                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                      placeholder="Enter password" name="password" required>
                    @if ($errors->has('password'))
                      <div class="invalid-feedback">
                        Please Enter Valid Password
                      </div>
                    @endif
                  </div>

                  <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" placeholder="Enter password"
                      name="password_confirmation" required>
                  </div>

                  <div class="mt-4 d-grid">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                  </div>

                  <div class="mt-4 text-center">
                    <p class="mb-0">By registering you agree to the Skote <a href="#" class="text-primary">Terms
                        of Use</a></p>
                  </div>
                </form>
              </div>

            </div>
          </div>
          <div class="mt-5 text-center">

            <div>
              <p>Already have an account ? <a href="{{ route('login') }}" class="fw-medium text-primary"> Login</a> </p>
              <p>©
                <script>
                  document.write(new Date().getFullYear())
                </script> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- JAVASCRIPT -->
  <script src="{{ asset('assets/libs/jquery/jquery.min.j') }}s"></script>
  <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
  <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

  <!-- validation init -->
  <script src="{{ asset('assets/js/pages/validation.init.js') }}"></script>

  <!-- App js -->
  <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
