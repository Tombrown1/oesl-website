<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
        OE<span>SL</span>
        <img src="{{asset('../backend/images/logo_new.png')}}" width="35" alt="">
        </a>
        <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Settings</li>
        <li class="nav-item">
            <a href="{{route('all.slider')}}" class="nav-link">
            <i class="link-icon" data-feather="message-square"></i>
            <span class="link-title">Sliders</span>
            </a>
        </li>
       
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#services" role="button" aria-expanded="false" aria-controls="services">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Manage Services</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="services">
            <ul class="nav sub-menu">
                <li class="nav-item">
                <a href="{{route('view.services')}}" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('all.services')}}" class="nav-link">All Service</a>
                    </li>
                <li class="nav-item">
                <a href="{{route('service.category')}}" class="nav-link">Service Category</a>
                </li>
               
            </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#project" role="button" aria-expanded="false" aria-controls="project">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Manage Project</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="project">
            <ul class="nav sub-menu">
                <li class="nav-item">
                <a href="{{route('all.project')}}" class="nav-link">All Project</a>
                </li>
                <li class="nav-item">
                <a href="{{route('project.category')}}" class="nav-link">Project Category</a>
                </li>
               
            </ul>
            </div>
        </li>
        
         <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#team" role="button" aria-expanded="false" aria-controls="team">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Manage Team</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="team">
            <ul class="nav sub-menu">
                <li class="nav-item">
                <a href="{{route('all.team')}}" class="nav-link">All Team Member</a>
                </li>
                <li class="nav-item">
                <a href="{{route('team.category')}}" class="nav-link">Team Category</a>
                </li>
               
            </ul>
            </div>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#sections" role="button" aria-expanded="false" aria-controls="sections">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Manage Sections</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="sections">
            <ul class="nav sub-menu">
                <li class="nav-item">
                <a href="#" class="nav-link">All Section</a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link">Section Category</a>
                </li>
               
            </ul>
            </div>
        </li> --}}
        <li class="nav-item">
            <a href="{{route('all.contact')}}" class="nav-link">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Contact</span>
            </a>
        </li>
       
     
       
        </ul>
    </div>
</nav>