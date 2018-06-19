<?php

	include_once "db.php";


    spl_autoload_register(function($class){
    	include_once "classes/$class.php";
    });


	if(isset($_GET["start"]))
	    include_once "view/$_GET[start].php";

     else

     	include_once "view/index.php";
?>

<a href="http://cms.loc/?start=about">about</a>
<a href="http://cms.loc/?start=contacts">contacts</a>
