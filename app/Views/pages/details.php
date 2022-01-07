<html> 
<head>  
   <title>Sử dụng kiểu time trong thẻ input</title>  
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script> 
    <script>  
       angular.module('MyForm', [])  
           .controller('myController', ['$scope', function($scope) {  
  var date = new Date();  
           $scope.valuetime = new Date(1970, 0, 1, date.getHours(), date.getMinutes(), date.getSeconds());  
       }]);  
    </script>  
   </head> 
  <body ng-app="MyForm">  
<input type="time" name="input" ng-model="valuetime"  
               min="08:00:00" max="17:00:00" required /> <br />  
          <tt>value = {{value | date: "HH:mm:ss"}}</tt><br /> 
           <tt>myForm.input.$valid = {{myForm.input.$valid}}</tt><br />  
           <tt>myForm.input.$error = {{myForm.input.$error}}</tt><br />  
           <tt>myForm.$valid = {{myForm.$valid}}</tt>  
           <tt>myForm.$error.required = {{!!myForm.$error.required}}</tt>><br />    
  </body>  
</html>  