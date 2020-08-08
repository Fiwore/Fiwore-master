<?php
namespace App\Models;

use App\ORM_DataUserModel;
use Illuminate\Http\Request;

class DataUserModel
{
    public static function get_data_user($tabel)
    {
        return $data=ORM_DataUserModel::all();
        // \dd($data);
        // ORM_DataUserModel::collection(Profile::all());
    }
    public static function get_like($key)
    {
        $data=ORM_DataUserModel::where('email_user', $key)->first();
        if ($data==null) {
            return $data=null;
        // echo 'null';
            // dd($data);
        } else {
            return $data;
        }

        // \dd($data);
    }
    public static function save(Request $data)
    {
        // \dd($data);
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
    }
}
