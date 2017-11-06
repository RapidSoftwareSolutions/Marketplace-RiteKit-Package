<?php
$routes = [
    'metadata',
    'getAutoHashtaggedText',
    'getListOfHashtagSuggestions',
    'getHashtagHistory',
    'getTrendingHashtags',
    'getEmojiSuggestionsForText',
    'getTextWithEmojiAdded',
    'getInfluencersForHashtag',
    'createImageFromText',
    'getLogoImage',
    'getShortenLink',
    'getListOfCTAs'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

