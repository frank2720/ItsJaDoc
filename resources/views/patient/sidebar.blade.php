<!-- Profile Sidebar -->
<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
    <div class="profile-sidebar">
        <div class="widget-profile pro-widget-content">
            <div class="profile-info-widget">
                <a href="#" class="booking-doc-img">
                    <img src="assets/img/patients/patient.jpg" alt="User Image">
                </a>
                <div class="profile-det-info">
                    <h3>Richard Wilson</h3>
                    <div class="patient-details">
                        <h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
                        <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Nairobi, Kenya</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-widget">
            <nav class="dashboard-menu">
                <ul>
                    <li class="active">
                        <a href="">
                            <i class="fas fa-columns"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('patient.favourites')}}">
                            <i class="fas fa-bookmark"></i>
                            <span>Favourites</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('patient.chats')}}">
                            <i class="fas fa-comments"></i>
                            <span>Message</span>
                            <small class="unread-msg">23</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fas fa-user-cog"></i>
                            <span>Profile Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fas fa-lock"></i>
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</div>
<!-- / Profile Sidebar -->