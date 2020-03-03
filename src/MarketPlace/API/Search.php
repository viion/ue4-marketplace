<?php

namespace MarketPlace\API;

class Search extends UE4Client
{
    // todo - make these 1 constant each
    const CATEGORIES = [
        'assets/2d',            // 2D ASSETS
        'assets/animations',    // ANIMATIONS
        'assets/archvis',       // ARCHITECTURAL VISUALIZATION
        'assets/blueprints',    // BLUEPRINTS
        'assets/characters',    // CHARACTERS
        'assets/codeplugins',   // CODE PLUGINS
        'assets/environments',  // ENVIRONMENTS
        'assets/showcasedemos', // EPIC CONTENT
        'assets/materials',     // MATERIALS
        'assets/megascans',     // MEGASCANS
        'assets/music',         // MUSIC
        'assets/props',         // PROPS
        'assets/soundfx',       // SOUND EFFECTS
        'assets/textures',      // TEXTURES
        'assets/fx',            // VISUAL EFFECTS
        'assets/weapons',       // WEAPONS
    ];

    const SORT_FIELDS = [
        'effectiveDate',
        'currentPrice',
        'discountPercentage',
        'title',
    ];

    const DEFAULT_OPTIONS = [
        'start'   => 0,
        'count'   => 50,
        'sortBy'  => self::SORT_FIELDS[0],
        'sortDir' => 'DESC'
    ];

    /**
     * Find assets on the market place
     */
    public function findAssets(array $options = [])
    {
        $options = array_merge(self::DEFAULT_OPTIONS, $options);

        return $this->request('/marketplace/api/assets', $options);
    }
}
