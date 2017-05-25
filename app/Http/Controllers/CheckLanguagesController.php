<?php

namespace App\Http\Controllers;

use App\Models\Countries;
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

    public function getCountryCities(Countries $country)
    {
        return response()->json($country->cities);
    }
}
