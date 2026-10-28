<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

/**
 * Controller halaman Admin (template Upcube).
 */
class DashboardController extends Controller
{
    /**
     * Menampilkan halaman Dashboard.
     */
    public function index(): View
    {
        return view('admin.dashboard');
    }
}
