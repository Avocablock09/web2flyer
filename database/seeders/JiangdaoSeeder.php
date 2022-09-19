<?php

namespace Database\Seeders;

use App\Models\Jiangdao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JiangdaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Jiangdao::truncate();
        $jiangdao=[
            [
                'name'=>'Js. Ang Cuan Yen',
                'photos'=>'cuan_yen'
            ],
            [
                'name'=>'Js. Sun Vera Verdiantika, S.E.',
                'photos'=>'sun_vera'
            ],
            [
                'name'=>'Js. Tjan Putu Shantiro',
                'photos'=>'putu_santiro'
            ],
            [
                'name'=>'Js. Chingdrawati',
                'photos'=>'chingdrawati'
            ],
            [
                'name'=>'Js. Hadi Saputra, S.E.',
                'photos'=>'hadi_saputra'
            ],
            [
                'name'=>'Ws. Adinatha Lie, S.E.',
                'photos'=>'adinatha'
            ],
            [
                'name'=>'WS. CHANDRA WILANTARA',
                'photos'=>'chandra_wilantara'
            ],
            [
                'name'=>'Ws. Nusan Chandra',
                'photos'=>'nusan_chandra'
            ],
            [
                'name'=>'Ws. Budi Suniarto',
                'photos'=>'budi_sun'
            ],
            [
                'name'=>'Ws. Nusan Bagus Hendra Wijaya',
                'photos'=>'bagus_hendra'
            ],
            [
                'name'=>'Ws. Made Sudiasih, S.AP',
                'photos'=>'made_sudiasih'
            ],
            [
                'name'=>'Ws. Ir. Nyoman Darsana',
                'photos'=>'nyoman_darsana'
            ]
        ];
        Jiangdao::insert($jiangdao);
        
    }
}
