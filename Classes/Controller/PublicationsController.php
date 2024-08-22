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

namespace Digicademy\Academy\Controller;

use Digicademy\Academy\Domain\Model\Publications;
use Digicademy\Academy\Domain\Repository\PublicationsRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class PublicationsController extends ActionController
{
    /**
     * @var PublicationsRepository
     */
    protected PublicationsRepository $publicationsRepository;

    /**
     * @param ConfigurationManagerInterface $configurationManager
     * @param PublicationsRepository          $publicationsRepository
     */
    public function __construct(
        ConfigurationManagerInterface $configurationManager,
        PublicationsRepository $publicationsRepository
    ) {
        $this->injectConfigurationManager($configurationManager);
        $this->publicationsRepository = $publicationsRepository;
    }

    /**
     * Initializes the current action
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
                if ($this->settings['selectedPublications']) {
                    $selectedPublications = GeneralUtility::trimExplode(',', $this->settings['selectedPublications']);
                    $this->request = $this->request->withArgument('publication', $selectedPublications[0]);
                }
                break;
            default:
                break;
        }
    }

    /**
     * Displays a list of publications
     */
    public function listAction()
    {
        $this->view->assignMultiple(
            [
                'arguments' => $this->request->getArguments(),
                'publications'=> $this->publicationsRepository->findAll()

            ]
        );
    }

    public function listBySelectionAction()
    {
        $this->view->assignMultiple(
            [
                'arguments' => $this->request->getArguments(),
                'publications'=> $this->publicationsRepository->findBySelection($this->settings['selectedPublications'])
            ]
        );
    }

    /**
     * Displays a publication by uid
     *
     * @param Publications $publication
     */
    public function showAction(Publications $publication)
    {
        $this->view->assignMultiple(
            [
                'arguments' => $this->request->getArguments(),
                'publication'=> $publication
            ]
        );
    }
}
