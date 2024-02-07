<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->validate([
            'region_name' => 'nullable',
        ]);
        return $region = Region::create($data);
    }
    public function view($id){
        $plantingRate = Region::with(['users'])->find($id);
        return $plantingRate;
    }

    public function list(){
        $plantingRate = Region::get();
        return $plantingRate;
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'region_name' => 'nullable',
        ]);
        $plantingRate = Region::find($id)->update($data);
        return $plantingRate;
    }

    public function delete($id){
        $plantingRate = Region::find($id);
        $plantingRate->delete();
        return "Success";
    }
}
