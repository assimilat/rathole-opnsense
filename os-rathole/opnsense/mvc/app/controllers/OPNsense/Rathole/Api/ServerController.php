<?php

namespace OPNsense\Rathole\Api;

use OPNsense\Base\ApiMutableModelControllerBase;
use OPNsense\Rathole\Server;

class ServerController extends ApiMutableModelControllerBase
{
    protected static $internalModelName = 'server';
    protected static $internalModelClass = Server::class;
}
