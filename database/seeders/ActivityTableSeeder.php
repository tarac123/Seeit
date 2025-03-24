<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Activity::insert([
            [
                'activity_name' => 'Hanoi: 5 Local Dishes Cooking Class with Meal & Market Visit',

                'activity_location' => 'Hanoi, Vietnam',

                'activity_desc' => 'Visit a local market to buy fresh ingredients, learn to cook 5 traditional Hanoi dishes, and enjoy a tasty lunch or dinner of the food you prepared. Try rice whisky and receive a cook book.',

                'activity_fullDesc' => 'Be welcomed by a local chef at your meeting point in the Old Quarter of Hanoi. Venture to a local wet market where you can learn to shop like a local. Watch as your instructor selects and purchases fresh ingredients for your dishes. Choose from two delightful set menus that can be adapted to vegetarian diets. Pick from making banh xeo pancakes, bun cha (grilled pork and noodles), pork rib noodle soup, beef fresh rolls, chicken salad, and banana ice cream, or make pho, bun cha, fried spring rolls , papaya salad, and egg coffee. Get step-by-step instruction on how to craft each delicious dish. Sit down and enjoy the fruits of your labor. Sample some homemade rice whisky and seasonal fruits. Take home a certificate confirming your achievement and a cook book to help you recreate these recipes at home.',

                'activity_duration' => 'Duration 3.5 hours', 

                'activity_price' => 36,

               'activity_images' => 'images/activity11.png, images/activity12.png, images/activity13.png, images/activity14.png',

            ],

            [
                'activity_name' => 'Hanoi: Guided Food Tour with Train Street Visit',

                'activity_location' => 'Hanoi, Vietnam',


                'activity_desc' => 'Taste some of the favorite daily food of the locals on a Hanoi walking tour. Grab a coffee along a railway track as you watch a train pass by, stroll through the streets, and spot hidden street art.',


                'activity_fullDesc' => 'Start your tour at the meeting point on No.38 Bát Sứ street, and head to a traditional restaurant specializing in entrees such as pillow cake, shrimp cake, Pho rolls, and spring rolls. Have a taste of some popular and classic Vietnamese dishes. Next, enjoy pho (noodle soup), which is Vietnam’s most famous dish. But this is a new, different version, which is dry mixed Pho with a special sauce. Try the chicken versions and the refreshing taste will blow your mind! Then head over to a local restaurant to try Banh Mi - a signature baguette with variety of fillings and an explosion of flavors. And definitely dont miss out on a dessert called Kem Xôi (sticky rice with ice cream). Dive in the sweetness of the ice cream, the sticky texture of the rice, the crunch of the dry coconut. After several dishes, you will be full and satisfied. Catch a taxi and go straight to the train street. Although train schedules show them to come daily, sometimes they do and sometimes not, so if youre lucky, you may catch one and experience the huge train passing right in front of your face. While here, enjoy egg coffees at a nice shop trackside and experience the unique ambiance. When you’re done with the drinks, hop in a taxi again to go back to the meeting point where the tour ends. Kindly note the following: - The dishes listed may vary based on the guides discretion due to factors such as local restaurant availability, weather conditions, and timing. However, the tour will still include a total of five tastings/drink. - Depending on the train schedule and other circumstances, we may take you to a different Train Street location to ensure you experience the train passing by. As a result, transportation to Train Street may vary depending on your selected tour time.',


                'activity_duration' => 'Duration 3.5 - 4 hours', 
                
                'activity_price' => 16,

               'activity_images' => 'images/activity21.png, images/activity22.png, images/activity23.png',

            ],

            [
                'activity_name' => 'Hoi An: Vietnamese Foldable Lantern Making Class',

                'activity_location' => 'Hoi An, Vietnam',


                'activity_desc' => 'Learn how to make a foldable lantern and hear about this important part of Hoi Ans cultural heritage from your instructor. Bring home your very own hand-made souvenir.',


                'activity_fullDesc' => 'Immerse yourself in Vietnamese culture with a lantern-making class. Select from full and express options. In the full activity, make the lanterns completely from scratch. In the express activity, start with the bamboo structure of the lanterns already made and begin by choosing your lantern fabric. Begin your experience with some herbal tea and traditional music. Hear about the history of Hoi An bamboo silk lanterns from your host and how the local people believe that hanging lanterns in front of their house brings luck, happiness, and wealth. Create lanterns shaped like lotuses, triangles, garlic, UFOs, or diamonds and choose your own silk style and color with guidance from your instructor. This unique activity can be enjoyed by the entire family, even by kids as young as 3 years old. Once completed, these lanterns are easy to fold, carry, or put in your luggage, so you can take home an original, hand-made souvenir from your visit to Hoi An.',

                'activity_duration' => 'Duration 1.5 - 2.5 hours', 
                
                'activity_price' => 9,

               'activity_images' => 'images/activity31.png, images/activity32.png, images/activity33.png, images/activity34.png, images/activity35.png',

            ],

            [
                'activity_name' => 'Sa Pa: Muong Hoa Valley Trek and Local Ethnic Villages',

                'activity_location' => 'Sa Pa, Vietnam',


                'activity_desc' => 'Trek through the Muong Hoa Valley and enjoy panoramic views over the rice terraces. Hike along the Muong Hoa River and learn about traditional customs and cultures of different mountain ethnic groups.',


                'activity_fullDesc' => 'Benefit from pick-up at your hotel in Sa Pa, and then start your 10-kilometer trek through the beautiful valley. Admire the rice terraces hidden behind the morning mist as you follow a small trail to cross the Muong Hoa River. Continue past well-tended, terraced rice fields on your way to the village of Lao Chai, where a local Black Hmong ethnic group live. Hike to the village of Ta Van Giay and trek along the route of the Muong Hoa River to cross a small suspension bridge roughly 2 kilometers from the settlement. Discover a fascinating collection of ancient rock carvings that depict images of men, stilt houses and different decorative patterns. Enjoy lunch at a local house in the village before hiking through a bamboo forest and reaching the Red Dao ethnic minority village of Giang Ta Chai. Enjoy a short rest at a nearby waterfall before climbing uphill to the main road where the driver will be waiting for you to take you back to SaPa. ',


                'activity_duration' => 'Duration 5 hours', 
                
                'activity_price' => 20,

               'activity_images' => 'images/activity41.png, images/activity42.png, images/activity43.png, images/activity44.png, images/activity45.png',

            ],

            [
                'activity_name' => 'Sa Pa: Muong Hoa Valley Trek and Local Ethnic Villages',

                'activity_location' => 'Sa Pa, Vietnam',


                'activity_desc' => 'Trek through the Muong Hoa Valley and enjoy panoramic views over the rice terraces. Hike along the Muong Hoa River and learn about traditional customs and cultures of different mountain ethnic groups.',


                'activity_fullDesc' => 'Benefit from pick-up at your hotel in Sa Pa, and then start your 10-kilometer trek through the beautiful valley. Admire the rice terraces hidden behind the morning mist as you follow a small trail to cross the Muong Hoa River. Continue past well-tended, terraced rice fields on your way to the village of Lao Chai, where a local Black Hmong ethnic group live. Hike to the village of Ta Van Giay and trek along the route of the Muong Hoa River to cross a small suspension bridge roughly 2 kilometers from the settlement. Discover a fascinating collection of ancient rock carvings that depict images of men, stilt houses and different decorative patterns. Enjoy lunch at a local house in the village before hiking through a bamboo forest and reaching the Red Dao ethnic minority village of Giang Ta Chai. Enjoy a short rest at a nearby waterfall before climbing uphill to the main road where the driver will be waiting for you to take you back to SaPa. ',


                'activity_duration' => 'Duration 5 hours', 
                
                'activity_price' => 20,

               'activity_images' => 'images/activity41.png, images/activity42.png, images/activity43.png, images/activity44.png, images/activity45.png',

            ],

            [
                'activity_name' => 'Hiroshima Historical Walking Tour',

                'activity_location' => 'Hiroshima, Japan',

                'activity_desc' => 'Join us on a profound journey through Hiroshima to understand why the atomic bomb was dropped on this city.',

                'activity_fullDesc' => 'Join us on a profound journey through Hiroshima to understand why the atomic bomb was dropped on this city. Our thematic tour covers three key sites: Gokoku Shrine, Hiroshima Castle, and the Peace Memorial Park. Each location provides unique insights into Hiroshimas military significance during World War II, the strategic reasons behind its selection as a target, and the devastating human and cultural consequences of the bombing. Explore the historical and military context at Gokoku Shrine and Hiroshima Castle, and then reflect on the tragic aftermath and the enduring call for peace at the Peace Memorial Park. This tour offers a comprehensive look into the events leading up to the bombing, fostering a deep appreciation for peace and reconciliation. Join us to explore the profound impacts and the ongoing legacy of one of the most pivotal events of the 20th century.',

                'activity_duration' => 'Duration 2.5 hours', 
                
                'activity_price' => 25,

               'activity_images' => 'images/activity61.png, images/activity62.png, images/activity63.png, images/activity64.png ',

            ],

            [
                'activity_name' => 'Best of Himeji Castle: 3hr Tour with Licensed Guide',

                'activity_location' => 'Himeji, Japan',

                'activity_desc' => 'Visit Japans greatest and only UNESCO World Heritage castle with an informative entertaining local guide. Step into the ancient world of Samurai, Ninjas, Princesses, and Spies.',

                'activity_fullDesc' => 'Discover the best of Himeji on a private guided walking tour. Learn about the history and beauty and defensive mechanisms of Himeji Castle. We will help you skip the line and go straight in. Saving you from standing in the hot sun or rain lining up (on busy days this can be half an hour or more) Enjoy a personal and professional experience with an experienced local guide. We are trusted by tour agents from Austria to Australia, from the UK to USA. Gain fascinating insights into Japan’s history and culture. We make the history come alive. Ask about customizing your tour and let your guide take care of the itinerary. Explore Himeji in your own way with a local guide who will show you how to eat like a local. Let us know what special dietary or mobility requirements you have when booking and we can tailor your itinerary according to your needs. Please note that the French language tour option may not be available for every time. Especially during the busy Cherry blossom season. We will do our best to accommodate you. Thank you for your cooperation and understanding.',

                'activity_duration' => 'Duration 3 hours', 
                
                'activity_price' => 71,

               'activity_images' => 'images/activity81.png, images/activity82.png, images/activity83.png, images/activity84.png ',

            ],

            [
                'activity_name' => 'Kyoto: Nishiki Market Tea Ceremony with Koto Performance',

                'activity_location' => 'Himeji, Japan',

                'activity_desc' => 'Immerse yourself in the traditions of Kyoto with a tea ceremony experience. Make your own delicious tea in an authentic and vivid Japanese setting. Enjoy a live Koto (Japanese harp) performance.',

                'activity_fullDesc' => 'Discover the best of Himeji on a private guided walking tour. Learn about the history and beauty and defensive mechanisms of Himeji Castle. We will help you skip the line and go straight in. Saving you from standing in the hot sun or rain lining up (on busy days this can be half an hour or more) Enjoy a personal and professional experience with an experienced local guide. We are trusted by tour agents from Austria to Australia, from the UK to USA. Gain fascinating insights into Japan’s history and culture. We make the history come alive. Ask about customizing your tour and let your guide take care of the itinerary. Explore Himeji in your own way with a local guide who will show you how to eat like a local. Let us know what special dietary or mobility requirements you have when booking and we can tailor your itinerary according to your needs. Please note that the French language tour option may not be available for every time. Especially during the busy Cherry blossom season. We will do our best to accommodate you. Thank you for your cooperation and understanding.',

                'activity_duration' => 'Duration 1 hour', 
                
                'activity_price' => 41,

               'activity_images' => 'images/activity91.png, images/activity92.png, images/activity93.png, images/activity94.png ',

            ],

            [
                'activity_name' => 'Tsukiji Fish Market Food and Walking Tour',

                'activity_location' => 'Tokyo, Japan',

                'activity_desc' => 'Explore Tsukiji, one of the largest fish markets in the world, on this walking tour in Tokyo. Gain insights into Japanese culinary traditions from your local guide.',

                'activity_fullDesc' => 'Embark on a journey through the Tsukiji Fish Market, home to one of the largest and most famous fish markets in the world. With the expertise of a local guide, immerse yourself in the rich culture and history of this iconic market, which has been a cornerstone of Tokyos food scene for over 80 years. Begin your journey by navigating through Tsukiji Hongwanji, a stunning temple known for its intricate carvings and serene interior. Next, we will visit the bustling outer market, where vibrant stalls overflow with fresh seafood, vegetables, and other traditional ingredients. Learn about the markets history and its significance in Japanese cuisine from your guide. Gain insights into the wide variety of ingredients essential to Japanese cooking. From rare seafood to specialty spices, your guide will explain the unique qualities and uses of each, providing a deeper understanding of the culinary arts in Japan.',

                'activity_duration' => 'Duration 2 hours', 
                
                'activity_price' => 34,

               'activity_images' => 'images/activity101.png, images/activity102.png, images/activity103.png, images/activity104.png ',

            ],
            
            [
                'activity_name' => 'Sumo Morning Practice Viewing Tour',

                'activity_location' => 'Tokyo, Japan',

                'activity_desc' => 'Explore a real Sumo stable in Tokyo with a guide and discover the unique wonders of this traditional Japanese sport based on Shinto rituals as you watch Sumo wrestlers in training.',

                'activity_fullDesc' => 'We visit one of the real Sumo stables in Tokyo where they live and train every day! Come and observe a Sumo wrestler practice session. How do they practice, and what Sumo is all about? Actually, the Sumo stables are not very open to the public because it was only for sponsors. So this is a very special experience even for Japanese locals. You will get the chance to talk to your English-speaking guide and wrestlers to learn more about Sumo and the tournaments they train so diligently for. The stable is located in Ryogoku which is a famous area for Sumo stadium and Sumo town. After the tour, you can easily access the Sumo meal restaurants. Sumo is a traditional Japanese sport, based on Shinto beliefs. Similar to wrestling, the participants try to force their opponent out of the ring or force any part of his body to touch the ground. They train diligently from early in the morning almost every day. See a training session up close and personal as these powerhouses train for the Sumo Tournament, held 6 times a year. Watch these young wrestlers who live together chase their dream of becoming wrestlers of the highest rank. [Itinerary] Listen to the explanation about sumo -Head to Sumo stable (15 min) -Watch sumo morning training until the end (60-90 min. *depends on the day) -Finish the tour',

                'activity_duration' => 'Duration 2 - 3 hours', 
                
                'activity_price' => 73,

               'activity_images' => 'images/activity111.png, images/activity112.png, images/activity113.png ',

            ],

            [
                'activity_name' => 'FAST & FURIOUS EXPERIENCE Daikoku Tokyo Car Club',

                'activity_location' => 'Tokyo, Japan',

                'activity_desc' => 'Become a member Car Club and enjoy Japanese car culture! Enjoy exclusive perks like our signature car membership card, Photographs along with unforgettable experiences.',

                'activity_fullDesc' => 'Experience the Ultimate JDM Adventure – Join Our Exclusive Car Club! Are you ready for an authentic and unforgettable JDM experience? Become a member of Tokyo’s Car Club and embark on an exhilarating journey from the heart of Tokyo, Akihabara, to the legendary Daikoku Parking Area, a dream destination for car enthusiasts worldwide. Get ready to cruise in style with the largest convoy of cars available for this experience—every single car belongs to our exclusive car club. You’ll ride in an epic lineup of JDM legends like the Honda Civic FK8, Toyota 86, Nissan Silvia S15, and Toyota Chaser drift cars, alongside American muscle beasts like the Dodge Challenger and Ford Mustang. This is the closest you’ll get to a Fast & Furious-style adventure, blending high-performance machines with Tokyo’s electrifying car culture. Our multicultural team of car club guides hails from Japan, Brazil, Germany, and France, ensuring a truly immersive experience with deep insights into the local automotive scene. All guides speak English and Japanese fluently, making it easy for you to connect with Japan’s passionate car community. But this isn’t just for hardcore car enthusiasts—our experience blends car culture with Tokyo’s iconic landmarks. Along the way, you’ll enjoy stunning views of Tokyo Tower, Rainbow Bridge, and more, before concluding your journey in the vibrant Shibuya, the city that never sleeps. Whether you’re a lifelong JDM fan or just starting to explore the automotive world, this experience is designed to be a thrilling and memorable adventure for everyone. Important Notices: • The Largest Convoy of Cars: We have the biggest lineup of vehicles for this experience, and every car belongs to our Tokyo’s Car Club, ensuring a unique and authentic adventure. • Hotel Drop-Off Is Not Provided: To comply with Japanese transportation laws and avoid any legal issues, we do not offer hotel drop-off. Police have informed us that this could be considered an unauthorized taxi service, which could cause problems for both us and our participants. Instead, we finish the experience in Akihabara, allowing you to continue exploring the city at your own pace. • Tour times and locations may change due to unforeseen circumstances such as weather, traffic conditions, or other unexpected events. While we strive to maintain the planned itinerary, adjustments may be necessary to ensure the best experience for all participants. We will notify you of any changes as soon as possible. By booking this experience, you agree to these terms and conditions.',

                'activity_duration' => 'Duration 4 hours', 
                
                'activity_price' => 112,

               'activity_images' => 'images/activity121.png, images/activity122.png, images/activity123.png, images/activity124.png ',

            ],
        ]);
    }
}
