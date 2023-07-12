<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PipeDriveController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        // $apiToken = env('PIPEDRIVE_TOKEN');
        // $client   = new \Pipedrive\Client (null, null, null, $apiToken); // First 3 parameters are for OAuth2

        // try {
        //     $term                  = 'C17';
        //     $collect['term']       = $term;
        //     $fields                = 'code';
        //     $collect['fields']     = $fields;
        //     $exactMatch            = true;
        //     $collect['exactMatch'] = $exactMatch;

        //     $products = $client->getProducts()->searchProducts($collect);
        //     dd($products);
        // } catch (\Pipedrive\APIException $e) {
        //     echo $e;
        // }
    }

    /**
     * Pipedrive callback
     */
    public function callback() {
        session_start();
        $oAuthClientId     = env('oAuthClientId');
        $oAuthClientSecret = env('oAuthClientSecret');
        $oAuthRedirectUri  = env('PipeRedirectUri');
        $client            = new \Pipedrive\Client ($oAuthClientId, $oAuthClientSecret, $oAuthRedirectUri);

        // callback stores token for reuse when token is updated
        \Pipedrive\Configuration::$oAuthTokenUpdateCallback = function ($token) {
            $_SESSION['access_token'] = $token;
        };

        if (!isset($_GET['code'])) {
            // if authorization code is absent, redirect to authorization page
            $authUrl = $client->auth()->buildAuthorizationUrl();
            header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
        } else {
            try {
                // authorize client (calls token update callback as well)
                $token = $client->auth()->authorize($_GET['code']);

                // resume user activity
                $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/';
                header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
            } catch (\Pipedrive\Exceptions\OAuthProviderException $ex) {
                // handle exception
            }
        }

    }

    /**
     * Get Product details information from pipedrive API by Product name got from Scribble MAP redirection
     */
    public function getLandDetails(Request $request) {
        // dd($request->all());
        $name = $request->name ?? "";

        if ($name) {
            $apiToken = env('PIPEDRIVE_TOKEN');
            $client   = new \Pipedrive\Client (null, null, null, $apiToken); // First 3 parameters are for OAuth2

            $collect['term']       = $name;
            $fields                = 'code';
            $collect['fields']     = $fields;
            $exactMatch            = true;
            $collect['exactMatch'] = $exactMatch;

            $products = $client->getProducts()->searchProducts($collect);
            dd($products);

        }
        else{
            dd("no name found");
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $str       = file_get_contents('C:\Users\Dell\Downloads\map.geojson');
        $json      = json_decode($str, true);
        $locations = $json['features'];

        foreach ($locations as $key => $location) {
            $description = '<a href="http://127.0.0.1:8000/get-land-details?name=' . ($location['properties']['name'] ?? "") . '" onclick="if (confirm(\'Are you sure?\')){return true;}else{event.stopPropagation(); event.preventDefault();};">Buy Land</a>';
            if (isset($location['properties']['description']) && isset($location['properties']['area']) && isset($location['properties']['Price'])) {
                $location['properties']['description'] = $location['properties']['description'] . "<br>" . $description;
            }
            $locations[$key] = $location;
        }
        $json['features'] = $locations;
        $data             = json_encode($json);
        file_put_contents('output.geojson', $data);
        dd("pipedrive api");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }
}
