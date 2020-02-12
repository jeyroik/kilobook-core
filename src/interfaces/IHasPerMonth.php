<?php
namespace kilobook\interfaces;

/**
 * Interface IHasPerMonth
 *
 * @package kilobook\interfaces
 * @author jeyroik@gmail.com
 */
interface IHasPerMonth
{
    const FIELD__PER_MONTH = 'per_month';

    /**
     * @return int
     */
    public function getPerMonth(): int;

    /**
     * @param int $perMonth
     *
     * @return $this
     */
    public function setPerMonth(int $perMonth);
}
