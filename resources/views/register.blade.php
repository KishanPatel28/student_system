<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- jQuery -->
<script src="{{asset('public/assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="{{asset('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('public/assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('public/assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('public/assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('public/assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('public/assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{asset('public/assets/dist/js/demo.js')}}"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/assets/dist/js/pages/dashboard.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <body>
        <div class="container" style="margin-top:50px;">
            <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card">
                <div class="card-body flex">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12" style="padding:12px;text-align: center;">
                            <form method="post" action="{{route('login-student')}}">
                                @csrf
                                <div class="row" style="text-align: center;">
                                    <div class="col-md-12">
                                    <h3>Register</h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3">
                                        <label>Name:</label>
                                    </div>
                                    <div class="col-md-3" style="text-align: left;">
                                        <input type="text" name="name" placeholder="Enter the name" required class="form-control">
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3">
                                        <label>Date of birth:</label>
                                    </div>
                                    <div class="col-md-3" style="text-align: left;">
                                        <input type="date" name="dob" placeholder="Enter the date" required class="form-control">
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3">
                                        <label>Address:</label>
                                    </div>
                                    <div class="col-md-3" style="text-align: left;">
                                        <textarea cols="50" rows="5" name="address" placeholder="Enter the address" required></textarea>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3">
                                        <label>Photo:</label>
                                    </div>
                                    <div class="col-md-3" style="text-align: left;">
                                        <input type="file" name="file" required>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3">
                                        <label>Email:</label>
                                    </div>
                                    <div class="col-md-3" style="text-align: left;">
                                        <input type="email" name="email" placeholder="Enter the mail" required class="form-control">
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3">
                                        <label>Password:</label>
                                    </div>
                                    <div class="col-md-3" style="text-align: left;">
                                        <input type="password" name="password" placeholder="Enter the password" required class="form-control">
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" id="login" class="btn-secondary">Cancel</button>
                                        <input type="submit" name="save" class="btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#login").click(function(){
                window.location.href = "/student_system/login";
            })
        })
    </script>
</html>