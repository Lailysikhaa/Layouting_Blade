<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

/**
 * Controller halaman Admin (template Upcube).
 */
class LoginController extends Controller
{
    /**
     * Menampilkan halaman Login.
     */
    public function index(): View
    {
        return view('admin.login');
    }
}
