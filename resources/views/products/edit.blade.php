<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Rhythm Admin - Dashboard  General Form Elements </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('css/vendors_css.css')}}">

	<!-- Style-->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/skin_color.css')}}">

</head>

<body class="hold-transition light-skin sidebar-mini theme-success fixed">

<div class="wrapper">
	<div id="loader"></div>

  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">
		<!-- Logo -->
		<a href="index.html" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-50">
			  <span class="light-logo"><img src="{{asset('')}}../images/logo-letter.png" alt="logo"></span>
			  <span class="dark-logo"><img src="../images/logo-letter.png" alt="logo"></span>
		  </div>
		  <div class="logo-lg">
			  <span class="light-logo"><img src="{{asset('../images/logo-dark-text.png')}}" alt="logo"></span>
			  <span class="dark-logo"><img src="{{asset('../images/logo-light-text.png')}}" alt="logo"></span>
		  </div>
		</a>
	</div>
    @include('layouts.sidebar')

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
					<i data-feather="align-left"></i>
			    </a>
			</li>
			<li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">


							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i data-feather="search"></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li>
		</ul>
	  </div>

      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
			<li class="btn-group nav-item d-lg-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-warning-light" title="Full Screen">
					<i data-feather="maximize"></i>
			    </a>
			</li>
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light dropdown-toggle btn-info-light" data-bs-toggle="dropdown" title="Notifications">
			  <i data-feather="bell"></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>

          <!-- Control Sidebar Toggle Button -->
          <li class="btn-group nav-item">
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect full-screen waves-light btn-danger-light">
			  	<i data-feather="settings"></i>
			  </a>
          </li>

	      <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent py-0 no-shadow" data-bs-toggle="dropdown" title="User">
				<div class="d-flex pt-5">
					<div class="text-end me-10">
						<p class="pt-5 fs-14 mb-0 fw-700 text-primary">PIYUSH D</p>
						<small class="fs-10 mb-0 text-uppercase text-mute">Admin</small>
					</div>
					<img src="{{asset('images/piu.jpg.jfif')}}" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
				</div>
            </a>
            <ul class="dropdown-menu animated flipInX">
              <li class="user-body">
				 <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Profile</a>
				 <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i> My Wallet</a>
				 <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Settings</a>
				 <div class="dropdown-divider"></div>
				 <a class="dropdown-item" href="#"><i class="ti-lock text-muted me-2"></i> Logout</a>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>
 )



  <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
		<div class="help-bt">
			<a href="tel:108" class="d-flex align-items-center">
				<div class="bg-danger rounded10 h-50 w-50 l-h-50 text-center me-15">
					<i data-feather="mic"></i>
				</div>
				<h4 class="mb-0">Emergency<br>help</h4>
			</a>
		</div>
        	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">
			  <!-- sidebar menu-->
              <li>
                <li class="treeview">
                    <li><a href="{{route('dashboard')}}"><i data-feather="monitor"></i><span>Dashboard</span></a></li>
                    <li class="treeview">
                        <a href="#">
                          <i data-feather="users"></i>
                          <span>Users</span>
                          <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{route('users.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add product</a></li>
                          <li><a href="{{route('users.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage product</a></li>
                        </ul>
                      </li>
                      <li class="treeview">
                        <a href="#">
                          <i data-feather="anchor"></i>
                          <span>Products</span>
                          <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{route('products.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add user</a></li>
                          <li><a href="{{route('products.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage Details</a></li>
                        </ul>
                      </li>

            </div>
          </div>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">


					<div class="d-inline-block align-items-center">
                        @if(session()->has('msg'))
                        <div class="alert alert-success">
                        {{ session()->get('msg') }}
                        @endif
							{{-- <ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li> --}}
								{{-- <li class="breadcrumb-item" aria-current="page">Forms</li> --}}

							</ol>
						</nav>
					</div>
				</div>

			</div>
		</div>
		<!-- Main content -->
		<section class="content">
			<div class="row">

				<div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Add Product</h4>

						</div>
						<!-- /.box-header -->

						 <form action="{{route('products.store')}}" method="POST">
                         @csrf
                            @if($errors->any())
							<div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors-> all() as $error )
                                    <li> {{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
								<h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Add Product</h4>

								<hr class="my-15">
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Name</label>
									  <input type="text" class="form-control" name="name" placeholder=" Name" value={{old('name')}}>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Description</label>
									  <input type="text" class="form-control" name="description" placeholder="description" value={{old('description')}}>
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Price</label>
									  <input type="text" class="form-control" name="Price" placeholder="Price" value={{old('Price')}}>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Discount</label>
									  <input type="text" class="form-control" name="Discount" placeholder="Discount" value={{old('Discount')}}>
									</div>
								  </div>
								</div>

                                <label class="form-label">Secret code</label>
								  <input type="text" class="form-control" name="Secret_code" placeholder="Secret_code"value={{old('Secret_code')}}><br>
                                  <label class="form-label">status</label>
                                  <input type="text" class="form-control" name="Status" placeholder="Status" value={{old('Status')}}><br>
                                  {{-- <input type="text" class="form-control" name="select_country" placeholder="select country"><br>
                                  <input type="text" class="form-control" placeholder="select state" name="select_state"><br>
                                  <input type="text" class="form-control" placeholder="select city" name="select_city"><br> --}}
                                  <button type="Submit" class="btn btn-success">Submit</button>

									</div>
                        </form> </div></div>
									</div>
								  </div>
								</div>

	<!-- Page Content overlay -->


	<!-- Vendor JS -->
	<script src="{{asset('js/vendors.min.js')}}"></script>
	<script src="{{asset('js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('../assets/icons/feather-icons/feather.min.js')}}"></script>

	<!-- Rhythm Admin App -->
	<script src="{{asset('js/template.js')}}"></script>


</body>
</html>
