<?php

namespace App\Http\Controllers;

use App\Company;
use App\Country;
use App\State;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class MainController extends Controller
{
    public function myform()
    {
        $countries = Country::all()->pluck("name", "id");
        return view("index", compact("countries"));
    }

    public function myformAjax($id)
    {
        $states = State::where("country_id", $id)->pluck("name", "id");
        return json_encode($states);
    }

    public function index()
    {
        return view("vendor/index")->with("countries", Country::all());
    }

    public function getStates($id)
    {
        $states = State::where("country_id", $id)->pluck("name", "id");
        return json_encode($states);
    }

    public function getData($id)
    {
        $data = Company::where("state_id", $id)->get();
        return view("vendor/data", compact("data"));
    }
}
