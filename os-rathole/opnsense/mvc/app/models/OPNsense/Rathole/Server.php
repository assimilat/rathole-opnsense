<?php

namespace OPNsense\Rathole;

use OPNsense\Base\BaseModel;

class Server extends BaseModel
{
    public function getNodes()
    {
        return [
            'server' => [
                'type' => 'ArrayField',
                'items' => [
                    'serveruuid' => [
                        'type' => 'UUIDField',
                        'default' => '',
                        'type' => 'string'
                    ],
                    'enabled' => [
                        'type' => 'BooleanField',
                        'default' => '1',
                        'help' => 'Enable or disable this Rathole server'
                    ],
                    'name' => [
                        'type' => 'TextField',
                        'default' => '',
                        'required' => true,
                        'help' => 'Server name'
                    ],
                    'listenport' => [
                        'type' => 'PortField',
                        'default' => '',
                        'required' => true,
                        'help' => 'Listen port for the Rathole server'
                    ],
                    'accesstoken' => [
                        'type' => 'TextField',
                        'default' => '',
                        'required' => true,
                        'help' => 'Access token for the Rathole server'
                    ],
                    'description' => [
                        'type' => 'TextField',
                        'default' => '',
                        'help' => 'Server description'
                    ]
                ]
            ]
        ];
    }
}
