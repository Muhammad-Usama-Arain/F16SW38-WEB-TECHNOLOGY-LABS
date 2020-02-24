# PHP Method Overloading

### PHP does not support method overloading, you need to use magic methods to implement the concept of method overloading.

#### Example:

```php

class methodOverloading{

function __call($methodName, $noOfArguments){

}

$classObj = new methodOverloading;
$classObj->methodName();
$classObj->methodName('firstArgument');


}

```