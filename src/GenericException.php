<?php

namespace Lakshmaji\Exceptions;

use Exception;
use Illuminate\Support\Facades\Lang;

// interface MyPackageThrowable extends \Throwable {}

/**
 * -----------------------------------------------------------------------------
 *   GenericException for handling exceptions
 * -----------------------------------------------------------------------------
 * Class having methods to handle error related to DB.
 *
 * @since    1.0.0
 * @version  1.0.0
 * @author   Lakshmaji 
 */
class GenericException extends Exception
{

    /**
     * @var mixed
     */
    private $error_code = null;

    /**
     * @var mixed
     */
    private $error_info = null;

    /**
     * @param $type
     * @param NULL $errors
     */
    public function __construct($type = null, $errors = null)
    {
        $this->error_code = $type['error_code'];
        $this->error_info = $errors;

        $message = Lang::get('exceptions.' . $this->error_code);

        parent::__construct($message, $type['code'], null);
    }

    // public function report(Exception $exception)
    // {
    //      // if (method_exists($e, 'report')) {
    //   //       return $e->report();
    //   //   }
    //     $this->report();
    // }

    /**
     * @return mixed
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * @return mixed
     */
    public function getErrorInfo()
    {
        return $this->error_info;
    }
}
// end of class GenericException
// end of file GenericException.php