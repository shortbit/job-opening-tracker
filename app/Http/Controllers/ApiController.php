<?php

namespace App\Http\Controllers;

use App\Applications as Applications;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        //$Applications = Applications::where('user_id', $request->user_id)->jsonSerialize();
        $applications = Applications::get()->jsonSerialize();
        if ($applications) {
            return response($applications, Response::HTTP_OK);
        } else {
            return response("Failed", Response::HTTP_EXPECTATION_FAILED);
        }
    }

    public function create(Request $request)
    {
        if ($request->isJSON()) {
            $app = Applications::create($request::all());
            if ($app->save()) {
                return response("Success", Response::HTTP_CREATED)->json();
            } else {
                return response("Failed", Response::HTTP_EXPECTATION_FAILED)->json();
            }
        } else {
            return view('apionly');
        }
    }

    public function update(Request $request, $id)
    {
        $app = Applications::findOrFail($id);
        $app->color = $request->color;
        $app->save();

        return response(null, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        Application::destroy($id);

        return response(null, Response::HTTP_OK);
    }

}
