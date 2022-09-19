<?php

namespace App\Http\Controllers;

use App\Models\Jiangdao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Barryvdh\Snappy\Facades\SnappyPdf;

class homeController extends Controller
{
    public $jd_list=[
        '1' => [
            'Js. Ang Cuan Yen',
            'cuan_yen'
        ],
        '2' => [
            'Js. Sun Vera Verdiantika, S.E.',
            'sun_vera'
        ],
        '3' => [
            'Js. Tjan Putu Shantiro',
            'putu_santiro'
        ],
        '4' => [
            'Js. Chingdrawati',
            'chingdrawati'
        ],
        '5' => [
            'Js. Hadi Saputra, S.E.',
            'hadi_saputra'
        ],
        '6' => [
            'Ws. Adinatha Lie, S.E.',
            'adinatha'
        ],
        '7' => [
            'WS. CHANDRA WILANTARA',
            'chandra_wilantara'
        ],
        '8' => [
            'Ws. Nusan Chandra',
            'nusan_chandra'
        ],
        '9' => [
            'Ws. Budi Suniarto',
            'budi_sun'
        ],
        '10' => [
            'Ws. Nusan Bagus Hendra Wijaya',
            'bagus_hendra'
        ],
        '11' => [
            'Ws. Made Sudiasih, S.AP',
            'made_sudiasih'
        ],
        '12' => [
            'Ws. Ir. Nyoman Darsana',
            'nyoman_darsana'
        ],
    ];
    public function index(){
        return view(' pages.forms',[
            'data' => $this->jd_list
        ]);
    }
    public function pengisi(){
        $data = Jiangdao::all();
        return view('admin.pengisi',[
            'jiangdao' => $data
        ]);
    }

    public function flyer(Request $request){
        $bulan = array(
            1=> 'JANUARI',
            'FEBRUARI',
            'MARET',
            'APRIL',
            'MEI',
            'JUNI',
            'JULI',
            'AGUSTUS',
            'SEPTEMBER',
            'OKTOBER',
            'NOVEMBER',
            'DESEMBER'
        );
        // return $request;
        $pecahkan = explode('-', $request['tanggal']);
        $request['tanggal'] = $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
        $request['PD'] = $request['doa1'].'. '.$request['PD'];
        $request['PD1'] = $request['pd-1'].'. '.$request['PD1'];
        $request['PD2'] = $request['pd-2'].'. '.$request['PD2'];
        $request['renungan'] = $request['rn'].'. '.$request['renungan'];
        $request['MC'] = $request['mc-1'].'. '.$request['MC'];
        $request['image'] = $this->jd_list[$request['jiangdao']][1];
        $request['jiangdao'] = strtoupper($this->jd_list[$request['jiangdao']][0]);
        return view('pages.flyer',[
            'data' => $request
        ]);
    }
}
