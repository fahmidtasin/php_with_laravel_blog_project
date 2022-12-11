<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="{{asset('/')}}admin/assets/css/styles.css" rel="stylesheet" />
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                            <div class="card-body">
                                <form action="{{route('login')}}" method="POST">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input name="email" class="form-control" type="email" placeholder="name@example.com" />
                                        <label>Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input name="password" class="form-control" type="password" placeholder="Password" />
                                        <label>Password</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                        <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="password.html">Forgot Password?</a>
                                        <input type="submit" class="btn btn-sm btn-outline-success" value="Login">
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="{{route('register')}}">Need an account? Sign up!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('/')}}admin/assets/js/scripts.js"></script>
</body>
</html>
