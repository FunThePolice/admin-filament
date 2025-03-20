<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlayerResource;
use App\Models\Player;
use Illuminate\Http\JsonResponse;

class ApiPlayerController extends Controller
{

    public function index(): JsonResponse
    {
        return response()->json(PlayerResource::collection(Player::all()));
    }

}
