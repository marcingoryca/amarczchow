<?php

namespace Database\Seeders;

use App\Models\BikeCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BikeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $mtb = 'Rowery górskie (MTB) to najbardziej wytrzymałe konstrukcje, przystosowane do dużych obciążeń. 
        Na trasy wymagające, trudny teren. Sprawdzą się zarówno na szosę, szuter czy kamienie.';

        $ebike = 'Rowery elektryczne (E-BIKE) to najmłodsza odmiana jednośladu. Różnią się zasięgiem jaki mogą
        pokonać na baterii, od typu rowera, czy przeznaczony jest bardziej w teren, na miasto czy ścieżki.';

        $cross = 'Rowery crossowe (CROSS) przeznaczone w szczególności na trasy szosowe. Wyposażone są w cieńsze
        opony niż w modelach mtb. Z tego względu użytkownik takiego pojazdu mniej się męczy i szybciej pokonuje dystans.';

        $city = 'Rowery miejskie (CITY) to rowery proste, praktycznie bezobsługowe, to rekreacyjnej jazdy na prostych trasach.
        Taki rower przeważnie jest wyposażony w przekładnię 3-biegową. Jego zaletą jest prostota i wygoda jazdy. Pozycja na 
        takim pojeździe jest wyprostowana, siodło jest szerokie.';

        $kids = 'Rowery dziecięce (KIDS) to rowery dla najmłodszych. Wiele modeli ma zamontowane kółka boczne, które
        ułatwiają młodym adeptom sztuki rowerowej wkraczać w świat kolarstwa. Do takiego roweru można również zamontować kij
        pomocniczy.';

        $trekking = 'Rowery turystyczne (TREKKING) to złoty środek pomiędzy przysłowiowym góralem, a mieszczuchem.
        Opony są cieńsze niż w górskim, ale również można poruszać się na bardziej wymagających trasach. Taki pojazd ma 
        na wyposażeniu bagażnik i błotniki, co jest rzadkością w rowerach mtb.';

        $junior = 'Rowery dla młodzieży (JUNIOR) to rowery z których dzieci wyrosły, ale nie dorosły do większych modeli.
        Przeważnie są to modele mtb i city tylko w mniejszej formie.';

        $categories = [
            ['category_id' => 1, 'category_name' => 'MTB', 'description' => $mtb, 'image_path' => 'mtb.png'],
            ['category_id' => 2, 'category_name' => 'E-Bike', 'description' => $ebike, 'image_path' => 'ebike.png'],
            ['category_id' => 3, 'category_name' => 'Cross', 'description' => $cross, 'image_path' => 'cross.png'],
            ['category_id' => 4, 'category_name' => 'City', 'description' => $city, 'image_path' => 'city.png'],
            ['category_id' => 5, 'category_name' => 'Kids', 'description' => $kids, 'image_path' => 'kids.png'],
            ['category_id' => 6, 'category_name' => 'Trekking', 'description' => $trekking, 'image_path' => 'trekking.png'],
            ['category_id' => 7, 'category_name' => 'Junior', 'description' => $junior, 'image_path' => 'junior.png']
        ];

        foreach ($categories as $cats) {
            BikeCategory::create($cats);
        }
    }
}
