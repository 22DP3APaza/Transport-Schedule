<?php

namespace App\Http\Controllers;
use App\imports\stoptimesImport;
use App\imports\stopsImport;
use App\imports\routesImport;
use App\imports\tripsImport;
use App\imports\calendarImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class GraphicController extends Controller
{
    public function index(){
        return view('test.index');
    }

    public function importExcelData(Request $request)
    {
        $request->validate([
            'import_file' => [
                'required',
                'file'
            ],
        ]);

        Excel::import(new stoptimesImport, $request->file('import_file'));

        return redirect()->back()->with('statuss', 'Imported Successfully');
    }


}
