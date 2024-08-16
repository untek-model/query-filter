<?php

namespace Untek\Model\QueryFilter\Interfaces;

use Untek\Core\Code\Helpers\DeprecateHelper;
use Untek\Model\Query\Entities\Query;
use Untek\Tool\Dev\Trace\Facades\DebugBacktrace;

DeprecateHelper::hardThrow();

/**
 * Формирование параметров запроса из фильтра
 */
interface ForgeQueryByFilterInterface
{

    /**
     * Формирование параметров запроса из фильтра
     * @param object $filterModel
     * @param Query $query
     * @return mixed
     */
    public function forgeQueryByFilter(object $filterModel, Query $query);
}