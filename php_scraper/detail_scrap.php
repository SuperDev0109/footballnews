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
$desc = $xpath->evaluate('//h2[@class="ArticleHeroBlack__teaser--light caption-s5-fx mb-5 text-br-2-90 light:text-br-2-20 sm:mb-8 sm:text-16 sm:leading-19 lg:mb-5 lg:w-3/4 lg:text-18 lg:leading-22"]');
$alt = $xpath->evaluate('//div[@class="lg:common-container mt-5 bg-br-2-10 bg-opacity-30 light:bg-transparent xl:w-full w-100 relative flex items-center"]//div//figcaption//p');

$data = [];

$data['title'] = $title[0]->textContent;
$data['desc'] = $desc[0]->textContent;
$data['alt'] = $alt[0]->textContent;

echo json_encode($data);