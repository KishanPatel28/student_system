@include('header')
<div class="content-wrapper" style="background: white;">
  <!-- Content Header (Page header) -->
  <div class="content-header" style="margin:20px;">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit Student</h1>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->
  <section class="content" style="margin:20px;">
    <div class="container-fluid">
      <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Edit Student</h3>
        </div>
          <form action="{{route('update_student')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{$data->id}}">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php if(isset($data->name)){ echo $data->name; } ?>" required>
            </div>
            <?php if(isset($data->photo)){?>
              <div class="form-group">
              <label>Existing Photo:</label>
                <img style="margin-left: 20px; width:200px;" src="../../../storage/app/public/image/<?php echo $data->photo;?>">
              </div>
            <?php }?>
            <div class="form-group">
              <label for="exampleInputFile">Photo</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="photo" class="custom-file-input">
                  <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>DOB</label>
              <input type="date" name="dob" class="form-control" placeholder="Enter Designation" value="<?php if(isset($data->dob)){ echo $data->dob; } ?>" required>
            </div>
            <div class="form-group">
              <label>Address</label>
              <textarea name="address" class="form-control" rows="4" cols="50" placeholder="Enter Comment"><?php if(isset($data->address)){ ?>{!! $data->address !!} <?php } ?></textarea>
            </div>
            
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" value="<?php if(isset($data->email)){ echo $data->email; } ?>">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-secondary float-right">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
@include('footer')