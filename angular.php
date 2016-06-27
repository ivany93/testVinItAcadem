<?php
/**
 * Created by PhpStorm.
 * User: Ivany
 * Date: 28.06.2016
 * Time: 0:59
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <?php require_once ('header.php');?>
</head>
<body>

<script>
    var app = angular.module("myTask", []);
    app.controller("myCtrl", function($scope) {
        $scope.products = ["Повторити технологію ajax", "Купити абонемент в спортзал"];
        $scope.addItem = function () {
            $scope.errortext = "";
            if (!$scope.addMe) {return;}
            if ($scope.products.indexOf($scope.addMe) == -1) {
                $scope.products.push($scope.addMe);
            } else {
                $scope.errortext = "Ошибка";
            }
        }
        $scope.removeItem = function (x) {
            $scope.errortext = "";
            $scope.products.splice(x, 1);
        }
    });
</script>
<div class="container" align="center">
<div ng-app="myTask" ng-cloak ng-controller="myCtrl" class="w3-card-2 w3-margin" style="max-width:400px;">
    <header class="w3-container w3-light-grey w3-padding-hor-16">
        <h3>Мій список задач</h3>
    </header>
    <ul class="w3-ul">
        <li ng-repeat="x in products" class="w3-padding-hor-16">{{x}}<span ng-click="removeItem($index)" style="cursor:pointer;" class="w3-right w3-margin-right">×</span></li>
    </ul>
    <div class="w3-container w3-light-grey w3-padding-hor-16">
        <div class="w3-row w3-margin-top">
            <div class="w3-col s10">
                <input placeholder="Добавити задачу" ng-model="addMe" class="w3-input w3-border w3-padding">
            </div>
            <div class="w3-col s2">
                <button ng-click="addItem()" class="w3-btn w3-padding w3-green">Add</button>
            </div>
        </div>
        <p class="w3-padding-left w3-text-red">{{errortext}}</p>
    </div>
</div>
</div>
<?php require_once ('footer.php');?>
</body>
</html>
