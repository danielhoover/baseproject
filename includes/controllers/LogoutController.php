<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class LogoutController extends Controller
{
	protected $viewFileName = "logout"; //this will be the View that gets the data...
	protected $loginRequired = false;


	public function run()
	{
		$this->view->title = 'Logout';

		$this->user->logout();
		$this->user = null;
	}


}