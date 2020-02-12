<?php
namespace kilobook\interfaces;

/**
 * Interface IHasWeeks
 *
 * @package kilobook\interfaces
 * @author jeyroik@gmail.com
 */
interface IHasWeeks
{
    const FIELD__WEEKS = 'weeks';

    /**
     * @return int
     */
    public function getWeeks(): int;

    /**
     * @param int $weeks
     *
     * @return $this
     */
    public function setWeeks(int $weeks);
}
