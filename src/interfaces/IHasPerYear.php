<?php
namespace kilobook\interfaces;

/**
 * Interface IHasPerYear
 *
 * @package kilobook\interfaces
 * @author jeyroik@gmail.com
 */
interface IHasPerYear
{
    const FIELD__PER_YEAR = 'per_year';

    /**
     * @return int
     */
    public function getPerYear(): int;

    /**
     * @param int $perYear
     *
     * @return $this
     */
    public function setPerYear(int $perYear);
}
