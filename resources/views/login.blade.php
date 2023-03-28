<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="margin-top:250px;">
            <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card">
                <div class="card-body flex">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6" style="padding:12px;margin-top: 50px;text-align: center;">
                            <h3>Student System</h3>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6" style="padding:12px;">
                            <form method="post" action="{{route('login-action')}}">
                                @csrf
                                <div>
                                    <dfsd>
                                </div>
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-lg-7" style="margin-top: 10px;">
                                        <input type="email" name="email" class="form-control" placeholder="User Name" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-lg-7" style="margin-top: 10px;">
                                        <input type="password" name="pass" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-12" style="margin-top:10px;">
                                        <input type="checkbox" name="remember"><span style="margin-left:10px;">Remember Me</span>
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-lg-7" style="margin-top: 10px;">
                                        <button type="submit" class="btn btn-secondary btn-lg btn-block">Login</button>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:10px;margin-left: 10px;">
                                    Student Create new account <a href="{{route('login-student')}}"> Sign Up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>