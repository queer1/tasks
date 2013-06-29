<li class="add-new">
	<a class="list-title list-title-with-icon"
		oc-click-slide-toggle="{
			selector: '.add-new-popup',
			hideOnFocusLost: true,
			cssClass: 'opened'
		}" 
		href="#"
		oc-click-focus="{
			selector: '.add-new-popup input[ng-model=taskListName]'
		}">+ <span>Add task list</span></a>
	<div class="add-new-popup">
		<fieldset class="personalblock">
			<p class="error">
				<span ng-show="listExistsError">'Error: list already existing!'</span>
			</p>
			<form>

				<input type="text" 
					ng-model="taskListName"
					placeholder="Name"
					ng-disabled="isAddingList()"
					name="taskListName"
					autofocus>
				<button title="Add"
						class="primary"
						ng-disabled="isAddingList() || !taskListName.trim()"
						ng-click="addTaskList(taskListName)">Add</button>
			</form>
		</fieldset>
	</div>
</li>
