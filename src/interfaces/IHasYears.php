<?php
namespace kilobook\interfaces;

/**
 * Interface IHasYears
 *
 * @package kilobook\interfaces
 * @author jeyroik@gmail.com
 */
interface IHasYears
{
    const FIELD__YEARS = 'years';

    /**
     * @return int
     */
    public function getYears(): int;

    /**
     * @param int $years
     *
     * @return $this
     */
    public function setYears(int $years);
}
