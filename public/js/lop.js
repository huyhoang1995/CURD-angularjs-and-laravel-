 // var fetch = angular.module('myApp', []);

 
 // khởi tạo dỉrective
 fetch.directive('classInfoModal', function($http){

    var link = function(scope, elem, attr){
    	scope.class = {
    		id: 0
    	};
    	scope.update = function(){
    		var data = scope.class;
    		if(parseInt(scope.class.id) > 0){
                //thuc hien update

                var url = 'http://hoanglaravel07.zent:8090/laravel_test/basic/public/sinh_vien/class_update/' + scope.class.id;

            }else{

                ///thuc hien them moi

                var url = 'http://hoanglaravel07.zent:8090/laravel_test/basic/public/sinh_vien/class_add';               

            }

            $http.post(url, data).then(function(response){
            	$('#classInfoModal').modal('hide');
            	scope.retFunc({status: true});
            })

            .catch(function(err){
            	console.log(err);
            	$('#classInfoModal').modal('hide');
            	scope.retFunc({status: false});
            }); 
        }

        scope.$watch('item', function(newVal, oldVal){
        	if(newVal){
        		scope.class = angular.copy(newVal);
        	}
        });

    };

    return {
    	restrict: 'E',
    	scope: {
    		item: '=',
    		retFunc: '&',
    	},
    	link: link,
    	templateUrl: 'classInfoModal.php'
    }

});


 fetch.controller('classInfo', ['$scope', '$http',  function ($scope, $http,){

 	$scope.class = {
 		id: 0
 	};

 	$scope.add = function(){

 		var url = 'http://hoanglaravel07.zent:8090/laravel_test/basic/public/sinh_vien/class_add';

 		var data = $scope.class;
 		$http.post(url, data).then(function(resData){

 			$('#classInfoModal').modal('hide')
 			$scope.data.getData();

            // resetModalData();

        })
 		.then(function(status){


 		})

 		.catch(function(err){

 		});
 	};

 	//open insert modal
 	$scope.showInsertModal = function(modalId){
 		$(modalId).modal('show');
 		$scope.class = {
 			id: 0
 		};
 	};

    //open edit modal
    $scope.showEditModal = function(modalId, classInfo){
    	$(modalId).modal('show');
    	$scope.class = classInfo;
    }


 	//đổ dữ liệu
 	$scope.data = {
 		getData: function(){
 			var url = 'http://hoanglaravel07.zent:8090/laravel_test/basic/public/sinh_vien/classinfo';
 			$http.get(url).then(function(response){
 				// console.log(response);
 				$scope.class_info = response.data;
 			});
 		}
 	};

 	//xóa bản ghi
 	$scope.remove = function(index,id){

 		swal({
 			title: "Are you sure?",
 			text: "Once deleted, you will not be able to recover this imaginary file!",
 			icon: "warning",
 			buttons: true,
 			dangerMode: true,
 		})
 		.then((willDelete) => {
 			if (willDelete) {
                var url = 'http://hoanglaravel07.zent:8090/laravel_test/basic/public/sinh_vien/class_delete/' + id;//truyền vào đường dẫn với {{id}}
                $http.delete(url).then(function(response) {
                    $scope.class_info.splice(index, 1); // xóa đi 1 dòng ngay tại ví trí ấn
                });  

                swal("Xóa Thành Công", {
                	icon: "success",
                });

                // $scope.data.getData();


            }else {    
            	swal("Đã Hủy Lệnh!");
            }
        });


 	};
    $scope.successUpdate = function(status){
        if(status == true){//cap nhat thanh cong

            swal({
                title: "Good job!",
                text: "thao tác thành công",
                icon: "success",
                button: "OK!",
            });
            $scope.data.getData();
        }
        else{///cap nhat that bai

        }

    };

    $scope.data.getData();


}]);