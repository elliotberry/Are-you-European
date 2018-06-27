<?php
/**
 * @file
 * Contains \Drupal\get_geo\Controller\GeoController.
 */
namespace Drupal\get_geo\Controller;

use Symfony\Component\HttpFoundation\Response;

class GeoController {
    public function content()
    {
        $results = file_get_contents('http://www.geoplugin.net/json.gp?ip=' . $_SERVER['REMOTE_ADDR']);
        $response = new Response();
        $response->setContent($results);
        $response->setMaxAge(10);
        return $response;
    }
}
?>