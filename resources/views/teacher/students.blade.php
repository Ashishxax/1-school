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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title title-header" style="text-align: center;">Students</h4>
                                    <p class="card-category" style="text-align: center;"> You can montior & control
                                        Students Parameter</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="student">
                                            <thead class=" text-primary">
                                                <th>Name</th>
                                                <th>Class</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('teacher.footer')
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {  
          
          $('#student').DataTable
          ({
              "ajax": {
                "url": "search-student",
                "type": "GET"
              },
              "columnDefs": [
                    { "width": "30px", "targets": 0 },
                    { "width": "30px", "targets": 1 },
                    { "width": "70px", "targets": 2 }
                ],
              "columns": 
              [
                { "data": "first_name" },
                { "data": "class" },
                { "data": "action" }
              ]
          });
        });
    </script>
</body>