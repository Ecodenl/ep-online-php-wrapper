<?php

namespace Ecodenl\EpOnlinePhpWrapper;

use Ecodenl\EpOnlinePhpWrapper\Resources\PandEnergielabel;
use Ecodenl\EpOnlinePhpWrapper\Traits\FluentCaller;

class EpOnline
{
    use FluentCaller;

    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function ping(): string
    {
        return $this->client->get('Ping');
    }

    public function pandEnergielabel(): PandEnergielabel
    {
        return new PandEnergielabel($this->client, 'PandEnergielabel');
    }
}
