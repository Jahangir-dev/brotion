<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Tender;
use App\Models\TenderItem;
use Validator;
use Response;
use Auth;
use App\Models\OpportunityCategory;

class TenderController extends Controller
{
    public function index()
    {
        $tender = Tender::where('user_id',Auth::user()->id)->where('complete',0)->first();
        $cities = City::get();
        $categories = OpportunityCategory::get();
        return view('userpages.new_tender_one',compact('cities','categories','tender'));
    }

    public function onesave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'services'              => 'required',
            'tender_category'       => 'required',
            'tender_title'          => 'required',
            'ref_no'                => 'required',
            'payment_method'        => 'required',
            'payment_days'          => 'required',
            'due_date'              => 'required',
            'purchase_cond'         => 'required',
            'delivery_city'         => 'required',
        ],[
            'unique' => ':attribute already exist',
            'required' => 'The :attribute field is required.'
        ]);
   
        if($validator->fails()){
            return response()->json($validator->errors(), 404);      
        }
        $request['user_id'] = Auth::user()->id;
        $request['complete'] = 0;
        
        if(!empty($request['tender_id']))
        {
            $tender = Tender::find($request['tender_id'])->update($request->all());
            return response()->json('success',200);
        }
        else if(Tender::create($request->all()))
        {
            return response()->json('success',200);
        }
    }

    public function new_tender_two()
    {
        $tender = Tender::where('user_id',Auth::user()->id)->where('complete',0)->first();
        $tenderItems = TenderItem::where('tender_id',$tender['id'])->first();
        // /dd($tenderItems);
        return view('userpages.new_tender_two',compact('tender','tenderItems'));
    }

    public function twosave(Request $request)
    {
        if($request['sow'] == 'on')
        {   
            $validator = Validator::make($request->all(), [
                'sow'              => 'required',
                'document'         => 'required',
                'document_file'     => 'required|mimes:pdf,xlx,csv,jpeg,jpg,png,gif|max:2048',
        
            ],[
                'required' => 'The :attribute field is required'
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'sow'              => 'required'
            ],[
                'required' => 'The :attribute field is required'
            ]);
        }
       
      

        if($validator->fails()){
            return response()->json($validator->errors(), 404);      
        }
        $request1 = request()->except(['_token']);
        $tender = TenderItem::where('tender_id',$request1['tender_id'])->first();
        if(!empty($tender))
        {
            if($request->hasFile('document_file')){
                $uploadFolder =  'tenders/' .$request['tender_id'];
                $this->checkDirectory($uploadFolder);
                $fileName = time().'.'.$request->document_file->extension();  
                $request->document_file->move(public_path($uploadFolder), $fileName);
                $request1['document_file'] = $fileName;
            } else {
                $request1['document_file'] = null;
            }      
            TenderItem::where('id',$request1['tender_id'])->update($request1);
             return response()->json('success',200);
        }
        else 
        {
            if($request->hasFile('document_file')){
                $uploadFolder = 'tenders/' . $request['tender_id'];
                $this->checkDirectory($uploadFolder);
                $fileName = time().'.'.$request->document_file->extension();  
                $request->document_file->move(public_path($uploadFolder), $fileName);
                $request1['document_file'] = $fileName;
            } else {
                $request1['document_file'] = null;
            }   
            if(TenderItem::create($request1)) {
                return response()->json('success',200);
            }
            
            //Tender::find($request['tender_id'])->update(['complete' => 1]);
            
        }

       
        
    }

    public function new_tender_third_tab($id)
    {
        
        $tender = Tender::where('id',$id)->with(['city','category','items'])->first();
        return view('userpages.new_tender_third_tab',compact('tender'));
       
    }

    public function threesave(Request $request)
    {
        //dd($request->all());
        Tender::find($request['tender_id'])->update(['complete' => 1, 'email' => $request['email']]);
        return response()->json('success',200);
        
    }

    public function checkDirectory($path)
    {
        $path = public_path($path);
        /* Check if the directory already exists. */
        if (!is_dir($path)) {
            /* Directory does not exist, so lets create it. */
            mkdir($path, 0755, true);
        }
    }

    public function extend_date(Request $request)
    {
        Tender::find($request['id'])->update(['due_date' => $request['date']]);
        toast('Date Extended Successfully', 'success');
        return redirect()->back();
    }
}
