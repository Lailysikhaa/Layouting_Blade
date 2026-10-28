<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

/**
 * Controller halaman Admin (template Upcube).
 */
class DataTableController extends Controller
{
    /**
     * Menampilkan halaman Data Tables.
     */
    public function index(): View
    {
        return view('admin.tables-datatable');
    }
}
