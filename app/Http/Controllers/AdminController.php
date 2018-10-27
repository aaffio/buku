<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Member;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    public function member()
    {
        $members = Member::all();
        return view('admin.member')
            ->with(compact('members'));
    }

    public function createMember()
    {
        return view('admin.member.create');
    }
    public function getMember($id)
    {
        $member = Member::findOrFail($id);
        return view('admin.member.update')
            ->with(compact('member'));
    }

    public function postCreateMember(Request $request){
        $data = $request->all();
        $member = new Member();
        $member->nama = $data['nama'];
        $member->alamat = $data['alamat'];
        $member->telepon = $data['telepon'];
        $member->email = $data['email'];
        $member->total_pinjam = 0;
        $member->total_kembali = 0;
        $member->save();
        return redirect()->route('member')
            ->with('new_member_saved', 'Selamat, member baru telah ditambahkan');
    }

    public function updateMember($id, Request $request){
        $data = $request->all();
        $member = Member::findOrFail($id);
        $member->nama = $data['nama'];
        $member->alamat = $data['alamat'];
        $member->telepon = $data['telepon'];
        $member->email = $data['email'];
        $member->save();
        return redirect()->route('member')
            ->with('member_updated', 'Selamat, member telah diperbaharui');
    }

    public function book()
    {
//        $members = Member::all();
        return view('admin.book')
//            ->with(compact('members'))
            ;
    }



}
