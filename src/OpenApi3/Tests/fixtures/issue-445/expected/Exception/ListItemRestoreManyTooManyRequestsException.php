<?php

namespace PicturePark\API\Exception;

class ListItemRestoreManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}