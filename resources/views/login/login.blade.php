<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body class="antialiased">
        

        <section class="vh-100" style="background-color: #ffffff;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body  text-center">
          
                      <h3 class="">Sign in</h3>
                      <label for="">Enter credentials to login</label>
                      <div class="form-outline mb-4 mt-5">
                          <label class="form-label" for="email">Email</label>
                          <input type="email" id="email" placeholder="Email" class="form-control form-control-lg" />
                      </div>
          
                      <div class="form-outline mb-4">
                          <label class="form-label" for="password">Password</label>
                        <input type="password" placeholder="Password" id="password" class="form-control form-control-lg" />
                      </div>
          
                      <!-- Checkbox -->
                      <div class="form-check d-flex justify-content-start mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                        <label class="form-check-label" for="form1Example3"> Save credentials </label>
                      </div>
          
                      <button class="btn btn-primary btn-lg btn-block w-100 mb-5" type="submit">Login</button>
        
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </body>
</html>
