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
    PersistentIdentifierTrait,
    RelationsTrait
};
use Digicademy\Academy\Domain\Repository\RelationsRepository;
use Digicademy\ChfTime\Domain\Model\DateRanges;
use GeorgRinger\News\Domain\Model\TtContent;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Services extends AbstractEntity
{
    use PersistentIdentifierTrait, RelationsTrait;

    protected const RELATIONS_CRITERION = 'project_symmetric';

    /**
     * The identifier of the service
     *
     * @var string $identifier
     */
    protected $identifier;

    /**
     * The title of the service
     *
     * @var string $title
     * @Extbase\Validate("NotEmpty")
     */
    protected $title;

    /**
     * An acronym for the service
     *
     * @var string $acronym
     */
    protected $acronym;

    /**
     * @var string $slug
     */
    protected $slug;

    /**
     * The internal sorting for service list (if not alphabetic)
     *
     * @var string $sorting
     */
    protected $sorting;

    /**
     * A description of the services scientific activities
     *
     * @var string $description
     */
    protected $description;

    /**
     * Additional free text information about a service
     *
     * @var ObjectStorage<TtContent>
     */
    protected $contentElements;

    /**
     * Image
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @Extbase\ORM\Lazy
     */
    protected $image;

    /**
     * Duration of the service
     *
     * @var \Digicademy\ChfTime\Domain\Model\DateRanges $dateRange
     * @Extbase\ORM\Lazy
     */
    protected $dateRange;

    /**
     * The page where the service details are listed
     *
     * @var int $page
     */
    protected $page;

    /**
     * Selected categories for the service
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\Categories>
     * @Extbase\ORM\Lazy
     */
    protected $categories;

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
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
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
     * Returns the slug
     *
     * @return string $slug
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * Sets the slug
     *
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
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
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription(): string
    {
        return $this->description;
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
     * Sets the description
     *
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
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

    /**
     * Returns the categories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\Categories> $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets the categories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\Categories> $categories
     */
    public function setCategories($categories): void
    {
        $this->categories = $categories;
    }

}
