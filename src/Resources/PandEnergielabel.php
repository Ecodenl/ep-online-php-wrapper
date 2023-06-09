<?php

namespace Ecodenl\EpOnlinePhpWrapper\Resources;

class PandEnergielabel extends Resource
{
    /**
     * Returns specific data about the given identification.
     *
     * @param  string  $adresseerbaarObjectId
     *
     * @return array
     */
    public function byId(string $adresseerbaarObjectId): array
    {
        return $this->client->get($this->uri("AdresseerbaarObject/{$adresseerbaarObjectId}"));
    }

    public function byAddress($attributes): array
    {
        $response = $this->client->get($this->uri('Adres'), static::buildQuery($attributes));

        return $response;
    }
}
