<?php

namespace Lakshmaji\Exceptions;

/**
 * -----------------------------------------------------------------------------
 *   GenericExceptionType for defining exception codes
 * -----------------------------------------------------------------------------
 * Class having methods to define error codes related to DB exceptions.
 *
 * @since    1.0.0
 * @version  1.0.0
 * @author   Lakshmaji 
 */
class GenericExceptionType
{
    // General Error
    /**
     * @var array
     */
    public static $GENERAL_ERROR = ['error_code' => 10001, 'code' => 400];

    // Development Errors
    /**
     * @var array
     */
    public static $INVALID_ENDPOINT = ['error_code' => 10101, 'code' => 400];
    /**
     * @var array
     */
    public static $INVALID_METHOD = ['error_code' => 10102, 'code' => 400];

    /**
     * @var array
     */
    public static $DATABASE_ERROR = ['error_code' => 10103, 'code' => 400];
    /**
     * @var array
     */
    public static $NO_RECORDS_FOUND = ['error_code' => 10614, 'code' => 200];

    // JWT Token Errors
    /**
     * @var array
     */
    public static $NO_TOKEN = ['error_code' => 10400, 'code' => 400];
    /**
     * @var array
     */
    public static $TOKEN_EXPIRED = ['error_code' => 10200, 'code' => 400];
    /**
     * @var array
     */
    public static $INVALID_TOKEN = ['error_code' => 10201, 'code' => 400];
    /**
     * @var array
     */
    public static $PAYLOAD_EXCEPTION = ['error_code' => 10202, 'code' => 400];
    /**
     * @var array
     */
    public static $TOKEN_BLACKLISTED = ['error_code' => 10203, 'code' => 400];

    // User Authorization Errors
    /**
     * @var array
     */
    public static $USER_SESSION_EXPIRED = ['error_code' => 10613, 'code' => 400];
    /**
     * @var array
     */
    public static $CREATE_USER_TOKEN_ERROR = ['error_code' => 10204, 'code' => 400];
    /**
     * @var array
     */
    public static $USER_TOKEN_FETCH_ERROR = ['error_code' => 10205, 'code' => 400];

    // HTTP Errors
    /**
     * @var array
     */
    public static $BAD_REQUEST = ['error_code' => 10300, 'code' => 400];
    /**
     * @var array
     */
    public static $UNAUTHORIZED = ['error_code' => 10301, 'code' => 401];
    /**
     * @var array
     */
    public static $NOT_FOUND = ['error_code' => 10302, 'code' => 404];

    // API Errors
    /**
     * @var array
     */
    public static $VALIDATION_ERROR = ['error_code' => 10401, 'code' => 400];
    /**
     * @var array
     */
    public static $INVALID_INPUT = ['error_code' => 10402, 'code' => 400];
    /**
     * @var array
     */
    public static $INVALID_PARAMETERS = ['error_code' => 10403, 'code' => 400];
    
}
// end of class GenericExceptionType
// end of file GenericExceptionType.php