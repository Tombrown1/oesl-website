@extends('admin.admin-dashboard')
@section('pageTitle', 'Admin Profile')
@section('content')

    <div class="page-content">
        <div class="row profile-body">
        <!-- left wrapper start -->
        <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card rounded">
            <div class="card-body">               
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div>
                        <img class="wd-100 rounded-circle" src="{{ (!empty($profileData->photo)) ? url('uploads/profile/'.$profileData->photo) : url('backend/uploads/no-image.jpeg')}}" alt="profile">
                        <span class="h4 ms-3">{{$profileData->username}}</span>
                    </div>
                </div>              
                <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                <p class="text-muted">{{$profileData->name}}</p>
                </div>
                <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                <p class="text-muted">{{$profileData->email}}</p>
                </div>
                <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                <p class="text-muted">{{$profileData->phone}}</p>
                </div>
                <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                <p class="text-muted">{{$profileData->address}}</p>
                </div>
                <div class="mt-3 d-flex social-links">
                <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="github"></i>
                </a>
                <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="twitter"></i>
                </a>
                <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="instagram"></i>
                </a>
                </div>
            </div>
            </div>
        </div>
        <!-- left wrapper end -->
        
        <!-- right basic form start -->
        
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Change Password</h6>
                        <form class="forms-sample" action="{{route('update.password.profile')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="password" class="form-label">Old Password</label>
                                <input type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" id="old_password">
                                @error('old_password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">New Password</label>
                                <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" id="new_password">
                                @error('new_password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                             <div class="mb-3">
                                <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror" name="new_password_confirmation" id="new_password_confirmation">
                                 @error('new_password_confirmation')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div> 
                            <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        <!-- right basic form wrapper end -->
        </div>

    </div>


@endsection