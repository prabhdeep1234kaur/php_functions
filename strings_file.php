<?php 
/**
 *  
 * parameters : 1-> word to be replaced, 2->replace it with, 3->replace in what? 4-> count : Counts no. of replacements?
*/
echo "<h2>string replace : replace occurances of search string  </h2>";
echo str_replace('Tanya','Prab',"Hi there, welcome to Tanya's Github")."<br>";

//for array
$arr = ['abc','def','xqz','lmno','pqr'];
echo"<pre>";print_r(str_replace('xqz','ghi',$arr,$i));echo"</pre>";
echo "Replacements: $i";

$find =["Hello","world"];
$replace =["B"];
$arr = ["Hello","world","!"];
echo"<pre>";print_r(str_replace($find,$replace,$arr));echo"</pre>";


/**
 * 
 * Substr : Return a part of string from the mentioned Value (from second parameter)  </h2>"
 * 
 */
echo "<h2>Substr : Return a part of string from the mentioned Value (from second parameter)  </h2>";
// here we have 4: so everything starting 4th character will be returned
echo substr("Hi, Welcome to Prabh's Github", 4 )."<br>"; 
//3rd parameter will stop from returning everuthing after that count
echo substr("Hi, Welcome to Prabh's Github", 4 , 10)."<br>"; 


/**
 * 
 * 
 * Sprintf : Returns a formatted string  : str : parameter 1st will be instered first : Refer to readme for more
 * 
 */
echo "<h2>Sprintf : Returns a formatted string : Refer Readme file  </h2>";
$str = "Prabhdeep"; $num = 29; 
$txt = sprintf("I am very glad, you are here Today, Welcome to %s Github. Today is %u Jan", $str, $num);
echo $txt.'<br>';

/**
 * 
 * Strpos : Find position of first occurrence of substring in a string
 * strpos($string in which to find (haystack), $string to find (needle), offset)
 * 3rd Paramter optional -> specifies where to begn the search 
 */
echo "<h2>Strpos : Find position of first occurrence of substring in a string  </h2>";
echo strpos("I love coding and i am enjoying what I do!!", "coding")."<br>"; //returns 7: 
$mystring = 'bI love coding and i am enjoying what I do!!c';
$findme   = 'php';
$pos =  strpos($mystring, $findme);
if ($pos !== false) {
    echo "The string '$findme' was found in the string '$mystring'";
        echo " and exists at position $pos";
} else {
    echo "The string '$findme' was not found in the string '$mystring'";
}


/**
 * 
 * strlen : Get string length
 * 
 */
echo "<h2>strlen : Get string length  </h2>";
$my_new_string = " Hello! LEarning is fun, isn't it?";
echo strlen($my_new_string); //34

/**
 * 
 * preg_match : does case-insensitive search in a tring : REGEX : REFER README
 * preg_match( $pattern : watch to search, $in_which_search, ) 
 */
echo "<h2>preg_match : does case-insensitive search in a tring : REGEX  </h2>";
$pattern = "/enjoying/i";
echo preg_match($pattern, $mystring);

/**
 * 
 * trim : Strip whitespace or other characters from a string
 * trim( $string from where we want to trim, $remove_these_chars )
 * 
 */
echo "<h2>trim : Strip whitespace or other characters from a string  </h2>";
echo trim($my_new_string, 'Hello! L');


/**
 *  
 * ltrim() : remove from left side of the string
 * 
 */
echo "<h2>ltrim() : remove from left side of the string</h2>";
echo ltrim($my_new_string, 'Hello! L');


/**
 *  
 * rtrim() : remove from right side of the string
 * 
 */
echo "<h2>rtrim() : remove from right side of the string </h2>";
echo rtrim($my_new_string, 'it?');


/**
 *  
 * is_string() : variable is tring? 
 * 
 */
echo "<h2>is_string() : variable is tring? </h2>";
echo is_string($my_new_string); //returns true or false

/**
 * 
 * strtoLower : make lower case
 * strtolower(string)
 */
echo "<h2>strtoLower : make lower case </h2>";
$mylowerString = strtolower($my_new_string);
echo $mylowerString;

/**
 * 
 * strtoupper : to make upper case
 * 
 */
echo "<h2>strtoupper : to make upper case </h2>";
$myUpperString = strtoupper($my_new_string);
echo $myUpperString; //HELLO! LEARNING IS FUN, ISN'T IT?


/***
 * 
 * 
 * ucfirst : make first character uppercASE
 * 
 */
echo "<h2>ucfirst : make first character uppercASE</h2>";
$myucfirst = ucfirst($my_new_string);
echo $myucfirst; //Hello! LEarning is fun, isn't it?




/**
 * 
 * str_repeat : repeat string
 * 
 */
echo "<h2>str_repeat : repeat string </h2>";

echo str_repeat("Repeat ",10);

?>