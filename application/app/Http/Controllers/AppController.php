<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;

class AppController extends Controller
{
    public function home(): View
    {
        // dd();

        return view('app.home');
    }
}
