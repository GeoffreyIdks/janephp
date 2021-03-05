<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetUpdateManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}