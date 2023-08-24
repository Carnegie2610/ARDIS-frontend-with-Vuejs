<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    private $baseRepostory;
    public function __construct(baseRepostory $baseRepostory)
    {
        $this -> baseRepostory = $baseRepostory;
    }
}


