<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\Cities;
use App\Models\Countries;
use App\Models\Languages;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

/**
 * Class CitiesController.
 *
 * @package App\Http\Controllers
 */
class CitiesController extends Controller
{
    /**
     * Index page.
     *
     * @return View
     */
    public function index(): View
    {
        return view('cities.index',
            [
                'cities' => Cities::orderBy('created_at', 'desc')->paginate(20),
            ]
        );
    }

    /**
     * Display create city page.
     *
     * @return View
     */
    public function create(): View
    {
        return view('countries.create', [
            'languages' => Languages::all(),
        ]);
    }

    /**
     * Store city to db.
     *
     * @param CityRequest $request
     *
     * @return RedirectResponse
     */
    public function store(CityRequest $request): RedirectResponse
    {
        $country = Countries::create($request->only(['name', 'code']));

        $country->languages()->sync($request->get('languages'));

        return back();
    }

    /**
     * Display edit city page.
     *
     * @param Cities $city
     *
     * @return View
     */
    public function edit(Cities $city): View
    {
        return view('countries.edit',
            [
                'city'   => $city,
                'languages' => Languages::all()->diff($city->country->languages),
            ]
        );
    }

    /**
     * Update city in db.
     *
     * @param CityRequest $request
     * @param Cities $city
     *
     * @return RedirectResponse
     */
    public function update(CityRequest $request, Cities $city): RedirectResponse
    {
//        $country->update($request->only(['name', 'code']));
//
//        $country->languages()->sync($request->get('languages'));

        return redirect()->route('countries.index');
    }

    /**
     * Delete city from db.
     *
     * @param Cities $city
     *
     * @return RedirectResponse
     */
    public function destroy(Cities $city): RedirectResponse
    {
        $city->delete();

        return back();
    }

    /**
     * Show single city information.
     *
     * @param Countries $country
     * @param Cities $city
     *
     * @return View
     */
    public function show(Countries $country, Cities $city): View
    {
        return view('cities.show',
            [
                'city'   => $city,
                'country'    => $city->country,
                'languages' => $city->languages->merge($city->country->languages),
            ]
        );
    }
}
