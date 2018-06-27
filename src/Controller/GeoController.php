<?php
/**
 * @file
 * Contains \Drupal\get_geo\Controller\GeoController.
 */
namespace Drupal\get_geo\Controller;
class GeoController {
  /**
 * API call for free geolocation service; for GDPR scripts.
 * Account info:
 * URL: ipinfodb.com
 * Username: tankandappnexus
 * Password: PAdKck3h8qORIomj
*/
  public function content() {
    $api_key = "69d2040ced2e453abde3936225d7b27cc7fb557f43c1f180374e2e3e7bd87d9c";
    $results = file_get_contents('http://api.ipinfodb.com/v3/ip-city/?key=' . $api_key . '&ip=' . $_SERVER['REMOTE_ADDR']); //Getting JSON from server to serve to JS
      return array(
        '#type' => 'markup',
        '#markup' => t(results),
      );
    }
}