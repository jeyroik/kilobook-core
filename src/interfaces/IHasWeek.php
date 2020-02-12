<?php
namespace kilobook\interfaces;

/**
 * Interface IHasWeek
 *
 * @package kilobook\interfaces
 * @author jeyroik@gmail.com
 */
interface IHasWeek
{
    const FIELD__WEEK = 'week';

    /**
     * @return int
     */
    public function getWeek(): int;

    /**
     * @param int $week
     *
     * @return $this
     */
    public function setWeek(int $week);
}
