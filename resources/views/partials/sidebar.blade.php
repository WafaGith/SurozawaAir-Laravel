<div class="sidebar">
  <div class="logo-details">
    <div class="logo_name">SurozawaAir</div>
    <i class='bx bx-menu' id="btn"></i>
  </div>
  <ul class="nav-list">
    <li>
      <a href="{{route('dashboard')}}">
        <i class='bx bx-grid-alt'></i>
        <span class="links_name">Dashboard</span>
      </a>
      <span class="tooltip">Dashboard</span>
    </li>
    <li>
      <a href="{{route('schedules.index')}}">
        <i class='bx bx-calendar'></i>
        <span class="links_name">flight schedule</span>
      </a>
      <span class="tooltip">flight schedule</span>
    </li>
    <li>
      <a href="{{route('planes.index')}}">
        <i class='bx bxs-plane'></i>
        <span class="links_name">Aircraft Data</span>
      </a>
      <span class="tooltip">Aircraft Data</span>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-log-out'></i>
        <span class="links_name">LogOut</span>
      </a>
      <span class="tooltip">LogOut</span>
    </li>
  </ul>
</div>