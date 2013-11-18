<?php

namespace OCA\Tasks;

use OCA\Tasks\Controller\PageController;
use OCP\AppFramework\IAppContainer;

class TasksApp extends \OCP\AppFramework\App
{

	public function __construct($params)
	{
		parent::__construct('tasks', $params);

		$this->getContainer()->registerService('PageController', function (IAppContainer $c) {
			$r = $c->query('Request');
			return new PageController($c, $r);
		});
	}
}

