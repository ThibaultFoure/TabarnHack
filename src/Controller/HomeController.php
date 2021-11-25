<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\RequireStrictTypesSniff;
use Symfony\Component\HttpClient\HttpClient;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        return $this->twig->render('Home/index.html.twig');
    }

    public function selectPlaylistsByCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $newGet = array_map('trim', $_GET);

            $client = HttpClient::create();
            $response = $client->request('GET', 'https://api.deezer.com/search/playlist/?q='
                . $newGet['title'] . '&index0&limit=15');

            $statusCode = $response->getStatusCode();
            $results = $response->toArray();
            $playlists = [];
            if ($statusCode === 200) {
                foreach ($results as $playlists) {
                    $playlists = $results['data'];
                }
                return $this->twig->render('Home/playlists.html.twig', ['playlists' => $playlists]);
            }
        }
    }
}
