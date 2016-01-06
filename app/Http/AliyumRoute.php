<?php


namespace App\Http;


class AliyumRoute implements MyRouteInterface
{
    public function toHome()
    {
        return view('aliyum');
    }
}