
<?php
/**
 * Implode : array to string
 * 
 */

echo "<h2>Implode : array to string</h2>";
$arr = ['abc','def','xqz','lmno','pqr'];
print_r(implode(',',$arr));
$arr = array('Hello','World!','Wonderful','Day!');
echo implode("/",$arr)."<br>"; echo implode("+",$arr)."<br>"; echo implode("-",$arr)."<br>"; echo implode("X",$arr);


/**
 * 
 * count : count the elements of arr
 * by default second parameter : 0, but 1 when we need all elemeents of multidimentinal array to be counted
 */
echo "<h2>count : count the elements of arr</h2>";
$cars=array("Volvo","BMW","Toyota");
echo count($cars);


$cars = [
"Volve"=>['a','v'],
"Bmw"=>['z','q'],
"Toyota"=>['ww','oo']
];
echo "Normal count: " . count($cars)."<br>";
echo "Recursive count: " . count($cars,1);


/**
 * array_merge : Merge one or more arrays
 * array_merge(array1, array2, array3)
 */
echo "<h2>array_merge : Merge one or more arrays</h2>";
$cars = ['maruti','zen','swift'];
$car_colors = ['red','orange','silver'];
$new_arr = array_merge($cars, $car_colors);
echo"<pre>";print_r($new_arr);echo"</pre>";
/*Array returns
(
[0] => maruti
[1] => zen
[2] => swift
[3] => red
[4] => orange
[5] => silver
)*/
//Associate arrays
$a1=array("a"=>"1","b"=>"2");
$a2=array("c"=>"3","b"=>"4"); //b key already exists : replaces 2 from second and add 4
echo"<pre>";print_r(array_merge($a1,$a2));echo"</pre>";
/*
Array
(
[a] => red
[b] => yellow
[c] => blue
)*/
//array with integer keys
$a=array(3=>"a",4=>"b");
echo"<pre>";print_r(array_merge($a));echo"</pre>"; //replaces values from arrays with its own key
/*
Array
(
[0] => a
[1] => b
)*/

/**
 * 
 * array_merge_recursive
 * 
 */
echo "<h2>array_merge_recursive : doesn't overrides, but makes the same key arry into a smaller arr</h2>";
$a1=array("a"=>"1","b"=>"2");
$a2=array("c"=>"3","b"=>"4"); //b key already exists : doesn't overrides, but makes the same key arry into a smaller arr
echo"<pre>";print_r(array_merge_recursive($a1,$a2));echo"</pre>";
/*
Array
(
[a] => 1
[b] => Array
    (
        [0] => 2
        [1] => 4
    )

[c] => 3
)*/

/**
 * 
 * in_array : check if value exists??
 * in_array(search , $arr , $type: optional)
 * 
 */
echo "<h2>in_array : check if value exists??</h2>";
$my_arr = ["Prabh","Deep", "Tanya","Kaur"];
$my_Arr_value = in_array("tuntin", $my_arr);
print_r($my_Arr_value); //return 0 or 1
if($my_Arr_value === true){
echo "exists";
}else{
echo "doesnt";
}

/**
 * 
 * explode : Split string to array 
 * explode(separator,string,limit)
 * 
 */
echo "<h2>explode : Split string to array </h2>";
$my_string = "Hi there, how are you doing?";
print_r(explode(',',$my_string)); //returns :  Array ( [0] => Hi there [1] => how are you doing? )
print_r(explode(',',$my_string,0)); //returns: Array ( [0] => Hi there, how are you doing? )
print_r(explode(',',$my_string,2)); //returns :  Array ( [0] => Hi there [1] => how are you doing? )
print_r(explode(',',$my_string,-1)); //returns :   Array ( [0] => Hi there )


/**
 * 
 * 
 * is_array : If variable is an array : variable handling 
 * 
 */
echo "<h2>is_array : If variable is an array : variable handling  </h2>";
print_r(is_array($my_string)); //reutn nothing
print_r(is_array($a1)); //returns 1


/**
 * 
 * array_key_exists : check if array key exists ? 
 * array_key_exists($key/in string format, $array)
 */
echo "<h2>array_key_exists : check if array key exists ?   </h2>";
if(array_key_exists('b',$a1)){
echo "yes";
}else{
echo "no";
}

/**
 * 
 * 
 * array_keys($arr);
 * 
 */
echo "<h2>Array Keys : return array of keys from the array   </h2>";
print_r(array_keys($a1)); //Array ( [0] => a [1] => b )

/**
 * 
 * array_values : return values of an arr
 * 
 */
echo "<h2>array_values : return values of an arr   </h2>";
print_r(array_values($a1)); //Array ( [0] => 1 [1] => 2 )

/**
 * 
 * array_map : sends each arr value to a userdefined function and returns the new values : as per the function functionality
 * array_map(functionName, arr1, arr2)
 */

echo "<h2>array_map : sends each arr value to a userdefined function and returns the new values : as per the function functionality </h2>";

function myArrMapFunction($arrVal){
return ($arrVal*$arrVal);
}
$myarrMap = array(1,2,3,4,5);
print_r(array_map("myArrMapFunction", $myarrMap)); //Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

/**
 * 
 * array_filter : filter values of array using  function
 * array_filter(array, functionName, flag : optional)
 */

 echo "<h2>array_filter : filter values of array using  function </h2>";
function myArrFilterFunc($val){
    return ($val & 1); //return if it is odd
}
$myArrFilter = [1,2,3,4,5];
print_r(array_filter($myArrFilter, "MyArrFilterFunc"));

/**
 * 
 * array_flip : excahnge keys with their values
 * 
 */
echo "<h2> array_flip : excahnge keys with their values </h2>";
 print_r(array_flip($a1)); //Array ( [1] => a [2] => b )


/**
 * 
 * array_shift : shift an element off from starting of an array : starting - delete
 * 
 */
echo "<h2> array_shift : shift an element off from starting of an array </h2>";
$fruits = array("orange", "banana", "pineapple", "blueberries");
$newfruits = array_shift($fruits); //this will contain the first element i.e. : orange
print_r($fruits);

/**
 * 
 * array_unshit : Prepend one or more elements to the beginning of an array : starting - end
 * 
 * 
 */
echo "<h2> array_unshit : Prepend one or more elements to the beginning of an array : starting - end </h2>";
$fruitsUnshift = array("orange", "banana", "pineapple", "blueberries");
array_unshift($fruitsUnshift,'cherry'); //this will contain the first element i.e. : orange
print_r($fruitsUnshift);



/**
 * 
 * array_pop : pop off the end of element of array
 * 
 */
echo "<h2> array_pop : pop off the end of element of array </h2>";
$fruits = array("orange", "banana", "pineapple", "blueberries");
$newfruits = array_pop($fruits); //this will contain the last element i.e. : blueberries
print_r($fruits);

/**
 * 
 * array_unique : Remove duplicate values
 * 
 */
echo "<h2>array_unique : Remove duplicate values</h2>";
$arrUnique = array(1 => "green", "blue",2 => "green", "orange", "white");
$newArrUnique = array_unique($arrUnique);
print_r($newArrUnique);



/**
 * 
 * 
 * Array_slice : slice a part of array
 * array_slice(array, start, length)
 * 
 */
echo "<h2>Array_slice : slice a part of array</h2>";
$arrslice=array("red","green","teal","cyan","pink");
print_r(array_slice($a,2));

/**
 * 
 * Array_search : Searches the array with a value and return it's key
 * 
 */
echo "<h2>Array_search : Searches the array with a value and return it's key</h2>";
$seachArr = [ 0=>'red',1=>'yellow',3=>'blue',4=>'green' ];
$searchKey = array_search('blue',$seachArr);
print_r($searchKey);


/**
 * 
 * array_reverse : return reverse order array
 * 
 */
echo "<h2>array_reverse : return reverse order array</h2>";
print_r(array_reverse($seachArr));


/**
 * 
 * Array_diff : difference of two arr keys
 * //it matters which arr is being passed first
 */
echo "<h2>Array_diff : difference of two arr keys</h2>";

$arraydiff2 = array("b" => "pink", "yellow", "cyan");
$arraydiff1 = array("a" => "pink", "cyan", "orange", "cyan");
$resultdiff = array_diff($arraydiff2, $arraydiff1);
print_r($resultdiff);




/***
 * 
 * reset : Set the internal pointer of an array to its first element
 * rewinds array's internal pointer to the first element and returns the value of the first array element.
 */
echo "<h2>reset() : Set the internal pointer of an array to its first element</h2>";
$resetArray = array('one', 'two', 'three', 'four');
echo current($resetArray) . "<br>";
echo next($resetArray) . "<br>";
echo reset($resetArray);


/**
 * 
 * end : set pointer to the first element
 * 
 */
echo "<h2>end : set pointer to the first element</h2>";

echo end($resetArray);



/***
 * 
 * max : find max value
 * 
 */
echo "<h2>max : find max value</h2>";echo max(22, 33, 41, 56, 3); 


/**
 * 
 * ksort : sort array by key in ascending order
 * 
 * 
 */
echo "<h2>ksort : sort array by key in ascending order</h2>";
$ksortArr = ["z"=>"danger", "a"=>"pink", "b"=>"peacock", "d"=>"lemon"];
ksort($ksortArr);
print_r($ksortArr);


/***
 * 
 * 
 * key — fetch  key from  array
 * 
 * 
 */
echo "<h2>key — fetch  key from  array</h2>";
$peopleNames=array("Prabh","Deep","Kaur","Toronto");
echo "The key from the current position is: " . key($peopleNames);


/**
 * 
 * 
 * json_decode : convert a JSON object to a PHP object
 * 
 */

 echo "<h2>json_decode() : convert a JSON object to a PHP object </h2>";
 $jsonObj = '{"Prabh":20,"Deep":21,"Kaur":26}';

 print_r(json_decode($jsonObj)); //stdClass Object ( [Prabh] => 20 [Deep] => 21 [Kaur] => 26 )
 
/**
 * 
 * 
 * json_encode : Array to json object
 * 
 */

 echo "<h2>json_encode : Array to json object </h2>";
 $arrForJson = ['Prabh'=>20, "Deep"=>21, "Kaur"=>26];

 print_r(json_encode($arrForJson)); //{"Prabh":20,"Deep":21,"Kaur":26}
 


?>
