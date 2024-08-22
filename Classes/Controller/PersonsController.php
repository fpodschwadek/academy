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

use Digicademy\Academy\Domain\Model\Persons;
use Digicademy\Academy\Domain\Repository\PersonsRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Http\ForwardResponse;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class PersonsController extends ActionController
{
    /**
     * @var PersonsRepository
     */
    protected PersonsRepository $personsRepository;

    /**
     * @param ConfigurationManagerInterface $configurationManager
     * @param PersonsRepository             $personsRepository
     */
    public function __construct(
        ConfigurationManagerInterface $configurationManager,
        PersonsRepository $personsRepository
    ) {
        $this->injectConfigurationManager($configurationManager);
        $this->personsRepository = $personsRepository;
    }

    /**
     * Displays a list of persons, possibly filtered by categories
     */
    public function listAction()
    {
        $this->view->assignMultiple(
            [
                'arguments' => $this->request->getArguments(),
                'persons' => $this->personsRepository->findAll(),
            ]
        );
    }

    public function listBySelectionAction()
    {
        $this->view->assignMultiple(
            [
                'arguments' => $this->request->getArguments(),
                'persons' => $this->personsRepository->findBySelection($this->settings['selectedPersons']),
            ]
        );
    }

    /**
     * @return ResponseInterface
     */
    public function listByRoleAction(): ResponseInterface
    {
        $persons = $this->personsRepository->findByRole($this->settings['selectedRole']);
        if ($persons->count() > 0) {
            $response = new ForwardResponse('list');
            $response = $response->withArguments(['persons' => $persons]);
        } else {
            $response = new ForwardResponse('list');
        }
        return $response;
    }

    /**
     * Displays a person by uid
     *
     * @param Persons $person
     */
    public function showAction(Persons $person)
    {
        $this->view->assignMultiple(
            [
                'arguments' => $this->request->getArguments(),
                'person' => $person,
            ]
        );
    }
}
