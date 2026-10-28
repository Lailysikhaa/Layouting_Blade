<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

/**
 * Controller halaman Admin (template Upcube).
 */
class SweetAlertController extends Controller
{
    /**
     * Menampilkan halaman Sweet Alert 2.
     */
    public function index(): View
    {
        return view('admin.sweet-alert');
    }
}
