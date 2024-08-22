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

use Digicademy\Academy\Domain\Model\Relations;
use Digicademy\Academy\Domain\Model\Traits\RelationsTrait;
use GeorgRinger\Eventnews\Domain\Model\News as EventNews;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Events extends EventNews
{
    use RelationsTrait;

    protected const RELATIONS_CRITERION = 'event_symmetric';

    /**
     * Returns the relations
     *
     * For backwards compatibility, we keep this method as a wrapper around the
     * generic getRelations() method from the Relations trait.
     *
     * @return ObjectStorage<Relations> $eventRelations
     */
    public function getEventRelations(): ObjectStorage
    {
        return $this->getRelations();
    }

    /**
     * Sets the relations
     *
     * For backwards compatibility, we keep this method as a wrapper around the
     * generic setRelations() method from the Relations trait.
     *
     * @param ObjectStorage<Relations> $eventRelations
     */
    public function setEventRelations(ObjectStorage $eventRelations): void
    {
        $this->setRelations($eventRelations);
    }
}
