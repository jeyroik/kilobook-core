<?php
namespace kilobook\interfaces;

/**
 * Interface IHasPerDay
 *
 * @package kilobook\interfaces
 * @author jeyroik@gmail.com
 */
interface IHasPerDay
{
    const FIELD__PER_DAY = 'per_day';

    /**
     * @return int
     */
    public function getPerDay(): int;

    /**
     * @param int $perDay
     *
     * @return $this
     */
    public function setPerDay(int $perDay);
}
