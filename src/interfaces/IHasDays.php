<?php
namespace kilobook\interfaces;

/**
 * Interface IHasDays
 *
 * @package kilobook\interfaces
 * @author jeyroik@gmail.com
 */
interface IHasDays
{
    const FIELD__DAYS = 'days';

    /**
     * @return int
     */
    public function getDays(): int;

    /**
     * @param int $days
     *
     * @return $this
     */
    public function setDays(int $days);
}
