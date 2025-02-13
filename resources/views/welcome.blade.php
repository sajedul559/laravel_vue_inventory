<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Inventory Vue</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">


    <!-- Custom fonts for this template-->
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->


    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">


</head>

<body id="page-top">

   
    <div id="app">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" id="leftbar" style="display: none" v-show="$route.path === '/' || $route.path === '/signup' || $route.path ==='/forget'  ? false : true ">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <router-link class="nav-link" to="/home">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></router-link>
                </li>
                <li class="nav-item  danger" style="background-color:red;">
                    <router-link class="nav-link" to="/pos">
                        <i class="fas fa-fw fa-tachometer-alt "></i>
                        <span class="text-white"> <b>POS</b></span></router-link>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                {{-- <!-- Heading -->
                <div class="sidebar-heading">
                    Interface
                </div> --}}

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#employee"
                        aria-expanded="true" aria-controls="employee">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Employe</span>
                    </a>
                    <div id="employee" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <router-link class="collapse-item" to="/store_employee">Add Employee</router-link>
                            <router-link class="collapse-item" to="/employee">All Employee</router-link>
                        </div>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link collapsed" to="#" data-toggle="collapse" data-target="#supllier"
                        aria-expanded="true" aria-controls="supllier">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Supplier</span>
                    </a>
                    <div id="supllier" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <router-link class="collapse-item" to="/store_supplier">Add Supplier</router-link>
                            <router-link class="collapse-item" to="/supplier">All Supplier</router-link>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" to="#" data-toggle="collapse" data-target="#customer"
                        aria-expanded="true" aria-controls="customer">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Customer</span>
                    </a>
                    <div id="customer" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <router-link class="collapse-item" to="/creatcustomer">Add Customer</router-link>
                            <router-link class="collapse-item" to="/customer">All Customer</router-link>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" to="#" data-toggle="collapse" data-target="#category"
                        aria-expanded="true" aria-controls="category">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Cateogies</span>
                    </a>
                    <div id="category" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <router-link class="collapse-item" to="/store_category">Add Category</router-link>
                            <router-link class="collapse-item" to="/category">All Category</router-link>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" to="#" data-toggle="collapse" data-target="#product"
                        aria-expanded="true" aria-controls="product">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Product</span>
                    </a>
                    <div id="product" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <router-link class="collapse-item" to="/store_product">Add Product</router-link>
                            <router-link class="collapse-item" to="/product">All Product</router-link>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" to="#" data-toggle="collapse" data-target="#expense"
                        aria-expanded="true" aria-controls="expense">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Expense</span>
                    </a>
                    <div id="expense" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <router-link class="collapse-item" to="/store_expense">Add Expense</router-link>
                            <router-link class="collapse-item" to="/expense">All Expense</router-link>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" to="#" data-toggle="collapse" data-target="#salary"
                        aria-expanded="true" aria-controls="salary">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Salary</span>
                    </a>
                    <div id="salary" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <router-link class="collapse-item" to="/given_salary">Pay Salary</router-link>
                            <router-link class="collapse-item" to="/allsalary">All Salary</router-link>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" to="#" data-toggle="collapse" data-target="#test"
                        aria-expanded="true" aria-controls="test">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Test</span>
                    </a>
                    <div id="test" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <router-link class="collapse-item" to="/store_test">Add Test</router-link>
                            <router-link class="collapse-item" to="/test">All Test</router-link>
                        </div>
                    </div>
                </li>
                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Utilities</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Utilities:</h6>
                            <a class="collapse-item" href="utilities-color.html">Colors</a>
                            <a class="collapse-item" href="utilities-border.html">Borders</a>
                            <a class="collapse-item" href="utilities-animation.html">Animations</a>
                            <a class="collapse-item" href="utilities-other.html">Other</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

              

                <!-- Nav Item - Pages Collapse Menu -->
                

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <router-link class="nav-link" to="/stock">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Stock</span></router-link>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" to="#" data-toggle="collapse" data-target="#order"
                        aria-expanded="true" aria-controls="order">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Orders</span>
                    </a>
                    <div id="order" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <router-link class="collapse-item" to="/order">Today Order</router-link>
                            <router-link class="collapse-item" to="/category">Search</router-link>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" to="#" data-toggle="collapse" data-target="#report"
                        aria-expanded="true" aria-controls="report">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Reports</span>
                    </a>
                    <div id="report" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <router-link class="collapse-item" to="/store_category">One</router-link>
                            <router-link class="collapse-item" to="/category">Two</router-link>
                        </div>
                    </div>
                </li>
                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Tables</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

                <!-- Sidebar Message -->
                <div class="sidebar-card d-none d-lg-flex">
                    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" id="topbar" style="display: none" v-show="$route.path === '/' || $route.path === '/signup' || $route.path ==='/forget' ? false : true ">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">3+</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Alerts Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 12, 2019</div>
                                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-donate text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 7, 2019</div>
                                            $290.29 has been deposited into your account!
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-warning">
                                                <i class="fas fa-exclamation-triangle text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 2, 2019</div>
                                            Spending Alert: We've noticed unusually high spending for your account.
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">7</span>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Message Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                                alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                                problem I've been having.</div>
                                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                                alt="...">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">I have the photos that you ordered last month, how
                                                would you like them sent to you?</div>
                                            <div class="small text-gray-500">Jae Chun · 1d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                                alt="...">
                                            <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Last month's report looks great, I am very happy with
                                                the progress so far, keep up the good work!</div>
                                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                                alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                                told me that people say this to all dogs, even if they aren't good...</div>
                                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                    <img class="img-profile rounded-circle"
                                        src="img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <router-link class="dropdown-item" to="/logout" data-toggle="modal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </router-link>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <router-view> </router-view>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

        </div>

    </div>

    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>

    <script>
        let token = localStorage.getItem('token');
        

        if(token){
            $("#topbar").css("display"," ");
            $("#leftbar").css("display"," ");


        }
    </script>
    <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>

     <!-- Page level plugins -->
     <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
     <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
 
     <!-- Page level custom scripts -->
     <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
    <!-- Page level plugins -->
    {{-- <script src="{{asset('backend/vendor/chart.js/Chart.min.js')}}"></script> --}}

    <!-- Page level custom scripts -->
    {{-- <script src="{{asset('backend/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('backend/js/demo/chart-pie-demo.js')}}"></script> --}}

</body>

</html>