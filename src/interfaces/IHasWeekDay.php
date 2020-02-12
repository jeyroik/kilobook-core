<?php
namespace kilobook\interfaces;

/**
 * Interface IHasWeekDay
 *
 * @package kilobook\interfaces
 * @author jeyroik@gmail.com
 */
interface IHasWeekDay
{
    const FIELD__WEEK_DAY = 'week_day';

    /**
     * @return int
     */
    public function getWeekDay(): int;

    /**
     * @param int $weekDay
     *
     * @return $this
     */
    public function setWeekDay(int $weekDay);
}
