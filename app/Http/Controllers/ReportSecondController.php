<?php

namespace App\Http\Controllers;

use App\Models\ReportSecond;
use Illuminate\Http\Request;

class ReportSecondController extends Controller
{
    public function create(Request $request){


        $data = $request->validate([
            'expertise_date_time'=> 'nullable',
            'term_date'=> 'nullable',
            'planting_date'=> 'nullable',
            'weight'=> 'nullable',
            'sales_quantity'=> 'nullable',
            'yield'=> 'nullable'
        ]);

        $reportSecond = ReportSecond::create($data);
        return $reportSecond;

    }

    public function view($id){
        $reportSecond = ReportSecond::with(['report_2s'])->find($id);
        return $reportSecond;
    }

    public function list(){
        $reportSecond = ReportSecond::get();
        return $reportSecond;
    }

    public function update(ReportSecond $request, $id)
    {
        $data = $request->validate([
            'expertise_date_time'=> 'nullable',
            'term_date'=> 'nullable',
            'planting_date'=> 'nullable',
            'weight'=> 'nullable',
            'sales_quantity'=> 'nullable',
            'yield'=> 'nullable'
        ]);
        $reportSecond = ReportSecond::find($id)->update($data);
        return $reportSecond;
    }

    public function delete($id){
        $reportSecond= ReportSecond::find($id);
        $reportSecond->delete();
        return "Success";
    }
}
