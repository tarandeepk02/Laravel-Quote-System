<aside class="left-sidebar">
  <div class="scroll-sidebar">
    <nav class="sidebar-nav"> @php
      $permissions = Auth::guard('admin')->user()->permissions;
      @endphp
      <ul id="sidebarnav">
        <li>
          <div class="user-profile dropdown m-t-20">
            <div class="user-pic"> @if(isset(Auth::guard('admin')->user()->picture)) <img src="{{ url('storage/'.Auth::guard('admin')->user()->picture) }}" class="rounded-circle img-fluid"> @else <img src="{{ asset('admin_assets/images/users/1.jpg')}}" alt="users" class="rounded-circle img-fluid" /> @endif </div>
            <div class="user-content hide-menu m-t-10">
              <h5 class="m-b-10 user-name font-medium">{{ Auth::user()->name }}</h5>
              <a href="{{route('admin.profile')}}" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button"> <i class="ti-settings"></i> </a> <a href="{{route('admin.password')}}" title="Password" class="btn btn-circle btn-sm"> <i class="ti-lock"></i> </a> </div>
          </div>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('admin/home') }}"> <i class="icon-Car-Wheel"></i> <span class="hide-menu">Dashboard </span> </a> </li>
        @if(strpos($permissions, 'My_Profile')!== false || strpos($permissions, 'Change_Password')!== false)
        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"> <i class="icon-User"></i> <span class="hide-menu">My Account </span> </a>
          <ul aria-expanded="false" class="collapse first-level">
            @if(strpos($permissions, 'My_Profile')!== false)
            <li class="sidebar-item"> <a href="{{route('admin.profile')}}" class="sidebar-link"> <i class="icon-Profile"></i> <span class="hide-menu">My Profile </span> </a> </li>
            @endif
            @if(strpos($permissions, 'Change_Password')!== false)
            <li class="sidebar-item"> <a href="{{route('admin.password')}}" class="sidebar-link"> <i class="icon-Mail-Password"></i> <span class="hide-menu">Change Password </span> </a> </li>
            @endif
          </ul>
        </li>
        @endif
        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"> <i class="icon-Arrow-Inside"></i> <span class="hide-menu"> Faqs </span> </a>
          <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item"> <a href="{{ route('admin.faq.create') }}" class="sidebar-link"> <i class="icon-Books-2"></i> <span class="hide-menu">Add Faq </span> </a> </li>
            <li class="sidebar-item"> <a href="{{ route('admin.faq.index') }}" class="sidebar-link"> <i class="icon-Bookmark"></i> <span class="hide-menu">View Faqs</span> </a> </li>
          </ul>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin.setting.index') }}"> <i class="icon-Cursor"></i> <span class="hide-menu">Site Settings</span> </a> </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin.lead.index') }}"> <i class="icon-Wizard"></i> <span class="hide-menu">Leads</span> </a> </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin.feedback.index') }}"> <i class="icon-Loop"></i> <span class="hide-menu">Feedback</span> </a> </li>
        <li class="sidebar-item"> <a href="{{ url('/') }}" target="_blank" class="sidebar-link"> <i class="icon-Record"></i> <span class="hide-menu">Visit Website</span> </a> </li>
      </ul>
    </nav>
  </div>
</aside>
