<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add User</title>
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
                        Add User
                    </div>
                    <div class="card-body">

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Employee Name:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control form-control-sm" name="employee_name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Designation:</label>
                                            <!--<div class="col-sm-5">
                                                <input type="text" class="form-control form-control-sm" name="designation">
                                            </div>
                                            -->
                                                <div class="input-group col-sm-5">
                                         
                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Designation</option>
                                                <option value="1">Hr Executive</option>
                                                <option value="2">Sr. Developer</option>
                                                <option value="3">Jr. Developer</option>
                                                <option value="4">SQA Engineer</option>

                                            </select>
                                        </div>
                                            
                                        </div>

                                        <div class="form-group row">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">User Role:</label>
                                            <!--<div class="col-sm-5">
                                                <input type="text" class="form-control form-control-sm" name="designation">
                                            </div>
                                            -->
                                                <div class="input-group col-sm-5">
                                         
                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>User Role</option>
                                                <option value="1">Admin</option>
                                                <option value="2">User</option>
                                           </select>
                                        </div>
                                            
                                        </div>

                                        <!--
                                        <div class="form-group row">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">User Role:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control form-control-sm" name="user_role">
                                            </div>
                                        </div>-->
                                        <div class="form-group row">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">phone Number:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control form-control-sm" name="phone_number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email Address:</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control form-control-sm" name="email_address">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Password:</label>
                                            <div class="col-sm-5">
                                                <input type="password" class="form-control form-control-sm" name="password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Confirm Password:</label>
                                            <div class="col-sm-5">
                                                <input type="password" class="form-control form-control-sm" name="email_address">
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"></label>
                                            <div class="col-sm-5">
                                                <input type="submit" name="btn">
                                            </div>
                                        </div>
                                    </form> 
                                </div> 
                            </div>
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