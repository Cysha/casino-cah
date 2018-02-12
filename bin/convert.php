<?php

require_once '../vendor/autoload.php';

$source = file_get_contents(__DIR__ . '/../data/official.json');

$data       = collect(json_decode($source, JSON_OBJECT_AS_ARRAY));
$blackCards = collect($data->get('blackCards'));
$whiteCards = collect($data->get('whiteCards'));

$decks = $data->get('order');

collect($decks)->each(function ($deckName) use ($whiteCards, $blackCards, $data) {
    $saveLocation = __DIR__ . '/../src/Providers/' . $deckName . '.php';
    $templatePath = __DIR__ . '/template/CardTemplate.php';
    $deck         = collect($data->get($deckName));
    $template     = str_replace([
        '{NAME}',
        '{WHITE_CARD_NAMES}',
        '{BLACK_CARD_NAMES}',
    ], [
        $deckName,
        $blackCards->only($deck->get('black'))->map(function ($card) use ($deckName) {
            return sprintf('["text" => "%s", "pick" => %d]', addslashes($card['text']), addslashes($card['pick']));
        })->implode(",\n"),
        $whiteCards->only($deck->get('white'))->map(function ($card) use ($deckName) {
            return sprintf('["text" => "%s"]', addslashes($card));
        })->implode(",\n"),
    ], file_get_contents($templatePath));
    file_put_contents($saveLocation, $template);
});