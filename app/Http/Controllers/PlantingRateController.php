<?php

namespace App\Http\Controllers;

use App\Models\PlantingRate;
use Illuminate\Http\Request;

class PlantingRateController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->validate([
            'amount' => 'nullable',
            'essence_cilture_id' => 'nullable',
            'grade' => 'nullable',
        ]);
        return $region = PlantingRate::create($data);
    }
    public function view($id){
        $region = PlantingRate::with(['planting_rates'])->find($id);
        return $region;
    }

    public function list(){
        $regions = PlantingRate::get();
        return $regions;
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'amount' => 'nullable',
            'essence_cilture_id' => 'nullable',
            'grade' => 'nullable',
        ]);
        $region = PlantingRate::find($id)->update($data);
        return $region;
    }

    public function delete($id){
        $region = PlantingRate::find($id);
        $region->delete();
        return "Success";
    }
}
