<?php

namespace App\Http\Controllers\Ajax;

Use App\Requeston;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainAjaxController extends Controller
{
    //
    public function viawer(Request $request){
            return view('table',['inform' => Requeston::where([['count','>','2'], ['operator_id', '=','10']])
                ->orWhere([['operator_id', '=','12']])
                ->join('operators', 'operators.id', '=', 'requestons.operator_id')
                ->join('offers', 'offers.id', '=', 'requestons.offer_id')
                ->select('requestons.id','requestons.price','requestons.count', 'operators.fio', 'offers.name')->get()
            ]);
    }
    public function viawer2(Request $request){
        return view('tab2',['query'=>Requeston::join('operators', 'operators.id', '=', 'requestons.operator_id')->join('offers', 'offers.id', '=', 'requestons.offer_id')
                ->selectRaw('offers.name ,sum(count) as count,sum(price) as price')->groupBy('offers.name')->get()
        ]);
    }
}
