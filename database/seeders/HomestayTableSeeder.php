<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomestayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Homestay::insert([
            [
                'homestay_name' => 'Joy House Sapa',

                'homestay_location' => 'Vietnam',

                'homestay_desc' => 'Joy House is in Giang Ta Chai village, Ta Van commune, 10km away from Sapa center, based on the idea of the Hmong traditional House. Joy House is a combination of traditional house and homestay, that creates an environmentally friendly structure where is surrounded by nature with mountain, waterfall, river, bamboo forest and rice terraces.Give yourself an opportunity to listen the beautiful stories of the people around here, experience the local culture, play with the children, give a rest among the nature, find a joy and feel that we have come back.The waterfall, river and bamboo forest just 5 minutes walking where you can swim, meditate, yoga, read or relax among nature. We have a big garden with tea trees which are 80 years old and a lot of vegetables and herbs. Lets harvest the vegetables for dinners and make fresh green tea together. You can do trekking from our place with a local tour guider, who speaks perfect English. The trekking will go through different beautiful places (villages, bamboo forest, waterfall, rice terraces,...) which only known by locals.You also can join an indigo batik workshop with H`Mong teacher, all products will be made by your hands with indigo process. After the workshop, you can keep your products as a memory from Sapa. Indigo batik fabric is the most unique fabric of HMong people. Batik is a resist dye technique created by wax drawn motifs. Traditionally, HMong people use hemp as a base fabric. The batik design is used for clothing and household items. Welcome back home, in every step, in every breath.',

                'homestay_rules' => 'Minimum stay is for 1 night, Maximum stay is for 6 nights', 
                'homestay_price' => 18,

                'homestay_images' => 'homestay11.png','homestay12.png','homestay13.png',

            ],
        ]);
    }
}
