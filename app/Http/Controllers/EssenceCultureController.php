<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class EssenceCultureController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->validate([
            'seed_name' => 'nullable',
        ]);
        return $region = Region::create($data);
    }
    public function view($id){
        $essenceCultureController = EssenceCultureController::with(['users'])->find($id);
        return $essenceCultureController;
    }

    public function list(){
        $essenceCultureController = EssenceCultureController::get();
        return $essenceCultureController;
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'seed_name' => 'nullable',
        ]);
        $essenceCultureController = EssenceCultureController::find($id)->update($data);
        return $essenceCultureController;
    }

    public function delete($id){
        $essenceCultureController = EssenceCultureController::find($id);
        $essenceCultureController->delete();
        return "Success";
    }
}
