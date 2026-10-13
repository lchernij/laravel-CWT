<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Laravel\Mcp\Request;

class MeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): UserResource
    {
        $user = $request->user();

        return UserResource::make($user);
    }
}
