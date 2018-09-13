<!DOCTYPE html>
        <!-- Angular -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>

<!-- Firebase --
<script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>-->
<script src="https://www.gstatic.com/firebasejs/5.4.0/firebase.js"></script>

<!-- AngularFire -->
<script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>
</head>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyA1s0AZXU4BcytY7OpwjqoZ7Zhjts6hIK4",
    authDomain: "qaweilapp-dfb75.firebaseapp.com",
    databaseURL: "https://qaweilapp-dfb75.firebaseio.com",
    projectId: "qaweilapp-dfb75",
    storageBucket: "qaweilapp-dfb75.appspot.com",
    messagingSenderId: "208112204687"
  };
  firebase.initializeApp(config);

var app = angular.module("sampleApp", ["firebase"]);
app.controller("SampleCtrl", function($scope, $firebaseArray) {
  var ref = firebase.database().ref().child("users");
  var chatRef = firebase.database().ref().child("chats");
 $scope.data = $firebaseArray(ref);
 $scope.chatNo = $firebaseArray(chatRef);

 $scope.getName = function(name){

 var ref = firebase.database().ref().child("users").child(name);
 $scope.resNm = $firebaseArray(ref);
 console.log($scope.resNm);
 return $scope.resNm;

 }
});


</script>
<html ng-app="sampleApp">
  <body ng-controller="SampleCtrl">
 No of users =  {{data.length}} <br/>
 No of chats = {{chatNo.length}}
 <!--
  <ul>
  <li ng-repeat="message in data | filter:query as filtered">{{message.$id}} </li>

  </ul>

    --->
	
	
  </body>
</html>
