<?php

use Lakshmaji\Exceptions\GenericExceptionType;
// use App\CustomException;

return [
    // CustomException::$ABC['error_code'] => 'banana',

    // General Errors
    GenericExceptionType::$GENERAL_ERROR['error_code'] => 'General Error',

    // Development Errors
    GenericExceptionType::$INVALID_ENDPOINT['error_code'] => 'Invalid Endpoint',
    GenericExceptionType::$INVALID_METHOD['error_code'] => 'This method does not exists',

    // JWT Token Errors
    GenericExceptionType::$NO_TOKEN['error_code'] => 'No valid token supplied',
    GenericExceptionType::$TOKEN_EXPIRED['error_code'] => 'Token Expired',
    GenericExceptionType::$INVALID_TOKEN['error_code'] => 'Invalid token supplied',
    GenericExceptionType::$PAYLOAD_EXCEPTION['error_code'] => 'Payload Exception',
    GenericExceptionType::$TOKEN_BLACKLISTED['error_code'] => 'Token Blacklisted',

    // HTTP Errors
    GenericExceptionType::$BAD_REQUEST['error_code'] => 'Bad Request',
    GenericExceptionType::$UNAUTHORIZED['error_code'] => 'Unauthorized',
    GenericExceptionType::$NOT_FOUND['error_code'] => 'Not Found',

    // API Errors
    GenericExceptionType::$VALIDATION_ERROR['error_code'] => 'Validation Error',
    GenericExceptionType::$INVALID_INPUT['error_code'] => 'Invalid Input',
    GenericExceptionType::$INVALID_PARAMETERS['error_code'] => 'Invalid Parameters',
    GenericExceptionType::$DATABASE_ERROR['error_code'] => 'Database processing error',
    GenericExceptionType::$NO_RECORDS_FOUND['error_code'] => 'Sorry, we did not found any records with this input.',

    // Token Authorization Errors
    GenericExceptionType::$CREATE_USER_TOKEN_ERROR['error_code'] => 'Invalid credentials',
    GenericExceptionType::$USER_TOKEN_FETCH_ERROR['error_code'] => 'user fecthing failed from token',
    GenericExceptionType::$USER_SESSION_EXPIRED['error_code'] => 'User already logged out session has expired',

];