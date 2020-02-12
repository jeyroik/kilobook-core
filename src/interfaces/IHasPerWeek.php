<?php
namespace kilobook\interfaces;

/**
 * Interface IHasPerWeek
 *
 * @package kilobook\interfaces
 * @author jeyroik@gmail.com
 */
interface IHasPerWeek
{
    const FIELD__PER_WEEK = 'per_week';

    /**
     * @return int
     */
    public function getPerWeek(): int;

    /**
     * @param int $perWeek
     *
     * @return $this
     */
    public function setPerWeek(int $perWeek);
}
