<div id="classInfoModal" class="modal fade" role="dialog" >
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
						<label for="">Mã lớp học</label>
						<input type="text" class="form-control" ng-model="class.ma_lop">
					</div>
					<div class="form-group">
						<label for="">Tên lớp học</label>
						<input type="text" class="form-control" ng-model="class.ten_lop">
					</div>

					<input type="button"  class="btn btn-default" data-dismiss="" value="Submit"  ng-click="update()" />
					
					
					<button type="button"   class="btn btn-default" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>
	</div>
</div>
