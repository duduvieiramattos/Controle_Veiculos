<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use DB;

class ChartController extends Controller
{
  public function index(Request $field)
  {
    $data = DB::table('vehicles')
         ->select(
          DB::raw('situacao as situacao'),
          DB::raw('count(*) as number'))
         ->groupBy('situacao')
         ->get();
       $array[] = ['Situacao', 'Number'];
       foreach($data as $key => $value)
       {
        $array[++$key] = [$value->situacao,$value->number];
       }
        return view('chart')->with('situacao', json_encode($array));

  }
}
