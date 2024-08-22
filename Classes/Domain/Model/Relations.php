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

use Digicademy\ChfTime\Domain\Model\DateRanges;
use Digicademy\Academy\Domain\Model\Traits\{
    PersistentIdentifierTrait,
    TypeTrait
};
use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Relations extends AbstractEntity
{
    use PersistentIdentifierTrait, TypeTrait;

    /**
     * The role of the relation
     *
     * @var \Digicademy\Academy\Domain\Model\Roles $role
     * @Extbase\ORM\Lazy
     */
    protected $role;

    /**
     * Freetext variant of the relation's role
     *
     * @var string $roleFreetext
     */
    protected $roleFreetext;

    /**
     * Related project
     *
     * @var \Digicademy\Academy\Domain\Model\Projects $project
     * @Extbase\ORM\Lazy
     */
    protected $project;

    /**
     * Related project
     *
     * @var \Digicademy\Academy\Domain\Model\Projects $projectSymmetric
     * @Extbase\ORM\Lazy
     */
    protected $projectSymmetric;

    /**
     * Related Person
     *
     * @var \Digicademy\Academy\Domain\Model\Persons $person
     * @Extbase\ORM\Lazy
     */
    protected $person;

    /**
     * Related Person
     *
     * @var \Digicademy\Academy\Domain\Model\Persons $personSymmetric
     * @Extbase\ORM\Lazy
     */
    protected $personSymmetric;

    /**
     * Related Hcard
     *
     * @var \Digicademy\Academy\Domain\Model\Hcards $hcard
     * @Extbase\ORM\Lazy
     */
    protected $hcard;

    /**
     * Related Unit
     *
     * @var \Digicademy\Academy\Domain\Model\Units $unit
     * @Extbase\ORM\Lazy
     */
    protected $unit;

    /**
     * Related Unit
     *
     * @var \Digicademy\Academy\Domain\Model\Units $unitSymmetric
     * @Extbase\ORM\Lazy
     */
    protected $unitSymmetric;

    /**
     * Related News
     *
     * @var \Digicademy\Academy\Domain\Model\News $news
     * @Extbase\ORM\Lazy
     */
    protected $news;

    /**
     * Related News
     *
     * @var \Digicademy\Academy\Domain\Model\News $newsSymmetric
     * @Extbase\ORM\Lazy
     */
    protected $newsSymmetric;

    /**
     * Related Event
     *
     * @var \Digicademy\Academy\Domain\Model\Events $event
     * @Extbase\ORM\Lazy
     */
    protected $event;

    /**
     * Related Event
     *
     * @var \Digicademy\Academy\Domain\Model\Events $eventSymmetric
     * @Extbase\ORM\Lazy
     */
    protected $eventSymmetric;

    /**
     * Related medium
     *
     * @var \Digicademy\Academy\Domain\Model\Media $medium
     * @Extbase\ORM\Lazy
     */
    protected $medium;

    /**
     * Related medium
     *
     * @var \Digicademy\Academy\Domain\Model\Media $mediumSymmetric
     * @Extbase\ORM\Lazy
     */
    protected $mediumSymmetric;

    /**
     * Related Service
     *
     * @var \Digicademy\Academy\Domain\Model\Services $service
     * @Extbase\ORM\Lazy
     */
    protected $service;

    /**
     * Related Service
     *
     * @var \Digicademy\Academy\Domain\Model\Services $serviceSymmetric
     * @Extbase\ORM\Lazy
     */
    protected $serviceSymmetric;

    /**
     * Related Products
     *
     * @var \Digicademy\Academy\Domain\Model\Products $product
     * @Extbase\ORM\Lazy
     */
    protected $product;

    /**
     * Related symmetric products
     *
     * @var \Digicademy\Academy\Domain\Model\Products $productSymmetric
     * @Extbase\ORM\Lazy
     */
    protected $productSymmetric;

    /**
     * Related Publications
     *
     * @var \Digicademy\Academy\Domain\Model\Publications $publication
     * @Extbase\ORM\Lazy
     */
    protected $publication;

    /**
     * Related symmetric publication
     *
     * @var \Digicademy\Academy\Domain\Model\Publications $publicationSymmetric
     * @Extbase\ORM\Lazy
     */
    protected $publicationSymmetric;

    /**
     * Freetext relation
     *
     * @var string $freetext
     */
    protected $freetext;

    /**
     * Duration of the relation
     *
     * @var \Digicademy\ChfTime\Domain\Model\DateRanges $dateRange
     */
    protected $dateRange;

    /**
     * getRole
     *
     * @return \Digicademy\Academy\Domain\Model\Roles $role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * setRole
     *
     * @param \Digicademy\Academy\Domain\Model\Roles $role
     */
    public function setRole(Roles $role): void
    {
        $this->role = $role;
    }

    /**
     * getRoleFreetext
     *
     * @return string $roleFreetext
     */
    public function getRoleFreetext(): string
    {
        return $this->roleFreetext;
    }

    /**
     * setRoleFreetext
     *
     * @param string $roleFreetext
     */
    public function setRoleFreetext(string $roleFreetext): void
    {
        $this->roleFreetext = $roleFreetext;
    }

    /**
     * Returns the project
     *
     * @return \Digicademy\Academy\Domain\Model\Projects $project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Sets the project
     *
     * @param \Digicademy\Academy\Domain\Model\Projects $project
     */
    public function setProject(Projects $project): void
    {
        $this->project = $project;
    }

    /**
     * Returns the projectSymmetric
     *
     * @return \Digicademy\Academy\Domain\Model\Projects $projectSymmetric
     */
    public function getProjectSymmetric()
    {
        return $this->projectSymmetric;
    }

    /**
     * Sets the projectSymmetric
     *
     * @param \Digicademy\Academy\Domain\Model\Projects $projectSymmetric
     */
    public function setProjectSymmetric(Projects $projectSymmetric): void
    {
        $this->projectSymmetric = $projectSymmetric;
    }

    /**
     * Returns the person
     *
     * @return \Digicademy\Academy\Domain\Model\Persons $person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets the person
     *
     * @param \Digicademy\Academy\Domain\Model\Persons $person
     */
    public function setPerson(Persons $person): void
    {
        $this->person = $person;
    }

    /**
     * Returns the personSymmetric
     *
     * @return \Digicademy\Academy\Domain\Model\Persons $personSymmetric
     */
    public function getPersonSymmetric()
    {
        return $this->personSymmetric;
    }

    /**
     * Sets the personSymmetric
     *
     * @param \Digicademy\Academy\Domain\Model\Persons $personSymmetric
     */
    public function setPersonSymmetric(Persons $personSymmetric): void
    {
        $this->personSymmetric = $personSymmetric;
    }

    /**
     * Returns the person
     *
     * @return \Digicademy\Academy\Domain\Model\Hcards $hcard
     */
    public function getHcard()
    {
        return $this->hcard;
    }

    /**
     * Sets the person
     *
     * @param \Digicademy\Academy\Domain\Model\Hcards $hcard
     */
    public function setHcard(Hcards $hcard): void
    {
        $this->hcard = $hcard;
    }

    /**
     * Returns the person
     *
     * @return \Digicademy\Academy\Domain\Model\Units $unit
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets the person
     *
     * @param \Digicademy\Academy\Domain\Model\Units $unit
     */
    public function setUnit(Units $unit): void
    {
        $this->unit = $unit;
    }

    /**
     * Returns the person
     *
     * @return \Digicademy\Academy\Domain\Model\Units $unitSymmetric
     */
    public function getUnitSymmetric()
    {
        return $this->unitSymmetric;
    }

    /**
     * Sets the person
     *
     * @param \Digicademy\Academy\Domain\Model\Units $unitSymmetric
     */
    public function setUnitSymmetric(Units $unitSymmetric): void
    {
        $this->unitSymmetric = $unitSymmetric;
    }

    /**
     * Returns the news
     *
     * @return \Digicademy\Academy\Domain\Model\News $news
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Sets the news
     *
     * @param \Digicademy\Academy\Domain\Model\News $news
     */
    public function setNews(News $news): void
    {
        $this->news = $news;
    }

    /**
     * Returns the newsSymmetric
     *
     * @return \Digicademy\Academy\Domain\Model\News $newsSymmetric
     */
    public function getNewsSymmetric()
    {
        return $this->newsSymmetric;
    }

    /**
     * Sets the newsSymmetric
     *
     * @param \Digicademy\Academy\Domain\Model\News $newsSymmetric
     */
    public function setNewsSymmetric(News $newsSymmetric): void
    {
        $this->newsSymmetric = $newsSymmetric;
    }

    /**
     * Returns the event
     *
     * @return \Digicademy\Academy\Domain\Model\Events $event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets the event
     *
     * @param \Digicademy\Academy\Domain\Model\Events $event
     */
    public function setEvent(Events $event): void
    {
        $this->event = $event;
    }

    /**
     * Returns the eventSymmetric
     *
     * @return \Digicademy\Academy\Domain\Model\Events $eventSymmetric
     */
    public function getEventSymmetric()
    {
        return $this->eventSymmetric;
    }

    /**
     * Sets the eventSymmetric
     *
     * @param \Digicademy\Academy\Domain\Model\Events $eventSymmetric
     */
    public function setEventSymmetric(Events $eventSymmetric): void
    {
        $this->eventSymmetric = $eventSymmetric;
    }

    /**
     * Returns the medium
     *
     * @return \Digicademy\Academy\Domain\Model\Media $medium
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * Sets the medium
     *
     * @param \Digicademy\Academy\Domain\Model\Media $medium
     */
    public function setMedium(Media $medium): void
    {
        $this->medium = $medium;
    }

    /**
     * Returns the mediumSymmetric
     *
     * @return \Digicademy\Academy\Domain\Model\Media $mediumSymmetric
     */
    public function getMediumSymmetric()
    {
        return $this->mediumSymmetric;
    }

    /**
     * Sets the mediumSymmetric
     *
     * @param \Digicademy\Academy\Domain\Model\Media $mediumSymmetric
     */
    public function setMediumSymmetric(Media $mediumSymmetric): void
    {
        $this->mediumSymmetric = $mediumSymmetric;
    }

    /**
     * Returns the service
     *
     * @return \Digicademy\Academy\Domain\Model\Services $service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets the service
     *
     * @param \Digicademy\Academy\Domain\Model\Services $service
     */
    public function setService(Services $service): void
    {
        $this->service = $service;
    }

    /**
     * Returns the serviceSymmetric
     *
     * @return \Digicademy\Academy\Domain\Model\Services $serviceSymmetric
     */
    public function getServiceSymmetric()
    {
        return $this->serviceSymmetric;
    }

    /**
     * Sets the serviceSymmetric
     *
     * @param \Digicademy\Academy\Domain\Model\Services $serviceSymmetric
     */
    public function setServiceSymmetric(Services $serviceSymmetric): void
    {
        $this->serviceSymmetric = $serviceSymmetric;
    }

    /**
     * Returns the product
     *
     * @return \Digicademy\Academy\Domain\Model\Products $product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets the product
     *
     * @param \Digicademy\Academy\Domain\Model\Products $product
     */
    public function setProduct(Products $product): void
    {
        $this->product = $product;
    }

    /**
     * Returns the productSymmetric
     *
     * @return \Digicademy\Academy\Domain\Model\Products $productSymmetric
     */
    public function getProductSymmetric()
    {
        return $this->productSymmetric;
    }

    /**
     * Sets the productSymmetric
     *
     * @param \Digicademy\Academy\Domain\Model\Products $productSymmetric
     */
    public function setProductSymmetric(Products $productSymmetric): void
    {
        $this->productSymmetric = $productSymmetric;
    }

    /**
     * Returns the publication
     *
     * @return \Digicademy\Academy\Domain\Model\Publications $publication
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Sets the publication
     *
     * @param \Digicademy\Academy\Domain\Model\Publications $publication
     */
    public function setPublication(Publications $publication): void
    {
        $this->publication = $publication;
    }

    /**
     * Returns the publicationSymmetric
     *
     * @return \Digicademy\Academy\Domain\Model\Publications $publicationSymmetric
     */
    public function getPublicationSymmetric()
    {
        return $this->publicationSymmetric;
    }

    /**
     * Sets the publicationSymmetric
     *
     * @param \Digicademy\Academy\Domain\Model\Publications $publicationSymmetric
     */
    public function setPublicationSymmetric(Publications $publicationSymmetric): void
    {
        $this->publicationSymmetric = $publicationSymmetric;
    }

    /**
     * getFreetext
     *
     * @return string $freetext
     */
    public function getFreetext(): string
    {
        return $this->freetext;
    }

    /**
     * setFreetext
     *
     * @param string $freetext
     */
    public function setFreetext(string $freetext): void
    {
        $this->freetext = $freetext;
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

}
