<?php 

/**
 * 
 * define() : Check if a CONST exists or not? 
 * 
 */

 echo "<h2> define() : Check if a CONST exists or not? </h2>";
 define("GREETING","Hello you! How are you today?");
 echo defined("GREETING");
 

/**
 * 
 * filters a variable 
 * filter_var($variablename, FILTERNAME : could be email? or anything : FILTER_DEFAULT, options)
 * 
 */
echo "<h2> filter_var() : filters a variable </h2>";
$myEmail = "prabhdeep1234kaur@gmail.com";
if(filter_var($myEmail, FILTER_VALIDATE_EMAIL)){
    echo "Valid Email";
}else{
    echo " INVALID !!";
}

/**
 * 
 * ini_get : allows us to read value from php.ini without changing or updating it
 */
echo "<h2>ini_get : allows us to read value from php.ini without changing or updating it</h2>";

echo 'post_max_size = ' . ini_get('post_max_size') . "\n";


/***
 * 
 * HEADER ()  :  sends raw data to HTTP header to a client
 * header( header, replace:optional, http_response_code:optional)
 */
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");


/**
 * 
 * headers_sent() : checks if headers were sent?
 * 
 */
if (!headers_sent()) {
//header("Location: https://www.google.com/");
//exit;
}


/**
 * 
 * class_exists : check if class exisits or not ?defined or not
 * 
 */

 class MyTestClass { 
    public $myName = "Welcome to Prabh's Git";  
    
    public function myFunc(){
        return "MY name is prabh";
    }
}  

echo "<h2>class_exists : check if class exisits or not ?defined or not</h2>";
if (class_exists('MyTestClass')) {
    echo "yes";
}else{
    echo "no";
}

/**
 * 
 * get_Class : Returns the name of the class of an object
 * 
 */
echo "<h2>get_Class : Returns the name of the class of an object</h2>";
$myFuncObj = new myTestClass();
echo "Class Name is : ", get_class($myFuncObj)."<br>";
echo $myFuncObj->myFunc();


/**
 * 
 * 
 * is_object : to check if a var object or not
 * 
 */
echo "<h2>is_object : to check if a var object or not</h2>";

if(is_object($myFuncObj)){
    echo "it is an object!!";
}else{
    echo "not an object!";
}


/**
 * 
 * is_int : to check if a var is int
 * 
 */
echo "<h2>is_int : to check if a var is int</h2>";
$varCheckInt = 123;
if(is_int($varCheckInt)){
   echo "it is an int";
}

/**
 * 
 * is_numeric : to check if a var is numeric? 
 * 
 */
echo "<h2>is_numeric : to check if a var is numeric? </h2>";
$checkNumeric = array("19", '',null,1111,"12344",3.1, "0a10111001", "145e0","checking!!", );
foreach ($checkNumeric as $vals) {
    if (is_numeric($vals)) { echo $vals.'<br>'; }
}


/**
 * 
 * is_callable : Value can be called as a function from current scope???
 * 
 */
echo "<h2>is_callable : Value can be called as a function from current scope??? </h2>";
function myCallablefuncs(){
}
echo "myFunc is callable: " . is_callable("myCallablefuncs");


/**
 * 
 *  is_bool :  if variable is boolean?
 * 
 */
echo "<h2>is_bool : if variable is boolean? </h2>";
$boolVar = false;
if(is_int($boolVar)){
    echo "it is an bool";
 }

/**
 * 
 * 
 * is_readable : tells if a file is readable
 * 
 */

echo "<h2>is_readable : tells if a file is readable </h2>";
if (is_readable('text.txt')) {
    echo 'The file is readable';
} else {
    echo 'The file is not readable';
}


/**
 * 
 * gettype : Get the type of a variable
 * 
 */
echo "<h2>gettype : Get the type of a variable </h2>";

$getTypeVar = 3;
echo gettype($getTypeVar) . "<br>";




/***
 * 
 * 
 * Ceil : Rounds up float value to next int
 * 
 */

echo "<h2>Ceil : Rounds up float value to next int </h2>";

$ceilNum = 4.44;
echo(ceil($ceilNum) . "<br>");



/**
 * 
 * 
 * htmlentities() : Convert some characters to HTML entities:
 * 
 */
echo "<h2>htmlentities() : Convert some characters to HTML entities </h2>";
$strEntity = '<a href="google.com">Google it</a>';
echo htmlentities($strEntity); // in view source : &lt;a href=&quot;https://www.w3schools.com&quot;&gt;Go to w3schools.com&lt;/a&gt;

/**
 * 
 * include : include specific file
 * 
 * 
 */
echo "<h2>include : include specific file : will only produce a warning (E_WARNING) and the script will continue
</h2>";
include 'for-include-require.php';


/**
 * 
 * require : include specific file
 * 
 * 
 */
echo "<h2>require : include specific file : will produce a fatal error (E_COMPILE_ERROR) and stop the script
</h2>";
require 'for-include-require.php';


?>