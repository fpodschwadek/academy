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
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Roles extends AbstractEntity
{

    /**
     * persistentIdentifier
     *
     * @var string
     *
     * @Extbase\Validate("NotEmpty")
     */
    protected $persistentIdentifier;

    /**
     * The title of the role
     *
     * @var string $title
     * @Extbase\Validate("NotEmpty")
     */
    protected $title;

    /**
     * Returns the persistentIdentifier
     *
     * @return string $persistentIdentifier
     */
    public function getPersistentIdentifier(): string
    {
        return $this->persistentIdentifier;
    }

    /**
     * Sets the persistentIdentifier
     *
     * @param string $persistentIdentifier
     *
     * @return void
     */
    public function setPersistentIdentifier(string $persistentIdentifier): void
    {
        $this->persistentIdentifier = $persistentIdentifier;
    }

    /**
     * Sets the title
     *
     * @param string $title
     *
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns the title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

}
