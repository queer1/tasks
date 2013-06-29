
/**
 * ownCloud - Tasks app
 *
 * @author Thomas Müller
 *
 * @copyright 2013 Thomas Müller <thomas.mueller@tmit.eu>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */


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