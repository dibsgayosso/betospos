<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Migration_open_close_register_permission extends MY_Migration 
	{

	    public function up() 
			{
				$this->execute_sql(realpath(dirname(__FILE__).'/'.'20260605120000_open_close_register_permission.sql'));
	    }

	    public function down() 
			{
	    }

	}
