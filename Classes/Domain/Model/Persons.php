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

use Digicademy\Academy\Domain\Model\Traits\{
    CategoriesTrait,
    DateRangeTrait,
    ImageTrait,
    PersistentIdentifierTrait,
    RelationsTrait,
    SlugTrait,
    SortingTrait
};
use Digicademy\Academy\Domain\Repository\RelationsRepository;
use Digicademy\ChfTime\Domain\Model\DateRanges;
use GeorgRinger\News\Domain\Model\TtContent;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Persons extends AbstractEntity
{
    use CategoriesTrait,
        DateRangeTrait,
        ImageTrait,
        PersistentIdentifierTrait,
        RelationsTrait,
        SlugTrait,
        SortingTrait;

    protected const RELATIONS_CRITERION = 'person_symmetric';

    /**
     * Given name of the person
     *
     * @var string $givenName
     */
    protected $givenName;

    /**
     * Additional name
     *
     * @var string $additionalName
     */
    protected $additionalName;

    /**
     * Family name of the person
     *
     * @var string $familyName
     * @Extbase\Validate("NotEmpty")
     */
    protected $familyName;

    /**
     * honorificSuffix
     *
     * @var string $honorificPrefix
     */
    protected $honorificPrefix;

    /**
     * honorificSuffix
     *
     * @var string $honorificSuffix
     */
    protected $honorificSuffix;

    /**
     * Additional free text information about a person
     *
     * @var ObjectStorage<TtContent>
     */
    protected $contentElements;

    /**
     * A page where details about the person can be found
     *
     * @var int $page
     */
    protected $page;

    /**
     * cv
     *
     * @var string $cv
     */
    protected $cv;

    /**
     * expertise
     *
     * @var string $expertise
     */
    protected $expertise;

    /**
     * awards
     *
     * @var string $awards
     */
    protected $awards;

    /**
     * publications
     *
     * @var string $publications
     */
    protected $publications;

    /**
     * Returns the given name
     *
     * @return string $givenName
     */
    public function getGivenName(): string
    {
        return $this->givenName;
    }

    /**
     * Sets the givenName
     *
     * @param string $givenName
     */
    public function setGivenName(string $givenName): void
    {
        $this->givenName = $givenName;
    }

    /**
     * Returns the additional name
     *
     * @return string $additionalName
     */
    public function getAdditionalName(): string
    {
        return $this->additionalName;
    }

    /**
     * Sets the additionalName
     *
     * @param string $additionalName
     */
    public function setAdditionalName(string $additionalName): void
    {
        $this->additionalName = $additionalName;
    }

    /**
     * Returns the family name
     *
     * @return string $familyName
     */
    public function getFamilyName(): string
    {
        return $this->familyName;
    }

    /**
     * Sets the familyName
     *
     * @param string $familyName
     */
    public function setFamilyName(string $familyName): void
    {
        $this->familyName = $familyName;
    }

    /**
     * Returns the honorific prefix
     *
     * @return string $honorificPrefix
     */
    public function getHonorificPrefix(): string
    {
        return $this->honorificPrefix;
    }

    /**
     * Sets the honorific prefix
     *
     * @param string $honorificPrefix
     */
    public function setHonorificPrefix(string $honorificPrefix): void
    {
        $this->honorificPrefix = $honorificPrefix;
    }

    /**
     * Returns the honorific suffix
     *
     * @return string $honorificSuffix
     */
    public function getHonorificSuffix(): string
    {
        return $this->honorificSuffix;
    }

    /**
     * Sets the honorific suffix
     *
     * @param string $honorificSuffix
     */
    public function setHonorificSuffix(string $honorificSuffix): void
    {
        $this->honorificSuffix = $honorificSuffix;
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
     * Returns the CV
     *
     * @return string $cv
     */
    public function getCv(): string
    {
        return $this->cv;
    }

    /**
     * Sets the CV
     *
     * @param string $cv
     */
    public function setCv(string $cv): void
    {
        $this->cv = $cv;
    }

    /**
     * Returns the expertise
     *
     * @return string $expertise
     */
    public function getExpertise(): string
    {
        return $this->expertise;
    }

    /**
     * Sets the expertise
     *
     * @param string $expertise
     */
    public function setExpertise(string $expertise): void
    {
        $this->expertise = $expertise;
    }

    /**
     * Returns the awards
     *
     * @return string $awards
     */
    public function getAwards(): string
    {
        return $this->awards;
    }

    /**
     * Sets the awards
     *
     * @param string $awards
     */
    public function setAwards(string $awards): void
    {
        $this->awards = $awards;
    }

    /**
     * Returns the publications
     *
     * @return string $publications
     */
    public function getPublications(): string
    {
        return $this->publications;
    }

    /**
     * Sets the publications
     *
     * @param string $publications
     */
    public function setPublications(string $publications): void
    {
        $this->publications = $publications;
    }
}
