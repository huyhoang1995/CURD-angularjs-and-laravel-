
 // khởi tạo dỉrective
 fetch.directive('svInfoModal', function($http){
    //link đến template(html)
    // var templateUrl = '';
    var url= BaseUrl + "/sinh_vien/modal";
    var link = function(scope, elem, attr){
        scope.singleSv = {
            id: 0
        };
        scope.update = function(){
            var data = scope.singleSv;
            if(parseInt(scope.singleSv.id) > 0){
                //thuc hien update

                var url = 'http://hoanglaravel07.zent:8090/laravel_test/basic/public/sinh_vien/update/' + scope.singleSv.id;

            }else{

                ///thuc hien them moi

                var url = 'http://hoanglaravel07.zent:8090/laravel_test/basic/public/sinh_vien/add';               

            }

            $http.post(url, data).then(function(response){
                $('#svInfoModal').modal('hide');
                scope.retFunc({status: true});
            })

            .catch(function(err){
                console.log(err);
                $('#svInfoModal').modal('hide');
                scope.retFunc({status: false});
            }); 
        }

        scope.$watch('item', function(newVal, oldVal){
            if(newVal){
                scope.singleSv = angular.copy(newVal);
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
        templateUrl: url
    }

});