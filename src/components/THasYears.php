<?php
namespace kilobook\components;

use kilobook\interfaces\IHasYears;

/**
 * Trait THasYears
 *
 * @property $config
 *
 * @package kilobook\components
 * @author jeyroik@gmail.com
 */
trait THasYears
{
    /**
     * @return int
     */
    public function getYears(): int
    {
        return $this->config[IHasYears::FIELD__YEARS] ?? 0;
    }

    /**
     * @param int $years
     *
     * @return $this
     */
    public function setYears(int $years)
    {
        $this->config[IHasYears::FIELD__YEARS] = $years;

        return $this;
    }
}
