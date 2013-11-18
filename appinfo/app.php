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


namespace OCA\Tasks;

use OCP\Util;

\OC::$server->getNavigationManager()->add(array(
		'id' => 'tasks',
		'order' => 10,
		'href' => \OCP\Util::linkToRoute('tasks_index'),
//		'href' => \OCP\Util::linkTo('tasks', '/'),
		'icon' => \OCP\Util::imagePath( 'tasks', 'tasks.svg' ),
		'name' => \OCP\Util::getL10N('tasks')->t('Tasks')
	)
);
