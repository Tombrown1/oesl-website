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


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h6 class="card-title">All Contact</h6>
            <div class="table-responsive">
                <table id="dataTableExample" class="table">
                <thead>
                    <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    {{-- <th>Description</th> --}}
                    <th>Action</th>		                       
                    </tr>
                </thead>
                <tbody>
                    
                      @forelse ($allcontact as $item)
                      <tr>
                        <th>{{$loop->index +1}}</th>
                        <td>{{$item->name}} </td>
                        <td>{{$item->email}} </td>
                        <td>{{$item->subject}} </td>
                        {{-- <td>{!! Str::limit($item->message, 50) !!}</td> --}}
                          <td>                           
                            {{-- <a  type="button" class="btn btn-inverse-warning" data-bs-toggle="modal" data-bs-target="#serviceModal{{$item->id}}">Edit</a> --}}
                            <a href="{{route('delete.contact', ['id' => $item->id])}}" type="button" class="btn btn-inverse-danger" onclick="return confirm('Are you sure you want to delete this item?');" id="delete">Delete</a>
                          </td>                    
                      </tr>

         


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