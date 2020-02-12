<?php
namespace kilobook\interfaces;

/**
 * Interface IHasMonths
 *
 * @package kilobook\interfaces
 * @author jeyroik@gmail.com
 */
interface IHasMonths
{
    const FIELD__MONTHS = 'months';

    /**
     * @return int
     */
    public function getMonths(): int;

    /**
     * @param int $months
     *
     * @return $this
     */
    public function setMonths(int $months);
}
