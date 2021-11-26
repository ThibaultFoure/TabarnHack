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
use App\Model\PlaylistManager;

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

    public const TABLE = 'category';

    public function index()
    {
        $playlistManager = new PlaylistManager();
        $categories = $playlistManager->selectAll();

        return $this->twig->render('Home/index.html.twig', ['categories' => $categories]);
    }

    public function selectPlaylistsByCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $newGet = array_map('trim', $_GET);

            $client = HttpClient::create();
            $response = $client->request('GET', 'https://api.deezer.com/search/playlist?q='
                . $newGet['name'] . '&index0&limit=15');

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

    public function selectOnePlaylist()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $newGet = array_map('trim', $_GET);

            $client = HttpClient::create();
            $response = $client->request('GET', 'https://api.deezer.com/playlist/'
                . $newGet['id']);

            $statusCode = $response->getStatusCode();
            $playlist = $response->toArray();

            if ($statusCode === 200) {
                // foreach ($results as $playlists) {
                //     $playlists = $results['data'];
                // }
                return $this->twig->render('Playlist/index.html.twig', ['playlist' => $playlist]);
            }
        }
    }
}
