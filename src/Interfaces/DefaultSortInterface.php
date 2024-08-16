<?php

namespace Untek\Model\QueryFilter\Interfaces;

use Untek\Core\Code\Helpers\DeprecateHelper;

DeprecateHelper::hardThrow();

interface DefaultSortInterface
{

    public function defaultSort(): array;
}