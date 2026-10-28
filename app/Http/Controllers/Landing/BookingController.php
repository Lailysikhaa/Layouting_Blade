<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

/**
 * Controller halaman Landing Page (template Restoran).
 */
class BookingController extends Controller
{
    /**
     * Menampilkan halaman Booking.
     */
    public function index(): View
    {
        return view('landing.booking');
    }
}
