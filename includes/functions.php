<?php
/**
 * Trusty Travel - Helper & Database Functions
 */

function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

function isActive($page, $current) {
    return ($page === $current) ? 'active' : '';
}

function formatPhone($phone) {
    return '+94 ' . substr($phone, -9);
}

function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

function getAnimationDelay($index) {
    return ($index * 0.1) . 's';
}

/**
 * Decode JSON strings stored in DB cleanly
 */
function parseJsonField($field, $default = []) {
    if (is_array($field)) return $field;
    if (is_string($field)) {
        $decoded = json_decode($field, true);
        return is_array($decoded) ? $decoded : $default;
    }
    return $default;
}

/**
 * Fetch Multi-Day Round Tour Packages from DB or Array
 */
function getPackages() {
    $pdo = getDBConnection();
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM packages WHERE status = 'active' ORDER BY id ASC");
            $rows = $stmt->fetchAll();
            foreach ($rows as &$row) {
                $row['images'] = parseJsonField($row['images'] ?? '[]');
                $row['itinerary'] = parseJsonField($row['itinerary'] ?? '[]');
                $row['inclusions'] = parseJsonField($row['inclusions'] ?? '[]');
            }
            return $rows;
        } catch (PDOException $ex) {
            error_log("DB Query Error: " . $ex->getMessage());
        }
    }
    // Fallback Array
    return [
        [
            'name' => '3-Day Cultural Triangle & Kandy Highlights',
            'badge' => '🔥 HOT DEAL',
            'location' => 'Sigiriya · Dambulla · Kandy',
            'rating' => '5.0 (38 Reviews)',
            'price_usd' => '$149 USD / person',
            'price_lkr' => '(~45,000 LKR)',
            'images' => ['/assets/Images/roundtour/firstcard/sigiriya.webp', '/assets/Images/roundtour/firstcard/dambullacavetemple.webp', '/assets/Images/roundtour/firstcard/daladamaligawa.webp', '/assets/Images/roundtour/firstcard/Pinnawala.webp'],
            'itinerary' => [
                ['day' => 'Day 1', 'steps' => ['Airport Pickup', 'Pinnawala Elephant Sanctuary', 'Sigiriya Lion Rock Climb']],
                ['day' => 'Day 2', 'steps' => ['Dambulla Golden Cave Temple', 'Matale Spice Garden Visit', 'Kandy Sacred Temple of Tooth']],
                ['day' => 'Day 3', 'steps' => ['Kandy Royal Botanical Gardens', 'Airport Drop-off Transfer']]
            ],
            'inclusions' => ['Private Luxury AC Vehicle & Driver', 'Sigiriya Lion Rock Fortress Climb', 'Dambulla Golden Cave Temple', 'Kandy Sacred Temple of Tooth'],
            'whatsapp_text' => "3-Day Cultural Triangle Tour"
        ],
        [
            'name' => '5-Day Essential Sri Lanka Classic',
            'badge' => '🏆 #1 BESTSELLER',
            'location' => 'Sigiriya · Kandy · Ella',
            'rating' => '5.0 (52 Reviews)',
            'price_usd' => '$249 USD / person',
            'price_lkr' => '(~75,000 LKR)',
            'images' => ['/assets/Images/roundtour/secondcard/sigiriya.webp', '/assets/Images/roundtour/secondcard/nuwaraeliya.webp', '/assets/Images/roundtour/secondcard/bluetrain.webp', "/assets/Images/roundtour/secondcard/admspeak.webp"],
            'itinerary' => [
                ['day' => 'Day 1', 'steps' => ['Airport Pickup', 'Sigiriya Lion Rock Climb']],
                ['day' => 'Day 2', 'steps' => ['Dambulla Golden Cave Temple', 'Kandy Sacred Temple of Tooth']],
                ['day' => 'Day 3', 'steps' => ['Scenic Nuwara Eliya Tea Factory']],
                ['day' => 'Day 4', 'steps' => ['Famous Blue Train to Ella', 'Ella Nine Arch Bridge']],
                ['day' => 'Day 5', 'steps' => ["Little Adam's Peak Hike", 'Airport Departure Transfer']]
            ],
            'inclusions' => ['Private AC Vehicle & Chauffeur', 'Pinnawala Elephant Sanctuary', 'Nuwara Eliya Ceylon Tea Plantation', 'Iconic Kandy to Ella Train Journey'],
            'whatsapp_text' => "5-Day Essential Sri Lanka Tour"
        ],
        [
            'name' => '7-Day Island Wonder & Yala Safari Expedition',
            'badge' => '🐘 WILDLIFE SAFARI',
            'location' => 'Sigiriya · Kandy · Ella · Yala',
            'rating' => '5.0 (65 Reviews)',
            'price_usd' => '$379 USD / person',
            'price_lkr' => '(~115,000 LKR)',
            'images' => ['/assets/Images/roundtour/thirdcard/yapahuwa.webp', '/assets/Images/roundtour/thirdcard/dambulla.webp', '/assets/Images/roundtour/thirdcard/nuwaraeliya.webp', '/assets/Images/roundtour/thirdcard/ninearch.webp', '/assets/Images/roundtour/thirdcard/yala.webp', '/assets/Images/roundtour/thirdcard/gallefort.webp'],
            'itinerary' => [
                ['day' => 'Day 1', 'steps' => ['Airport Transfer', 'Sigiriya Rock Fortress']],
                ['day' => 'Day 2', 'steps' => ['Polonnaruwa Ancient Kingdom Tour']],
                ['day' => 'Day 3', 'steps' => ['Dambulla Cave Temple', 'Kandy Cultural Dance Show']],
                ['day' => 'Day 4', 'steps' => ['Ceylon Tea Plantations', 'Nuwara Eliya Waterfalls']],
                ['day' => 'Day 5', 'steps' => ['Ella Nine Arch Bridge', 'Ravana Waterfalls']],
                ['day' => 'Day 6', 'steps' => ['Yala National Park 4x4 Safari']],
                ['day' => 'Day 7', 'steps' => ['Mirissa Beach & Galle Dutch Fort', 'Airport Transfer']]
            ],
            'inclusions' => ['Private AC Transport with Fuel & Tolls', 'Sigiriya Rock & Cave Temples', 'Ella Nine Arch Bridge Hike', 'Yala National Park 4x4 Jeep Safari'],
            'whatsapp_text' => "7-Day Island Wonder Tour"
        ],
        [
            'name' => '10-Day Complete Sri Lanka Grand Heritage & Beach',
            'badge' => '🏝️ GRAND TOUR',
            'location' => 'Full Island Grand Tour',
            'rating' => '5.0 (48 Reviews)',
            'price_usd' => '$549 USD / person',
            'price_lkr' => '(~165,000 LKR)',
            'images' => ['/assets/Images/roundtour/fourthcard/ruwanwalisaya.webp', '/assets/Images/roundtour/fourthcard/sigiriya.webp', '/assets/Images/roundtour/fourthcard/teacountry.webp', '/assets/Images/roundtour/fourthcard/yalasafari.webp', '/assets/Images/roundtour/fourthcard/gallefort.webp', '/assets/Images/roundtour/fourthcard/Buddha.webp'],
            'itinerary' => [
                ['day' => 'Day 1-3', 'steps' => ['Anuradhapura Ancient Kingdom', 'Sigiriya Rock Fortress']],
                ['day' => 'Day 4-5', 'steps' => ['Kandy Sacred Temple of Tooth', 'Ceylon Tea Country']],
                ['day' => 'Day 6-7', 'steps' => ['Ella Mountains & Nine Arch Bridge', 'Yala Leopard Safari Expedition']],
                ['day' => 'Day 8-10', 'steps' => ['Mirissa Coast & Galle Dutch Fort', 'Airport Departure Transfer']]
            ],
            'inclusions' => ['Ancient Capitals (Anuradhapura & Polonnaruwa)', 'Central Highlands & Tea Country', 'Yala Leopard Safari Expedition', 'Mirissa Whale Watching & Galle Fort'],
            'whatsapp_text' => "10-Day Grand Heritage Tour"
        ]
    ];
}

/**
 * Fetch Safari & Adventure Tours from DB or Array
 */
function getSafariTours() {
    $pdo = getDBConnection();
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM safari_tours WHERE status = 'active' ORDER BY id ASC");
            $rows = $stmt->fetchAll();
            foreach ($rows as &$row) {
                $row['images'] = parseJsonField($row['images'] ?? '[]');
                $row['inclusions'] = parseJsonField($row['inclusions'] ?? '[]');
            }
            return $rows;
        } catch (PDOException $ex) {
            error_log("DB Query Error: " . $ex->getMessage());
        }
    }
    // Fallback Array
    return [
        [
            'name' => 'Kitulgala White Water Rafting',
            'badge' => 'Bestseller',
            'location' => 'Kitulgala River',
            'rating' => '5.0 (68 Reviews)',
            'price_usd' => '$7 USD / person',
            'price_lkr' => '(~2,000 LKR)',
            'images' => ['/assets/Images/safari/firstcard/waterrafting.webp', '/assets/Images/safari/firstcard/boatride.webp', '/assets/Images/safari/firstcard/boatride2.webp'],
            'inclusions' => ['5km Grade 2 & 3 Kelani River Rapids', 'Certified Safety Gear, Helmets & Life Vests', 'River Bathing & Natural Rock Jumps']
        ],
        [
            'name' => 'Waterfall Abseiling & Rappelling',
            'badge' => 'Extreme Action',
            'location' => 'Sandun Ella Waterfall',
            'rating' => '5.0 (42 Reviews)',
            'price_usd' => '$15 USD / person',
            'price_lkr' => '(~4,500 LKR)',
            'images' => ['/assets/Images/safari/secondcard/sandunella1.webp', '/assets/Images/safari/secondcard/sandunella2.webp', '/assets/Images/safari/secondcard/sandunella3.webp'],
            'inclusions' => ['105ft Waterfall Descend Challenge', 'Professional Climbing Instructors', 'Confidence Rope Harness & Safety Systems']
        ],
        [
            'name' => 'Yala Leopard 4x4 Jeep Safari',
            'badge' => 'Wildlife Safari',
            'location' => 'Yala National Park',
            'rating' => '5.0 (84 Reviews)',
            'price_usd' => '$40 USD / jeep',
            'price_lkr' => '(~12,000 LKR)',
            'images' => ['/assets/Images/safari/thirdcard/yalasafari1.webp', '/assets/Images/safari/thirdcard/yalasafari2.webp', '/assets/Images/safari/thirdcard/yalasafari3.webp'],
            'inclusions' => ['Private Modified 4x4 Open Safari Jeep', 'Expert Wildlife Tracker & Driver', 'Highest Density Leopard Sighting Zone']
        ],
        [
            'name' => 'Udawalawe Wild Elephant Jeep Safari',
            'badge' => 'Elephants',
            'location' => 'Udawalawe National Park',
            'rating' => '5.0 (59 Reviews)',
            'price_usd' => '$35 USD / jeep',
            'price_lkr' => '(~10,500 LKR)',
            'images' => ['/assets/Images/safari/fourthcard/udawalawe.webp', '/assets/Images/safari/fourthcard/udawalawe2.webp', '/assets/Images/safari/fourthcard/udawalawe3.webp'],
            'inclusions' => ['Guaranteed Wild Elephant Herds Sightings', 'Elephant Transit Home Feeding Visit', 'Water Birds & Crocodiles']
        ]
    ];
}

/**
 * Fetch Day Excursions from DB or Array
 */
function getDayTours() {
    $pdo = getDBConnection();
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM day_tours WHERE status = 'active' ORDER BY id ASC");
            $rows = $stmt->fetchAll();
            foreach ($rows as &$row) {
                $row['images'] = parseJsonField($row['images'] ?? '[]');
                $row['inclusions'] = parseJsonField($row['inclusions'] ?? '[]');
            }
            return $rows;
        } catch (PDOException $ex) {
            error_log("DB Query Error: " . $ex->getMessage());
        }
    }
    return [
        [
            'name' => 'Anuradhapura Sacred Citadel Pilgrimage Day Tour',
            'badge' => 'Anuradhapura HQ',
            'location' => 'Anuradhapura Ancient Kingdom',
            'rating' => '5.0 (46 Reviews)',
            'price_usd' => '$35 USD / person',
            'price_lkr' => '(~10,500 LKR)',
            'images' => ['/assets/Images/day-tours/firstcard/anuradhapura.webp', '/assets/Images/day-tours/firstcard/anuradhapura1.webp', '/assets/Images/day-tours/firstcard/anuradhapura2.webp'],
            'inclusions' => ['Sacred Jaya Sri Maha Bodhi Tree', 'Ruwanwelisaya & Jetavanaramaya Stupas', 'Twin Ponds (Kuttam Pokuna) & Samadhi Buddha']
        ],
        [
            'name' => 'Sigiriya Rock Fortress & Dambulla Cave Excursion',
            'badge' => 'UNESCO World Heritage',
            'location' => 'Sigiriya & Dambulla',
            'rating' => '5.0 (72 Reviews)',
            'price_usd' => '$45 USD / person',
            'price_lkr' => '(~13,500 LKR)',
            'images' => ['/assets/Images/day-tours/secondcard/sigiriya.webp', '/assets/Images/day-tours/secondcard/dambulla.webp', '/assets/Images/day-tours/secondcard/traditionalvillage.webp'],
            'inclusions' => ['Climb 5th Century Sigiriya Lion Rock Fortress', 'Explore Dambulla Golden Rock Temple Caves', 'Traditional Village Lunch & Bullock Cart Ride']
        ],
        [
            'name' => 'Madu River Mangrove Boat Safari & Fish Therapy',
            'badge' => 'Coastal Safari',
            'location' => 'Balapitiya / Bentota',
            'rating' => '5.0 (39 Reviews)',
            'price_usd' => '$20 USD / boat',
            'price_lkr' => '(~6,000 LKR)',
            'images' => ['/assets/Images/day-tours/thirdcard/maduriver.webp', '/assets/Images/day-tours/thirdcard/maduriver2.webp', '/assets/Images/day-tours/thirdcard/maduriver3.webp'],
            'inclusions' => ['Mangrove Tunnel Cruise & Cinnamon Island Visit', 'Natural Fish Massage Spa in River', 'Turtle Hatchery Visit in Kosgoda']
        ],
        [
            'name' => 'Colombo to Trincomalee Shuttle & Safari Drive',
            'badge' => 'Shuttle & Safari',
            'location' => 'Colombo → Trincomalee',
            'rating' => '5.0 (54 Reviews)',
            'price_usd' => 'Daily Shuttle Schedule',
            'price_lkr' => '12 Hours Tour & Safari Drive',
            'images' => ['/assets/Images/day-tours/fourthcard/0_cover.webp', '/assets/Images/day-tours/fourthcard/1_minneriya.webp', '/assets/Images/day-tours/fourthcard/2_kaudulla.webp', '/assets/Images/day-tours/fourthcard/3_foodtestinginsigiriya.webp'],
            'inclusions' => ['Hotel pickup from Colombo, Negombo & suburbs', 'Exclusive Safari at Minneriya & Kaudulla National Park with Authentic Food Tasting in Sigiriya Village and more', 'Hotel drop to Trincomalee, Nilaveli & suburbs']
        ],
        [
            'name' => 'Mirissa to Ella Shuttle & Udawalawe Safari Drive',
            'badge' => 'Shuttle & Safari',
            'location' => 'Mirissa → Ella',
            'rating' => '5.0 (62 Reviews)',
            'price_usd' => 'Daily Departure Times',
            'price_lkr' => 'Shuttle Transfer & Udawalawe 4x4 Safari Included',
            'images' => ['/assets/Images/day-tours/fifthcard/0_cover.webp', '/assets/Images/day-tours/fifthcard/1_udawalawe.webp', '/assets/Images/day-tours/fifthcard/2_udawalawe.webp', '/assets/Images/day-tours/fifthcard/3_udawalawe.webp', '/assets/Images/day-tours/fifthcard/4_udawalawe.webp'],
            'inclusions' => ['Hotel Pickup from Mirissa, Galle, Dickwella, Tangalle & Suburbs', '3.5 – 4 Hours of Pure Wilderness', 'Hotel Drop to Ella, Haputale, Bandarawela & Suburbs']
        ],
        [
            'name' => 'Ella to Mirissa Shuttle & Udawalawe Safari Drive',
            'badge' => 'Shuttle & Safari',
            'location' => 'Ella → Mirissa',
            'rating' => '5.0 (48 Reviews)',
            'price_usd' => 'Daily Departure Times',
            'price_lkr' => 'Shuttle Transfer & Udawalawe 4x4 Safari Included',
            'images' => ['/assets/Images/day-tours/sixthcard/0_cover.webp', '/assets/Images/day-tours/sixthcard/1_udawlawe.webp', '/assets/Images/day-tours/sixthcard/2_udawalawe.webp', '/assets/Images/day-tours/sixthcard/3_udawalawe.webp', '/assets/Images/day-tours/sixthcard/4_udawalawe.webp', '/assets/Images/day-tours/sixthcard/5_udawalawe.webp', '/assets/Images/day-tours/sixthcard/6_udawalawe.webp'],
            'inclusions' => ['Hotel Pickup from Ella, Haputale, Bandarawela & Suburbs', '3.5 – 4 Hours of Pure Wilderness', 'Hotel Drop to Mirissa, Galle, Dickwella, Tangalle & Suburbs']
        ],
        [
            'name' => 'Dambulla to Trincomalee Shuttle & Safari Drive',
            'badge' => 'Shuttle & Safari',
            'location' => 'Dambulla → Trincomalee',
            'rating' => '5.0 (41 Reviews)',
            'price_usd' => 'Daily Shuttle Schedule',
            'price_lkr' => '6 Hours Tour & Safari Drive',
            'images' => ['/assets/Images/day-tours/seventhcard/0_cover.webp', '/assets/Images/day-tours/seventhcard/1_minneriya.webp', '/assets/Images/day-tours/seventhcard/2_minneriya.webp', '/assets/Images/day-tours/seventhcard/3_kaudulla.webp', '/assets/Images/day-tours/seventhcard/4_kaudulla.webp'],
            'inclusions' => ['Hotel pickup from Dambulla, Sigiriya, Habarana & suburbs', 'Exclusive Safari at Minneriya or Kaudulla National park', 'Hotel drop to Trincomalee, Nilaveli & suburbs']
        ],
        [
            'name' => 'Anuradhapura to Wilpattu Safari & Return Day Tour',
            'badge' => 'Wildlife & Safari',
            'location' => 'Anuradhapura ⇄ Wilpattu',
            'rating' => '5.0 (58 Reviews)',
            'price_usd' => 'Daily Safari Departures',
            'price_lkr' => 'Same-Day Wilpattu Safari Round Trip',
            'images' => ['/assets/Images/day-tours/eightthcard/0_cover.webp', '/assets/Images/day-tours/eightthcard/1_wilpattu.webp', '/assets/Images/day-tours/eightthcard/2_wilpattu.webp', '/assets/Images/day-tours/eightthcard/3_wilpattu.webp', '/assets/Images/day-tours/eightthcard/4_wilpattu.webp'],
            'inclusions' => ['Hotel pickup from Anuradhapura & suburbs', 'Exclusive 4x4 Jeep Safari at Wilpattu National Park (Leopards, Sloth Bears & Lakes)', 'Hotel drop back to Anuradhapura & suburbs in one day']
        ],
        [
            'name' => 'Colombo to Sigiriya Shuttle & Heritage Excursion',
            'badge' => 'Shuttle & Excursion',
            'location' => 'Colombo → Sigiriya',
            'rating' => '5.0 (52 Reviews)',
            'price_usd' => 'Daily Departure Schedule',
            'price_lkr' => 'Shuttle Transfer & Heritage Excursion Included',
            'images' => ['/assets/Images/day-tours/ninethcard/0_cover.webp', '/assets/Images/day-tours/ninethcard/1_dambulla.webp', '/assets/Images/day-tours/ninethcard/2_sigiriya.webp', '/assets/Images/day-tours/ninethcard/3_traditionalvillage.webp'],
            'inclusions' => ['Pickup from Colombo / Negombo & suburbs', 'Explore Dambulla Golden Rock Temple Caves', 'Traditional Village Lunch & Bullock Cart Ride', 'Climb 5th Century Sigiriya Lion Rock Fortress', 'Drop off to Sigiriya & suburbs']
        ]
    ];
}

/**
 * Fetch Transport Fleet from DB or Array
 */
function getTransportServices() {
    $pdo = getDBConnection();
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM transport_services WHERE status = 'active' ORDER BY id ASC");
            $rows = $stmt->fetchAll();
            foreach ($rows as &$row) {
                $row['inclusions'] = parseJsonField($row['inclusions'] ?? '[]');
            }
            return $rows;
        } catch (PDOException $ex) {
            error_log("DB Query Error: " . $ex->getMessage());
        }
    }
    return [
        [
            'name' => 'Toyota Roomy / Compact AC Car',
            'badge' => 'Compact AC Car',
            'vehicle_type' => 'Dual AC Hatchback',
            'rating' => '5.0 (30 Reviews)',
            'price_usd' => '$0.40 USD / km',
            'price_lkr' => '(120 LKR/km)',
            'image' => '/assets/Images/optimized/roomy.webp',
            'inclusions' => ['Dual AC, Sliding Doors & Plush Interior', 'Capacity: 3 Passengers + Luggage Bags', 'Includes Fuel, Driver Accommodation & Tolls']
        ],
        [
            'name' => 'Honda Vezel / Luxury Hybrid SUV',
            'badge' => 'Luxury SUV',
            'vehicle_type' => 'Climate Control SUV',
            'rating' => '5.0 (45 Reviews)',
            'price_usd' => '$0.60 USD / km',
            'price_lkr' => '(180 LKR/km)',
            'image' => '/assets/Images/optimized/vezel.webp',
            'inclusions' => ['High Ground Clearance & Panoramic Comfort', 'Capacity: 4 Passengers + Large Luggage', 'Full Airport Pickups & Highway Tolls Included']
        ],
        [
            'name' => 'Mitsubishi Montero / Premium SUV',
            'badge' => 'Premium VVIP',
            'vehicle_type' => 'VVIP Chauffeur Service',
            'rating' => '5.0 (20 Reviews)',
            'price_usd' => '$0.80 USD / km',
            'price_lkr' => '(240 LKR/km)',
            'image' => '/assets/Images/optimized/Montero.webp',
            'inclusions' => ['4WD Full Option Luxury Comfort & Safety', 'Capacity: 4 Passengers + Large Suitcases', 'VIP English-speaking Chauffeur Guide Included']
        ],
        [
            'name' => 'Toyota KDH High-Roof Mini Van',
            'badge' => 'Group Van',
            'vehicle_type' => 'High Roof Dual AC',
            'rating' => '5.0 (62 Reviews)',
            'price_usd' => '$0.80 USD / km',
            'price_lkr' => '(240 LKR/km)',
            'image' => '/assets/Images/optimized/kdhvan.webp',
            'inclusions' => ['Reclining Velvet Seats & Dual Climate AC', 'Capacity: 6 to 9 Passengers + Suitcases', 'Perfect for Family & Group Island Tours']
        ]
    ];
}

/**
 * Fetch Reviews / Testimonials from DB or Array
 */
function getReviews() {
    $pdo = getDBConnection();
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM reviews ORDER BY id DESC");
            return $stmt->fetchAll();
        } catch (PDOException $ex) {
            error_log("DB Query Error: " . $ex->getMessage());
        }
    }
    return [
        ['name' => 'Sarah & Mark Jenkins', 'country' => 'United Kingdom', 'rating' => 5, 'review' => 'Sanjeewa was the most helpful and polite driver we could ask for! He took us from Colombo to Sigiriya, Kandy, and Ella with so much care. Vehicle was spotless and comfortable.', 'tour_type' => '7-Day Island Wonder'],
        ['name' => 'Elena Rostova', 'country' => 'Germany', 'rating' => 5, 'review' => 'Exceptional 10-day trip around Sri Lanka! Sanjeewa arranged everything smoothly, including our Yala safari and train tickets to Ella. Highly recommended!', 'tour_type' => '10-Day Grand Heritage'],
        ['name' => 'David Miller', 'country' => 'Australia', 'rating' => 5, 'review' => 'Fantastic day tour of Anuradhapura and Sigiriya! Sanjeewa is very knowledgeable, punctual, and safe driver.', 'tour_type' => 'Day Excursion']
    ];
}

/**
 * Save Inquiry to DB
 */
function saveInquiry($name, $country, $service, $email = null, $phone = null, $subject = null, $travel_date = null, $travelers = null, $message = '') {
    $pdo = getDBConnection();
    if ($pdo) {
        try {
            $stmt = $pdo->prepare("INSERT INTO inquiries (name, country, service, email, phone, subject, travel_date, travelers, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            return $stmt->execute([$name, $country, $service, $email, $phone, $subject, $travel_date ?: null, $travelers, $message]);
        } catch (PDOException $ex) {
            error_log("DB Save Inquiry Error: " . $ex->getMessage());
        }
    }
    return false;
}
?>

