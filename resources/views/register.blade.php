<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
</head>
<body>
<section class="vh-100 gradient-custom-register">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form action="{{route('userregister')}}" method="post">
              @csrf
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="fname" class="form-control form-control-lg" />
                    <label class="form-label" for="fname">First Name</label>
                  </div>
                  @error('fname')
                  <span style="color:red">{{$message}}</span>
                  @enderror

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="lname" class="form-control form-control-lg" />
                    <label class="form-label" for="lname">Last Name</label>
                  </div>
                  @error('lname')
                  <span style="color:red">{{$message}}</span>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="email">Email</label>
                  </div>
                  @error('email')
                  <span style="color:red">{{$message}}</span>
                  @enderror
                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" name="phone" class="form-control form-control-lg" />
                    <label class="form-label" for="phone">Phone Number</label>
                  </div>
                  @error('phone')
                  <span style="color:red">{{$message}}</span>
                  @enderror
                </div>
              </div>

              <div class="row">
              <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                <input type="password" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="password">Password</label>
              </div>
              <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                <input type="password" name="password_confirmation" class="form-control form-control-lg" />
                <label class="form-label" for="password">Reenter Password</label>
              </div>
              @error('password')
              <span style="color:red">{{$message}}</span>
               @enderror
</div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>