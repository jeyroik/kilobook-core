<?php
namespace kilobook\interfaces;

/**
 * Interface IHasPages
 *
 * @package kilobook\interfaces
 * @author jeyroik@gmail.com
 */
interface IHasPages
{
    const FIELD__PAGES = 'pages';

    /**
     * @return int
     */
    public function getPages(): int;

    /**
     * @param int $pages
     *
     * @return $this
     */
    public function setPages(int $pages);
}
