<div class="sidebar-wrapper">
  <ul class="nav">
    <li class="nav-item ">
      <a class="nav-link" id="dashboard" href="{{ route('teacher.dashboard') }}" onclick="testClick(this.id);">
        <i class="material-icons">dashboard</i>
        <p>Dashboard</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" id="" href="{{ route('teacher.daily_sheet') }}">
        <i class="material-icons">language</i>
        <p>Daily Sheet</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" id="" href="{{ route('teacher.today_schedule') }}">
        <i class="material-icons">language</i>
        <p>Today's Schedule</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" id="" href="{{ route('students') }}">
        <i class="material-icons">language</i>
        <p>Students</p>
      </a>
    </li>
  </ul>
</div>


var button = document.querySelector(".nav-item");

button.addEventListener("click", function(e) {
   this.classList.toggle("is-active"); 
});