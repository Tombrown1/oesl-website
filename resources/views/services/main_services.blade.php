@extends('admin.admin-dashboard')
@section('pageTitle', 'Services')
@section('content')

<div class="page-content">

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">

            <h6 class="card-title">Services Index Content</h6> <br>

            <form class="forms-sample" id="updateabout" action="{{route('update.main.services')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                 <textarea name="title" class="form-control" cols="30" rows="3">{{$viewService->title}}</textarea>
              </div>
             
            <div class="mb-3">
                <label for="subtitle" class="form-label">Sub Title</label>
                 <textarea name="subtitle" class="form-control" cols="30" rows="3">{{$viewService->subtitle}}</textarea>
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">Service Image</label>
                <input type="file" class="form-control" name="image" id="service_image">
            </div>
             <div class="mb-3">
               <img id="showimage" class="thumbnail wd-200" src="{{(!empty($viewService->image)) ? url('uploads/services/'.$viewService->image) : url('uploads/no-image1.jpeg')}}" alt="">
            </div>

              <div class="mb-3">
                <label for="about_us" class="form-label">Service Description</label>
                 <textarea name="editor1" id="editor1"  class="form-control" cols="30" rows="10">{{$viewService->description}}</textarea>
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

<script type="text/javascript">
    $(document).ready(function(){
      
      $('#service_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showimage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

      
    })
</script>

@endsection