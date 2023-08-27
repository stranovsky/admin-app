@auth
    <div class="dropdown ms-sm-3 header-item topbar-user">
        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center">
                <img class="rounded-circle header-profile-user" src="{{ asset('assets/auth/images/users/user-dummy-img.jpg')}}" alt="Header Avatar">
                <span class="text-start ms-xl-2">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">auth->user->username</span>
                    <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Founder</span>
                </span>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome {{auth->user->username}}!</h6>
            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
            <form class="dropdown-item" method="POST" action="./logout">
                @csrf
                <button type="submit">
                    <i class="fa-solid fa-door-closed">"logout"</i>
                </button>
            </form>
        </div>
    </div>

@else
<a class="dropdown-item" href="/login"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Login</span></a>
@endauth