<?php

namespace OPNsense\Rathole;

use OPNsense\Base\BaseModel;

class General extends BaseModel
{
    public function getNodes()
    {
        return [
            'enabled' => [
                'type' => 'BooleanField',
                'default' => '0',
                'help' => 'Enable Rathole service'
            ],
            'log_level' => [
                'type' => 'ChoiceField',
                'default' => 'info',
                'help' => 'Rathole log level',
                'choices' => [
                    'debug' => 'Debug',
                    'info' => 'Info',
                    'warn' => 'Warning',
                    'error' => 'Error'
                ]
            ]
        ];
    }
}
