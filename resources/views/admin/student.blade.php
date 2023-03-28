  @include('header')
  <div class="content-wrapper" style="background: white;">
  <!-- Content Header (Page header) -->
  <div class="content-header" style="margin:20px;">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Student List</h1>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->
  <section class="content">
      <div class="row" style="background: white;margin: 20px;">
        <div class="col-lg-12 table-responsive">
            <table id="example1" class="table admin_datatable table-bordered table-striped table-hover" style="width:100%;text-align: center;">
                <thead class="table-header">
                    <tr>
                        <th>Name</th>
                        <th>DOB</th>
                        <th>Photo</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                    <tr>
                        <td>{{$d->name}}</td>
                        <td>{{$d->dob}}</td>
                        <td>{{$d->photo}}</td>
                        <td>{{$d->address}}</td>
                        <td>{{$d->email}}</td>
                        <td>
                            <a href="{{route('edit_student',$d->id)}}"><i class="fas fa-pen"></i></a>
                            <a href="{{route('delete_student',$d->id)}}" style="margin-left:20px;"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table> 
        </div>
      </div>
  </section>
</div>
@include('footer')
    