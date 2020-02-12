<?php
namespace kilobook\interfaces;

/**
 * Interface IHasMonth
 *
 * @package kilobook\interfaces
 * @author jeyroik@gmail.com
 */
interface IHasMonth
{
    const FIELD__MONTH = 'month';

    /**
     * @return int
     */
    public function getMonth(): int;

    /**
     * @param int $month
     *
     * @return $this
     */
    public function setMonth(int $month);
}
