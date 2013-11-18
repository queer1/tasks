<?php

\OCP\Util::addScript('tasks', 'vendor/underscore/underscore.min');
\OCP\Util::addScript('tasks', 'vendor/angular/angular.min');
\OCP\Util::addScript('tasks', 'vendor/restangular/restangular.min');
//\OCP\Util::addScript('tasks', 'vendor/angular-gettext/angular-gettext.min');
\OCP\Util::addScript('tasks', 'public/app');


\OCP\Util::addStyle('tasks', 'navigation');
\OCP\Util::addStyle('tasks', 'tasks');

?>

<div id="app" ng-app="Tasks" ng-cloak>

	<script type="text/ng-template" id="main.html">
		<?php print_unescaped($this->inc('partials/main')) ?>
	</script>

	<?php print_unescaped($this->inc('nav')) ?>

	<div id="app-content" ng-view></div>

</div>
