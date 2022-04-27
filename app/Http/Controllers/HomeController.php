<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): Factory|View|Application
    {
        $result = 'This is home page';

        return view('home.index', [
            'data' => $result,
            'min' => 1,
            'max' => 2,
        ]);
    }
}
