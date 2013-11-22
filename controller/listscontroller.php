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


namespace OCA\Tasks\Controller;


use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\JSONResponse;
use OCP\AppFramework\IAppContainer;
use OCP\IRequest;

class ListsController extends Controller {


	public function __construct(IAppContainer $app, IRequest $request){
		parent::__construct($app, $request);
	}


	/**
	 * ATTENTION!!!
	 * The following comment turns off security checks
	 * Please look up their meaning in the documentation!
	 *
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function index() {
		$lists = array(
			array('id' => 100, 'name' => 'Private ToDos', 'numberOfTasks' => 20),
			array('id' => 101, 'name' => 'Business ToDos', 'numberOfTasks' => 10),
			array('id' => 102, 'name' => 'Family ToDos', 'numberOfTasks' => 5),
		);
		return new JSONResponse($lists);
	}


}
