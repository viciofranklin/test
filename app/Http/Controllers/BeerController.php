<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class BeerController extends Controller
{
    public function index()
    {
        request()->validate([
            'page' => 'integer|nullable',
        ]);

        $page = request()->query('page', 1);

        return Http::get(config('app.punk_api_url').'beers?per_page='.config('app.punk_api_perpage').'&page='.$page)->json();
    }
}
