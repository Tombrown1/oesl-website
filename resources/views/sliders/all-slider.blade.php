@extends('admin.admin-dashboard')
@section('pageTitle', 'Sliders')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content"> 
    
    <nav class="page-breadcrumb float-end">
            <ol class="breadcrumb">
                <!-- Button trigger modal -->
             <button type="button" class="btn btn-inverse-info float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Slide
               </button>
            </ol>
        </nav>
        <br><br><br><br>
      <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Slide</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body ">
          <form class="forms-sample" action="{{route('add.slider')}}" method="POST" enctype="multipart/form-data">
            @csrf
                  <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="name" autocomplete="off" placeholder="Title">
                  </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="" cols="10" rows="3"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="mb-3">
                  <img id="showimage" class="rounded-circle wd-100" src="{{(!empty($item->image)) ? url('uploads/Slider/'.$item->image) : url('backend/uploads/no-image.jpeg')}}" alt="">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>                
                 
                </form>
        </div>     
      </div>
    </div>
  </div>
      <!-- Modal End -->
 
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h6 class="card-title">All Slides</h6>
            <div class="table-responsive">
                <table id="dataTableExample" class="table">
                <thead>
                    <tr>
                    <th>S/N</th>
                    {{-- <th>Title</th>                   --}}
                    <th>Image</th>
                    <th>Action</th>		                       
                    </tr>
                </thead>
                <tbody>
                    
                    @forelse ($allsliders as $item)
                    <tr>
                        <td>{{$loop->index +1 }}</td>
                        {{-- <td>{{$item->title}}</td> --}}
                        <td><img src="{{asset('uploads/slider/'.$item->image)}}" alt=""></td>
                        <td><a type="button" class="btn btn-inverse-warning" data-bs-toggle="modal" data-bs-target="#sliderModal{{$item->id}}">Edit</a>
                            {{-- <a href="{{route('delete.slider', $item->id )}}" type="button" class="btn btn-inverse-danger" id="delete">Delete</a> --}}
                          </td> 
                    </tr>
                          <!-- Edit Modal -->
  <div class="modal fade" id="sliderModal{{$item->id}}" tabindex="-1" aria-labelledby="sliderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sliderModalLabel">Edit Slide</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body ">
          <form class="forms-sample" action="{{route('update.slider', ['id' =>$item->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
                  <input type="hidden" name="id" value="{{$item->id}}">
                  <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$item->title}}" autocomplete="off" placeholder="Title">
                  </div>
                  {{-- <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" cols="10" rows="3">{{$item->description}}</textarea>
                  </div> --}}
                  <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="mb-3">
                  <img id="showimage" class="rounded-circle wd-100" src="{{(!empty($item->image)) ? url('uploads/Slider/'.$item->image) : url('backend/uploads/no-image.jpeg')}}" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update changes</button>
                  </div>                
                 
                </form>
        </div>     
      </div>
    </div>
  </div>
      <!-- Edit Modal End -->
                    @empty
                        
                    @endforelse
                    
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showimage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    })
</script>


@endsection