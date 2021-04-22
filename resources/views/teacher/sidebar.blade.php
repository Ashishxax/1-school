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
        <i class="material-icons">description</i>
        <p>Daily Sheet</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" id="" href="{{ route('teacher.today_schedule') }}">
        <i class="material-icons">today</i>
        <p>Today Schedule</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" id="" href="{{ route('students') }}">
        <i class="material-icons">people</i>
        <p>Students</p>
      </a>
    </li>
  </ul>
</div>

<script>
  var button = document.querySelector(".nav-item");

button.addEventListener("click", function(e) {
   this.classList.toggle("is-active"); 
});
</script>