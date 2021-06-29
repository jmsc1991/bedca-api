<?php
namespace Jmsc1991\BedcaAPI\Tests;

use PHPUnit_Framework_TestCase;
use Jmsc1991\BedcaAPI\BedcaClient;

/**
 * @property BedcaClient api
 */
class TestFoodGroups extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->api = new BedcaClient();
    }
}