<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class c_produk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function login()
    {
        return view('login.login');
    }

    public function index(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'max:255'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard')->with('nice','Selamat datang di Galery');
        }
        else{
            return redirect('/')->with('logout', 'Login Gagal!');
        }
    }

    public function logout(Request $request)
    {

        //Penghapusan Session
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('logout' , 'Anda Telah Logout');
    }


    public function reg(){
        return view('login.register');
    }

    public function register(Request $request)
    {

        //Pengecekan dan Memasukkan data
        $request->validate([
            'name' => 'required|unique:users',
            'email' =>  'required|email',
            'password' => 'required',
            'password2' => 'required|same:password',
        ]);
        
        $register = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $register->save();
        return redirect('/')->with('nice', 'Registrasi Berhasil, silahkan login');

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout.input', ["title" => 'Input']);
    }

    /**v
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate data
        $request->validate([
            'judulProduk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $create = $request->all();
        
        if ($gambar = $request->file('gambar')) {
            $penyimpanan = 'upload/';
            $fotogambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($penyimpanan, $fotogambar);
            $create['gambar'] = "$fotogambar";
        }
        
        produk::create($create);
    
        return redirect('/dashboard')->with('nice','Produk Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Produk::count();
        return view('layout.dashboard', compact('data'), ["title" => 'Dashboard']);
    }

    public function produk()
    {
        $data = Produk::all();
        return view('layout.produk', compact('data'), ["title" => 'Produk']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Produk::find($id);
        return view('layout.edit', compact('data'), ["title" => 'Edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, Produk $produk)
    {
        $produk = Produk::find($id);
        $request->validate([
            'judulProduk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $update = $request->all();
        
        if ($gambar = $request->file('gambar')) {
            $penyimpanan = 'upload/';
            $fotogambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($penyimpanan, $fotogambar);
            $update['gambar'] = "$fotogambar";
        }else{
            unset($update['gambar']);
        }
        
        $produk->update($update);
        
        return redirect('/produk')->with('nice','Produk Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Produk::find($id);
        $data->delete();

        return redirect('/dashboard')->with('nice','Produk Berhasil Dihapus!');
    }
}
