<?php

namespace Untek\Model\QueryFilter\Exceptions;

use Untek\Core\Code\Helpers\DeprecateHelper;
use Untek\Model\Validator\Exceptions\UnprocessibleEntityException;

DeprecateHelper::hardThrow();

class BadFilterValidateException extends UnprocessibleEntityException
{

}
