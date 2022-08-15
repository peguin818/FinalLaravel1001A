<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>T2LEGOShop - Product Edit</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/admin-bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/admin-style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>T2LEGOShop</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ Session::get('loginID') }}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ url('admin/') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{ url('admin/productList') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Products</a>
                    <a href="{{ url('admin/themeList') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Themes</a>
                    <a href="{{ url('admin/userList') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Users</a>
                    <a href="{{ url('admin/adminList') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Administrators</a>
                    <a href="{{ url('admin/orderList') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Orders</a>
                    <a href="{{ url('admin/orderDetailList') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Order Details</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ Session::get('loginID') }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="{{ url('adminSignout') }}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="contrainer" style="margin: top 20px;">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Product Edit</h1>
                                @if(Session::has('success'))
                                    <div class="alert alert-success" role ="alert">
                                        {{Session::get('success')}}
                                    </div>
                                @endif    
                                <form method="POST" action="{{url('admin/productUpdate')}}">
                                    @csrf
                                    <div class="md-3">
                                        <label for="id" class="form-label">ID: </label>
                                        <input type="text" class="form-control" name="id" placeholder="Enter Product ID here" value="{{$data->prdID}}" readonly>
                                    </div>
                                    <div class="md-3">
                                        <label for="name" class="form-label">Name: </label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Product Name here" value="{{$data->prdName}}">
                                        @error('name')
                                            <div class="alert alert-danger" role ="alert">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="md-3">
                                        <label for="price" class="form-label">Price: </label>
                                        <input type="number" class="form-control" name="price" placeholder="Enter Product Price here" value="{{$data->prdPrice}}">
                                        @error('price')
                                            <div class="alert alert-danger" role ="alert">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="md-3">
                                        <label for="detail" class="form-label">Details: </label>
                                        <textarea name="detail" id="detail" class="form-control" placeholder="Enter Product Details here">{{$data->prdDetail}}</textarea>
                                        @error('detail')
                                            <div class="alert alert-danger" role ="alert">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="md-3">
                                        <label for="image1" class="form-label">Image 1: </label>
                                        <input type="file" class="form-control" name="image1" value="{{old('image1')}}">
                                        @error('image1')
                                            <div class="alert alert-danger" role ="alert">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="md-3">
                                        <label for="image2" class="form-label">Image 2: </label>
                                        <input type="file" class="form-control" name="image2" value="{{old('image2')}}">
                                    </div>
                                    <div class="md-3">
                                        <label for="image3" class="form-label">Image 3: </label>
                                        <input type="file" class="form-control" name="image3" value="{{old('image3')}}">
                                    </div>
                                    <div class="md-3">
                                        <label for="theme" class="form-label">Theme: </label>
                                        <select class="form-control" name="theme" id="theme" require value="{{ $data->themeID }}">
                                            <option value="" disabled selected>Select a Theme</option>
                                            @foreach($theme as $row)
                                            <option value="{{$row->themeID}}"> 
                                                {{$row->themeName}} 
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('theme')
                                            <div class="alert alert-danger" role ="alert">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <br><br>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{url('admin/productList')}}" class="btn btn-danger">Back</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">T2LEGOShop</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/chart/chart.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/admin-main.js"></script>
</body>

</html>