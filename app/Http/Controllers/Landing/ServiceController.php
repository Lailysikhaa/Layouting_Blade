<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

/**
 * Controller halaman Landing Page (template Restoran).
 */
class ServiceController extends Controller
{
    /**
     * Menampilkan halaman Service.
     */
    public function index(): View
    {
        return view('landing.service');
    }
}
