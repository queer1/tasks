<div id="app-navigation" ng-controller="ListController" class="ng-scope">

	<ul class="with-icon">
		<?php print_unescaped($this->inc('partials/addnewlist')) ?>

		<li ng-repeat="list in getTaskLists()">
			<a href="#/{{list.id}}" class="title">{{list.name}}</a>
			<span class="utils">
				<span class="tasks-counter">{{list.numberOfTasks}}</span>
			</span>
		</li>
	</ul>

</div>

