@include('teacher.header')

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white"
      data-image="{{asset('assets/img/sidebar-1.jpg')}}">
      @include('teacher.sidebar')
    </div>

    <div class="main-panel">
      <!-- Navbar -->
      @include('teacher.navbar')
      <!-- End Navbar -->

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <h4 class="card-title" style="margin-left: 120px;">Time Table for 1st Standard </h4>
                      <p class="card-category" style="margin-left: 190px;">{{date("d M Y")}}</p>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table table-hover">
                        <thead class="text-warning">
                          <th>10-11</th>
                          <th>11-12</th>
                          <th>12-1</th>
                          <th>1-2</th>
                          <th>2-3</th>
                          <th>3-4</th>
                          <th>Prepard By</th>
                        </thead>
                        <tbody id="">
                          <tr>
                            <td>{{ucwords(@$data[0]['10-11'])}} </td>
                            <td>{{ucwords(@$data[0]['11-12'])}} </td>
                            <td>{{ucwords(@$data[0]['12-1'])}} </td>
                            <td>{{ucwords(@$data[0]['1-2'])}} </td>
                            <td>{{ucwords(@$data[0]['2-3'])}} </td>
                            <td>{{ucwords(@$data[0]['3-4'])}} </td>
                            <td>1. </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title" style="margin-left: 120px;">Time Table for 2nd Standard </h4>
                  <p class="card-category" style="margin-left: 190px;">{{date("d M Y")}}</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>10-11</th>
                      <th>11-12</th>
                      <th>12-1</th>
                      <th>1-2</th>
                      <th>2-3</th>
                      <th>3-4</th>
                      <th>Prepard By</th>
                    </thead>
                    <tbody id="last5Transaction">
                      <tr>
                        <td>{{ucwords(@$data[1]['10-11'])}} </td>
                        <td>{{ucwords(@$data[1]['11-12'])}} </td>
                        <td>{{ucwords(@$data[1]['12-1'])}} </td>
                        <td>{{ucwords(@$data[1]['1-2'])}} </td>
                        <td>{{ucwords(@$data[1]['2-3'])}} </td>
                        <td>{{ucwords(@$data[1]['3-4'])}} </td>
                        <td>1. </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div><!--  For 3rd & 4th Standard -->
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header card-header-tabs card-header-primary" style=" background: #47bc96;">
                <div class="nav-tabs-navigation">
                  <div class="nav-tabs-wrapper">
                    <h4 class="card-title" style="margin-left: 120px;">Time Table for 3rd Standard </h4>
                    <p class="card-category" style="margin-left: 190px;">{{date("d M Y")}}</p>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="profile">
                    <table class="table table-hover">
                      <thead class="text-warning">
                        <th>10-11</th>
                        <th>11-12</th>
                        <th>12-1</th>
                        <th>1-2</th>
                        <th>2-3</th>
                        <th>3-4</th>
                        <th>Prepard By</th>
                      </thead>
                      <tbody id="">
                        <tr>
                          <td>{{ucwords(@$data[2]['10-11'])}} </td>
                          <td>{{ucwords(@$data[2]['11-12'])}} </td>
                          <td>{{ucwords(@$data[2]['12-1'])}} </td>
                          <td>{{ucwords(@$data[2]['1-2'])}} </td>
                          <td>{{ucwords(@$data[2]['2-3'])}} </td>
                          <td>{{ucwords(@$data[2]['3-4'])}} </td>
                          <td>1. </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header card-header-warning" style=" background: purple">
                <h4 class="card-title" style="margin-left: 120px;">Time Table for 4th Standard </h4>
                <p class="card-category" style="margin-left: 190px;">{{date("d M Y")}}</p>
              </div>
              <div class="card-body table-responsive">
                <table class="table table-hover">
                  <thead class="text-warning">
                    <th>10-11</th>
                    <th>11-12</th>
                    <th>12-1</th>
                    <th>1-2</th>
                    <th>2-3</th>
                    <th>3-4</th>
                    <th>Prepard By</th>
                  </thead>
                  <tbody id="last5Transaction">
                    <tr>
                      <td>{{ucwords(@$data[3]['10-11'])}} </td>
                      <td>{{ucwords(@$data[3]['11-12'])}} </td>
                      <td>{{ucwords(@$data[3]['12-1'])}} </td>
                      <td>{{ucwords(@$data[3]['1-2'])}} </td>
                      <td>{{ucwords(@$data[3]['2-3'])}} </td>
                      <td>{{ucwords(@$data[3]['3-4'])}} </td>
                      <td>1. </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- For 5th & 6th Standard !-->
          <div class="col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header card-header-tabs card-header-primary" style=" background: brown">
                <div class="nav-tabs-navigation">
                  <div class="nav-tabs-wrapper">
                    <h4 class="card-title" style="margin-left: 120px;">Time Table for 5th Standard </h4>
                    <p class="card-category" style="margin-left: 190px;">{{date("d M Y")}}</p>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="profile">
                    <table class="table table-hover">
                      <thead class="text-warning">
                        <th>10-11</th>
                        <th>11-12</th>
                        <th>12-1</th>
                        <th>1-2</th>
                        <th>2-3</th>
                        <th>3-4</th>
                        <th>Prepard By</th>
                      </thead>
                      <tbody id="">
                        <tr>
                          <td>{{ucwords(@$data[4]['10-11'])}} </td>
                          <td>{{ucwords(@$data[4]['11-12'])}} </td>
                          <td>{{ucwords(@$data[4]['12-1'])}} </td>
                          <td>{{ucwords(@$data[4]['1-2'])}} </td>
                          <td>{{ucwords(@$data[4]['2-3'])}} </td>
                          <td>{{ucwords(@$data[4]['3-4'])}} </td>
                          <td>1. </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header card-header-warning" style=" background: black">
                <h4 class="card-title" style="margin-left: 120px;">Time Table for 6th Standard </h4>
                <p class="card-category" style="margin-left: 190px;">{{date("d M Y")}}</p>
              </div>
              <div class="card-body table-responsive">
                <table class="table table-hover">
                  <thead class="text-warning">
                    <th>10-11</th>
                    <th>11-12</th>
                    <th>12-1</th>
                    <th>1-2</th>
                    <th>2-3</th>
                    <th>3-4</th>
                    <th>Prepard By</th>
                  </thead>
                  <tbody id="last5Transaction">
                    <tr>
                      <td>{{ucwords(@$data[5]['10-11'])}} </td>
                      <td>{{ucwords(@$data[5]['11-12'])}} </td>
                      <td>{{ucwords(@$data[5]['12-1'])}} </td>
                      <td>{{ucwords(@$data[5]['1-2'])}} </td>
                      <td>{{ucwords(@$data[5]['2-3'])}} </td>
                      <td>{{ucwords(@$data[5]['3-4'])}} </td>
                      <td>1. </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    @include('teacher.footer')
  </div>
  </div>
</body>