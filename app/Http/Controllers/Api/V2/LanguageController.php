<?php

namespace App\Http\Controllers\Api\V2;


use App\Search;
use App\Product;
use App\Brand;
use App\Shop;
use Illuminate\Http\Request;
use App\Language;
use App\Http\Resources\V2\LanguageCollection;


class LanguageController extends Controller
{
    public function getList(Request $request)
    {
        return new LanguageCollection(Language::all());
        
    }

}
