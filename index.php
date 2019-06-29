<?php
declare(strict_types=1);

class ZeroTest
{
    public $firstVar;
    public $testArray = array();
    
    public function __construct($firstVar = null, $testArray = null)
    {
        $this->firstVar = $firstVar;
        $this->testArray = $testArray;
    }
    
    //Using the PHP 7.3 is_countable() function, we can determine if
    //it is possible to count the array.
    public function countVar(){
        if (is_countable($this->firstVar))
        {
            return "It is countable, the number is " .count($this->firstVar);
        }
        else
        {
            $days = array("Monday", "Tuesday");
            echo $this->firstVar . " is not countable, while number of days"
            . " is countable and equals ". count($days);
        }
    }
    
    //Using the PHP 7.3 array_key_first(), we are able to find the first in
    //the array. If Key is not entered, function will return last key of array.
    public function getKey(int $key = null)
    {
        
        if($key == 1)
        {
            return "First Key of the array is: " .array_key_first($this->testArray);
        }
        
        return "Last Key of the array is: " .array_key_last($this->testArray);
    }
    
    //Using the PHP 7.0 ternar operator feature
    //If the variable is defined, function returns it, otherwise returns 3
    public function ternarOperator()
    {
        return $this->firstVar ?? '3';
    }
}

class FirstTest
{
    public $firstInput;
    public $secondInput;
    
    //With using the declared strict types, class accepts only int.
    //In other cases, it will provide the zero. PHP ex of 7.0
    public function __construct(int $firstInput, int $secondInput)
    {
        $this->firstInput = $firstInput;
        $this->secondInput = $secondInput;
    }
    
    //Function connected to the strict types property.
    //Result if the numbers inputted as integers.
    public function setPower(){
        return "Result: " .pow($this->firstInput, $this->secondInput);
    }
    
    //Example of using void. The function in this case shall not return the value.
    //Using the PHP 7.1 feature.
    public function textEntered() :void
    {
        echo "<br>You inputed: " .$this->firstInput. " and " .$this->secondInput. ".";
        return;
    }
}

//Example of using PHP 7.1, which enabled feature of using visibility of
//constants.
class Constants {
    const MAX_VALUE = 10;
    public const MIN_VALUE = 5;
    protected const AVERAGE_VALUE = MAX_VALUE / MIN_VALUE;
}

echo "Constant with maximum value, and simple const is " .constants::MAX_VALUE;
echo "<br><br>";
echo "Public constant with the minimum value is: " . constants::MIN_VALUE;
echo "<br><br>";

//This will return an error since the constant is protected and we don't have
//access to it.
/*
 echo constants::AVERAGE_VALUE;
 echo "<br>";
 */

$array = ['a' => 1, 'b' => 2, 'c' => 3];

$test1 = new ZeroTest(null, $array);
echo "With using the ternar operator, we get: ";
echo $test1->ternarOperator();
echo "<br><br>";
echo $test1->getKey();
echo "<br><br>";
echo $test1->countVar();
echo "<br><br>";
$test2 = new FirstTest(3, 4);
echo $test2->setPower();
echo "<br>";
echo $test2->textEntered();
