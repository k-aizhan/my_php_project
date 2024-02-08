<?php

namespace App\Http\Controllers;

use App\Models\ReportFirst;
use Illuminate\Http\Request;

class ReportFirstController extends Controller
{
    public function create(Request $request){


        $data = $request->validate([
            'bin_id'=> 'nullable',
            'company_id'=> 'nullable',
            'grade'=> 'nullable',
            'count'=> 'nullable',
            'cadastral_id'=> 'nullable',
            'amount' => 'nullable',
        ]);

        $reportFirst = ReportFirst::create($data);
        return $reportFirst;

    }

    public function view($id){
        $reportFirst = ReportFirst::with(['report_1s'])->find($id);
        return $reportFirst;
    }

    public function list(){
        $reportFirst = ReportFirst::get();
        return $reportFirst;
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'bin_id'=> 'nullable',
            'company_id'=> 'nullable',
            'grade'=> 'nullable',
            'count'=> 'nullable',
            'cadastral_id'=> 'nullable',
            'amount' => 'nullable',
        ]);
        $reportFirst = ReportFirst::find($id)->update($data);
        return $reportFirst;
    }

    public function delete($id){
        $reportFirst = ReportFirst::find($id);
        $reportFirst->delete();
        return "Success";
    }
}
