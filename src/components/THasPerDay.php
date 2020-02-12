<?php
namespace kilobook\components;

use kilobook\interfaces\IHasPerDay;

/**
 * Trait THasPerDay
 *
 * @property $config
 *
 * @package kilobook\components
 * @author jeyroik@gmail.com
 */
trait THasPerDay
{
    /**
     * @return int
     */
    public function getPerDay(): int
    {
        return $this->config[IHasPerDay::FIELD__PER_DAY] ?? 0;
    }

    /**
     * @param int $perDay
     *
     * @return $this
     */
    public function setPerDay(int $perDay)
    {
        $this->config[IHasPerDay::FIELD__PER_DAY] = $perDay;

        return $this;
    }
}
