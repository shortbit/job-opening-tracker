<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Http\Models\Application;
use App\Http\Models\AppMethod;
use App\Http\Models\AppStatus;
use App\Http\Models\AppSources;
use Input;
use Redirect;
use Auth;
class ApplicationsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{ 
		$apps = Application::where('user_id', 1)->get();
		$methods = AppMethod::all(['name', 'slug'])->toArray();
		$statuses = AppStatus::all(['name', 'slug'])->toArray();
		$sources = \DB::table('application_sources')->pluck('name', 'id');
		//dd($sources);

			if ($apps !== false) {
				return View::make('app2', ['applications' => $apps, 'methods'=>$methods, 'statuses'=> $statuses, 'sources'=>$sources]);	
			} else {
				return View::make('app2', ['applications' => null, 'methods'=> null, 'statuses'=> null]);
			}
	}
	
	public function add()
	{
		$apps = Application::where('user_id', 1)->get();
		$methods = AppMethod::all()->toArray();
		$statuses = AppStatus::all()->toArray();
		$sources = AppSources::all()->toArray();

		return View::make('addapp', ['applications' => $apps, 'methods'=>$methods, 'statuses'=> $statuses, 'sources'=>$sources]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		// Store application in database
		$app = Application::create($request->all());
		$apps = Application::where('user_id', 1)->get();
		$methods = AppMethod::all()->toArray();
		$statuses = AppStatus::all()->toArray();
		$sources = AppSources::all()->toArray();

		return Redirect::to('/applications')->with(['applications' => $apps, 'methods'=>$methods, 'statuses'=> $statuses, 'sources'=>$sources]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
