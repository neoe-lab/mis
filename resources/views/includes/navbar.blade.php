 <!-- Header -->
 <div class="header">

    <!-- Logo -->
    <div class="header-left">
        <a href="index.html" class="logo">
            <img src="assets/img/logo.png" width="40" height="40" alt="">
        </a>
    </div>
    <!-- /Logo -->

    <a id="toggle_btn" href="javascript:void(0);">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <!-- Header Title -->
    <div class="page-title-box">
        <h3>Hospital Imformation System</h3>
    </div>
    <!-- /Header Title -->

    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

    <!-- Header Menu -->
    <ul class="nav user-menu">
        <!-- Notifications -->
        <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">แจ้งเตือน</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>
                {{-- details --}}
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">
                                        <img alt="" src="assets/img/profiles/avatar-02.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">ทดสอบ</span> ระบบการแจ้งเตือน</p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="activities.html">View all Notifications</a>
                </div>
            </div>
        </li>
        <!-- /Notifications -->
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img"><img src={{ asset("assets/img/profiles/avatar-01.jpg")}} alt="">
                    <span class="status online"></span></span>
                <span>ผู้ใช้งานทั่วไป</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.html">My Profile</a>
                <a class="dropdown-item" href="settings.html">Settings</a>
                <a class="dropdown-item" href="login.html">Logout</a>
            </div>
        </li>
    </ul>
    <!-- /Header Menu -->

    <!-- Mobile Menu -->
    <div class="dropdown mobile-user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="settings.html">Settings</a>
            <a class="dropdown-item" href="login.html">Logout</a>
        </div>
    </div>
    <!-- /Mobile Menu -->

</div>
<!-- /Header -->

