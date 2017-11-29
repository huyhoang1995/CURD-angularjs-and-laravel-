<!DOCTYPE html>
<html>
<head>
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}} ">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css')}} ">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css')}} ">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js "></script>

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script> --}}

	<meta charset="utf-8">
	<title></title>

</head>
<body ng-app="">
	<div class="container">

		<center><h1>Thông tin lớp học</h1></center>
		<button type="button" class="btn btn-info btn-lg" ng-click="showInsertModal('#classInfoModal')">Thêm</button>

		<!-- Modal -->
		<div style="float: right;"><b>Tìm kiếm</b>:&nbsp;<input type="" ng-model="search" name=""></div>

		<table class="table table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<th>Mã Lớp</th>
					<th>Tên Lớp</th>
					<th>hành động</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="item in class_info | filter:search track by $index">
					<td>@{{$index + 1}}</td>
					<td>@{{item.ma_lop}}</td>
					<td>@{{item.ten_lop}}</td>
					<td>					
						<button type="button" class="btn btn-info " ng-click='showEditModal("#classInfoModal", item)'>
							<i class="fa fa-wrench" aria-hidden="true"></i>
						</button>
						<button class="btn btn-danger" ng-click='remove($index,item.id)'>
							<i class="fa fa-eraser" aria-hidden="true"></i>
						</button>
					</td>
				</tr>
			</tbody>
		</table>
		<class-info-modal item="class" ret-func="successUpdate(status)"></class-info-modal>

	</div>

	{{-- <script type="text/javascript" src=" {{ asset('js/lop.js') }}"></script>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }} "></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }} "></script>
	<script type="text/javascript" src="{{ asset('js/paging.js')}}"></script> --}}
</body>
</html>