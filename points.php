 <!-- 
The $ operator in PHP is used to declare a variable. It can store any value like integer, float, char, string etc

$$var_name is known as reference variable where $var_name is a normal variable. The $$var_name used to refer to the variable with the name as value of the variable $var_name.

Example 
Input :  $Hello = "Geeks for Geeks"
         $var = "Hello"
         echo $var
         echo $$var
Output : Hello
         Geeks for Geeks


PHP echo statement can be used to print the string, multi-line strings, escaping characters, variable, array, etc. ... echo is a statement, which is used to display the output.
 
 => is used to assign values to the keys of an array
 -> is used to access an object method or property. 

 The extends keyword indicates that you are making a new class that derives from an existing class. The meaning of "extends" is to increase the functionality.

 Access modifiers are public, private and protected. 
 
 Why access modifiers?
 - to validate and restrict data
 - keep private things private

 trait
 - way to resue code as reduce code duplication
 - can be declared in a multiple class
 - methods can be any visibilty
 - similar to class and canot create instantiated
 - can have method and abstract method

 constant
 - cannot be change during the exexution the script
 - const keyword is used to declare a class construct
 - constants doesnot have a visibilty modifiers
 
 Magic Constant have predefine constant
 - start with double underscore
 - have five constant
 - __LINE__ : if we need script line we use this as provide the current line number
 - __CLASS__ :  if we need class we use this
 - __FILE__ : if we need file we use this as provide the current file name with path
 - __METHOD__ : if we need method we use this
 - __FUNCTION__ : if we need function line we use this

Static keyword use in OOP
- static methods and properties can be accessed without creating an object
- can be called directly without an object of the class
- $this keyword is not use or available inside static method
- static can be use in function and variable level and cannot be declare in class level

How to access static method?
can be accessed from outside the class using the class name and scope resolution operator.
Example: className::methodName();
-->