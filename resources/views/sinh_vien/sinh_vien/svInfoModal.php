<div id="svInfoModal" class="modal fade" role="dialog" >
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Modal Header</h4>
			</div>
			<div class="modal-body">
				<form action="" method="POST" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Mã sinh viên</label>
						<input type="text" class="form-control" ng-model="singleSv.ma_sv">
					</div>
					<div class="form-group">
						<label for="">Tên sinh viên</label>
						<input type="text" class="form-control" ng-model="singleSv.ten_sv">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control" ng-model="singleSv.email">
					</div>
					<div class="form-group">
						<label for="">Niên Khóa</label>
						<input type="text" class="form-control" ng-model="singleSv.nien_khoa" >
					</div>
					<div class="form-group">
						<label for="">Địa chỉ</label>
						<input type="text" class="form-control" ng-model="singleSv.dia_chi" >
					</div>	

					<input type="button"  class="btn btn-default" data-dismiss="" value="Submit"  ng-click="update()" />
					
					
					<button type="button"   class="btn btn-default" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>
	</div>
</div>
