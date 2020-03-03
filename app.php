<?php

require __DIR__ .'/vendor/autoload.php';

use MarketPlace\API\Search;
use MarketPlace\API\Asset;

$output = new Symfony\Component\Console\Output\ConsoleOutput();
$output->writeln("Hello!");




$parser = new Search();
$result = $parser->findAssets([
    'category' => Search::CATEGORIES[0]
]);

// get first result
$first = $result->elements[0];

$output->writeln("Result: {$first->title}");

// get asset info

$asset = new Asset();
$asset = $asset->details($first->urlSlug);
$output->writeln("Asset Description: {$asset->data->description}");

