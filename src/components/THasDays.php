<?php
namespace kilobook\components;

use kilobook\interfaces\IHasDays;

/**
 * Trait THasDays
 *
 * @property $config
 *
 * @package kilobook\components
 * @author jeyroik@gmail.com
 */
trait THasDays
{
    /**
     * @return int
     */
    public function getDays(): int
    {
        return $this->config[IHasDays::FIELD__DAYS] ?? 0;
    }

    /**
     * @param int $days
     *
     * @return $this
     */
    public function setDays(int $days)
    {
        $this->config[IHasDays::FIELD__DAYS] = $days;

        return $this;
    }
}
