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
    DescriptionTrait,
    ImageTrait,
    PersistentIdentifierTrait,
    RelationsTrait,
    SlugTrait,
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
        DescriptionTrait,
        ImageTrait,
        PersistentIdentifierTrait,
        RelationsTrait,
        SlugTrait,
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
     * The internal sorting for product list (if not alphabetic)
     *
     * @var string $sorting
     */
    protected $sorting;

    /**
     * Additional free text information about a product
     *
     * @var ObjectStorage<TtContent>
     */
    protected $contentElements;

    /**
     * A version of the product
     *
     * @var string $version
     */
    protected $version;

    /**
     * Duration of the product
     *
     * @var \Digicademy\ChfTime\Domain\Model\DateRanges $dateRange
     */
    protected $dateRange;

    /**
     * The page where the product details are listed
     *
     * @var int $page
     */
    protected $page;

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

    /**
     * Returns the sorting
     *
     * @return string $sorting
     */
    public function getSorting(): string
    {
        return $this->sorting;
    }

    /**
     * Sets the sorting
     *
     * @param string $sorting
     */
    public function setSorting(string $sorting): void
    {
        $this->sorting = $sorting;
    }

    /**
     * Get content elements
     *
     * @return ObjectStorage
     */
    public function getContentElements(): ObjectStorage
    {
        return $this->contentElements;
    }

    /**
     * Set content element list
     *
     * @param ObjectStorage $contentElements content elements
     */
    public function setContentElements(ObjectStorage $contentElements): void
    {
        $this->contentElements = $contentElements;
    }

    /**
     * Returns the dateRange
     *
     * @return \Digicademy\ChfTime\Domain\Model\DateRanges $dateRange
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * Sets the dateRange
     *
     * @param \Digicademy\ChfTime\Domain\Model\DateRanges $dateRange
     */
    public function setDateRange(DateRanges $dateRange): void
    {
        $this->dateRange = $dateRange;
    }

    /**
     * Returns the page
     *
     * @return int $page
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * Sets the page
     *
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }
}
