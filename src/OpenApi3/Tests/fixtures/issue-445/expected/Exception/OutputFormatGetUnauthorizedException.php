<?php

namespace PicturePark\API\Exception;

class OutputFormatGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}