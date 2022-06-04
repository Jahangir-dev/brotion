<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Tender;
use Illuminate\Http\Request;
use Auth;
use Response;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function edit(Bid $bid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bid $bid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid)
    {
        //
    }

    public function saveBid(Request $request)
    {
        $request->validate([
            'document' => 'mimes:doc,pdf,docx,zip'
        ],
        [
            'document.mimes' => 'Proposal document only acceptable in doc,pdf,docx or zip format'
        ]);
        if(isset($request->tender_id))
        {
            $tender = Tender::where('id', $request->tender_id)->first();
            $bid = Bid::where('user_id', Auth::user()->id)->where('tender_id', $tender->id)->first();
            if($bid)
            {
                return redirect()->back()->with('warning', 'You have already placed bid against this tender');
            }
            if($request->hasFile('document'))
            {
                $file=$request->file('document');
                $docname = time().'_proposal_'.uniqid().$file->getClientOriginalName();
                $file->move(public_path('uploads/proposals/'.$tender->id), $docname);
            }
            Bid::create([
                'user_id' => Auth::user()->id,
                'tender_id' => $tender->id,
                'price' => $request->price,
                'vat' => $request->vat,
                'document' => $docname
            ]);
            return redirect()->back()->with('success', 'Bid submitted successfully');
        }
        else
        {
            return redirect()->back('error', 'Tender Not exist now');
        }
    }

    public function approveBid($id)
    {
        $update = Bid::where('id', $id)->update([
            'approved' => 1,
            'approved_by' => Auth::user()->id,
            'approved_at' => now()
        ]);
        if($update)
        {
            return redirect()->back()->with('success', 'Approved bid successfully');
        }
        else{
            return redirect()->back()->with('warning', 'Something went wrong please try again');
        }
    }

    public function downloadProposal($id)
    {
        $bid = Bid::where('id', $id)->first();
        if($bid)
        {
            if($bid->document != "")
            {
                $file= public_path(). "/uploads/proposals/".$bid->tender->id.'/'.$bid->document;
                return Response::download($file, $bid->document);
            }
        }
    }
}