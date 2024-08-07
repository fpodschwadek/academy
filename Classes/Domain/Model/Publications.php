<?php

namespace Digicademy\Academy\Domain\Model;

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

use Digicademy\Academy\Domain\Repository\RelationsRepository;
use GeorgRinger\News\Domain\Model\TtContent;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use Digicademy\ChfTime\Domain\Model\DateRanges;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Publications extends AbstractEntity
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
     * The identifier of the publication
     *
     * @var string $identifier
     */
    protected $identifier;

    /**
     * The title of the publication
     *
     * @var string $title
     * @Extbase\Validate("NotEmpty")
     */
    protected $title;

    /**
     * An subtitle for the publication
     *
     * @var string $subtitle
     */
    protected $subtitle;

    /**
     * An abbreviation for the publication
     *
     * @var string $abbreviation
     */
    protected $abbreviation;

    /**
     * An volume for the publication
     *
     * @var string $volume
     */
    protected $volume;

    /**
     * An number for the publication
     *
     * @var string $number
     */
    protected $number;

    /**
     * An issue for the publication
     *
     * @var string $issue
     */
    protected $issue;

    /**
     * An edition for the publication
     *
     * @var string $edition
     */
    protected $edition;

    /**
     * An series for the publication
     *
     * @var string $series
     */
    protected $series;

    /**
     * An startPage for the publication
     *
     * @var string $startPage
     */
    protected $startPage;

    /**
     * An endPage for the publication
     *
     * @var string $endPage
     */
    protected $endPage;

    /**
     * An totalPages for the publication
     *
     * @var string $totalPages
     */
    protected $totalPages;

    /**
     * @var string $slug
     */
    protected $slug;

    /**
     * A description of the publication
     *
     * @var string $description
     */
    protected $description;

    /**
     * A bibliographic note
     *
     * @var string $bibliographicNote
     */
    protected $bibliographicNote;

    /**
     * Additional free text information about a publication
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
    protected $image = null;

    /**
     * Publication date of the publication
     *
     * @var \Digicademy\ChfTime\Domain\Model\DateRanges $dateRange
     */
    protected $dateRange = null;

    /**
     * The page where the publication details are listed
     *
     * @var int $page
     */
    protected $page;

    /**
     * Relations of the publication with persons, events, news, media etc.
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\Relations>
     * @Extbase\ORM\Lazy
     */
    protected $relations = null;

    /**
     * Selected categories for the publication
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\Categories>
     * @Extbase\ORM\Lazy
     */
    protected $categories = null;

    /**
     * Returns the persistentIdentifier
     *
     * @return string $persistentIdentifier
     */
    public function getPersistentIdentifier()
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
     *
     * @return void
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
     *
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns the subtitle
     *
     * @return string $subtitle
     */
    public function getSubtitle(): string
    {
        return $this->subtitle;
    }

    /**
     * Sets the subtitle
     *
     * @param string $subtitle
     *
     * @return void
     */
    public function setSubtitle(string $subtitle): void
    {
        $this->subtitle = $subtitle;
    }

    /**
     * Returns the abbreviation
     *
     * @return string $abbreviation
     */
    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }

    /**
     * Sets the abbreviation
     *
     * @param string $abbreviation
     *
     * @return void
     */
    public function setAbbreviation(string $abbreviation): void
    {
        $this->abbreviation = $abbreviation;
    }

    /**
     * Returns the volume
     *
     * @return string $volume
     */
    public function getVolume(): string
    {
        return $this->volume;
    }

    /**
     * Sets the volume
     *
     * @param string $volume
     *
     * @return void
     */
    public function setVolume(string $volume): void
    {
        $this->volume = $volume;
    }

    /**
     * Returns the number
     *
     * @return string $number
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Sets the number
     *
     * @param string $number
     *
     * @return void
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * Returns the issue
     *
     * @return string $issue
     */
    public function getIssue(): string
    {
        return $this->issue;
    }

    /**
     * Sets the issue
     *
     * @param string $issue
     *
     * @return void
     */
    public function setIssue(string $issue): void
    {
        $this->issue = $issue;
    }

    /**
     * Returns the edition
     *
     * @return string $edition
     */
    public function getEdition(): string
    {
        return $this->edition;
    }

    /**
     * Sets the edition
     *
     * @param string $edition
     *
     * @return void
     */
    public function setEdition(string $edition): void
    {
        $this->edition = $edition;
    }

    /**
     * Returns the series
     *
     * @return string $series
     */
    public function getSeries(): string
    {
        return $this->series;
    }

    /**
     * Sets the series
     *
     * @param string $series
     *
     * @return void
     */
    public function setSeries(string $series): void
    {
        $this->series = $series;
    }

    /**
     * Returns the startPage
     *
     * @return string $startPage
     */
    public function getStartPage(): string
    {
        return $this->startPage;
    }

    /**
     * Sets the startPage
     *
     * @param string $startPage
     *
     * @return void
     */
    public function setStartPage(string $startPage): void
    {
        $this->startPage = $startPage;
    }

    /**
     * Returns the endPage
     *
     * @return string $endPage
     */
    public function getEndPage(): string
    {
        return $this->endPage;
    }

    /**
     * Sets the endPage
     *
     * @param string $endPage
     *
     * @return void
     */
    public function setEndPage(string $endPage): void
    {
        $this->endPage = $endPage;
    }

    /**
     * Returns the totalPages
     *
     * @return string $totalPages
     */
    public function getTotalPages(): string
    {
        return $this->totalPages;
    }

    /**
     * Sets the totalPages
     *
     * @param string $totalPages
     *
     * @return void
     */
    public function setTotalPages(string $totalPages): void
    {
        $this->totalPages = $totalPages;
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
     *
     * @return void
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
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
     * Sets the description
     *
     * @param string $description
     *
     * @return void
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns the bibliographicNote
     *
     * @return string $bibliographicNote
     */
    public function getBibliographicNote(): string
    {
        return $this->bibliographicNote;
    }

    /**
     * Sets the bibliographicNote
     *
     * @param string $bibliographicNote
     *
     * @return void
     */
    public function setBibliographicNote(string $bibliographicNote): void
    {
        $this->bibliographicNote = $bibliographicNote;
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
     * @return void
     */
    public function setContentElements(ObjectStorage $contentElements): void
    {
        $this->contentElements = $contentElements;
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
     *
     * @return void
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
     *
     * @return void
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
     *
     * @return void
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * Returns the relations
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\Relations> $relations
     */
    public function getRelations()
    {
        $objectStorage = GeneralUtility::makeInstance(ObjectStorage::class);
        $objectManager = GeneralUtility::makeInstance(ObjectManager::class);
        $relationsRepository = $objectManager->get(RelationsRepository::class);
        $symmetricRelations = $relationsRepository->findByProjectSymmetric($this);
        if ($symmetricRelations) {
            foreach ($symmetricRelations as $symmetricRelation) {
                $this->relations->attach($symmetricRelation);
            }
        }
        return $this->relations;
    }

    /**
     * Sets the relations
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\Relations> $relations
     *
     * @return void
     */
    public function setRelations($relations): void
    {
        $this->relations = $relations;
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
     *
     * @return void
     */
    public function setCategories($categories): void
    {
        $this->categories = $categories;
    }

}
