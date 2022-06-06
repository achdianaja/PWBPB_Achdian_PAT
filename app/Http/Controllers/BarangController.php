<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarangRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Barang;
use App\Models\User;
use App\Models\Status;
use App\Models\Gudang;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::orderBy('updated_at', 'DESC')->simplePaginate(6);

        return view('home.admin', compact('barang'));
    }

    public function gudang()
    {
        $barang = Barang::orderby('updated_at', 'DESC')->get();
        $gudang = Gudang::all();
        $status = Status::all();
        
        return view('home.gudang', compact('barang', 'gudang', 'status'));
    }

    public function inputBarang()
    {
        $status = Status::all();
        $gudang = Gudang::all();

        return view('home.tambah-barang', compact('status', 'gudang'));
    }

    public function store(BarangRequest $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kode_barang' => 'required|unique:barang',
            'status' => 'required',
            'jumlah' => 'required'
        ]);


        if($request->jumlah > 100){
            Alert::toast('Maksimal Barang 100', 'error');
            return back();
        }
        // dd($request->all());
        Barang::create([
            'nama_barang' => $request ->nama_barang,
            'kode_barang' => $request ->kode_barang,
            'gudang_id' => $request ->gudang,
            'status_id' => $request ->status ,
            'jumlah' => $request ->jumlah
        ]);

        Alert::toast('Berhasil di tambahkan', 'success');
        return redirect('inputBarang');
    }

    public function edit($id)
    {
        $data = Barang::where('id', $id)->first();
        $status = Status::all();
        $gudang = Gudang::all();
        return view('home.edit', compact('data', 'status', 'gudang'));
        
    }
    
    public function update(Request $request, $id)
    {
        Barang::where('id', $id)->update([
            'nama_barang' => $request ->nama_barang,
            'kode_barang' => $request ->kode_barang,
            'gudang_id' => $request ->gudang,
            'status_id' => $request ->status ,
            'jumlah' => $request ->jumlah
        ]);

        return redirect('gudang')->with('berhasil');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        Alert::success('Berhasil di Hapus', 'success');
        return redirect('gudang');
    }

    public function trash()
    {
        $barang = Barang::onlyTrashed()->paginate(10);

        return view('home.trash', compact('barang'));
    }

    public function restore($id)
    {
        $barang = Barang::withTrashed()->findOrFail($id);

        if($barang->trashed()){
            
            $barang->restore();

            Alert::toast('berhasil di kembalikan', 'success');
            return redirect()->route('trash');
        }else{
            Alert::danger('gagal di kembalikan', 'danger');
            return redirect()->route('trash');
        }

    }

    public function delete($id)
    {
        Barang::where('id', $id)->delete();

        ALert::toast('berhasil di hapus permanen', 'success');
        return redirect('trash');
    }
}