<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

/**
 * Controller halaman Landing Page (template Restoran).
 */
class HomeController extends Controller
{
    /**
     * Menampilkan halaman Home.
     */
    public function index(): View
    {
        return view('landing.home');
    }
}
