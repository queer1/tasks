<?php

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


namespace OCA\Tasks\DependencyInjection;

use \OCA\AppFramework\DependencyInjection\DIContainer as BaseContainer;
use OCA\Tasks\Controller\PageController;


class DIContainer extends BaseContainer {


	public function __construct(){
		parent::__construct('tasks');

		// use this to specify the template directory
//		$this['TwigTemplateDirectory'] = __DIR__ . '/../templates';

		/**
		 * CONTROLLERS
		 */
		$this['PageController'] = $this->share(function($c){
			return new PageController($c['API'], $c['Request']);
		});
	}


}