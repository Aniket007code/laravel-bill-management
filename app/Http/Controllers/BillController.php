<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

use function Laravel\Prompts\alert;

class BillController extends Controller
{
    public function listing()
    {
        $allBillData = Bill::paginate(10);
        // dd($allBillData);
        return view('HomePage',compact('allBillData'));
    }

    public function createInvoice(Request $request)
    {
        return view('createPage');
    }

    public function storeInvoice(Request $request)
    {
        // dd($request->all());
        // $tenurediscountinsert = new TenureDiscountRule
        $bill = new Bill();
        $bill->sr_no = $request->sr_no;
        $bill->worker_name = $request->worker_name;
        $bill->type_of_worker = $request->type_of_worker;
        $bill->total_work_day = $request->total_work_day;
        $bill->sunday_holiday = $request->sunday_holiday;
        $bill->ot = $request->ot;
        $bill->total_days = $request->total_days;
        $bill->month_rate = $request->month_rate;
        $bill->total_present_amt = $request->total_present_amt;
        $bill->ot_amt = $request->ot_amt;
        $bill->grand_total = $request->grand_total;

        $bill->save();

        alert("bill saved successfully");
        return redirect()->route('home')->with('success', 'Bill added successfully');
    }

    public function editInvoice(Request $request,$id) {
        // Retrieve the bill by sr_no
    $bill = Bill::where('id', $id)->first();
    // dd($bill);

    // Check if the bill exists
    if (!$bill) {
        return redirect()->route('home')->with('error', 'Bill not found.');
    }

    // Pass the bill data to the view
    return view('editPage', compact('bill'));
    }

    public function updateInvoice(Request $request,$id) {
        // dump("update page");
        // dd($request);
         // Find the bill by sr_no
         $bill = Bill::where('id', $id)->first();

        $bill->sr_no = $request->sr_no;
        $bill->worker_name = $request->worker_name;
        $bill->type_of_worker = $request->type_of_worker;
        $bill->total_work_day = $request->total_work_day;
        $bill->sunday_holiday = $request->sunday_holiday;
        $bill->ot = $request->ot;
        $bill->total_days = $request->total_days;
        $bill->month_rate = $request->month_rate;
        $bill->total_present_amt = $request->total_present_amt;
        $bill->ot_amt = $request->ot_amt;
        $bill->grand_total = $request->grand_total;
 
         // Save the updated bill
         $bill->save();
 
         // Redirect back with a success message
         return redirect()->route('home')->with('success', 'Bill updated successfully');
    }

    public function deleteInvoice(Request $request,$id) {
        // dd("hii delete");
        Bill::where('id',$id)->delete();

        alert("Data deleted successfully");

        return redirect()->route('home')->with('success', 'Bill deleted successfully');
    }

    public function exportUsers()
    {
        return Excel::download(new UsersExport, 'bill.xlsx');
    }

    public function import(Request $request)
    {
        // Validate the file
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls',
        ]);

        // Import the file data
        Excel::import(new UsersImport, $request->file('file'));

        // Redirect back with success message
        return redirect()->back()->with('success', 'Bills imported successfully!');
    }
}
