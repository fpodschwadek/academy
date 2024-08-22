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
    LabelTrait,
    PersistentIdentifierTrait,
    SlugTrait,
    TypeTrait
};
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Annotation\ORM\Lazy;

class Hcards extends AbstractEntity
{
    use LabelTrait,
        PersistentIdentifierTrait,
        SlugTrait,
        TypeTrait;

    /**
     * Addresses
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\HcardsAdr>
     * @Lazy
     */
    protected $adr;

    /**
     * Telefone numbers
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\HcardsTel>
     * @Lazy
     */
    protected $tel;

    /**
     * Email Addresses
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\HcardsEmail>
     * @Lazy
     */
    protected $email;

    /**
     * URLs
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\HcardsUrl>
     * @Lazy
     */
    protected $url;

    /**
     * Geo coordinates
     *
     * @var string $geo
     */
    protected $geo;

    /**
     * Returns the addresses
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\HcardsAdr> $adr
     */
    public function getAdr()
    {
        return $this->adr;
    }

    /**
     * Sets the addresses
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\HcardsAdr> $adr
     */
    public function setAdr($adr): void
    {
        $this->adr = $adr;
    }

    /**
     * Returns the telephone numbers
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\HcardsTel> $tel
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Sets the telephone numbers
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\HcardsTel> $tel
     */
    public function setTel($tel): void
    {
        $this->tel = $tel;
    }

    /**
     * Returns the email addresses
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\HcardsEmail> $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email addresses
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\HcardsEmail> $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * Returns the urls
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\HcardsUrl> $url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets the urls
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Digicademy\Academy\Domain\Model\HcardsUrl> $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }

    /**
     * Returns geo
     *
     * @return string $geo
     */
    public function getGeo(): string
    {
        return $this->geo;
    }

    /**
     * Sets geo
     *
     * @param string $geo
     */
    public function setGeo(string $geo): void
    {
        $this->geo = $geo;
    }
}
