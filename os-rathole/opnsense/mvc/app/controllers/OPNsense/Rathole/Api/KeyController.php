<?php

namespace OPNsense\Rathole\Api;

use OPNsense\Base\ApiMutableModelControllerBase;
use OPNsense\Rathole\Key;

class KeyController extends ApiMutableModelControllerBase
{
    protected static $internalModelName = 'key';
    protected static $internalModelClass = Key::class;
}
