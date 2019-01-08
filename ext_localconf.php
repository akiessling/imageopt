<?php

defined('TYPO3_MODE') || die('Access denied.');

if (TYPO3_MODE !== 'FE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][]
        = \SourceBroker\Imageopt\Command\ImageoptCommandController::class;
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:imageopt/Configuration/TsConfig/Page/tx_imageopt.tsconfig">'
    );
}

// Few xclasses to make TYPO3 to create copy of images even if not needed.
// This way we can make optimization on copies always to not destroy original images.
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][TYPO3\CMS\Core\Resource\Service\FileProcessingService::class] = [
    'className' => SourceBroker\Imageopt\Xclass\FileProcessingService::class
];
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer::class] = [
    'className' => SourceBroker\Imageopt\Xclass\ContentObjectRenderer::class
];
