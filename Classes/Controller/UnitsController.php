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

namespace Digicademy\Academy\Controller;

use Digicademy\Academy\Domain\Model\Units;
use Digicademy\Academy\Domain\Repository\UnitsRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Mvc\Exception\InvalidArgumentNameException;

class UnitsController extends ActionController
{
    /**
     * @var UnitsRepository
     */
    protected UnitsRepository $unitsRepository;

    /**
     * @param ConfigurationManagerInterface $configurationManager
     * @param UnitsRepository          $unitsRepository
     */
    public function __construct(
        ConfigurationManagerInterface $configurationManager,
        UnitsRepository $unitsRepository
    ) {
        $this->injectConfigurationManager($configurationManager);
        $this->unitsRepository = $unitsRepository;
    }

    /**
     * Initializes the current action
     *
     * @throws InvalidArgumentNameException
     */
    public function initializeAction()
    {
        switch ($this->actionMethodName) {
            case 'listAction':
                if ($this->settings['selectedCategories']) {
                    $this->request = $this->request->withArgument('selectedCategories', $this->settings['selectedCategories']);
                }
                break;
            case 'showAction':
                if ($this->settings['selectedUnits']) {
                    $selectedUnits = GeneralUtility::trimExplode(',', $this->settings['selectedUnits']);
                    $this->request = $this->request->withArgument('unit', $selectedUnits[0]);
                }
                // no break
            default:
                break;
        }
    }

    /**
     * Displays a list of units
     */
    public function listAction()
    {
        $this->view->assignMultiple(
            [
                'arguments' => $this->request->getArguments(),
                'units' => $this->unitsRepository->findAll(),
            ]
        );
    }

    public function listBySelectionAction()
    {
        $this->view->assignMultiple(
            [
                'arguments' => $this->request->getArguments(),
                'units' => $this->unitsRepository->findBySelection($this->settings['selectedUnits']),
            ]
        );
    }

    /**
     * Displays a unit by uid
     *
     * @param Units $unit
     */
    public function showAction(Units $unit)
    {
        $this->view->assignMultiple(
            [
                'arguments' => $this->request->getArguments(),
                'units' => $unit,
            ]
        );
    }
}
