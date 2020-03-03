<?php

namespace MarketPlace\API;

class Asset extends UE4Client
{
    /**
     * Find assets on the market place
     */
    public function details(string $slug)
    {
        return $this->request("/marketplace/api/assets/asset/{$slug}");
    }
}
