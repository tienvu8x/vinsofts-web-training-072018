<?php
    class c_users extends controller{
		public function __construct(){
			parent::__construct();
			$users = $this->m_users->get_all();	
            include "views/v_users.php";
		}
	}
	new c_users();
?>