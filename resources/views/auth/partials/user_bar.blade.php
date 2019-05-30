<div class="kt-header__topbar-item kt-header__topbar-item--user">
    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
        <div class="kt-header__topbar-user">
            <span class="kt-header__topbar-welcome kt-hidden-mobile">Witaj,</span> {{ Auth::user() -> name }} <span class="kt-header__topbar-username kt-hidden-mobile"></span>
            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
            <span class="kt-badge kt-badge--username kt-badge--unified-brand kt-badge--lg kt-badge--rounded kt-badge--bold">{{ mb_substr(Auth::user() -> name, 0, 1, "UTF-8") }}</span>
        </div>
    </div>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">
        <!--begin: Head -->
        {{--<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(/metronic/assets/media/misc/bg-1.jpg)">
            <div class="kt-user-card__avatar">
                <img class="kt-hidden" alt="Pic" src="/metronic/assets/media/users/300_25.jpg" />
                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-light">{{ mb_substr(Auth::user() -> name, 0, 1, "UTF-8") }} </span>
            </div>
            <div class="kt-user-card__name"> {{ Auth::user() -> name }}  </div>
        </div>--}}
        <!--end: Head -->
        <!--begin: Navigation -->
        <div class="kt-notification">
            <div class="kt-notification__custom">
                <a class="btn btn-label btn-label-dark btn-sm btn-bold"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Wyloguj się
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        <!--end: Navigation -->
    </div>
</div>