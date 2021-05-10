<?php

namespace PicturePark\API\Exception;

class ContentGetOutputsTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}