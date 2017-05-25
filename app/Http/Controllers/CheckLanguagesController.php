<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\Countries;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

/**
 * Class CheckLanguagesController.
 *
 * @package App\Http\Controllers
 */
class CheckLanguagesController extends Controller
{
    /**
     * @return View
     */
    public function index()
    {
        return view('languages.check.index',
            [
                'countries' => Countries::all(),
            ]
        );
    }

    /**
     * Get all city of specific country.
     *
     * @param Countries $country
     *
     * @return JsonResponse
     */
    public function getCountryCities(Countries $country): JsonResponse
    {
        return response()->json($country->cities);
    }

    /**
     * Get all languages of specific city.
     *
     * @param Cities $city
     *
     * @return JsonResponse
     */
    public function getCityLanguages(Cities $city): JsonResponse
    {
        return response()->json($city->languages);
    }
}
