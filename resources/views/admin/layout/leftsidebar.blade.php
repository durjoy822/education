<div class="leftside-menu">

    <!-- Logo Light -->
    <a href="{{route('dashboard')}}" class="logo logo-light">
                <span class="logo-lg">
                    <img src="{{asset('/')}}admin/assets/images/logo.png" alt="logo" height="22">
                </span>
        <span class="logo-sm">
                    <img src="{{asset('/')}}admin/assets/images/logo-sm.png" alt="small logo" height="22">
                </span>
    </a>

    <!-- Logo Dark -->
    <a href="{{route('dashboard')}}" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="{{asset('/')}}admin/assets/images/logo-dark.png" alt="dark logo" height="22">
                </span>
        <span class="logo-sm">
                    <img src="{{asset('/')}}admin/assets/images/logo-dark-sm.png" alt="small logo" height="22">
                </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button type="button" class="btn button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </button>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="{{asset('/')}}admin/assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                     class="rounded-circle shadow-sm">
                <span class="leftbar-user-name">Dominic Keller</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>
            <!---Dashboard---->
            <li class="side-nav-item">
                <a href="{{route('dashboard')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
            </li>
            <!---User Module--->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                   aria-controls="sidebarEcommerce" class="side-nav-link">
                   <i class="fa-solid fa-user-large"></i>
                    <span> User Module </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('role.add')}}">Add Role</a>
                        </li>
                        <li>
                            <a href="{{route('role.manage')}}">Manage Role</a>
                        </li>
                        <li>
                            <a href="{{route('user.add')}}">Add User</a>
                        </li>
                        <li>
                            <a href="{{route('user.manage')}}">Manage User</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!--Teacher module--->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#teachers" aria-expanded="false"
                   aria-controls="teachers" class="side-nav-link">
                   <i class="fa-solid fa-person-circle-check"></i>
                    <span> Teachers </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="teachers">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('teachers.create')}}">Teacher create</a>
                        </li>
                        <li>
                            <a href="{{route('teachers.index')}}">Teacher manage</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--Crouse  module--->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#crouse" aria-expanded="false"
                   aria-controls="crouse" class="side-nav-link">
                   <i class="fa-solid fa-shuffle"></i>
                    <span> Crouse </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="crouse">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('crouseCategory.index')}}"> Crouse Category</a>
                        </li>
                        <li>
                            <a href="{{route('crouses.index')}}"> Crouse </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--Blog  module--->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#blog" aria-expanded="false"
                   aria-controls="blog" class="side-nav-link">
                   <i class="fa-brands fa-hive"></i>
                    <span> Blog </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="blog">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href=""> Blog Category</a>
                        </li>
                        <li>
                            <a href=""> Blog sub category</a>
                        </li>
                        <li>
                            <a href=""> Blog </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
        <!--- End Sidemenu -->
        <div class="clearfix"></div>
    </div>
</div>
