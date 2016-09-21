app.controller('HimController', ['$scope', function($scope) { 
  $scope.text = {
    feat: '/wp-content/uploads/title_featuredproducts.png',
    visit: '/wp-content/uploads/visit.png'
  };
  $scope.dbanner = '/wp-content/uploads/bannerimage.jpg';
  $scope.banner= {
    shop: '/wp-content/uploads/shop.jpg',
    how: '/wp-content/uploads/banner_howitsmade.jpg',
    contact: '/wp-content/uploads/banner_contactus.jpg',
    mission: '/wp-content/uploads/banner_ourmission.jpg',
    book:'/wp-content/uploads/bookyourflight.jpg',
    arrow:'/wp-content/uploads/arrow.png',
    windTunnel:'/wp-content/uploads/windtunnel.jpg'
  };
  $scope.bg = {
    cbanner: '/wp-content/uploads/texture.jpg',
    texture: '/wp-content/uploads/bg.png',
    form: '/wp-content/uploads/bookbg1.jpg'
  };
}]);

