## Description

This project shows the example of different versions of PHP updates from 7.0 to 7.3.

## Installation

The preferred way to install this extension is through **composer**. Check the **composer.json** for this extension's requirements and dependencies. Read this **composer.json** for source library requirements.

To install or either to run:

> php composer.phar require dzhuravel/php7x


or add:

>"dzhuravel/php7x": "*"

to the required section of your components.

## Basic Usage

Look at the index.php and in the end of the there are functions that use the functionally of the different PHP versions

### ternarOperator()

> echo $test1->ternarOperator();
    
- If the variable $firstVar is defined, function returns it, otherwise returns a constant 3 

### getKey()

> echo $test1->getKey(int $key);

- We are able to find the first key array_key_first() in the array. If $key is not entered, function will return last key of array with using array_key_last().

### countVar()

> echo $test1->countVar();

- Using the PHP 7.3 is_countable() function, we can determine if it is possible to count the array. The example provided did not include the array as input.

### setPower()

> echo $test2->setPower();

- Function connected to the strict types property. Result will be provided if the numbers inputted as integers.


### textEntered()

> echo $test2->textEntered();

- Example of using void. The function in this case shall not return the value. Using the PHP 7.1 feature.

### Class Constants

- Example of using PHP 7.1, which enabled feature of using visibility of constants.

### Ability of using null as parameter in the function

- In PHP 7.1 we are allowed to return the null value, if the function parameter allows the null of one of the parameters. Example is included in most of the functions.
