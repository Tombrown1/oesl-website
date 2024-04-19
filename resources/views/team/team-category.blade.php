@extends('admin.admin-dashboard')
@section('pageTitle', 'Team Category')
@section('content')

<div class="page-content">

    <div class="row">
        <div class="col-lg-4 grid-margin ">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Team Category</h4>
                    <form class="forms-sample" action="{{route('add.team.category')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="cat_name" class="form-label">Category Name</label>
                          <input type="text" class="form-control" name="cat_name" id="cat_name" autocomplete="off" placeholder="Name">
                        </div>
                        <div class="mb-3">
                          <label for="description" class="form-label">Description</label>
                          <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary me-2 float-end">Submit</button>
                       
                      </form>
                </div>
            </div>
        </div>

        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                            <th>S/N</th>
                            <th>Title</th>
                            <th>Description</th>                           
                            <th>Action</th>		                       
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>WIRE LINE/SLICKLINE </td>
                                <td>In the oil and gas industry</td>
                                  <td><a href="#" type="button" class="btn btn-inverse-warning">Edit</a>
                                    <a href="#" type="button" class="btn btn-inverse-danger" id="delete">Delete</a>
                                  </td>                    
                              </tr>
                            @forelse($allteamcategorys as $item)
                            <tr>
                                    <td>{{$loop->index +2}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>
                                        <a  type="button" class="btn btn-inverse-warning" data-bs-toggle="modal" data-bs-target="#sliderModal{{$item->id}}">Edit</a>
                                       
                                        <a href="{{route('delete.service.category', $item->id)}}" type="button" class="btn btn-inverse-danger" id="delete">Delete</a>
                                      </td>
                                  </tr>
                                    <!-- Edit Modal -->
        <div class="modal fade" id="sliderModal{{$item->id}}" tabindex="-1" aria-labelledby="serviceCatModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="sliderModalLabel">Edit Team Category </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body ">
                <form class="forms-sample" action="{{route('update.team.category', ['id' => $item->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf

                        <input type="hidden" name="id" value="{{$item->id}}">
                        <div class="mb-3">
                            <label for="cat_name" class="form-label">Title</label>
                            <input type="text" class="form-control" name="cat_name" value="{{$item->name}}" autocomplete="off" placeholder="Title">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" cols="10" rows="3">{{$item->description}}</textarea>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-danger" data-bs-dismiss="modal">Close</a>
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

@endsection