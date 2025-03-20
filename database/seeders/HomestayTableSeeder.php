<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Homestay;

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

                'homestay_desc' => 'Joy House is in Giang Ta Chai village, Ta Van commune, 10km away from Sapa center, based on the idea of the Hmong traditional House.',

                'homestay_fullDesc' => 'Joy House is in Giang Ta Chai village, Ta Van commune, 10km away from Sapa center, based on the idea of the Hmong traditional House. Joy House is a combination of traditional house and homestay, that creates an environmentally friendly structure where is surrounded by nature with mountain, waterfall, river, bamboo forest and rice terraces.Give yourself an opportunity to listen the beautiful stories of the people around here, experience the local culture, find a joy and feel that we have come back.The waterfall,read or relax among nature. We have a big garden with tea trees which are 80 years old and a lot of vegetables and herbs. Harvest the vegetables for dinners and make fresh green tea together. You can do trekking from our place with a local tour guide, who speaks perfect English. The trekking will go through different beautiful places (villages, bamboo forest, waterfall, rice terraces...) which only known by locals.You also can join an indigo batik workshop with H`Mong teacher, all products will be made by your hands with indigo process. After the workshop, you can keep your products as a memory from Sapa.Traditionally, HMong people use hemp as a base fabric. The batik design is used for clothing and household items. Welcome back home, in every step, in every breath.',

                'homestay_rules' => 'Minimum stay is for 1 night, Maximum stay is for 6 nights', 

                'homestay_price' => 18,

               'homestay_images' => 'images/homestay11.png, images/homestay12.png, images/homestay13.png, images/homestay14.png, images/homestay15.png',

            ],

            [
                'homestay_name' => 'Marble Mountain Homestay',

                'homestay_location' => 'Vietnam',


                'homestay_desc' => 'My homestay is located in the peaceful area nearly the Marble Mountains is that a famous touristed place in Da Nang city. My home is located in a big garden and in front of my house is a Co Co river so you can enjoy the green living every day when you wake up.',


                'homestay_fullDesc' => 'If you are finding a green fresh air suburban home living but not far away the center of Danang city is that my house is an ideal place for you

                From my home, you can take only 5 minutes to go to Marble Mountains, 10 minutes to go to the My Khe Beach or go to Han Market for shopping and 15 minutes to travel to Hoi An Ancient Town by motorbike.

                We also have motorbikes and bicycles for rent so you can easily experience all Da Nang has to offer',


                'homestay_rules' => 'Minimum stay is for 1 night, Maximum stay is for 365 nights', 
                
                'homestay_price' => 5,

               'homestay_images' => 'images/homestay21.png, images/homestay22.png, images/homestay23.png',

            ],

            [
                'homestay_name' => 'Tan An Friendly Homestay',

                'homestay_location' => 'Vietnam',


                'homestay_desc' => 'Clean and affordable accommodation run by a friendly and helpful local family. Jolie Phong, who runs the premise, speaks good English and French. Non pushy service environment.',


                'homestay_fullDesc' => 'A welcoming atmosphere and excellent service is what you can expect during your stay at our Homestay. Our aim is for you to wish that you could stay forever, or if this is not possible, return one day soon.

                Our Homestay offers guests the opportunity to participate in a Free Bicycle tour of Hoi An (depends on the amount of guests and on weather as well) and its surrounds with volunteer students.Ideally situated: 5 minutes by bicycle from Hoi An Ancient Town - a UNESCO World Heritage Site, Midway between the Hoi An Ancient Town and the beach, 3 km from An Bang Beach/ 4 km from Cua Dai beach',

                'homestay_rules' => 'Minimum stay is for 1 night, Maximum stay is for 365 nights', 
                
                'homestay_price' => 7,

               'homestay_images' => 'images/homestay31.png, images/homestay32.png, images/homestay33.png, images/homestay34.png',

            ],

            [
                'homestay_name' => 'Authentic Real Life in Saigon',

                'homestay_location' => 'Vietnam',


                'homestay_desc' => 'Experience the real life experience of Saigonese in a big family, where you can learn about Vietnamese culture, language, and cuisine.',


                'homestay_fullDesc' => 'I live with my big family in district 8 where it is like the heart of the city because of going to all district just 1 km after passing these river. District 1 is such downtown district 5 such as china town district 4 along the river, district 7 _ the new city , district Binh Chanh like outskirt city.',

                'homestay_rules' => 'Minimum stay is for 1 night, Maximum stay is for 10 nights', 
                
                'homestay_price' => 8,

               'homestay_images' => 'images/homestay41.png, images/homestay42.png, images/homestay43.png, images/homestay44.png, images/homestay45.png',

            ],

            [
                'homestay_name' => 'A Gem in the Mountains of Sapa',

                'homestay_location' => 'Vietnam',


                'homestay_desc' => 'Our family lives in a 4 bed and 2 private room in the wooden house of roughly 80m2 to rent to couples, families or small private groups, on the north of Vietnam, its name Tavan village, Sapa, Vietnam. ',


                'homestay_fullDesc' => 'That is a wonderful moutains with mixes minorities culture as Hmong, Dzay, Red Dao, Tay, Kinh...Our home is 12km outside Sapa town with a wonderful Muong Hoa valley.

                A cosy home for those who like to experience and see a mix of minority household products, fabrics, self designed and locally made Pemu timber woode furniture, a private fence terrace 180 degree moutain view and some comforts like Wifi, Cable TV...

                You can do the trekking to the moutain surrounds the village, to the forrest and Waterfall Or just relaxing with a Therapy Massage, Cooking class with a wonderful authentic food. Its all up to you and optional on the house-rent.

                Nearby the house is a Vibe Bamboo bar with lovely music, Games, Dessert, Drink, Snacks',


                'homestay_rules' => 'Minimum stay is for 1 night, Maximum stay is for 365 nights', 
                
                'homestay_price' => 7,

               'homestay_images' => 'images/homestay51.png, images/homestay52.png, images/homestay53.png, images/homestay54.png, images/homestay55.png',

            ],

            [
                'homestay_name' => 'Traditional Japanese House in Osaka',

                'homestay_location' => 'Japan',


                'homestay_desc' => 'We live in a large villa in Osaka Japan 20 minutes from the station at the foot of the mountain.',


                'homestay_fullDesc' => 'We live in a large villa 20 minutes walk from the station at the foot of the mountain..1 dogs.2 bathrooms.3 toilets.large living room with view of the garden possibility of access to the entire ground floor as well that the garden
                Very warm and sympathetic family, Your laundry will be washed and folded. No smoking in the house.',


                'homestay_rules' => 'Minimum stay is for 1 night, Maximum stay is for 365 nights', 
                
                'homestay_price' => 8,

               'homestay_images' => 'images/homestay61.png, images/homestay62.png, images/homestay63.png,',

            ],

            [
                'homestay_name' => 'Home in Western Toyko',

                'homestay_location' => 'Japan',


                'homestay_desc' => 'A tatami room on the ground floor with a dedicated WC, and a room with wooden floor on the upper floor available for stay in a house in a quiet residential area in western Tokyo.',


                'homestay_fullDesc' => 'The house is a 10-minute walk from Nishiogikubo station on the JR Chuo Line, 20-minute walk from Ogikubo station on the JR Chuo and Tokyo Metro Marunouchi Lines, and a 25-minute walk from Kugayama station on the Keio Inokashira Line. Kichijoji is one stop from Nishiogikubo, Shinjuku is 10 minutes from Ogikubo, and Shibuya is 15 minutes from Kugayama.
                English-speaking host Shinji lives a minimalist life with two mameshiba puppies "Shiba" and "Mame" in the house. We welcome those who like dogs and do not smoke or use strong perfumes. Both rooms are air-conditioned and come with a desk and futon. (There is no bed or television.) There is a shared bathroom, washing machine and clotheslines on the upper floor and a dining room on the ground floor. Paid laundry dryers are available at the laundromat across the street.
                There are many good restaurants and shops, and multiple supermarkets in the neighborhood. We ask guests to keep quiet, especially at night.',

                'homestay_rules' => 'Minimum stay is for 1 night, Maximum stay is for 14 nights', 
                
                'homestay_price' => 9,

               'homestay_images' => 'images/homestay71.png, images/homestay72.png, images/homestay73.png, images/homestay74.png,',

            ],

            [
                'homestay_name' => 'Cozy and Relaxed Home in Toyko - Women Only',

                'homestay_location' => 'Japan',


                'homestay_desc' => 'Hello! We are a mother and a daughter with a cat (no fleas XD) living in a nice area in Tokyo. We like music, travel and sports, and my daughter likes animation and manga.',


                'homestay_fullDesc' => 'You can have an entrance key, can go out and come home any time. We respect guest privacy. 　Nobody will bother your privacy here, however when you need help let me know.

                The house is about 10 minutes away from the nearest train (Tamagawa station of Tokyu Toyoko line) and subway station. It only takes about 30 minutes to get to Shibuya, Shinjuku, and Harajuku by train or subway.

                The guest rooms are Western style single rooms with free high-speed wifi, a bed & desk. There are two half bathrooms and one shared full bathroom with a hair dryer for you to use. We have an indoor washer and dryer where you can do your laundry. Also, there is a kitchen downstairs that you and other guests can use freely. you can get your privacy having a separate kitchen and bathroom.', 
                
                'homestay_rules' => 'Minimum stay is for 1 night, Maximum stay is for 14 nights', 
                
                'homestay_price' => 9,

               'homestay_images' => 'images/homestay81.png, images/homestay82.png, images/homestay83.png, images/homestay84.png, images/homestay85.png',

            ],

            [
                'homestay_name' => '100 Year Old Traditional House in Kyoto',

                'homestay_location' => 'Japan',


                'homestay_desc' => 'Art & Craft in Our Life. The environment that a traditional gentle Japanese house in Kyoto is quiet. This area is placed in one of the culturally important parts and Green plants protected environment.',


                'homestay_fullDesc' => 'Katsura Imperial Villa (桂離宮, Katsura Rikyū) where it was built to watch the moon is 15 minutes walking. Also passage systems to the cities are connected very well. Our house is located within 5 min walk of Katsura station on the Hankyu line.you takes less 7 min from Katsura station to Arashiyama(嵐山) ,takes only 15 min to Gion(祇園) and 20 min to JR Kyoto station. Hana house was Kimono designer’s house. I produce the traditional craftsman of Kyoto, and the craftsman of the various types of job is a friend. My wife is an organic food manager and is good at cooking. And she makes clothes and dolls with kimono cloth. Since we like antiques, I will introduce elegant Kyoto that can only be experienced in Kyoto and that general tourists do not know. Please enjoy the culture of Kyoto with us.', 
                
                'homestay_rules' => 'Minimum stay is for 1 night, Maximum stay is for 14 nights', 
                
                'homestay_price' => 18,

               'homestay_images' => 'images/homestay91.png, images/homestay92.png, images/homestay93.png, images/homestay94.png',

            ],

            [
                'homestay_name' => 'Experience Life in Kawasaki',

                'homestay_location' => 'Japan',

                'homestay_desc' => 'We want to help foreign traveler, homestay guest, people who study Japanese. Happy to help them.',

                'homestay_fullDesc' => 'Hello, This is Akira & Yuki. We live with my family. There are 4 persons in my family, me, my wife,my son(13years old)(second son7years old). We have traveled Guam , Taipei , Korea , Thailand , KL , Paris , London. We like to communicate foreign people. We want to cherish the "Forrest Gump". So, We want to help foreign traveler, homestay guest, people who study Japanese. Happy to help them. We are want to seem that it was good to come to Japan you relax slowly. In Saitama Prefecture location, but it is in very close distance from Tokyo.So you can experience the local life. We Love "Wagakki-band"', 
                
                'homestay_rules' => 'Minimum stay is for 1 night, Maximum stay is for 14 nights', 
                
                'homestay_price' => 16,

               'homestay_images' => 'images/homestay101.png, images/homestay102.png, images/homestay103.png, images/homestay104.png, images/homestay105.png',

            ],

        


        ]);
    }
}
