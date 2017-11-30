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

// Parse error, access level to serialize() must be public
class SerializeMe implements Serializable {
  use Nonserializable;
}

// Parse error, access level to jsonSerialize() must be public
class JsonMe implements JsonSerializable {
  use Nonserializable;
}
```
