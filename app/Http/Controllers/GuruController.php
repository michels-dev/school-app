<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use PDF;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function guru(Request $request){
        if($request->has('search')){
            $data = Guru::where('nama','LIKE','%' .$request->search.'%')->paginate(5);
        }else {
            $data = Guru::paginate(5);
        }
        // dd($data);
        return view('guru', compact('data'));
    }

        // Menambahkan Data Siswa
        public function tdguru(){
            return view('tdguru');
        }

        public function insertguru(Request $request){
            // dd($request->all());
            Guru::create($request->all());
            return redirect()->route('guru')->with('success','Data Berhasil Di Tambahkan');
        }

            // Tampil Data
        public function tampildata2($id){
            $data = Guru::find($id);
            // dd($data);
            return view('uguru', compact('data'));
        }

           // update data
        public function updateguru(Request $request, $id){
        $data = Guru::find($id);
        $data->update($request->all());
        return redirect()->route('guru')->with('success','Data Berhasil Di Update');
    }

            // delete data
        public function deleteguru($id){
            $data = Guru::find($id);
            $data->delete();
            return redirect()->route('guru')->with('success','Data Berhasil Di Hapus');
        }

           // export pdf
           public function pdfguru(){
            $data = Guru::all();
            view()->share('data', $data);
            $pdf = PDF::loadview('dataguru-pdf');
            return $pdf->download('dataguru.pdf');
        }

           // delete all data
    public function dltallguru(Request $request){
        $data = Guru::truncate();
        $data->delete();
        return redirect()->route('guru')->with('success','Semua Data Berhasil Di Hapus');
    }
}
