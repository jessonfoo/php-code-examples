app.directive('footInfo', function(){
	return{
    restrict:'A',
    scope:{info: '='},
    templateUrl:'http://192.185.175.151/~accutek/wp-content/themes/jesson/app/directives/footList.html'
  };
});
