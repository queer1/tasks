<?php

//\OCP\Util::addScript('news', 'vendor/momentjs/moment');
//\OCP\Util::addScript('news', 'vendor/momentjs/langs');

\OCP\Util::addScript('appframework', 'vendor/bootstrap/tooltip');
\OCP\Util::addScript('appframework', 'vendor/angular/angular');
\OCP\Util::addScript('appframework', 'public/app');

\OCP\Util::addScript('tasks', 'public/app');

\OCP\Util::addStyle('appframework', 'bootstrap/tooltip');

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
