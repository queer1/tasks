<?php

namespace OCA\Tasks;

use OCA\Tasks\Controller\ListsController;
use OCA\Tasks\Controller\PageController;
use OCP\AppFramework\IAppContainer;

class TasksApp extends \OCP\AppFramework\App
{

	public function __construct($params = array())
	{
		parent::__construct('tasks', $params);

		$this->getContainer()->registerService('PageController', function (IAppContainer $c) {
			$r = $c->query('Request');
			return new PageController($c, $r);
		});

		$this->getContainer()->registerService('ListsController', function (IAppContainer $c) {
			$r = $c->query('Request');
			return new ListsController($c, $r);
		});
	}

	public function registerNavigation() {
		$appName = $this->getContainer()->getAppName();
		$server = $this->getContainer()->getServer();
		$server->getNavigationManager()->add(array(
			'id' => $appName,
			'order' => 10,
			'href' => \OC::$server->getURLGenerator()->linkToRoute('tasks_index'),
//			'href' => \OC::$server->getURLGenerator()->linkTo('tasks', 'index.php'),
			'icon' => \OC::$server->getURLGenerator()->imagePath($appName, 'tasks.svg'),
			'name' => \OC::$server->getL10N($appName)->t('Tasks'),
		));
	}
}

