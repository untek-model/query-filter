<?php

namespace Untek\Model\QueryFilter\Interfaces;

use Untek\Model\Query\Entities\Query;

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