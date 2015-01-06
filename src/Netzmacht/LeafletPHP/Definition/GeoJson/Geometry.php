<?php

/**
 * @package    dev
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\LeafletPHP\Definition\GeoJson;

/**
 * Interface Geometry is used to mark an object as a geometry feature. It extends the \JsonSerializable Interface.
 *
 * @package Netzmacht\LeafletPHP\Definition\GeoJson
 * @see     http://geojson.org/geojson-spec.html#geometry-objects
 */
interface Geometry extends \JsonSerializable
{
}
