
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