<?php

require("toro.php");

class HelloHandler {
    function get() {
      echo "GET";
	  print_r($_GET);
    }
	
	function post(){
		echo "POST";
		print_r($_POST);
	}
	
	function delete(){
		echo "DELETE";
		print_r($_POST);
	}
	
	function put(){
		echo "PUT";
		print_r($_POST);
	}
}

Toro::serve(array(
    "/" => "HelloHandler",
));