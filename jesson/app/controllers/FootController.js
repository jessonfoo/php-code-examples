app.controller('FootController', ['$scope', function($scope) { 
  $scope.imgRoot = 'http://192.185.175.150/~iwu/wp-content/uploads/';
  $scope.siteRoot = 'http://192.185.175.150/~iwu/';
  $scope.bb = 'button_blue.jpg';
  $scope.csoLinks= [{
    title:'Maintenance Kits',
    link:'maintenance-kits.php'
  },{
    title:'Transfer Kits',
    link:'transfer-kits.php'
  },{
    title:'Fusers',
    link:'fusers.php'
  },{
    title:'Roller Kits',
    link:'rolller-kits.php'
  }];
  $scope.cstwLinks= [{
    title:'Printers & MFP',
    link:'javascript:void(0);'
  },{
    title:'Accessories',
    link:'javascript:void(0);'
  },{
    title:'Toner',
    link:'javascript:void(0);'
  },{
    title:'Monthly Specials',
    link:'javascript:void(0);'
  }];
  $scope.csthLinks= [{
    title:'About Us',
    link:'javascript:void(0);'
  },{
    title:'Contact Us',
    link:'javascript:void(0);'
  },{
    title:'Tech Support',
    link:'javascript:void(0);'
  },{
    title:'My Account',
    link:'javascript:void(0);'
  }];
  $scope.contactLinks= [{
    title:'Toll Free: 800-218-9222',
    link:'javascript:void(0);'
  },{
    title:'Fax: 900-628-8533',
    link:'javascript:void(0);'
  },{
    title:'Email: Sales@accutekimaging.com',
    link:'mailto:Sales@accutekimaging.com'
  }];
  $scope.smLinks=[{ 
    icon: '/wp-content/uploads/instagram.png',
    link:'javascript:void(0);'
  },{
    icon: '/wp-content/uploads/googleplus.png',
    link:'javascript:void(0);'
  },{
    icon: '/wp-content/uploads/facebook.png',
    link:'javascript:void(0);'
  }];
}]);
