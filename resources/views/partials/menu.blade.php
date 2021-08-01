
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show c-sidebar-show" id="sidebar">
    <div class="c-sidebar-brand">
        <h3>Hotel Dashboard</h3>
    </div>
    <ul class="c-sidebar-nav ps">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link  c-active" href="/home">
                Dashboard
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link  c-active" href="/bookingrecord">
                Booking Record
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link  c-active" href="/crudroom">
                CRUD Room
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link  c-active" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                Logout
            </a>
        </li>
    </ul>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

{{--  --}}
{{-- <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show c-sidebar-show" id="sidebar">

    <div class="c-sidebar-brand">
          <img class="c-sidebar-brand-full" src="http://127.0.0.1:8002/assets/brand/coreui-base-white.svg" width="118" height="46" alt="CoreUI Logo">
          <img class="c-sidebar-brand-minimized" src="http://127.0.0.1:8002/assets/brand/coreui-signet-white.svg" width="118" height="46" alt="CoreUI Logo">
      </div>
      <ul class="c-sidebar-nav ps">
                   
      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
  </div> --}}
{{--  --}}




