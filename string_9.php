<!-- 

PHP Strings
A string is a sequence of characters, like "Hello world!".

PHP String Functions

-->

<?php

/*
The PHP strlen() function returns the length of a string.

Example
Return the length of the string "Hello world!":
*/
echo "<br>strlen()<br>";
echo strlen("Rahul"); // outputs 5

/*
str_word_count() - Count Words in a String

Example
Count the number of word in the string "Hello world!":
*/
echo "<br>str_word_count()<br>";
echo str_word_count("rahul kumar"); // outputs 2

/*
strrev() - Reverse a String

Example
Reverse the string "Hello world!":
*/
echo "<br>strrev()<br>";
echo strrev("Rahul"); // outputs 

/*
strpos() - Search For a Text Within a String
The PHP strpos() function searches for a specific text within a string. 
If a match is found, the function returns the character position of the first match. 
If no match is found, it will return FALSE.
Tip: The first character position in a string is 0 (not 1).

Example
Search for the text "world" in the string "Hello world!":
*/
echo "<br>strpos()<br>";
echo strpos("Rahul kumar", "kumar"); // outputs 6


/*
str_replace() - Replace Text Within a String
The PHP str_replace() function replaces some characters with some other characters in a string.

Example
Replace the text "world" with "Dolly":
*/
echo "<br>str_replace()<br>";
echo str_replace("world", "Rahul", "Hello world!"); // outputs Hello Rahul!

