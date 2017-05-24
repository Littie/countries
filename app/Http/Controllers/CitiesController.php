<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Http\Requests\CitiesRequest;
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
     * @param Countries $country
     *
     * @return View
     */
    public function create(Countries $country): View
    {
        return view('cities.create', [
            'country' => $country,
            'languages' => Languages::all()->diff($country->languages),
        ]);
    }

    /**
     * Store city to db.
     *
     * @param CitiesRequest $request
     * @param Countries $country
     *
     * @return RedirectResponse
     */
    public function store(CitiesRequest $request, Countries $country): RedirectResponse
    {
        $city = $country->cities()->create([
            'name' => $request->get('name'),
        ]);

        $city->languages()->sync($request->get('languages'));

        return redirect()->route('countries.show', ['country' => $country]);
    }

    /**
     * Display edit city page.
     *
     * @param Countries $country
     * @param Cities $city
     *
     * @return View
     */
    public function edit(Countries $country, Cities $city): View
    {
        return view('cities.edit',
            [
                'city'   => $city,
                'languages' => Languages::all()->diff($city->country->languages),
            ]
        );
    }

    /**
     * Update city in db.
     *
     * @param CitiesRequest $request
     * @param Countries $country
     * @param Cities $city
     *
     * @return RedirectResponse
     */
    public function update(CitiesRequest $request, Countries $country, Cities $city): RedirectResponse
    {
        $city->update($request->only(['name']));

        $city->languages()->sync($request->get('languages'));

        return redirect()->route('cities.show', ['country' => $country, 'city' => $city]);
    }

    /**
     * Delete city from db.
     *
     * @param Countries $country
     * @param Cities $city
     *
     * @return RedirectResponse
     */
    public function destroy(Countries $country, Cities $city): RedirectResponse
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
                'languages' => $city->languages->merge($country->languages),
            ]
        );
    }
}
