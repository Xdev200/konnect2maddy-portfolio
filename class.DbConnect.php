<?php

  class Db_Connect{

    function __construct(){

      $connection=mysql_connect('localhost','root','');
      mysql_select_db('konnectm_maddy',$connection);
      if(!$connection)
			{

				die("Cannot connect to the database");

			}
				return $connection;

    }

    public function close(){

    mysql_close();
  }



  }


 ?>
