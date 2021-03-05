<?php

namespace Github\Exception;

class ScimProvisionAndInviteUserInternalServerErrorException extends InternalServerErrorException
{
    private $scimError;
    public function __construct(\Github\Model\ScimError $scimError)
    {
        parent::__construct('Internal Error', 500);
        $this->scimError = $scimError;
    }
    public function getScimError()
    {
        return $this->scimError;
    }
}