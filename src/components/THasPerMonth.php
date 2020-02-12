<?php
namespace kilobook\components;

use kilobook\interfaces\IHasPerMonth;

/**
 * Trait THasPerMonth
 *
 * @property $config
 *
 * @package kilobook\components
 * @author jeyroik@gmail.com
 */
trait THasPerMonth
{
    /**
     * @return int
     */
    public function getPerMonth(): int
    {
        return $this->config[IHasPerMonth::FIELD__PER_MONTH] ?? 0;
    }

    /**
     * @param int $perMonth
     *
     * @return $this
     */
    public function setPerMonth(int $perMonth)
    {
        $this->config[IHasPerMonth::FIELD__PER_MONTH] = $perMonth;

        return $this;
    }
}
