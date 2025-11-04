<?php

/*
 * Copyright (C) 2016 Deciso B.V.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice,
 *    this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright
 *    notice, this list of conditions and the following disclaimer in the
 *    documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES,
 * INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
 * AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
 * OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

function rathole_enabled()
{
    $mdl = new \OPNsense\Rathole\Rathole();

    foreach ($mdl->networks->network->iterateItems() as $network) {
        if ($network->enabled == '1') {
            return true;
        }
    }

    return false;
}

function rathole_syslog()
{
    $logfacilities = [];

    $logfacilities['rathole'] = [
        'facility' => ['rathole'],
    ];

    $mdl = new \OPNsense\Rathole\Rathole();

    foreach ($mdl->networks->network->iterateItems() as $network) {
        if ($network->enabled == '1') {
            $logfacilities['rathole']['facility'][] = 'rathole.' . $network->name;
        }
    }

    return $logfacilities;
}

function rathole_services()
{
    $services = array();

    if (!rathole_enabled()) {
        return $services;
    }

    $services[] = array(
        'description' => gettext('Rathole Server'),
        'configd' => array(
            'restart' => array('rathole restart'),
            'start' => array('rathole start'),
            'stop' => array('rathole stop'),
        ),
        'name' => 'rathole',
    );

    return $services;
}

function rathole_interfaces()
{
    $interfaces = array();

    if (!rathole_enabled()) {
        return $interfaces;
    }

    $oic = array('enable' => true);
    $oic['if'] = 'rathole';
    $oic['descr'] = 'Rathole';
    $oic['type'] = 'none';
    $oic['virtual'] = true;
    $oic['networks'] = array();
    $interfaces['rathole'] = $oic;

    return $interfaces;
}

function rathole_xmlrpc_sync()
{
    $result = array();
    $result['id'] = 'rathole';
    $result['section'] = 'OPNsense.Rathole';
    $result['description'] = gettext('Rathole');
    $result['services'] = ['rathole'];
    return array($result);
}

function rathole_devices()
{
    return [['pattern' => '^rathole', 'volatile' => true]];
}
