<div class="left-sidebar">
  <div class="left-sidebar-header">
    <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
      <span></span>
    </div>
  </div>

  <div id="left-nav" class="nano">
    <div class="nano-content">
      <nav>
        <ul class="nav nav-left-lines" id="main-nav">
          <!--HOME-->
          <li class="{{ Request::routeIs('admin.home') ? 'active-item':'' }}"><a href="{{ route('admin.home') }}"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
          <!--CATEGORIES-->
          <li class="has-child-item close-item {{ request()->is('admin/user/*') ? 'open-item':'' }}">
            <a><i class="fa fa-list" aria-hidden="true"></i><span>Chat History</span></a>
            <ul class="nav child-nav level-1">
              <li class="{{ Request::routeIs('userHistory') ? 'active-item':'' }}"><a href="{{ route('userHistory') }}">History Lists</a></li>
            </ul>
          </li>

          <li class="has-child-item close-item {{ request()->is('admin/userlist/*') ? 'open-item':'' }}">
            <a><i class="fa fa-list" aria-hidden="true"></i><span>Manage User</span></a>
            <ul class="nav child-nav level-1">
              <li class="{{ Request::routeIs('manageUserHistory') ? 'active-item':'' }}"><a href="{{ route('manageUserHistory') }}">User Lists</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>
