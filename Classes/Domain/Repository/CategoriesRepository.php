<?php

/***************************************************************
 *  Copyright notice
 *
 *  Torsten Schrade <Torsten.Schrade@adwmainz.de>
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

namespace Digicademy\Academy\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\{
    QueryInterface,
    Repository
};

class CategoriesRepository extends Repository
{
    protected $defaultOrderings = [
        'title' => QueryInterface::ORDER_ASCENDING,
    ];

    protected $childCategoryUids = [];

    /**
     * @param int $categoryUid
     * @param int $maxLevels
     * @param int $getChildrenOnLevel
     *
     * @return array
     */
    public function findAllChildren(
        int $categoryUid,
        int $maxLevels = 1,
        int $getChildrenOnLevel = 0
    ): array {

        $this->childCategoryUids = [];

        $this->collectChildren($categoryUid, $maxLevels);

        if (
            $maxLevels > 1 &&
            $getChildrenOnLevel > 0 &&
            $getChildrenOnLevel <= $maxLevels
        ) {
            // extract specific level
            $result = $this->childCategoryUids[$getChildrenOnLevel];
        } else {
            // return all levels as two dimensional array (slice of level dimension)
            $result = array_merge(...$this->childCategoryUids);
        }

        return $result;
    }

    /**
     * @param int $categoryUid
     * @param int $maxLevels
     * @param int $currentLevel
     */
    protected function collectChildren(
        int $categoryUid,
        int $maxLevels,
        int $currentLevel = 1
    ): void {
        if ($currentLevel <= $maxLevels) {

            $query = $this->createQuery();

            $query->matching(
                $query->logicalAnd($query->equals('parent', $categoryUid))
            );

            $queryResult = $query->execute()->toArray();

            foreach ($queryResult as $category) {
                $categoryUid = $category->getUid();
                $this->childCategoryUids[$currentLevel][] = $categoryUid;
                self::collectChildren($categoryUid, $maxLevels, $currentLevel + 1);
            }
        }
    }
}
