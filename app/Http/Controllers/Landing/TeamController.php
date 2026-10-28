<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

/**
 * Controller halaman Landing Page (template Restoran).
 */
class TeamController extends Controller
{
    /**
     * Menampilkan halaman Team.
     */
    public function index(): View
    {
        return view('landing.team');
    }
}
