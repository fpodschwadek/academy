<?php

namespace Digicademy\Academy\Domain\Model;

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

use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\DomainObject\AbstractValueObject;

class HcardsEmail extends AbstractValueObject
{

    /**
     * The label of the address
     *
     * @var int $parent
     */
    protected $parent;

    /**
     * The type of the address component
     *
     * @var int $type
     */
    protected $type;

    /**
     * The value of the component
     *
     * @var string $value
     */
    protected $value;

    /**
     * Some freetext
     *
     * @var string $freetext
     */
    protected $freetext;

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
     *
     * @return void
     */
    public function setParent(int $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * Returns the type
     *
     * @return int $type
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param int $type
     *
     * @return void
     */
    public function setType(int $type): void
    {
        $this->type = $type;
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
     *
     * @return void
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * Returns the freetext
     *
     * @return string $freetext
     */
    public function getFreetext(): string
    {
        return $this->freetext;
    }

    /**
     * Sets the freetext
     *
     * @param string $freetext
     *
     * @return void
     */
    public function setFreetext(string $freetext): void
    {
        $this->freetext = $freetext;
    }
}
