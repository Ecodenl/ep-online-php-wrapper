<?php

namespace Ecodenl\EpOnlinePhpWrapper\Resources;

class PandEnergielabel extends Resource
{
    /**
     * Returns the energy label for a specific BAG "verblijfsobject" ID.
     */
    public function byId(string $adresseerbaarObjectId): array
    {
        return $this->client->get($this->uri("AdresseerbaarObject/{$adresseerbaarObjectId}"));
    }

    /**
     * Returns the energy label for an address.
     */
    public function byAddress(array $attributes): array
    {
        return $this->client->get($this->uri('Adres'), static::buildQuery($attributes));
    }
}
