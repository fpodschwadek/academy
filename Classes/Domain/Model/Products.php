<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2021 Torsten Schrade <Torsten.Schrade@adwmainz.de>, Academy of Sciences and Literature | Mainz
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

use Digicademy\Academy\Domain\Model\Traits\{
    CategoriesTrait,
    ContentsElementTrait,
    DateRangeTrait,
    DescriptionTrait,
    ImageTrait,
    PageTrait,
    PersistentIdentifierTrait,
    RelationsTrait,
    SlugTrait,
    SortingTrait,
    TitleTrait
};
use Digicademy\Academy\Domain\Repository\RelationsRepository;
use Digicademy\ChfTime\Domain\Model\DateRanges;
use GeorgRinger\News\Domain\Model\TtContent;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Products extends AbstractEntity
{
    use CategoriesTrait,
        ContentsElementTrait,
        DateRangeTrait,
        DescriptionTrait,
        ImageTrait,
        PageTrait,
        PersistentIdentifierTrait,
        RelationsTrait,
        SlugTrait,
        SortingTrait,
        TitleTrait;

    protected const RELATIONS_CRITERION = 'project_symmetric';

    /**
     * The identifier of the product
     *
     * @var string $identifier
     */
    protected $identifier;

    /**
     * An acronym for the product
     *
     * @var string $acronym
     */
    protected $acronym;

    /**
     * A version of the product
     *
     * @var string $version
     */
    protected $version;

    /**
     * Returns the identifier
     *
     * @return string $identifier
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    /**
     * Sets the identifier
     *
     * @param string $identifier
     */
    public function setIdentifier(string $identifier): void
    {
        $this->identifier = $identifier;
    }

    /**
     * Returns the version
     *
     * @return string $version
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * Sets the version
     *
     * @param string $version
     */
    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    /**
     * Returns the acronym
     *
     * @return string $acronym
     */
    public function getAcronym(): string
    {
        return $this->acronym;
    }

    /**
     * Sets the acronym
     *
     * @param string $acronym
     */
    public function setAcronym(string $acronym): void
    {
        $this->acronym = $acronym;
    }
}
