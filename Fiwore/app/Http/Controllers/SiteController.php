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
            return \view('home');
        } else {
            echo 'beda';
            return \view('situs.fixdata');
        }

    }
    public function kirim()
    {

        $data=$_POST;
        DataUserModel::save($tabel);
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
