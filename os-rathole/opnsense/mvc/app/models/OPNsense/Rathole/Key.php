<?php

namespace OPNsense\Rathole;

use OPNsense\Base\BaseModel;

class Key extends BaseModel
{
    public function getNodes()
    {
        return [
            'key' => [
                'type' => 'ArrayField',
                'items' => [
                    'keyuuid' => [
                        'type' => 'UUIDField',
                        'default' => '',
                        'type' => 'string'
                    ],
                    'enabled' => [
                        'type' => 'BooleanField',
                        'default' => '1',
                        'help' => 'Enable or disable this private key'
                    ],
                    'name' => [
                        'type' => 'TextField',
                        'default' => '',
                        'required' => true,
                        'help' => 'Key name'
                    ],
                    'privatekey' => [
                        'type' => 'TextField',
                        'default' => '',
                        'required' => true,
                        'help' => 'Rathole private key'
                    ],
                    'description' => [
                        'type' => 'TextField',
                        'default' => '',
                        'help' => 'Key description'
                    ]
                ]
            ]
        ];
    }
}
