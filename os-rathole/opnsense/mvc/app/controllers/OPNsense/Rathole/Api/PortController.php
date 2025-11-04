<?php

namespace OPNsense\Rathole\Api;

use OPNsense\Base\ApiMutableModelControllerBase;
use OPNsense\Rathole\Port;

class PortController extends ApiMutableModelControllerBase
{
    protected static $internalModelName = 'port';
    protected static $internalModelClass = Port::class;
}
