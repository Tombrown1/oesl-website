@extends('admin.admin-dashboard')
@section('pageTitle', 'Dashboard')
@section('content')

  <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Admin Settings</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
          <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
          <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
        </div>
        
      </div>
    </div>
  {{-- Tab Menu --}}
    <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="true">Site Settings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#logo" role="tab" aria-controls="logo" aria-selected="false">Logo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#banner" role="tab" aria-controls="banner" aria-selected="false">Banner</a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link disabled" id="disabled-line-tab" data-bs-toggle="tab" href="#disabled" role="tab" aria-controls="disabled" aria-selected="false">Disabled</a>
      </li> --}}
    </ul>
  {{-- Setting Tab --}}
    <div class="tab-content mt-3" id="lineTabContent">
        <div class="tab-pane fade show active" id="setting" role="tabpanel" aria-labelledby="home-line-tab">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Site Setting</h6> <br>
                <form class="forms-sample" id="formcreatesetting"  action="{{route('add.setting')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="sitename" class="form-label">Sitename</label>
                    <input type="text" class="form-control" name="sitename" value="{{$allSettings->sitename}}" autocomplete="off" placeholder="sitename">
                  </div>
                  <div class="mb-3">
                    <label for="siteemail" class="form-label">Site Email</label>
                    <input type="email" class="form-control" name="siteemail" value="{{$allSettings->email}}" >
                  </div>
                  <div class="mb-3">
                    <label for="siteemail" class="form-label">Site Email 2</label>
                    <input type="email" class="form-control" name="siteemail2" value="{{$allSettings->email2}}" >
                  </div>
                  <div class="mb-3">
                    <label for="siteemail" class="form-label">Site Phone Number</label>
                    <input type="text" class="form-control" name="sitephone" value="{{$allSettings->phone}}">
                  </div>
                  <div class="mb-3">
                    <label for="siteemail" class="form-label">Site Phone Number</label>
                    <input type="text" class="form-control" name="sitephone2" value="{{$allSettings->phone2}}">
                  </div>
                  <div class="mb-3">
                    <label for="address" class="form-label">Business Address 1</label>
                    <textarea class="form-control" name="address" cols="10" rows="3">{{$allSettings->address}}</textarea>
                  </div>
                  <div class="mb-3">
                    <label for="address2" class="form-label">Business Address 2</label>
                    <textarea class="form-control" name="address2" cols="10" rows="3">{{$allSettings->address2}}</textarea>

                  </div>

                  <div class="mb-3">
                    <label for="facebook" class="form-label">Facebook Page</label>
                    <input type="text" class="form-control" name="facebook" value="{{$allSettings->facebook}}">
                  </div>
                  <div class="mb-3">
                    <label for="instagram" class="form-label">Instagram Page</label>
                    <input type="text" class="form-control" name="instagram" value="{{$allSettings->instagram}}">
                  </div>
                  <div class="mb-3">
                    <label for="linkedin" class="form-label">Linkedin Page</label>
                    <input type="text" class="form-control" name="linkedin" value="{{$allSettings->linkedin}}">
                  </div>
                  <button type="submit" class="btn btn-primary me-2 float-end">Save Changes</button>               
                </form>
  
              </div>
            </div>
          </div>
        </div>
  
        {{-- About Us Tab--}}
      <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="profile-line-tab">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
  
              <h6 class="card-title">About</h6> <br>
  
              <form class="forms-sample" id="updateabout" action="{{route('update.about')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="vision" class="form-label">Vision</label>
                   <textarea name="vision" class="form-control" cols="30" rows="3">{{$allSettings->vision}}</textarea>
                </div>
                <div class="mb-3">
                  <label for="mission" class="form-label">Mission</label>
                  <textarea name="mission" class="form-control" cols="30" rows="3">{{$allSettings->mission}}</textarea>
                </div>
                <div class="mb-3">
                  <label for="core_value" class="form-label">Core Value</label>
                   <textarea name="core_value" class="form-control" cols="30" rows="3">{{$allSettings->core_value}}</textarea>
                </div>

                <div class="mb-3">
                  <label for="about_image" class="form-label">About Image</label>
                  <input type="file" class="form-control" name="about_image" id="about_image">
              </div>
               <div class="mb-3">
                 <img id="showimage" class="thumbnail wd-200" src="{{(!empty($allSettings->about_image)) ? url('uploads/images/'.$allSettings->about_image) : url('uploads/no-image1.jpeg')}}" alt="">
              </div>
  
                <div class="mb-3">
                  <label for="about_us" class="form-label">About Us</label>
                   <textarea name="editor1" id="editor1"  class="form-control" cols="30" rows="10">{{$allSettings->about}}</textarea>
                </div>
                <script>
                  CKEDITOR.replace('editor1');
               </script>
               
                <button type="submit" class="btn btn-primary me-2 float-end">Save Changes</button>             
              </form>
            </div>
          </div>
        </div>
      </div>
  
      {{-- Admin Users Tab  --}}
      <div class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="contact-line-tab">
        <div class="card">       
          <div class="card-body">
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
             Add User
            </button>
            <h6 class="card-title">Admin Users</h6>
            
            <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th colspan="2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                        <td><a href="#" type="button" class="btn btn-inverse-warning">Edit</a>
                          <a href="#" type="button" class="btn btn-inverse-danger" id="delete">Delete</a>
                        </td>                    
                    </tr>
                    @foreach( $allUsers as $allUser)
                      <tr>
                        <td>{{$loop->index + 2}}</td>
                        <td>{{$allUser->name}}</td>
                        <td>{{$allUser->email}}</td>
                        <td>
                          <a href="#" type="button" class="btn btn-inverse-warning">Edit</a>
                          <a href="#" type="button" class="btn btn-inverse-danger">Delete</a>									
                        </td>
                      </tr>
                    @endforeach
                    
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Admin</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body">
          <form class="forms-sample">
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" autocomplete="off" placeholder="Name">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                  </div>
                  
                  <button type="submit" class="btn btn-primary me-2 float-end">Submit</button>
                 
                </form>
        </div>     
      </div>
    </div>
  </div>
      <!-- Modal End -->
  
      {{-- Logo --}}
      <div class="tab-pane fade" id="logo" role="tabpanel" aria-labelledby="contact-line-tab">
        <form class="forms-sample" action="{{route('update.logo')}}" method="post" enctype="multipart/form-data">
          @csrf  
           <div class="mb-3">
              <label for="logo" class="form-label">Photo</label>
              <input type="file" class="form-control" name="logo" id="logo">
          </div>
           <div class="mb-3">
             <img id="showimage" class="thumbnail wd-200" src="{{(!empty($allSettings->logo)) ? url('uploads/images/'.$allSettings->logo) : url('uploads/no-image1.jpeg')}}" alt="">
          </div>
          <button type="submit" class="btn btn-primary me-2">Save Changes</button>
      </form>       
      </div>
  
      {{-- Banner --}}
      <div class="tab-pane fade" id="banner" role="tabpanel" aria-labelledby="contact-line-tab">
        <form class="forms-sample" action="{{route('update.banner')}}" method="post" enctype="multipart/form-data">
          @csrf  
           <div class="mb-3">
              <label for="banner" class="form-label">Photo</label>
              <input type="file" class="form-control" name="banner" id="banner">
          </div>
           <div class="mb-3">
             <img id="showimage" class="thumbnail wd-200" src="{{(!empty($allSettings->banner)) ? url('uploads/images/'.$allSettings->banner) : url('uploads/no-image1.jpeg')}}" alt="">
          </div>
          <button type="submit" class="btn btn-primary me-2">Save Changes</button>
      </form>
      </div>
      
  
      {{-- <div class="tab-pane fade" id="disabled" role="tabpanel" aria-labelledby="disabled-line-tab">...</div> --}}
    </div>
  </div>
 

 
  <script type="text/javascript">
    $(document).ready(function(){
      
      $('#about_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showimage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

        $('#logo').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showimage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });


        $('#banner').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showimage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })

    })
</script>
 



@endsection