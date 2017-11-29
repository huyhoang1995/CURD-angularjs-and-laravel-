
fetch.config(function($routeProvider){
    var urlClass = BaseUrl + '/sinh_vien/lop'
    var urlSV = BaseUrl + '/sinh_vien/index'
    $routeProvider
    .when("/lop", {
        templateUrl :  urlClass,
        controller  : 'classInfo'
    })
    .when("/sv", {
        templateUrl : urlSV,
        controller  : 'info'
    })
    
    .when("/test", {
        templateUrl : "../../resources/main.html"
    });
});