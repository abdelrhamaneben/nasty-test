<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('nasty_assert')) {
	function nasty_assert($expression, $msg = "" , $debug = null) {
		if($debug == null)
			$debug = debug_backtrace();
		if($expression) {
			  $msg = "<span style=\"color:white;background-color:green; margin-right:10px;\"> PASSED </span>".$msg;
		}
		else {
		    $msg = "<span style=\"color:white;background-color:red; margin-right:10px;\"> FAILED </span>".$msg;
        }
        print_r("<p style=\"\">".$msg." function: ".$debug[0]['function'].", line: ".$debug[0]['line'].", file: ".$debug[0]['file']."</p>");
	}
}

if ( ! function_exists('assertNotEquals')) {
	function assertNotEquals($val1 ,$val2 ,$msg = "",$debug = null) {
		if($debug == null)
			$debug = debug_backtrace();
        nasty_assert($val1 != $val2 , $msg,$debug);
	}
}
if ( ! function_exists('assertEquals')) {
	function assertEquals($val1 ,$val2, $msg = "",$debug = null) {
		if($debug == null)
			$debug = debug_backtrace();
        nasty_assert($val1 == $val2 , $msg,$debug);
	}
}
if ( ! function_exists('assertIdentical')) {
	function assertIdentical($val1 ,$val2, $msg = "",$debug = null) {
		if($debug == null)
			$debug = debug_backtrace();
        nasty_assert($val1 === $val2 , $msg,$debug);
	}
}
if ( ! function_exists('assertINotdentical')) {
	function assertNotIdentical($val1 ,$val2 ,$msg = "",$debug = null) {
		if($debug == null)
			$debug = debug_backtrace();
        nasty_assert($val1 !== $val2 , $msg,$debug);
	}
}
if ( ! function_exists('assertTrue')) {
	function assertTrue($val , $msg = "",$debug = null) {
		if($debug == null)
			$debug = debug_backtrace();
        nasty_assert($val == True,$msg,$debug);
	}
}
if ( ! function_exists('assertNull')) {
	function assertNull($val , $msg = "",$debug) {
		if($debug == null)
			$debug = debug_backtrace();
        nasty_assert($val == null,$msg,$debug);
	}
}
if ( ! function_exists('assertNotNull')) {
	function assertNotNull($val , $msg = "", $debug) {
		if($debug == null)
			$debug = debug_backtrace();
        nasty_assert($val != null,$msg,$debug);
	}
}
if ( ! function_exists('assertFalse')) {
	function assertFalse($val1 , $msg = "",$debug = null) {
		if($debug == null)
			$debug = debug_backtrace();
        assertEquals($val1 ,False,$msg,$debug);
	}
}
if ( ! function_exists('assertInArray')) {
	function assertInArray($array , $item, $msg = "", $debug = null) {
		if($debug == null)
			$debug = debug_backtrace();
        assertTrue(in_array($item,$array),$msg,$debug);
	}
}
if ( ! function_exists('fail')) {
	function fail($msg = "",$debug = null) {
		if($debug == null)
			$debug = debug_backtrace();
        nasty_assert(false,$msg,$debug);
	}
}
if ( ! function_exists('assertPattern')) {
	function assertPattern($pattern,$subject,$msg = "",$debug = null) {
		if($debug == null)
			$debug = debug_backtrace();
        assertTrue(preg_match($pattern,$subject) > 0,$msg,$debug);
	}
}
if ( ! function_exists('assertNoPattern')) {
	function assertNoPattern($pattern,$subject,$msg = "",$debug = null) {
		if($debug == null)
			$debug = debug_backtrace();
        assertFalse(preg_match($pattern,$subject) > 0,$msg,$debug);
	}
}
if ( ! function_exists('nasty_debug')) {
     	function nasty_debug($val) {
     	   echo "<style></style>";
	   echo "<div class=\"nasty_debug\">";
        print_r($val);
        echo "</div>";
	}
}
if ( ! function_exists('nasty_go')) {
	function nasty_go() {
		$methods = get_class_methods($this);
        foreach($methods as $method) {
                if(preg_match("/^test_/",$method) > 0) {
                    if(method_exists($this,"before"))
                        $this->before();
                    $this->{$method}();
                    if(method_exists($this,"after"))
                        $this->after();
                }
        }
	}
}


