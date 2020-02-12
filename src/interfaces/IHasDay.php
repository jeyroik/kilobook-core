<?php
namespace kilobook\interfaces;

/**
 * Interface IHasDay
 *
 * @package kilobook\interfaces
 * @author jeyroik@gmail.com
 */
interface IHasDay
{
    const FIELD__DAY = 'day';

    /**
     * @return int
     */
    public function getDay(): int;

    /**
     * @param int $day
     *
     * @return $this
     */
    public function setDay(int $day);
}
