(function(angular, $, undefined){

'use strict';

angular.module('Tasks', ['OC']).
	config(
		['$routeProvider', '$interpolateProvider',
		function ($routeProvider, $interpolateProvider) {

	$routeProvider.when('/', {
		templateUrl: 'main.html',
		controller: 'MainController'
	}).when('/:id', {
		templateUrl: 'main.html',
		controller: 'MainController'
	}).otherwise({
		redirectTo: '/'
	});
}]);
angular.module('Tasks').controller('ListController', ['$scope', function ($scope) {

	var _this = this;

	_this._isAddingList = false;
	_this._taskLists = [];

	$scope.addTaskList = function(taskListName)
	{
		_this._isAddingList = true;

		var id = _this._taskLists.length + 1;
		_this._taskLists.push({id: id, name: taskListName, numberOfTasks: 0});

		_this._isAddingList = false;
	};

	$scope.isAddingList = function()
	{
		return _this._isAddingList;
	};

	$scope.getTaskLists = function()
	{
		//$scope.friends = [{name:'John', age:25}, {name:'Mary', age:28}];
		return _this._taskLists;
	};

	$scope.addTaskList('Private Todos');
	$scope.addTaskList('Business Todos');


}]);
angular.module('Tasks').controller('MainController', ['$scope', '$routeParams', function ($scope, $routeParams) {

	var _this = this;

	$scope.id = $routeParams.id;

	_this._isAddingTask = false;
	_this._tasks = [];

	$scope.addTask = function(taskName)
	{
		_this._isAddingTask = true;

		var id = _this._tasks.length + 1;
		_this._tasks.push({id: id, name: taskName, checked: false});

		_this._isAddingTask = false;
	};

	$scope.isAddingTask = function()
	{
		return _this._isAddingTask;
	};

	$scope.getTasks = function()
	{
		return _this._tasks;
	};

	$scope.addTask('Read book');
	$scope.addTask('Go diving');
	$scope.addTask('Drink beer');
}]);
})(angular, jQuery);