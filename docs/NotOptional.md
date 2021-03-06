# NotOptional

- `v::notOptional()`

Validates if the given input is not optional. By _optional_ we consider `null`
or an empty string (`''`).

```php
v::notOptional()->validate(''); //false
v::notOptional()->validate(null); //false
```

Other values:

```php
v::notOptional()->validate(array()); // true
v::notOptional()->validate(' '); // true
v::notOptional()->validate(0); // true
v::notOptional()->validate('0'); // true
v::notOptional()->validate(0); // true
v::notOptional()->validate('0.0'); // true
v::notOptional()->validate(false); // true
v::notOptional()->validate(array('')); // true
v::notOptional()->validate(array(' ')); // true
v::notOptional()->validate(array(0)); // true
v::notOptional()->validate(array('0')); // true
v::notOptional()->validate(array(false)); // true
v::notOptional()->validate(array(array(''), array(0))); // true
v::notOptional()->validate(new stdClass()); // true
```

***
See also:

  * [NoWhitespace](NoWhitespace.md)
  * [NotBlank](NotBlank.md)
  * [NotEmpty](NotEmpty.md)
  * [NullType](NullType.md)
  * [Optional](Optional.md)
