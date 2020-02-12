<?php
namespace kilobook\interfaces;

/**
 * Interface IHasYear
 *
 * @package kilobook\interfaces
 * @author jeyroik@gmail.com
 */
interface IHasYear
{
    const FIELD__YEAR = 'year';

    /**
     * @return int
     */
    public function getYear(): int;

    /**
     * @param int $year
     *
     * @return $this
     */
    public function setYear(int $year);
}
