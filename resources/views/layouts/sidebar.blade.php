<aside class="main-sidebar sidebar-dark-primary elevation-4">
    @if (Auth::user()->role_id == '2')
        <x-sidebar-admin />
    @elseif (Auth::user()->role_id == '1')
        <a href="#" class="brand-link">
            <img src="{{ !empty(Auth::user()->image) ? url('upload/images/' . Auth::user()->image) : url('upload/images/noimage.png') }} "
                alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8; height: 33px; width: 37px;">
            <span class="brand-text font-weight-light">Managment System</span>
        </a>
        @if (Auth::user()->flag_id == '1')
            <x-sidebar-user />
        @else

        @endif
    @endif
</aside>
