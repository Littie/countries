<?php

namespace App\Http\Controllers;

use App\Http\Requests\LanguagesRequest;
use App\Models\Languages;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

/**
 * Class LanguagesController.
 *
 * @package App\Http\Controllers
 */
class LanguagesController extends Controller
{
    /**
     * Index page.
     *
     * @return View
     */
    public function index(): View
    {
        return view('languages.index',
            [
                'languages' => Languages::orderBy('created_at', 'desc')->paginate(20),
            ]
        );
    }

    /**
     * Display create language page.
     *
     * @return View
     */
    public function create(): View
    {
        return view('languages.create');
    }

    /**
     * Store language to db.
     *
     * @param LanguagesRequest $request
     *
     * @return RedirectResponse
     */
    public function store(LanguagesRequest $request): RedirectResponse
    {
        Languages::create($request->only(['name', 'code']));

        return redirect()->route('languages.index');
    }

    /**
     * Display edit language page.
     *
     * @param Languages $language
     *
     * @return View
     */
    public function edit(Languages $language): View
    {
        return view('languages.edit',
            [
                'language'   => $language,
            ]
        );
    }

    /**
     * Update language in db.
     *
     * @param LanguagesRequest $request
     * @param Languages $language
     *
     * @return RedirectResponse
     */
    public function update(LanguagesRequest $request, Languages $language): RedirectResponse
    {
        $language->update($request->only(['name', 'code']));

        return redirect()->route('languages.index');
    }

    /**
     * Delete language from db.
     *
     * @param Languages $language
     *
     * @return RedirectResponse
     */
    public function destroy(Languages $language): RedirectResponse
    {
        $language->delete();

        return back();
    }
}
