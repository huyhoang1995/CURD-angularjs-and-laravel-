// var fetch = angular.module('myApp', ['ngRoute']);



fetch.controller('info', ['$scope', '$http',  function ($scope, $http,) {

    //get records
    $scope.singleSv = {
        id: 0
    };

    $scope.data = {

        getData: function(){
            var url = 'http://hoanglaravel07.zent:8090/laravel_test/basic/public/sinh_vien/list';
            $http.get(url).then(function(response){
                $scope.sinh_vien = response.data;
                // console.log($scope.data.data);
            });
        }
    };  



    //open add modal
    $scope.showInsertModal = function(modalId){
        $(modalId).modal('show');
        $scope.singleSv = {
            id: 0
        };
        console.log(svInfoModal);

    };

    //open edit modal
    $scope.showEditModal = function(modalId, svInfo){
        $(modalId).modal('show');
        $scope.singleSv = svInfo;
        console.log(svInfo);
    }

    //delete
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
                var url = 'http://hoanglaravel07.zent:8090/laravel_test/basic/public/sinh_vien/delete/' + id;//truyền vào đường dẫn với {{id}}
                $http.delete(url).then(function(response) {
                    $scope.sinh_vien.splice(index, 1); // xóa đi 1 dòng ngay tại ví trí ấn
                });  

                swal("Xóa Thành Công", {
                    icon: "success",
                });

                $scope.data.getData();


            }else {    
                swal("Đã Hủy Lệnh!");
            }
        });


    };

    $scope.add = function(){

        var url = 'http://hoanglaravel07.zent:8090/laravel_test/basic/public/sinh_vien/add';

        var data = $scope.singleSv;
        $http.post(url, data).then(function(resData){

            $('#svInfoModal').modal('hide')
            $scope.data.getData();

            // resetModalData();

        })
        .then(function(status){


        })

        .catch(function(err){

        });
    };

    //thông báo thêm/sửa thành công
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


