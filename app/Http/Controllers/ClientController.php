<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientShowRequest;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use Illuminate\Http\JsonResponse;

class ClientController extends Controller
{
    public function show(ClientShowRequest $request): JsonResponse
    {
        $client = Client::where('phone_number', $request->phone_number)->first();

        return response()->json([
            'message' => __('messages.client_show.success'),
            'data' => new ClientResource($client),
        ]);
    }

    public function index(): JsonResponse
    {
        $clients = Client::all();

        return response()->json([
            'message' => __('messages.client_index.success'),
            'data' => ClientResource::collection($clients),
        ]);
    }

}
