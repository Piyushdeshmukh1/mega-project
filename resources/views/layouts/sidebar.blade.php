{{-- @include('layouts.sidebar') --}}

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
			  <ul class="sidebar-menu" data-widget="tree">
				<li class="treeview">
				  {{-- <a href="#"> --}}
					{{-- <i data-feather="monitor"></i>
					<span>Dashboard</span>
					<span class="pull-right-container"> --}}
					  {{-- <i class="fa fa-angle-right pull-right"></i> --}}
					</span>
				  </a>
				  <ul class="treeview-menu">

				  </ul>
				</li>
                <li class="treeview">
                    <li><a href="{{route('dashboard')}}"><i data-feather="monitor"></i><span>Dashboard</span></a></li>

                    {{-- <a href="{{route('users.dash')}}">
                      <i data-feather="users"></i>
                      <span>Dashboard</span> --}}
                      <span class="pull-right-container">
                        {{-- <i class="fa fa-angle-right pull-right"></i> --}}
                      </span>
                    </a>
                </li>
				{{-- <li>
				  <a href="{{route('users.dash')}}">
					<i data-feather="calendar"></i>
					<span>Dashboard</span>
				  </a>
				</li> --}}
				<li class="treeview">
				  <a href="#">
					<i data-feather="users"></i>
					<span>Users</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{route('users.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add user</a></li>
					<li><a href="{{route('users.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage user</a></li>
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
					<li><a href="{{route('products.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add product</a></li>
					<li><a href="{{route('products.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage product</a></li>
				  </ul>
				</li>
                <li class="treeview">
                    <a href="#">
                      <i data-feather="aperture"></i>
                      <span>Roles</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{route('roles.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add role</a></li>
                      <li><a href="{{route('roles.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage role</a></li>
                    </ul>
                  </li>
                  <li class="treeview">
                    <a href="#">
                      <i data-feather="box"></i>
                      <span>Secrets</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{route('secrets.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add secret</a></li>
                      <li><a href="{{route('secrets.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage secret</a></li>
                    </ul>
                  </li>
                  <li class="treeview">
                    <a href="#">
                      <i data-feather="activity"></i>
                      <span>Orders</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{route('orders.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add order</a></li>
                      <li><a href="{{route('orders.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage order</a></li>
                    </ul>
                  </li>
                  <li class="treeview">
                    <a href="#">
                      <i data-feather="trello"></i>
                      <span>Transactions</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{route('transactions.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add transaction</a></li>
                       <li><a href="{{route('transactions.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage transaction</a></li>
                    </ul>
                  </li>
                  <li class="treeview">
                    <a href="#">
                      <i data-feather="trello"></i>
                      <span>Category</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{route('category.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Category</a></li>
                       <li><a href="{{route('category.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage Categories</a></li>
                    </ul>
                  </li>
                  <li class="treeview">
                    <a href="#">
                      <i data-feather="trello"></i>
                      <span>Post</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                       <li><a href="{{route('post.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Post</a></li>
                       <li><a href="{{route('post.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage Posts</a></li>
                    </ul>
                  </li>

                    {{-- <ul class="treeview-menu">
                      <li><a href="{{route('transactions.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Name</a></li>
                       <li><a href="{{route('transactions.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Status</a></li>
                    </ul>
                  </li> --}}
    </section>
</aside>
