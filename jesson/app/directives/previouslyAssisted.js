app.directive('assistInfo', function(){
	return{
    restrict:'AEC',
    scope:{info: '='},
    templateUrl:'http://192.185.175.150/~iwu/wp-content/themes/jesson/app/directives/previouslyAssisted.html'
  };
});
