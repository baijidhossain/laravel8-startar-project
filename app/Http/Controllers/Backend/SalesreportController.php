<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Order;
use App\Model\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class SalesreportController extends Controller
{
    public function salesreport(Request $request){


       $deily_report=$request->daily_report;
        $day=date('ymd');
        $month =date('ym');
      
        $data['salesreport']=Order::where('day',$deily_report)->get();
       return view('backend.salesreport.index', $data);
    }


            public function dailyreport(){
                Gate::authorize('app.report.dailyreport');
            return view("backend.invoice.daily_invoice_report");
            }

            public function dailyinvoicereport(Request $request)
            {

            // $sdata= date('Y/m/d',strtotime($request->start_date));
            // $edata= date('Y/m/d',strtotime($request->end_date));
            // $data['allData']=OrderItem::whereBetween('order_date',[$sdata,$edata])->get();

            // $data['start_date']=date('Y/m/d',strtotime($request->start_date));
            // $data['end_date']=date('Y/m/d',strtotime($request->end_date));

            if($request->daily_report){
               // dd($request->daily_report);
               $data['orders']=Order::all();
               $data['daily_report_sum']=OrderItem::where('order_date',$request->daily_report)->get();

               return view ('backend.invoice.daily_invoice_report_pdf',$data);
            }
           


            if($request->monthly_report){
               $data['daily_report_sum']=OrderItem::where('order_month',$request->monthly_report)->get();

               return view ('backend.invoice.daily_invoice_report_pdf',$data);
            }

            if($request->yearly_report){
               $data['daily_report_sum']=OrderItem::where('order_year',$request->yearly_report)->get();

               return view ('backend.invoice.daily_invoice_report_pdf',$data);
            }
          

    
                     


            }

}
