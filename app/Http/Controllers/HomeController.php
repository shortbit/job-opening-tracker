<?php namespace App\Http\Controllers;

use Redirect;
use View;
use \App\Http\Models\Application;

class HomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. As the application HOME is also the main application area,
    | this controller handles the displaying of applications overview.
    |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Initial home/landing page.
     *
     * This is where non-authenticated users/visitors will arrive when come to root URL (www.site.com/)
     * This contains a quick promotional message and a login form.
     *
     * @return View
     */
    public function index()
    {
        return Redirect::to('/dashboard');
    }

    public function dashboard()
    {
        return View::make('app3', ['applications' => Application::all()] );

    }
}
