<?php
namespace kilobook\components;

use kilobook\interfaces\IHasPerWeek;

/**
 * Trait THasPerWeek
 *
 * @property $config
 *
 * @package kilobook\components
 * @author jeyroik@gmail.com
 */
trait THasPerWeek
{
    /**
     * @return int
     */
    public function getPerWeek(): int
    {
        return $this->config[IHasPerWeek::FIELD__PER_WEEK] ?? 0;
    }

    /**
     * @param int $perWeek
     *
     * @return $this
     */
    public function setPerWeek(int $perWeek)
    {
        $this->config[IHasPerWeek::FIELD__PER_WEEK] = $perWeek;

        return $this;
    }
}
