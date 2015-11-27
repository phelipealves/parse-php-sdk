<?php

namespace Parse\Test;

use Parse\ParseClient;
use Parse\ParseObject;
use Parse\ParseQuery;

class Helper
{
    public static function setUp()
    {
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
        date_default_timezone_set('UTC');

        ParseClient::initialize(
            'HLBUVuVrfmQ1JFEOC4qu7ChTsI4OfEaa7wz2tbx1',
            't3j3WunRpSLrD2hQrNHMOLoEBoPXQzuRVN6t1ToD',
            'hDydAVManvhIOeHFi91FraU7aUV0X3ErGvswPDV9'
        );
    }

    public static function tearDown()
    {
    }

    public static function clearClass($class)
    {
        $query = new ParseQuery($class);
        $query->each(
            function (ParseObject $obj) {
                $obj->destroy(true);
            },
            true
        );
    }
}
