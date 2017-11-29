<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}} ">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css')}} ">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js "></script>
	<script type="text/javascript">
		var BaseUrl = '{{ url('') }}';
	</script>


	<script type="text/javascript" src="{{ url('') }}/js/khai_bao.js"></script>

	<script type="text/javascript" src="{{ url('') }}/js/lop.js"></script>	

	<script type="text/javascript" src="{{ url('') }}/js/index.js"></script>

	<script type="text/javascript" src="{{ url('') }}/js/route.js"></script>

	<script type="text/javascript" src="{{ url('') }}/js/index_directive.js"></script>

	<script type="text/javascript" src="{{ url('') }}/js/jquery-3.1.1.min.js"></script>
	
	<script type="text/javascript" src="{{ url('') }}/js/bootstrap.min.js"></script>
	{{-- 	<script type="text/javascript" src="{{ asset('js/paging.js')}}"></script> --}}

	<meta charset="utf-8">
	<title></title>

</head>
<body ng-app="myApp" >

	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Title</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#!sv">Sinh Viên</a></li>
					<li><a href="#!lop">Lớp Học</a></li>
					<li><a href="#!test">test</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a></li>
							<li>
								<a href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								Logout
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
						
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>



<div ng-view></div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>	


</body>
</html>