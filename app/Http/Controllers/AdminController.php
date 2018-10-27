<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Model\Member;
use App\Model\Book;

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

    public function postCreateMember(Request $request)
    {
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

    public function updateMember($id, Request $request)
    {
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
        $books = Book::all();
        return view('admin.book')
            ->with(compact('books'));
    }

    public function createBook()
    {
        return view('admin.book.create');
    }

    public function postCreateBook(Request $request)
    {
        $data = $request->all();
        $book = new Book();
        $book->judul = $data['judul'];
        $book->pencipta = $data['pencipta'];
        $book->penerbit = $data['penerbit'];
        $book->deskripsi = $data['deskripsi'];
        $book->price = $data['price'];
        $book->avaiable = true;
        $book->status = true;
        if ($request->hasFile('gambar')) {
            if ($request->file('gambar')->isValid()) {
                $file = $request->file('gambar');
                $date = new DateTime();
                $name = rand(11111, 99999) . $date->format('Y-m-dH:i:s') . '.' . $file->getClientOriginalExtension();
                $request->file('gambar')->move("fotoupload", $name);
                $book->gambar = $name;

            }
        }
        $book->save();
        return redirect()->route('book')
            ->with('new_book_saved', 'Selamat, buku baru telah ditambahkan');
    }

    public function getBook($id)
    {
        $buku = Book::findOrFail($id);
        return view('admin.book.update')
            ->with(compact('buku'));
    }

    public function updateBook($id, Request $request)
    {
        $data = $request->all();
        $book = Book::findOrFail($id);
        $book->judul = $data['judul'];
        $book->pencipta = $data['pencipta'];
        $book->penerbit = $data['penerbit'];
        $book->deskripsi = $data['deskripsi'];
        $book->price = $data['price'];
        $book->avaiable = $data['avaiable'];
        $book->save();
        return redirect()->route('book')
            ->with('book_updated', 'Selamat, data buku telah diperbaharui');
    }

}
