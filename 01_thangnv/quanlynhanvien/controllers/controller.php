<?php
    class controller{
        public $model;
        public function __construct(){
            $this->model = new m_db();
        }
    }
?>