<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="{{asset('resources/asset/css/styles.css')}}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
      @include('admin.includes.header')
        <div id="layoutSidenav">
        @include('admin.includes.menu')  

        <div id="layoutSidenav_content">
         <div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        User List
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>User Role</th>
                        <th>Employee Status</th>
                        <th>User Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
   
                <tbody>
   
                      <tr>
                        <td>CT0001</td>
                        <td>Shamim Ahammed</td>
                        <td>Developer</td>
                        <td>User</td>
                        <td>Active</td>
                        <td>Active</td>
                        <td>Icon</td>
                    </tr>
      
                </tbody>
            </table>

        </div>
            
            
            
         @include('admin.includes.footer')
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('resources/asset/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('resources/asset/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset ('resources/asset/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{('resources/asset/demo/datatables-demo.js')}}"></script>
    </body>
</html>