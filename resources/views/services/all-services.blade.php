@extends('admin.admin-dashboard')
@section('pageTitle', 'Services')
@section('content')

<div class="page-content">

    <nav class="page-breadcrumb float-end">
        <ol class="breadcrumb">
            <button type="button" class="btn btn-inverse-info float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                New Service
               </button>
        </ol>
    </nav>
<br><br><br><br>
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Service</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body ">
          <form class="forms-sample" action="{{route('add.services')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Service Category</label>
                <select name="service_cat_id" class="form-control" id="">
                    <option value="">Select Category</option>
                    @foreach($services_cat as $item){
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    }
                    @endforeach
                </select>
            </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Title</label>
                    <input type="text" class="form-control" name="name" id="name" autocomplete="off" placeholder="Title">
                </div>

                <div class="mb-3">
                  <label for="image" class="form-label">Image</label>
                  <input type="file" class="form-control" name="image" id="image">
              </div>

                  <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                     <textarea name="editor1" id="editor1"  class="form-control" cols="10" rows="3"></textarea>
                  </div>
                  <script>
                    CKEDITOR.replace('editor1');
                    </script>
                <div class="modal-footer">
                  <button type="submit"class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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
            <h6 class="card-title">All Services</h6>
            <div class="table-responsive">
                <table id="dataTableExample" class="table">
                <thead>
                    <tr>
                    <th>S/N</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Slug</th>
                    <th>Action</th>		                       
                    </tr>
                </thead>
                <tbody>
                    
                      @forelse ($all_services as $item)
                      <tr>
                        <th>{{$loop->index +1}}</th>
                        <td>{{$item->name}} </td>
                        <td>{!! Str::limit($item->description, 50) !!}</td>
                        <td><img src="{{asset('uploads/services/'.$item->image)}}" alt=""></td>
                        <td>{{$item->slug}}</td>
                          <td>                           
                            <a  type="button" class="btn btn-inverse-warning" data-bs-toggle="modal" data-bs-target="#serviceModal{{$item->id}}">Edit</a>
                            <a href="{{route('delete.services', $item->id)}}" type="button" class="btn btn-inverse-danger" id="delete">Delete</a>
                          </td>                    
                      </tr>

                      <!-- Modal -->
          <div class="modal fade" id="serviceModal{{$item->id}}" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Service</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body ">
                  <form class="forms-sample" action="{{route('update.services', ['id' => $item->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <div class="mb-3">
                        <label for="title" class="form-label">Service Category</label>
                        <select name="service_cat_id" class="form-control" value="{{$item->service_cat_id}}">
                            @foreach($services_cat as $item_cat){
                            <option value="{{$item_cat->id}}" {{$item->service_cat_id === $item_cat->id ? 'selected' : ''}}>{{$item_cat->name}}</option>
                            }
                            @endforeach
                        </select> 
                    </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Title</label>
                            <input type="text" class="form-control" name="name" value="{{$item->name}}">
                        </div>

                        <div class="mb-3">
                          <label for="image" class="form-label">Image</label>
                          <input type="file" class="form-control" name="image" id="image">
                      </div>

                          <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="editor1{{$item->id}}"  class="form-control" cols="10" rows="3">{{$item->description}}</textarea>
                          </div>
                          <script>
                            CKEDITOR.replace('editor1{{$item->id}}');
                            </script>
                        <div class="modal-footer">
                          <button type="submit"class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                          </div>
                        
                        </form>
                </div>     
              </div>
            </div>
          </div>
    <!-- Modal End -->


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

@endsection