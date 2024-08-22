<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Torsten Schrade <Torsten.Schrade@adwmainz.de>, Academy of Sciences and Literature | Mainz
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

namespace Digicademy\Academy\Domain\Model;

use Digicademy\Academy\Domain\Model\Traits\TypeTrait;
use TYPO3\CMS\Extbase\DomainObject\AbstractValueObject;

class HcardsAdrcomponents extends AbstractValueObject
{
    use TypeTrait;

    /**
     * The label of the address
     *
     * @var int $parent
     */
    protected int $parent;

    /**
     * The value of the component
     *
     * @var string $value
     */
    protected string $value;

    /**
     * Returns the parent
     *
     * @return int $parent
     */
    public function getParent(): int
    {
        return $this->parent;
    }

    /**
     * Sets the parent
     *
     * @param int $parent
     */
    public function setParent(int $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * Returns the value
     *
     * @return string $value
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Sets the value
     *
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }
}
