<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:imageopt/Resources/Private/Language/locallang_db.xlf:tx_imageopt_domain_model_executorresult',
        'label' => 'size_before',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => false,
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'hideTable' => 1,
        'searchFields' => 'size_before,size_after,command,command_output,command_status,executed_successfully,error_message',
        'iconfile' => 'EXT:imageopt/Resources/Public/Icons/tx_imageopt_domain_model_executorresult.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'size_before, size_after, command, command_output, command_status, executed_successfully, error_message',
    ],
    'types' => [
        '1' => ['showitem' => 'size_before, size_after, command, command_output, command_status, executed_successfully, error_message'],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],

        'size_before' => [
            'exclude' => true,
            'label' => 'LLL:EXT:imageopt/Resources/Private/Language/locallang_db.xlf:tx_imageopt_domain_model_executorresult.size_before',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'readOnly' => 1
            ]
        ],
        'size_after' => [
            'exclude' => true,
            'label' => 'LLL:EXT:imageopt/Resources/Private/Language/locallang_db.xlf:tx_imageopt_domain_model_executorresult.size_after',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'readOnly' => 1
            ]
        ],
        'command' => [
            'exclude' => true,
            'label' => 'LLL:EXT:imageopt/Resources/Private/Language/locallang_db.xlf:tx_imageopt_domain_model_executorresult.command',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => 1
            ],
        ],
        'command_output' => [
            'exclude' => true,
            'label' => 'LLL:EXT:imageopt/Resources/Private/Language/locallang_db.xlf:tx_imageopt_domain_model_executorresult.command_output',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => 1
            ],
        ],
        'command_status' => [
            'exclude' => true,
            'label' => 'LLL:EXT:imageopt/Resources/Private/Language/locallang_db.xlf:tx_imageopt_domain_model_executorresult.command_status',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => 1
            ],
        ],
        'executed_successfully' => [
            'exclude' => true,
            'label' => 'LLL:EXT:imageopt/Resources/Private/Language/locallang_db.xlf:tx_imageopt_domain_model_executorresult.executed_successfully',
            'config' => [
                'readOnly' => 1,
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'error_message' => [
            'exclude' => true,
            'label' => 'LLL:EXT:imageopt/Resources/Private/Language/locallang_db.xlf:tx_imageopt_domain_model_executorresult.error_message',
            'config' => [
                'readOnly' => 1,
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
    
        'providerresult' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
