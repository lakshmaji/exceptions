## Laravel Custom Exceptions Package


### Install with composer

```bash 
    composer require lakshmaji/exceptions
```

Service provider will be registered automatically

Publish translations

```php
    php artisan vendor:publish 
```

### Custom Exception class

```php

<?php

namespace App;

use Lakshmaji\Exceptions\GenericExceptionType;


/**
 * -----------------------------------------------------------------------------
 *   CustomException for defining exception codes
 * -----------------------------------------------------------------------------
 * Class having methods to define error codes related to DB exceptions.
 *
 * @since    1.0.0
 * @version  1.0.0
 * @author   Lakshmaji 
 */
class CustomException extends GenericExceptionType
{
    // DUPLICATE RECORD
    /**
     * @var array
     */
    public static $DUPLICATE_RECORD = ['error_code' => 12000, 'code' => 400];
    
    // General Error
    /**
     * @var array
     */
    public static $GENERAL_ERROR = ['error_code' => 10001, 'code' => 400];

    
}
// end of class GenericExceptionType
// end of file GenericExceptionType.php
```


### Usage
```php
    // In controller
    throw new GenericException(CustomException::$DUPLICATE_ORGANIZATION);
```

### License

[MIT](https://opensource.org/licenses/MIT)