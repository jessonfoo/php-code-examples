app.controller('HomeController', ['$scope', function($scope) {
  $scope.url='http://192.185.175.151/~accutek';
  $scope.sMedia={ 
    insta: '/wp-content/uploads/instagram.png',
    gPlus: '/wp-content/uploads/googleplus.png',
    fb: '/wp-content/uploads/facebook.png'
  };
  $scope.icon={
    search: '/wp-content/uploads/search.png',
    grayArrow:'/wp-content/uploads/login_arrow.png',
    ink:'/wp-content/uploads/icon1.png',
    laptop:'/wp-content/uploads/icon2.png',
    gears:'/wp-content/uploads/icon3.png',
    whiteArrow:'/wp-content/uploads/arrow_white.png',
    leftArrow:'/wp-content/uploads/arrow_left.png',
    rightArrow:'/wp-content/uploads/arrow_right.png',
    laptop:'/wp-content/uploads/dropdown.png'
  };
  $scope.img = {
    welcome: '/wp-content/uploads/welcomeimage.png',
    bb: '/wp-content/uploads/welcomeimage.png'
  };
  $scope.bg = {
    gtl: '/wp-content/uploads/graytab_left.png',
    gt: '/wp-content/uploads/graytab_middle.png',
    gtr: '/wp-content/uploads/graytab_right.png',
    gtd: '/wp-content/uploads/graytab_dividers.png',
    texture: '/wp-content/uploads/texture.png',
    bg: '/wp-content/uploads/bg.png'
  };
}]);

