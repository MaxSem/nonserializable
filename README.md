# Nonserializable

Nonserializable is a PHP trait that prevents classes using it from being serialized/deserialized.

Example:
```
class C {
    use Nonserializable;
    ...
}

serialize( new C ); // Exception
unserialize( 'O:15:"Nonserializable":0:{}' ); // Error thrown on PHP 7+, fatal on earlier versions

/**
 * Parse error, access level to jsonSerialize() must be public
 */
class D implements JsonSerializable {
  use Nonserializable;
}
```
