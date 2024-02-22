<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use OpenApi\Attributes as OAT;

#[OAT\Info(
    version: "1.0",
    description: "endpoints",
    title: "Feedback service",
)]
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
