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

use Digicademy\Academy\Domain\Repository\HcardsRepository;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class HcardsController extends ActionController
{
    /**
     * @param ConfigurationManagerInterface $configurationManager
     * @param HcardsRepository $hcardsRepository
     */
    public function __construct(
        protected readonly ConfigurationManagerInterface $configurationManager,
        protected readonly HcardsRepository $hcardsRepository
    )
    {
        $this->injectConfigurationManager($this->configurationManager);
    }

    /**
     * Initializes the current action
     *
     * @return void
     */
    public function initializeAction(): void
    {
        if ($this->settings['selectedHcards']) {
            $this->request->setArgument('selectedHcards', $this->settings['selectedHcards']);
        }
    }

    /**
     * Displays hcards by their uid
     *
     * @return void
     */
    public function listSelectedAction(): void
    {
        $selectedHcardsArray = GeneralUtility::trimExplode(',', $this->request->getArgument('selectedHcards'));
        $selectedHcards = $this->objectManager->get(ObjectStorage::class);
        foreach ($selectedHcardsArray as $selectedHcard) {
            $selectedHcards->attach($this->hcardsRepository->findByUid($selectedHcard));
        }
        $this->view->assign('selectedHcards', $selectedHcards);
        $this->view->assign('arguments', $this->request->getArguments());
    }

}
