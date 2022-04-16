<?php

namespace App\Http\Controllers\common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Models\Countries;
use App\Models\Currencies;

use App\Http\Resources\CountryResource;
use App\Http\Resources\CountryResourceCollection;

use App\Http\Resources\CurrencyResourceResource;
use App\Http\Resources\CurrencyResourceCollection;


class commonFunctions extends Controller
{
    //Get All Designations from DB
    public function getAllCountries(Request $request){
        
        $data = Countries::select(["id","countryName"])
                ->get();
        
        $countries = [];

        if (count($data) > 0) {

            foreach ($data as $country) {
                $countries[] = array(
                    "id" => $country->id,
                    "countryName" => $country->countryName,
                );
            }
        }
        
        return response()->json(new CountryResourceCollection($data));
    }

    public function getAllCurrencies(Request $request){
        
        $data = Currencies::select(["id","currencyName"])
                ->get();
        
        $currencies = [];

        if (count($data) > 0) {

            foreach ($data as $currency) {
                $currencies[] = array(
                    "id" => $currency->id,
                    "currencyName" => $currency->currencyName,
                );
            }
        }
        
        return response()->json(new CurrencyResourceCollection($data));
    }
}
