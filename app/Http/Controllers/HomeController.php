<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Inertia\Inertia;

class HomeController extends Controller {
    public function index() {
        return Inertia::render('Pages/Index');
    }

    public function about() {

        return Inertia::render('Pages/About', [
            'list' => [1, 2, 3, 4]
        ]);
    }

    public function accounts() {
        return Inertia::render('Pages/Accounts', [
            'list' => Account::all()
        ]);
    }
}
