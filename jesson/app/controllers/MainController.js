app.controller('MainController', ['$scope', function($scope) { 
  $scope.imgRoot = 'http://192.185.175.150/~iwu/wp-content/uploads/';
  $scope.siteRoot = 'http://192.185.175.150/~iwu/';
  $scope.footNL= [{
    title:'Home';
    link:'home.php'
  },{
    title:'Site Map';
    link:'site-map.php'
  },{
    title:'Contact Us';
    link:'contacts.php'
  },{
    title:'About Us';
    link:'about-us.php'
  }];
  $scope.footSONE= [{
    title:'Disposal Services';
    link:'javascript:void(0);'
  },{
    title:'Transportation Services';
    link:'javascript:void(0);'
  },{
    title:'Lab Packing Services';
    link:'javascript:void(0);'
  },{
    title:'Emergency Responses';
    link:'javascript:void(0);'
  }];
  $scope.footSTWO= [{
    title:'Field Services';
    link:'javascript:void(0);'
  },{
    title:'Employee Training';
    link:'javascript:void(0);'
  },{
    title:'Insurance/Permits';
    link:'javascript:void(0);'
  },{
    title:'Industry Links';
    link:'javascript:void(0);'
  }];
  $scope.footGIT= [{
    title:'800.667.9278';
    icon:'phoneicon.png';
    link:'javascript:void(0);'
  },{
    title:'industrialwaste@IWU.com';
    icon:'emailicon.png';
    link:'mailto:industrialwaste@iwu.com'
  },{
    title:'5601 State St, Montclair, CA 91763';
    icon:'addressicon.png';
    link:'javascript:void(0);'
  }];
}]);
