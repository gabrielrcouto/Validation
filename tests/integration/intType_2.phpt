--FILE--
<?php
require 'vendor/autoload.php';

use Respect\Validation\Validator as v;
use Respect\Validation\Exceptions\IntTypeException;

try {
    v::intType()->check('42');
} catch (IntTypeException $exception) {
    echo $exception->getMainMessage();
}
?>
--EXPECTF--
"42" must be of the type integer
