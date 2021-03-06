--FILE--
<?php

require 'vendor/autoload.php';

use Respect\Validation\Validator as v;
use Respect\Validation\Exceptions\CpfException;

try {
    v::not(v::cpf())->check('276.865.775-11');
} catch (CpfException $e) {
    echo $e->getMainMessage();
}
?>
--EXPECTF--
"276.865.775-11" must not be a valid CPF number
