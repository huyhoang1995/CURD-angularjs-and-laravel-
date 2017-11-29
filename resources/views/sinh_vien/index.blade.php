<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

</head>
<body>
	<div class="container" ng-controller="info" >
		<center><h1>Thông tin sinh viên</h1></center>
		<!-- Trigger the modal with a button -->
		<button type="button" class="btn btn-info btn-lg"  ng-click="showInsertModal('#svInfoModal')">Thêm</button>

		<!-- Modal -->
		<div style="float: right;"><b>Tìm kiếm</b>:&nbsp;<input type="" ng-model="search" name=""></div>
		
		<table class="table table-hover">
			<thead>	
				<tr>
					<th>id</th>
					<th>mã sv</th>
					<th>tên sv</th>
					<th> email </th>
					<th>niên khóa</th>
					<th>địa chỉ</th>
					<th>Hành Động</th>
				</tr>		

			</thead>
			<tbody>
				<tr ng-repeat="item in sinh_vien | filter:search track by $index " >
					<td>@{{$index + 1}}</td>
					<td>@{{item.ma_sv}}</td>
					<td>@{{item.ten_sv}} </td>
					<td>@{{item.email}}</td>
					<td>@{{item.nien_khoa}}</td>
					<td>@{{item.dia_chi}}</td>
					<td>
						<!-- Trigger the modal with a button -->
						<button type="button" class="btn btn-info " ng-click='showEditModal("#svInfoModal", item)'>
							<i class="fa fa-wrench" aria-hidden="true"></i>
						</button>
						<button class="btn btn-danger" ng-click='remove($index,item.id)'>
							<i class="fa fa-eraser" aria-hidden="true"></i>
						</button>
					</td>
				</tr>

			</tbody>

		</table>

		<sv-info-modal item="singleSv" ret-func="successUpdate(status)"></sv-info-modal>

		
	</div>

</body>
</html>
