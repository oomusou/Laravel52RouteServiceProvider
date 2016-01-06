<?php


namespace App\Http;


class AWSRoute implements MyRouteInterface
{

    public function toHome()
    {
        return view('aws');
    }
}