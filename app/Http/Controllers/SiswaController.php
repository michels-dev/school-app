<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use PDF;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Siswa::where('nama','LIKE','%' .$request->search.'%')->paginate(5);
        }else {
            $data = Siswa::paginate(5);
        }
        // dd($data);
        return view('siswa', compact('data'));
    }

    // Menambahkan Data Siswa
    public function tdsiswa(){
        return view('tdsiswa');
    }
    public function insertsiswa(Request $request){
        // dd($request->all());
        Siswa::create($request->all());
        return redirect()->route('siswa')->with('success','Data Berhasil Di Tambahkan');
    }

        // Tampil Data
        public function tampildata($id){
            $data = Siswa::find($id);
            // dd($data);
            return view('usiswa', compact('data'));
        }

        // update data
    public function updatesiswa(Request $request, $id){
        $data = Siswa::find($id);
        $data->update($request->all());
        return redirect()->route('siswa')->with('success','Data Berhasil Di Update');
    }

        // delete data
        public function deletesiswa($id){
            $data = Siswa::find($id);
            $data->delete();
            return redirect()->route('siswa')->with('success','Data Berhasil Di Hapus');
        }

            // export pdf
        public function pdfsiswa(){
            $data = Siswa::all();
            view()->share('data', $data);
            $pdf = PDF::loadview('datasiswa-pdf');
            return $pdf->download('datasiswa.pdf');
        }

        // delete all data
    public function dltallsiswa(Request $request){
        $data = Siswa::truncate();
        $data->delete();
        return redirect()->route('siswa')->with('success','Semua Data Berhasil Di Hapus');
    }

}
