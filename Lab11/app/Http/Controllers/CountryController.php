<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class CountryController extends Controller
{
    /**
     * Pobierz wszystkie kraje z bazy danych.
     * Przekształć kraje na przekształcone obiekty JSON i zwróć je jako tablicę JSON z obiektami i status 200.
     */
    public function index()
{
    $countries = DB::table('countries')->get();
    $countriesCollection = [];

    foreach ($countries as $country) {
        $countryItem = [
            'id' => $country->id,
            'code' => $country->code,
            'currency' => $country->currency,
            'area' => $country->area,
            'language' => $country->language,
            '_links' => [
                'self' => [
                    'href' => route('countries.show', ['country' => $country->id]),
                ],
            ],
        ];

        $countriesCollection[] = $countryItem;
    }

    return response()->json($countriesCollection, 200);
}


    /**
     * Pobierz kraj o danym id_kraju z bazy danych.
     * Przekształć kraj na przekształcony obiekt JSON i zwróć go jako obiekt JSON z status 200, jeśli istnieje.
     * Zwróć status 404, jeśli kraj nie istnieje.
     */
    public function show($id)
    {
        $country = Country::find($id);

        if (!$country) {
            return response()->json(['error' => 'Country not found'], 404);
        }

        $transformedCountry = $this->transformCountry($country);

        return response()->json($transformedCountry, 200);
    }

    /**
     * Dodaj nowy kraj do bazy danych na podstawie danych z żądania.
     * Zwróć przekształcony obiekt JSON nowego kraju i status 201, jeśli dodanie przebiegło pomyślnie.
     * Zwróć status 400/422 i informacje o błędach walidacji, jeśli dane są niepoprawne.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10|unique:countries',
            'currency' => 'required|string|max:255',
            'area' => 'nullable|numeric',
            'language' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $newCountry = Country::create($request->all());

        $transformedCountry = $this->transformCountry($newCountry);

        return response()->json($transformedCountry, 201);
    }

    /**
     * Zaktualizuj kraj o danym id_kraju na podstawie danych z żądania.
     * Zwróć przekształcony obiekt JSON zaktualizowanego kraju i status 200, jeśli aktualizacja przebiegła pomyślnie.
     * Zwróć status 400/422 i informacje o błędach walidacji, jeśli dane są niepoprawne.
     * Zwróć status 404, jeśli kraj o danym id_kraju nie istnieje.
     */
    public function update(Request $request, $id)
    {
        $country = Country::find($id);

        if (!$country) {
            return response()->json(['error' => 'Country not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10|unique:countries,code,' . $id,
            'currency' => 'required|string|max:255',
            'area' => 'nullable|numeric',
            'language' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $country->update($request->all());

        $transformedCountry = $this->transformCountry($country);

        return response()->json($transformedCountry, 200);
    }

    /**
     * Przekształć obiekt kraju na przekształcony obiekt JSON.
     */
    private function transformCountry($country)
    {
        return [
            'id' => $country->id,
            'name' => $country->name,
            'code' => $country->code,
            'currency' => $country->currency,
            'area' => $country->area,
            'language' => $country->language,
        ];
    }

    /**
 * Usuń kraj o danym id_kraju z bazy danych.
 * Zwróć odpowiedni status HTTP w zależności od wyniku operacji.
 */
    public function destroy($id)
    {
        $country = Country::find($id);

        if (!$country)
        {
            return response()->json(['error' => 'Country not found'], 404);
        }

        $country->delete();

        return response()->json(['message' => 'Country deleted successfully'],  200);
    }
}
