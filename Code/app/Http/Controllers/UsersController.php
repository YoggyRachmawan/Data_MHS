<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function DataMHS()
    {
        return view('DataMahasiswa');
    }

    public function FormMasuk()
    {
        return view('FormMasuk');
    }

    public function Masuk(Request $request)
    {
        if (Auth::attempt($request->only('nim', 'password'))) {
            return redirect()->route('DataMHS');
        }
        return redirect()->route('FormMasuk')->with('gagal', 'Nomor induk mahasiswa atau password anda salah !');;
    }

    public function Keluar()
    {
        Auth::logout();
        return redirect()->route('FormMasuk');
    }

    public function FormBuatAkun()
    {
        return view('FormBuatAkun');
    }

    public function BuatAkun(Request $request)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'nim'       => 'required|min:12|unique:users|numeric',
            'password'  => 'required|min:8',
            'alamat'    => 'required'
        ], [
            'nama.required'     =>  'Nama lengkap harus diisi !',
            'nim.required'      =>  'Nomor induk mahasiswa harus diisi !',
            'nim.unique:users'  =>  'Nomor induk mahasiswa sudah ada yang punya !',
            'nim.numeric'       =>  'Nomor induk mahasiswa diisi dengan hanya angka !',
            'password.required' =>  'Password harus diisi !',
            'alamat.required'   =>  'Alamat harus diisi !'
        ]);

        Users::create([
            'nama'      => $request->nama,
            'nim'       => $request->nim,
            'password'  => bcrypt($request->password),
            'alamat'    => $request->alamat,
        ]);
        return redirect()->route('FormMasuk')->with('berhasil', 'Akun anda berhasil dibuat.');
    }

    public function FormUbahDataMahasiswa($id)
    {
        $mhs = Users::find($id);
        return view('FormUbahDataMahasiswa', ['data' => $mhs]);
    }

    public function UbahDataMahasiswa(Request $request, $id)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'alamat'    => 'required'
        ], [
            'nama.required'     =>  'Nama lengkap harus diisi !',
            'alamat.required'   =>  'Alamat harus diisi !'
        ]);

        $mhs = Users::find($id);
        $mhs->update([
            'nama'      => $request->nama,
            'alamat'    => $request->alamat,
        ]);
        return redirect()->route('DataMHS')->with('ubah', 'Data anda berhasil diubah.');
    }

    public function HapusAkun($id)
    {
        $mhs = Users::find($id);
        $mhs->delete();
        return redirect()->route('FormMasuk')->with('hapus', 'Akun anda berhasil dihapus, selamat tinggal !');
    }
}
