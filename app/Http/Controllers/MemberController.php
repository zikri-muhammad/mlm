<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;
use App\Models\Member;
use App\Models\MemberUpline;
use Yajra\DataTables\DataTables;
// use RealRashid\SweetAlert\Facades\Alert;
use Alert;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('member.index');
    }

    public function getData(){
        $members = Member::select(['id','no_id','nama', 'alamat', 'phone' ,'created_at','updated_at']);

        return Datatables::of($members)
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member = Member::all();
        return view('member.add', compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request)
    {
        // check jika upline meelebihi 2 downline
        $upline_id = $request->upline_id;
        $checkUpline = MemberUpline::where('upline_id', $upline_id)->get();
        if(count($checkUpline) >= 2) {
            // return 'Maximum member!';
            Alert::warning('Opps', 'Upline sudah melebbihi kapasitas silahkan pilih yang lain');
            return redirect()->back();
        }
        // check jika upline ada
        $member = Member::create([
            'no_id'  => $request->no_id,
            'nama'   => $request->nama,
            'alamat' => $request->alamat,
            'phone'  => $request->phone,
        ]);
        if($request->has('upline_id')) {
            $data = [
                'upline_id' => $upline_id,
                'member_id' => $member->id
            ];
            // dd($data);
            MemberUpline::insert($data);
        }
        Alert::success('success', 'Berhasil');
        return redirect('member');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::find($id);
        // $m = MemberUpline::where('upline_id', $member->id)
        //        ->get();
        // dd($m->downline);
        return view('member.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
