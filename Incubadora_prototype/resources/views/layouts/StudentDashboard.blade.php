<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--Vista de compatibilidad - establece modo compatibilidad-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!--restaura el comportamiento anterior a Safari 9.0-->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.min.js" integrity="sha512-KZmyTq3PLx9EZl0RHShHQuXtrvdJ+m35tuOiwlcZfs/rE7NZv29ygNA8SFCkMXTnYZQK2OX0Gm2qKGfvWEtRXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <title>@yield("title")</title>
        @yield("script")
        <!--<title>INCUVALAB</title>-->

        <script src="https://kit.fontawesome.com/4e8f6a1b35.js" crossorigin="anonymous"></script>

        <!--Fontawesome-->
        <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">     https://fontawesome.com/v4/get-started/-->
        <!--Google Fonts API-->
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet"> <!--https://developers.google.com/fonts/docs/getting_started-->

        <!-- Custom styles-->
        <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}"> <!--Carpeta public-->

        <!-- Custom styles for this page -->
        <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
    </head>
    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">
    
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    
                <!-- Sidebar - HeadPresentation -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon">
                        <image src="{{ asset('images/univalle_logo.png') }}" style="height: 50px; width: 50px;"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">@yield("title")</div>
                </a>
    
                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-fw fa-solid fa-home"></i>
                        <span>Página Principal</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    OPCIONES
                </div>
    
                <!-- Collapse Students Gestion-->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForms"
                        aria-expanded="true" aria-controls="collapseForms">
                        <i class="fas fa-user"></i>
                        <span>Vista de formularios</span>
                    </a>
                    <div id="collapseForms" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Formularios:</h6>
                            <a class="collapse-item" href="#">Form 1</a>
                            <a class="collapse-item" href="#">Form 2</a>
                            <a class="collapse-item" href="#">Form 3</a>
                            <a class="collapse-item" href="#">Form 4</a>
                            <a class="collapse-item" href="#">Form 5</a>
                            <a class="collapse-item" href="#">Form 6</a>
                            <a class="collapse-item" href="#">Form 7</a>
                        
                        </div>
                    </div>
                </li>

               

                
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Nav Item - Progress -->
                <li class="nav-item">
                    <a class="nav-link" href="#.html">
                        <i class="fas fa-fw fa-chart-bar"></i>
                        <span>Vista de Progreso</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
    
                <!-- Main Content -->
                <div id="content">
    
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
    
                        <!-- Topbar Search -->
                        <!-- <form
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
                        </form> -->
    
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
    
                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                            </li>
    
                            <div class="topbar-divider d-none d-sm-block"></div>
    
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                    <img class="img-profile rounded-circle"
                                        src="{{ asset('images/profile.jpg') }}">
                                </a>

                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Mi Perfil
                                    </a>
                                
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Cerrar sesión
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <!-- End Topbar Navbar -->
    
                    </nav>
                    <!-- End of Topbar -->

                </div>
                <!-- /.container-fluid -->

                @yield("content")

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto ">
                        <div class="copyright text-center my-auto">
                            <span>Incuvalab | Univalle Cochabamba</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
    
            </div>
            <!-- End of Content Wrapper -->
    
        </div>
        <!-- End of Page Wrapper -->
    
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Deseas cerrar sesión?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Selecciona "Cerrar sesión" si quieres abandonar la cuenta actual.</div>
                    <div class="modal-footer">
                    <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">                 
                            <button class="btn btn-primary" type="button" data-dismiss="modal"> {{ __('Cerrar Session') }}</button>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Bootstrap core JavaScript-->
        @vite(['resources/js/jquery/jquery.min.js'])
        @vite(['resources/js/bootstrap/bootstrap.bundle.min.js'])
    
        <!-- Core plugin JavaScript-->
        @vite(['resources/js/jquery-easing/jquery.easing.min.js'])
    
        <!-- Custom scripts for all pages-->
        @vite(['resources/js/sb-admin-2.min.js'])
    
        <!-- Page level plugins -->
        @vite(['resources/js/datatables/jquery.dataTables.min.js'])
        @vite(['resources/js/datatables/dataTables.bootstrap4.min.js'])
    
        <!-- Page level custom scripts -->
        <!-- @vite(['resources/js/demo/datatables-demo.js']) -->
    </body>
</html>