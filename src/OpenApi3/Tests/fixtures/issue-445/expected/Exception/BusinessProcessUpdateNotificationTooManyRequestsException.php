<?php

namespace PicturePark\API\Exception;

class BusinessProcessUpdateNotificationTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}