<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

/**
 * Controller halaman Admin (template Upcube).
 */
class FormElementController extends Controller
{
    /**
     * Menampilkan halaman Form Elements.
     */
    public function index(): View
    {
        return view('admin.form-elements');
    }
}
