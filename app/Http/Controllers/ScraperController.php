<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Goutte\Client;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;

class ScraperController extends Controller
{
    function scrapper()
    {

        // $client = \Symfony\Component\Panther\Client::createFirefoxClient();

        // $crawler = $client->request('GET', 'https://www.viabtc.com/tools/calculator?symbol=BTC');
        // $client->waitFor('#myElement');

        $browser = new HttpBrowser(HttpClient::create());

        $browser->request('GET', 'https://www.viabtc.com/tools/calculator?symbol=BTC');
        // $browser->
        $response = $browser->getResponse();
        var_dump($response);
        die;
        // // $browser->submitForm('Sign in', ['login' => '...', 'password' => '...']);

        $crawler = new Crawler($crawler->html());

        $crawler = $crawler->filterXPath("//div[contains(@class, 'bottom-row')]//div[contains(@class, 'mt-7')]//div[contains(@class, 'f-num')]//span[contains(@class, 'text-2xl')]
        ");

        var_dump($crawler->innerText());
        // var_dump($response);

        // $openPullRequests = trim($browser->clickLink('Pull requests')->filter(
        //     '.table-list-header-toggle a:nth-child(1)'
        // )->text());
    }
}
