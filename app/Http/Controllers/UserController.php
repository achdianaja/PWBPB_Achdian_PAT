<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Barang;
use App\Models\Status;
use App\Models\Gudang;
use App\Models\Pinjam;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function pinjam()
    {
        $barang = Barang::orderBy('nama_barang', 'DESC')->simplePaginate(6);
        return view('user.pinjam', compact('barang'));
    }

    public function postPinjam(Request $request, Barang $barang)
    {
        Pinjam::create([
            'user_id' => Auth::user()->id,
            'barang_id' => $barang->id,
            'status_peminjaman_id' => $request->status_peminjaman,
            'kode_pinjam' => $request->kode_pinjam,
        ]);

        Alert::toast('Barang berhasil Di pinjam', 'success');
        return redirect('pinjam');
    }

    public function status(Pinjam $pinjam)
    {
        if($pinjam->status_peminjamna_id == 1 ){
            Pinjam::where('id', $pinjam->id)
            ->update(['status_peminjaman_id' => 2]);
            Barang::where('id', $pinjam->barang_id)->update();
            Alert::toast('Barang berhasil Di pinjam', 'success');
            return redirect('pinjam');
        }elseif($pinjam->status_peminjamna_id == 3){
            Pinjam::where('id', $pinjam->id)
            ->update(['status_peminjaman_id' => 1]);
            Barang::where('id', $pinjam->barang_id)->update();
            Alert::toast('Barang berhasil Di pinjam', 'success');
            return redirect('pinjam');
        }

        Alert::error('kesalahan saat meminjam', 'error');
            return redirect('pinjam');
    }

    public function kelolaUser()
    {
        $user = User::orderBy('name', 'DESC')->paginate(10);

        return view('home.user', compact('user'));
    }
}
