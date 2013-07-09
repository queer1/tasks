<div class="add-new"
	 ng-show="id">
		<p class="error">
<!--				<span ng-show="listExistsError">'Error: list already existing!'</span>-->
		</p>
		<form>

			<input type="text"
				   ng-model="task"
				   placeholder="Add task"
				   ng-disabled="isAddingTask()"
				   name="taskName"
				   autofocus>
			<button title="Add"
					class="primary"
					ng-disabled="isAddingTask() || !task.trim()"
					ng-click="addTask(task)">Add</button>
		</form>
</div>

<ul class="with-icon" ng-show="id">
	<li ng-repeat="task in getTasks()" class="task">
		<input type="checkbox" ng-model="task.checked" />
		<span class="title">{{task.name}}</span>
		<span class="utils">
			<button ng-click="deleteTask(task.id)"
					class="svg action delete-icon delete-button"
					title="<?php p($l->t('Delete task')); ?>"
					ng-show="task.id"
					oc-tooltip></button>
		</span>
	</li>
</ul>

<div ng-hide="id">
	<?php p($l->t('Select a task list.')) ?>
</div>
