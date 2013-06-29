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

use \OCA\AppFramework\Http\Request;
use \OCA\AppFramework\Http\TemplateResponse;
use \OCA\AppFramework\Utility\ControllerTestUtility;


require_once(__DIR__ . "/../../classloader.php");


class SettingsControllerTest extends ControllerTestUtility {

	private $api;
	private $request;
	private $controller;

	/**
	 * Gets run before each test
	 */
	public function setUp(){
		$this->api = $this->getAPIMock();
		$this->request = new Request();
		$this->controller = new SettingsController($this->api, $this->request);
	}


	public function testIndexAnnotations(){
		$annotations = array('CSRFExemption');
		$this->assertAnnotations($this->controller, 'index', $annotations);
	}

	public function testIndex(){
		$response = $this->controller->index();
		$this->assertEquals('admin/settings', $response->getTemplateName());
		$this->assertTrue($response instanceof TemplateResponse);
	}


}