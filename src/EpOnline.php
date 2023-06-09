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

    public function info(): array
    {
        return $this->client->get('info');
    }

    public function pandEnergielabel(): PandEnergielabel
    {
        return new PandEnergielabel($this->client, 'PandEnergielabel');
    }
}
