<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

// TYPOSCRIPT

ExtensionManagementUtility::addStaticFile('academy', 'Configuration/TypoScript', 'Academy');

// PLUGIN DEFINITIONS

ExtensionUtility::registerPlugin(
    'academy',
    'Projects',
    'Academy: Projects'
);

ExtensionUtility::registerPlugin(
    'academy',
    'Units',
    'Academy: Units'
);

ExtensionUtility::registerPlugin(
    'academy',
    'Persons',
    'Academy: Persons'
);

ExtensionUtility::registerPlugin(
    'academy',
    'Media',
    'Academy: Media'
);

ExtensionUtility::registerPlugin(
    'academy',
    'Mediaviewer',
    'Academy: Mediaviewer'
);

ExtensionUtility::registerPlugin(
    'academy',
    'Search',
    'Academy: Search'
);

ExtensionUtility::registerPlugin(
    'academy',
    'Hcards',
    'Academy: Hcards'
);

ExtensionUtility::registerPlugin(
    'academy',
    'Products',
    'Academy: Products'
);

ExtensionUtility::registerPlugin(
    'academy',
    'Services',
    'Academy: Services'
);

ExtensionUtility::registerPlugin(
    'academy',
    'Publications',
    'Academy: Publications'
);

// TABLES
ExtensionManagementUtility::allowTableOnStandardPages('tx_academy_domain_model_projects');
ExtensionManagementUtility::allowTableOnStandardPages('tx_academy_domain_model_units');
ExtensionManagementUtility::allowTableOnStandardPages('tx_academy_domain_model_persons');
ExtensionManagementUtility::allowTableOnStandardPages('tx_academy_domain_model_hcards');
ExtensionManagementUtility::allowTableOnStandardPages('tx_academy_domain_model_hcards_adr');
ExtensionManagementUtility::allowTableOnStandardPages('tx_academy_domain_model_hcards_adrcomponents');
ExtensionManagementUtility::allowTableOnStandardPages('tx_academy_domain_model_hcards_tel');
ExtensionManagementUtility::allowTableOnStandardPages('tx_academy_domain_model_hcards_email');
ExtensionManagementUtility::allowTableOnStandardPages('tx_academy_domain_model_hcards_url');
ExtensionManagementUtility::allowTableOnStandardPages('tx_academy_domain_model_relations');
ExtensionManagementUtility::allowTableOnStandardPages('tx_academy_domain_model_roles');
ExtensionManagementUtility::allowTableOnStandardPages('tx_academy_domain_model_media');
ExtensionManagementUtility::allowTableOnStandardPages('tx_academy_domain_model_products');
ExtensionManagementUtility::allowTableOnStandardPages('tx_academy_domain_model_publications');
ExtensionManagementUtility::allowTableOnStandardPages('tx_academy_domain_model_services');
