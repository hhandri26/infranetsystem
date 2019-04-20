<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PendaftaranModels;

class PendaftaranController extends Controller
{
    public function index()
    {
        $data['prov']   = PendaftaranModels::get_prov();
        $data['kursus'] = PendaftaranModels::get_kursus();
        return view('pendaftaran/index',$data);
    }

    public function getkab()
    {
        return PendaftaranModels::getkab_ok();
    }

    public function getkec()
    {
        return PendaftaranModels::getkec_ok();
    }

    public function getkel()
    {
        return PendaftaranModels::getkel_ok();
    }

    public function getjadwal()
    {
        return PendaftaranModels::getjadwal_ok();
    }

    public function register_pendaftar()
    {
        $data       = request()->data;
        $json_array = json_decode($data, TRUE);
        foreach ($json_array as $key => $val){
            $cek_email = DB::table('users')->where('email', $val['email'])->pluck('email')->first();
            $cek_ktp   = DB::table('users')->where('no_identitas', $val['no_identitas'])->pluck('no_identitas')->first();
        }
        if($cek_email){
             $t_array['msg_type']   ='warning';
             $t_array['msg']        ='Email Sudah terdaftar !';
             return $t_array;
        }elseif($cek_ktp){
            $t_array['msg_type']   ='warning';
            $t_array['msg']        ='No Identitas Sudah terdaftar !';
            return $t_array;
        }else{
            return PendaftaranModels::register_ok();
        }
    }

}
