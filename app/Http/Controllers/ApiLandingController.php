<?php

namespace App\Http\Controllers;

use App\Models\Property;

class ApiLandingController extends Controller
{
    public function index($kota = null) {
        $properties = Property::all();

        if ($kota) {
            $properties = $properties->sortBy(function ($property) use ($kota) {
                return similar_text(strtolower($property->kota), strtolower($kota));
            }, SORT_DESC, true);
        }

        return response()->json($properties->values());
    }
}
