<?php

declare(strict_types=1);

namespace Service\Repository\Criteries\OffsetLimit;

use Service\Repository\Contracts\BaseCriteriaContract;
use Service\Repository\Contracts\BaseRepositoryContract;

/**
 * Class OffsetLimitCriteria
 *
 * @package Src\Criteries\OffsetLimit
 */
class OffsetLimitCriteria implements BaseCriteriaContract
{
    /**
     * @var string
     */
    protected $offset;

    /**
     * @var string
     */
    protected $limit;

    /**
     * @param $offset
     * @param $limit
     */
    public function __construct($offset, $limit)
    {
        $this->offset = $offset;
        $this->limit = $limit;
    }

    /**
     * @param mixed $query
     * @param BaseRepositoryContract $repository
     * @return mixed
     */
    public function apply($query, BaseRepositoryContract $repository)
    {
        return $query->offset($this->offset)->limit($this->limit);
    }
}