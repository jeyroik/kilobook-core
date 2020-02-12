<?php
namespace kilobook\components;

use kilobook\interfaces\IHasYear;

/**
 * Trait THasYear
 *
 * @property $config
 *
 * @package kilobook\components
 * @author jeyroik@gmail.com
 */
trait THasYear
{
    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->config[IHasYear::FIELD__YEAR] ?? 0;
    }

    /**
     * @param int $year
     *
     * @return $this
     */
    public function setYear(int $year)
    {
        $this->config[IHasYear::FIELD__YEAR] = $year;

        return $this;
    }
}
