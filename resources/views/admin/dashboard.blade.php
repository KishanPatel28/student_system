@include('header')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-3 col-sm-6 col-xs-12" style="margin-top:10px;">
              <div class="info-box">
                  <span class="info-box-icon bg-green"><i class="fa fa-university"></i></span>
                  <div class="info-box-content">
                      <span class="info-box-text">Student</span>
                      <span class="info-box-number"><?php echo $count;?></span>
                  </div>
              </div>
          </div>
        </div> 
      </div>
    </div>
  </section>
</div>
@include('footer')