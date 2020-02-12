<?php
namespace kilobook\components;

use kilobook\interfaces\IHasPerYear;

/**
 * Trait THasPerYear
 *
 * @property $config
 *
 * @package kilobook\components
 * @author jeyroik@gmail.com
 */
trait THasPerYear
{
    /**
     * @return int
     */
    public function getPerYear(): int
    {
        return $this->config[IHasPerYear::FIELD__PER_YEAR] ?? 0;
    }

    /**
     * @param int $perYear
     *
     * @return $this
     */
    public function setPerYear(int $perYear)
    {
        $this->config[IHasPerYear::FIELD__PER_YEAR] = $perYear;

        return $this;
    }
}
