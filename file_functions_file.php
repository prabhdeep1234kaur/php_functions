<?php 

/**
 * 
 * file_exists : 
 * 
 */
echo "<h2>file_exists : check if file exists  </h2>";
    echo file_exists('README.md')." <br>"; //returns 1 or nothing
    if(!file_exists('abc.text')){
        echo "nothing here <br>";
    }else{
        echo "found! <br>";
    }

/**
 * Dirname : Returns parent directory name
 */
echo "<h2>Dirname : Returns parent directory name  </h2>";
 echo dirname("/php_functions/file_functions.php",2)." <br>";


/**
 * 
 * file_get_contents : file_get_contents — Reads entire file into a
 * 
 */
echo "<h2>file_get_contents : file_get_contents — Reads entire file into a string  </h2>";
echo file_get_contents("text.txt");

/**
 * 
 * file_put_contents :  This function is identical to calling fopen(), fwrite() and fclose() successively to write data to a file.
 * If filename does not exist, the file is created. Otherwise, the existing file is overwritten, unless the FILE_APPEND flag is set. : README
 */
echo "<h2>file_put_contents :  write data to a file.  </h2> <h4>If filename does not exist, the file is created. Otherwise, the existing file is overwritten, unless the FILE_APPEND flag is set.</h4>";
//echo file_put_contents("test.txt","Hello World. Testing!");

/**
 * 
 * is_file : check it is a valid file?
 * 
 */
echo "<h2>is_file : check it is a valid file?  </h2>";
echo is_file("text.txt"); //returned 1 or false

/**
 *  
 * basename : Return filename from the specified path
 * 
 */
echo "<h2>basename : Return filename from the specified path</h2>";
echo basename('/Applications/XAMPP/xamppfiles/htdocs/php_functions/file_functions.php'); //returns file_functions.php


/**
 * 
 * is_dir : Tells if the filename is a directory
 * 
 */
echo "<h2>is_dir : Tells if the filename is a directory</h2>";
$file = "text.txt";
if(is_dir($file)) {
  echo ("directory");
} else {
  echo ("not a directory");
}




/**
 * 
 * realpath : returns real path of the file
 * 
 */
echo "<h2>realpath : returns real path of the file</h2>";
echo realpath('text.txt');




/***
 * 
 * getcwd : GEt current  working directory
 * 
 * 
 */
echo "<h2>getcwd : GEt current  working directory</h2>";
print_r(getcwd());

/////////////

/**
 * 
 * unlink : delete file : 
 * 
 */
echo "<h2>unlink : delete file : </h2>";
$fileMyopen = fopen("text.txt","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);

unlink("text.txt");


/**
 * 
 * fopen : Opens file or URL : Open and read lines
 * fopen(filename, mode: r(readonly); r+:w+ (readwrite); w (write), include_path, context)
 * 
 */
echo "<h2>fopen : Opens file or URL : Open and read lines</h2>";
$fileNamefopen = fopen("text.txt", "r");
while(! feof($fileNamefopen)) {
    $linefopen = fgets($fileNamefopen);
    echo $linefopen. "<br>";
}
fclose($fileNamefopen);



/**
 * 
 * fwrite : Write to an open file
 * 
 * fwrite(filename, string:whar you want to write, length:optional : max no. of bytes)
 */
echo "<h2> fwrite : Write to an open file </h2>";

$fileNamefwrite = fopen('mytext.txt','w+');
echo fwrite($fileNamefwrite, "Add this to the file : fwrite");
fclose($fileNamefwrite);

/**
 * 
 * fclose : closes file i.e. opened file pointer
 * 
 */
echo "<h2>fclose : closes file i.e. opened file pointer</h2>";
$filefclose = fopen("test.txt", "r");
fclose($filefclose);



 
?>