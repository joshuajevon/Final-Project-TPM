<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function adminparticipant(){
        $users = User::all(); //all itu mengambil seluruh data, $member declare var
        return view('adminparticipant', ['users' => $users]);
    }

    public function admindashboard(){
        // $users =DB::table('users')->paginate(10); //all itu mengambil seluruh data, $member declare var
        // return view('admindashboard', ['users' => $users]);

        $users = User::all(); //all itu mengambil seluruh data, $member declare var
        return view('admindashboard', ['users' => $users]);
    }

    public function bukti(){
        $admins = Admin::all(); //all itu mengambil seluruh data, $member declare var
        return view('bukti', ['admins' => $admins]);
    }

    public function delete($id){
        User::destroy($id);
        return redirect(route('admindashboard'));
    }

    public function uploadData(Request $request){

        $bukti = $request->file('bukti'); /*menyimpan data file yang diupload ke variabel $file */

	    $filebukti = time()."_".$bukti->getClientOriginalName();

	    $tujuan_upload = 'data_file'; /*isi dengan nama folder tempat kemana file diupload */
	    $bukti->move($tujuan_upload,$filebukti);


        Admin::create([
            'bukti'=> $filebukti,
        ]);

        return redirect(route('dashboard'));
    }

    public function uploadverify(Request $request){
        User::create([
            'verify'=> $request->verify,
        ]);
        return redirect(route('admindashboard'));
    }

    public function cari(Request $request){
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $users = DB::table('users')
        ->where('namagroup','like',"%".$cari."%")->paginate();

        // mengirim data pegawai ke view index
    return view('admindashboard',['users' => $users]);
    }

    public function sort(){
        $users = User::orderBy('namagroup')->get()->except(1);
        return view('admindashboard', ['users' => $users]);
    }



    public function main(){
        return view('main');
    }

}

