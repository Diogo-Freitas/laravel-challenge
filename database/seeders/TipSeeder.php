<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tips')->insert([
            ['id' => 1, 'user_id' => 1, 'vehicle_id' => 1, 'brand_id' => 1, 'model_id' => 1, 'version' => 'versão 1', 'created_at' => now(), 'updated_at' => now(), 'tip' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper vestibulum quam, eu sollicitudin augue suscipit imperdiet. Suspendisse non aliquam enim. Nullam sagittis metus lectus, ultricies fringilla nunc maximus efficitur. Sed sodales lectus sed gravida lacinia.'],
            ['id' => 2, 'user_id' => 1, 'vehicle_id' => 1, 'brand_id' => 1, 'model_id' => 3, 'version' => 'versão 1', 'created_at' => now(), 'updated_at' => now(), 'tip' => 'Cras ultrices nisl at lorem euismod, at ullamcorper eros scelerisque. Maecenas tristique neque vitae urna dapibus luctus. Nullam vitae lacus neque.'],
            ['id' => 3, 'user_id' => 1, 'vehicle_id' => 1, 'brand_id' => 2, 'model_id' => 6, 'version' => 'versão 2', 'created_at' => now(), 'updated_at' => now(), 'tip' => 'Quisque sit amet quam ac erat congue pellentesque. Sed sed tellus quam. Praesent commodo mauris et viverra mollis. Mauris ornare ullamcorper congue. Etiam consectetur ligula nec neque tristique rutrum. Pellentesque mattis vestibulum diam porta dictum. Ut euismod neque et ligula faucibus varius.'],

            ['id' => 4, 'user_id' => 2, 'vehicle_id' => 2, 'brand_id' => 4, 'model_id' => 17, 'version' => 'versão 2', 'created_at' => now(), 'updated_at' => now(), 'tip' => 'Vestibulum vestibulum leo urna, vitae ultricies dolor commodo eu. Etiam non quam ipsum. Duis vitae luctus eros. Morbi non egestas eros. Nunc id tristique enim, in luctus eros. Praesent rhoncus finibus velit a posuere. Vivamus sodales et risus vel tincidunt. Fusce ut sollicitudin justo. In hac habitasse platea dictumst.'],
            ['id' => 5, 'user_id' => 2, 'vehicle_id' => 2, 'brand_id' => 4, 'model_id' => 20, 'version' => 'versão 3', 'created_at' => now(), 'updated_at' => now(), 'tip' => 'Dnteger varius elit eget quam aliquam, non hendrerit arcu viverra. Fusce sed nulla sapien. Nam vel lectus purus. Praesent placerat dolor mi, at iaculis erat convallis sed. Aliquam eget tempor elit, quis consequat sem. In eleifend elit vel purus feugiat, ac mattis risus semper. Duis id iaculis justo, vitae tincidunt dui. Nunc convallis, ante vitae pharetra eleifend, tellus lorem dignissim dui, quis tincidunt risus ex non ipsum. Donec quam ex, interdum et accumsan sit amet, suscipit ut tellus.'],
            ['id' => 6, 'user_id' => 2, 'vehicle_id' => 2, 'brand_id' => 5, 'model_id' => 26, 'version' => 'versão 3', 'created_at' => now(), 'updated_at' => now(), 'tip' => 'Sed rutrum lacus non tortor aliquam ullamcorper. Sed quis vulputate dui. Nam et purus ac metus fringilla rhoncus. Fusce lobortis magna eu sem rutrum iaculis. Aliquam bibendum nulla massa, sed finibus risus pharetra sit amet. Morbi cursus rutrum magna, et sodales sapien posuere sed.'],

            ['id' => 7, 'user_id' => 3, 'vehicle_id' => 2, 'brand_id' => 11, 'model_id' => 55, 'version' => 'versão 4', 'created_at' => now(), 'updated_at' => now(), 'tip' => 'Nunc vulputate magna ut suscipit iaculis. Duis mollis dolor vel sapien congue, eget elementum neque condimentum. Vestibulum eget orci et quam facilisis ornare vel at velit. Cras tellus erat, suscipit vel lacus laoreet, condimentum rhoncus risus. Vivamus congue luctus tellus. Vivamus lobortis turpis nisi, sollicitudin fermentum nunc volutpat dictum.'],
            ['id' => 8, 'user_id' => 3, 'vehicle_id' => 3, 'brand_id' => 12, 'model_id' => 62, 'version' => 'versão 4', 'created_at' => now(), 'updated_at' => now(), 'tip' => 'Praesent non metus et quam consequat posuere. In eget finibus risus. Sed sagittis malesuada rhoncus. Vestibulum in massa ligula. Nunc vestibulum, felis ornare luctus volutpat, neque orci mattis magna, sed mollis quam leo tincidunt mi. Phasellus quis turpis nec augue imperdiet ornare ac id mi. Etiam viverra sit amet nunc sed varius. '],
            ['id' => 9, 'user_id' => 4, 'vehicle_id' => 3, 'brand_id' => 11, 'model_id' => 60, 'version' => 'versão 2', 'created_at' => now(), 'updated_at' => now(), 'tip' => 'Quisque sit amet quam ac erat congue pellentesque. Sed sed tellus quam. Praesent commodo mauris et viverra mollis. Mauris ornare ullamcorper congue. Etiam consectetur ligula nec neque tristique rutrum. Pellentesque mattis vestibulum diam porta dictum. Ut euismod neque et ligula faucibus varius.'],
        ]);
    }
}
