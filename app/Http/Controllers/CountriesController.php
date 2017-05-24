<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Http\Requests\CountriesRequest;
use App\Models\Countries;
use App\Models\Languages;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

/**
 * Class CountriesController.
 *
 * @package App\Http\Controllers
 */
class CountriesController extends Controller
{
    /**
     * Index page.
     *
     * @return View
     */
    public function index(): View
    {
        return view('countries.index',
            [
                'countries' => Countries::orderBy('created_at', 'desc')->paginate(20),
            ]
        );
    }

    /**
     * Display create country page.
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
     * Store country to db.
     *
     * @param CountriesRequest $request
     *
     * @return RedirectResponse
     */
    public function store(CountriesRequest $request): RedirectResponse
    {
        $country = Countries::create($request->only(['name', 'code']));

        $country->languages()->sync($request->get('languages'));

        return back();
    }

    /**
     * Display edit country page.
     *
     * @param Countries $country
     *
     * @return View
     */
    public function edit(Countries $country): View
    {
        return view('countries.edit',
            [
                'country'   => $country,
                'languages' => Languages::all(),
            ]
        );
    }

    /**
     * Update country in db.
     *
     * @param CountriesRequest $request
     * @param Countries $country
     *
     * @return RedirectResponse
     */
    public function update(CountriesRequest $request, Countries $country): RedirectResponse
    {
        $country->update($request->only(['name', 'code']));

        $country->languages()->sync($request->get('languages'));

        return redirect()->route('countries.index');
    }

    /**
     * Delete country from db.
     *
     * @param Countries $country
     *
     * @return RedirectResponse
     */
    public function destroy(Countries $country): RedirectResponse
    {
        $country->delete();

        return back();
    }

    /**
     * Show single country information.
     *
     * @param Countries $country
     *
     * @return View
     */
    public function show(Countries $country): View
    {
        return view('countries.show',
            [
                'country'   => $country,
                'cities'    => $country->cities,
                'languages' => $country->languages,
            ]
        );
    }
}
