<?php

namespace OPNsense\Rathole;

use OPNsense\Base\BaseModel;

class Port extends BaseModel
{
    public function getNodes()
    {
        return [
            'port' => [
                'type' => 'ArrayField',
                'items' => [
                    'portuuid' => [
                        'type' => 'UUIDField',
                        'default' => '',
                        'type' => 'string'
                    ],
                    'enabled' => [
                        'type' => 'BooleanField',
                        'default' => '1',
                        'help' => 'Enable or disable this Rathole port'
                    ],
                    'name' => [
                        'type' => 'TextField',
                        'default' => '',
                        'required' => true,
                        'help' => 'Port name'
                    ],
                    'portnumber' => [
                        'type' => 'PortField',
                        'default' => '',
                        'required' => true,
                        'help' => 'Port number'
                    ],
                    'key_ref' => [
                        'type' => 'ModelRelationField',
                        'Model' => 'OPNsense.Rathole.Key',
                        'ValidationMessage' => 'Related Key not found',
                        'multiple' => false,
                        'required' => true,
                        'help' => 'Associated Private Key'
                    ],
                    'description' => [
                        'type' => 'TextField',
                        'default' => '',
                        'help' => 'Port description'
                    ]
                ]
            ]
        ];
    }
}
