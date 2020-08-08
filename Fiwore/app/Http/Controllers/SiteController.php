<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\ORM_DataUserModel;
use App\Models\DataUserModel;

class SiteController extends Controller
{
    public function index()
    {
        echo $email=Auth::user()->email;
        $tabel=$email;
        $data=DataUserModel::get_like($tabel);
        // echo $data->email_user;

        if ($data) {
            echo 'sama';
        } else {
            echo 'beda';
        }
        return \view('situs.fixdata');
    }
    public function kirim()
    {
        $data=$_POST;
        $new_save = new ORM_DataUserModel;

        $new_save->nama=$data->nama;
        $new_save->nisn=$data->nisn;
        $new_save->email_user=$data->email_user;
        $new_save->alamat_tinggal=$data->alamat_tinggal;
        $new_save->no_hp=$data->no_hp;
        $new_save->nama_orang_tua=$data->nama_orang_tua;
        $new_save->jurusan=$data->jurusan;
        $new_save->tampat_pkl=$data->tampat_pkl;
        $new_save->lama_pkl=$data->lama_pkl;

        $new_save->save();
        return redirect('/Mysite');
    }

    public function get_all()
    {
        $tabel='userdata';
        $data['all']=DataUserModel::get_data_user($tabel);

        foreach ($data['all'] as $data) {
            echo $data->nisn;
        }
    }
}
