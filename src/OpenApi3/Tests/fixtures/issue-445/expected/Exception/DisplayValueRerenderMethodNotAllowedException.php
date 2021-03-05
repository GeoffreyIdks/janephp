<?php

namespace PicturePark\API\Exception;

class DisplayValueRerenderMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}