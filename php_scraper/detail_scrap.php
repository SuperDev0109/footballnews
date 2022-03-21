<?php
# scraping books to scrape: https://books.toscrape.com/
require 'vendor/autoload.php';
$httpClient = new \GuzzleHttp\Client();

$story = $_POST['story'];

$response = $httpClient->get($story);
$htmlString = (string) $response->getBody();
//add this line to suppress any warnings
libxml_use_internal_errors(true);
$doc = new DOMDocument();
$doc->loadHTML($htmlString);
$xpath = new DOMXPath($doc);

$title = $xpath->evaluate('//title');
$desc = $xpath->evaluate('//h2[@class="ArticleHeroBlack__teaser--light"]');
$alt = $xpath->evaluate('//div[@class="lg:common-container"]//div//figcaption//p');

$data = [];

$data['title'] = $title[0]->textContent;
$data['desc'] = $desc[0]->textContent;
$data['alt'] = $alt[0]->textContent;

echo json_encode($data);