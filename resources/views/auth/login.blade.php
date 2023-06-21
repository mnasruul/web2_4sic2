<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body> 
    <div class="container"> 
        <div class="row g-3 justify-content-center align-items-center min-vh-100">
            <div class="col-md-4"> 
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Login </h5>
                        <h6 class="card-subtitle mb-2 text-muted">Login to your account </h6>
                        <form action="" method="post">
                            @csrf
                            <div class="mb-4">
                                    <label for="email" class="form-label">Email address </label>
                                    <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                        </div>
                            <button type="submit" class="btn btn-primary">Login </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>