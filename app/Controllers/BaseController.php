<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    protected $request;
    protected $helpers = [];

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $current = current_url();
        $excluded = ['login', '404'];

        if (!session()->has('last_url') || !$this->urlContains($current, $excluded)) {
            session()->set('last_url', previous_url());
        }
    }

    // ⬇️ Fungsi bantu diletakkan di luar initController
    private function urlContains($url, array $keywords): bool
    {
        foreach ($keywords as $keyword) {
            if (strpos($url, $keyword) !== false) {
                return true;
            }
        }
        return false;
    }
}
