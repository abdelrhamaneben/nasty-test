<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('assertEquals')) {
	function assert($expression, $msg = null) {
		if($msg == null) 
            $msg = "assert : ";
		if($expression) {
			  $msg = "<span style=\"color:white;background-color:green;\">PASSED</span>".$msg;
		}
		else {
		    $msg = "<span style=\"color:white;background-color:red;\">FAILED</span>".$msg;
        }
        echo "<p style=\"border:solid 1px grey;border-radius:10px;\">".$msg."</p>";
	}
}

if ( ! function_exists('assertNotEquals')) {
	function assertNotEquals($val1 ,$val2 $msg = null) {
		if($msg == null) 
            $msg = "assertNotEquals: ";
        assert($val1 != $val2 , $msg);
	}
}

if ( ! function_exists('assertEquals')) {
	function assertEquals($val1 ,$val2 $msg = null) {
		if($msg == null) 
            $msg = "assertEquals: ";
        assert($val1 == $val2 , $msg);
	}
}
if ( ! function_exists('assertIdentical')) {
	function assertIdentical($val1 ,$val2 $msg = null) {
		if($msg == null) 
            $msg = "assertIdentical: ";
        assert($val1 === $val2 , $msg);
	}
}
if ( ! function_exists('assertINotdentical')) {
	function assertINotdentical($val1 ,$val2 $msg = null) {
		if($msg == null) 
            $msg = "assertINotdentical: ";
        assert($val1 !== $val2 , $msg);
	}
}
if ( ! function_exists('assertTrue')) {
	function assertTrue($val , $msg = null) {
		if($msg == null) 
            $msg = "assertTrue: ";
        assert($val == True,$msg);
	}
}
if ( ! function_exists('assertNull')) {
	function assertTrue($val , $msg = null) {
		if($msg == null) 
            $msg = "assertNull: ";
        assert($val == null,$msg);
	}
}
if ( ! function_exists('assertNotNull')) {
	function assertTrue($val , $msg = null) {
		if($msg == null) 
            $msg = "assertNotNull: ";
        assert($val != null,$msg);
	}
}
if ( ! function_exists('assertFalse')) {
	function assertFalse($val1 , $msg = null) {
		if($msg == null) 
            $msg = "assertFalse: ";
        assertEquals($val1 == False,$msg);
	}
}

if ( ! function_exists('assertInArray')) {
	function assertInArray($array , $item $msg = null) {
		if($msg == null) 
            $msg = "assertInArray: ";
        assertEquals(in_array($item,$array),$msg);
	}
}

if ( ! function_exists('assertInArray')) {
	function assertInArray($array , $item, $msg = null) {
		if($msg == null) 
            $msg = "assertInArray: ";
        assertEquals(in_array($item,$array),$msg);
	}
}

if ( ! function_exists('fail')) {
	function fail($msg = null) {
		if($msg == null) 
            $msg = "Fail: ";
        assert(false,$msg);
	}
}

if ( ! function_exists('assertPattern')) {
	function assertPattern($pattern,$subject,$msg = null) {
		if($msg == null) 
            $msg = "assertPattern: ";
        assertTrue(preg_match($pattern,$subject) > 0,$msg);
	}
}
if ( ! function_exists('assertNoPattern')) {
	function assertPattern($pattern,$subject,$msg = null) {
		if($msg == null) 
            $msg = "assertNoPattern: ";
        assertFalse(preg_match($pattern,$subject) > 0,$msg);
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


