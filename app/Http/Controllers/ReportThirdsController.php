<?php

namespace App\Http\Controllers;

use App\Models\ReportThirds;
use Illuminate\Http\Request;

class ReportThirdsController extends Controller
{
    public function create(Request $request){


        $data = $request->validate([
            'sales_date' => 'nullable',
            'price'=> 'nullable',
            'quantity'=> 'nullable'
        ]);

        $reportThirds = ReportThirds::create($data);
        return $reportThirds;

    }

    public function view($id){
        $reportThirds = ReportThirds::with(['report_3s'])->find($id);
        return $reportThirds;
    }

    public function list(){
        $reportThirds = ReportThirds::get();
        return $reportThirds;
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'sales_date' => 'nullable',
            'price'=> 'nullable',
            'quantity'=> 'nullable'
        ]);
        $reportThirds = ReportThirds::find($id)->update($data);
        return $reportThirds;
    }

    public function delete($id){
        $reportThirds = ReportThirds::find($id);
        $reportThirds->delete();
        return "Success";
    }
}
