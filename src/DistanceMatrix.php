<?php

namespace danilocgsilva\googleMaps;

use danilocgsilva\googleMaps\Service;
use danilocgsilva\googleMaps\Client;

/**
 * Directions Service
 * 
 * @author  Nick Tsai <myintaer@gmail.com>
 * @since   1.0.0
 * @see https://developers.google.com/maps/documentation/distance-matrix/
 */
class DistanceMatrix extends Service
{
    const API_PATH = '/maps/api/distancematrix/json';

    /**
     * Distance matrix
     *
     * @param Client $client
     * @param string $origin 
     * @param string $destination 
     * @param array Query parameters
     * @return array Result
     */
    public static function distanceMatrix(Client $client, $origins, $destinations, $params=[])
    {
        $params['origins'] = (string) $origins;
        $params['destinations'] = (string) $destinations;

        return self::requestHandler($client, self::API_PATH, $params);
    }
}
