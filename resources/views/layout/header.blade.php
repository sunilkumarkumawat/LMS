@php
    $getBranch = Helper::getBranches();
@endphp
<style>
    .selectDesign {
        padding: 5px 10px;
        background: transparent;
        border: 1px solid #a5a5a5;
        border-radius: 4px;
        font-size: 0.8rem;
        height: 25px;
    }

    .user-panel img {
        height: 2rem;
        width: 2rem;
        margin-top: 4px;
        border-radius: 50%;
        vertical-align: middle;
    }

    .user-panel {

        width: 2rem;
        margin-top: -5px;
        margin: 20px;
    }

    .img-circle {
        border-radius: 50%;
    }

    .flex_centerd_profile {
        display: flex;
        align-items: center;
    }

    .btn-head {
        font-size: 0.8rem !important;
    }

    .main-header {
        height: 50px;
    }
</style>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light p-0">
    <ul class="navbar-nav">
        <li class="nav-item ml-1">
            <a class="nav-link border border-0" href="javascript:void(0);" id="sidebarToggle"><i class="fa fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto flex_centerd_profile">

        <!-- Birthday Icon -->
        <!-- <li class="nav-item">
        <a class="nav-link" href="happy_birthday.html">
          <img width="40px" style="margin-top:-8px" src="images/birthday.webp" alt="Birthday">
        </a>
      </li> -->

        <!-- Search Icon -->
        <!-- <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#subModules">
          <i class="fa fa-search"></i>
        </a>
      </li> -->

        <!-- Student View Button -->
        <li class="nav-item">
            <a href="{{ url('studentView') }}">
                <button type="button" class="btn btn-primary btn-head">Student View</button>
            </a>
        </li>





        <!-- Language Switcher -->
        {{-- <li class="nav-item dropdown">
            <select class="selectDesign form-control-sm">
                <option selected>English</option>
                <option>Hindi</option>
                <option>French</option>
            </select>
        </li> --}}

        <!-- Branch Dropdown -->
        <li class="nav-item dropdown">
            <select class="selectDesign form-control-sm" id="headerBranchSelect">
                @if (!empty($getBranch))
                @if(Auth::user()->role_id == 1)
                 <option value='-1' >All</option>

                 @endif
                   @foreach ($getBranch as $item)
                        <option value='{{ $item->id }}' {{Auth::user()->selectedBranchId == $item->id ? 'selected' : '' }}>{{ $item->name ?? '' }}</option>
                    @endforeach
                @endif
            </select>
        </li>

        <!-- Session Dropdown -->
        {{-- <li class="nav-item dropdown">
            <select class="selectDesign form-control-sm">
                <option value="1">2023 - 2024</option>
                <option value="2">2024 - 2025</option>
                <option value="3">2025 - 2026</option>
            </select>
        </li> --}}

        <!-- Refresh -->
        {{-- <li class="nav-item dropdown">
            <a href="#">
                <button type="button" class="btn btn-success btn-head">Refresh!</button>
            </a>
        </li> --}}

        <!-- User Profile -->
        <li class="nav-item dropdown">
            <a class="user-panel  dropdown-toggle" data-toggle="dropdown" href="#">
                <img class="img-circle" src="{{ asset(env('IMAGE_SHOW_PATH') . 'default_user_image.jpg') }}"
                    alt="User Image">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-item border-bottom">
                    <div class="d-flex align-items-center">
                        <img class="mr-3" src="{{ asset(env('IMAGE_SHOW_PATH') . 'default_user_image.jpg') }}"
                            alt="User Image" width="50">
                        <div>
                            <h5 class="mb-0">John Doe</h5>
                            <p class="mb-0">Admin</p>
                        </div>
                    </div>
                </div>
                <a href="profile_edit.html" class="dropdown-item border-bottom">
                    <i class="fa fa-user-circle mr-2"></i> Profile Setting
                </a>
                <a href="change_password.html" class="dropdown-item border-bottom">
                    <i class="fa fa-key mr-2"></i> Change Password
                </a>
                <a href="logout.html" class="dropdown-item border-bottom text-danger">
                    <i class="fa fa-sign-out mr-2"></i> Log Out
                </a>
            </div>
        </li>
    </ul>
</nav>

<!-- Modal for Module Search -->
<div class="modal fade" id="subModules">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <input type="text" class="form-control" placeholder="Search Modules">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                No Data Found
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('sidebarToggle').addEventListener('click', function() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('d-none');
        sidebar.classList.toggle('d-block');
        sidebar.classList.toggle('position-absolute');
        sidebar.classList.toggle('w-auto');
        sidebar.style.zIndex = '1050'; // Keep above main content
    });
</script>
