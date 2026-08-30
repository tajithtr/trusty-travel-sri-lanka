-- ========================================================
-- Database Schema: trusty_travel_db
-- Trusty Travel Sri Lanka With Sanjeewa
-- InfinityFree & Live Server Ready SQL Import File
-- Instructions: In InfinityFree phpMyAdmin, select your database
-- on the left panel, click "Import", select this file, and click Go.
-- ========================================================

-- --------------------------------------------------------
-- Table structure for `packages` (Multi-Day Round Tours)
-- --------------------------------------------------------
DROP TABLE IF EXISTS `packages`;
CREATE TABLE `packages` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `badge` VARCHAR(100) DEFAULT NULL,
  `location` VARCHAR(255) NOT NULL,
  `rating` VARCHAR(100) DEFAULT '5.0 (50 Reviews)',
  `price_usd` VARCHAR(100) NOT NULL,
  `price_lkr` VARCHAR(100) NOT NULL,
  `images` TEXT NOT NULL,
  `itinerary` LONGTEXT NOT NULL,
  `inclusions` TEXT NOT NULL,
  `whatsapp_text` VARCHAR(255) DEFAULT NULL,
  `status` ENUM('active', 'inactive') DEFAULT 'active',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `packages` (`name`, `badge`, `location`, `rating`, `price_usd`, `price_lkr`, `images`, `itinerary`, `inclusions`, `whatsapp_text`) VALUES
(
  '3-Day Cultural Triangle & Kandy Highlights',
  '🔥 HOT DEAL',
  'Sigiriya · Dambulla · Kandy',
  '5.0 (38 Reviews)',
  '$149 USD / person',
  '(~45,000 LKR)',
  '["/assets/Images/roundtour/firstcard/sigiriya.webp", "/assets/Images/roundtour/firstcard/dambullacavetemple.webp", "/assets/Images/roundtour/firstcard/daladamaligawa.webp", "/assets/Images/roundtour/firstcard/Pinnawala.webp"]',
  '[{"day": "Day 1", "steps": ["Airport Pickup", "Pinnawala Elephant Sanctuary", "Sigiriya Lion Rock Climb"]}, {"day": "Day 2", "steps": ["Dambulla Golden Cave Temple", "Matale Spice Garden Visit", "Kandy Sacred Temple of Tooth"]}, {"day": "Day 3", "steps": ["Kandy Royal Botanical Gardens", "Airport Drop-off Transfer"]}]',
  '["Private Luxury AC Vehicle & Driver", "Sigiriya Lion Rock Fortress Climb", "Dambulla Golden Cave Temple", "Kandy Sacred Temple of Tooth"]',
  '3-Day Cultural Triangle Tour'
),
(
  '5-Day Essential Sri Lanka Classic',
  '🏆 #1 BESTSELLER',
  'Sigiriya · Kandy · Ella',
  '5.0 (52 Reviews)',
  '$249 USD / person',
  '(~75,000 LKR)',
  '["/assets/Images/roundtour/secondcard/sigiriya.webp", "/assets/Images/roundtour/secondcard/nuwaraeliya.webp", "/assets/Images/roundtour/secondcard/bluetrain.webp", "/assets/Images/roundtour/secondcard/admspeak.webp"]',
  '[{"day": "Day 1", "steps": ["Airport Pickup", "Sigiriya Lion Rock Climb"]}, {"day": "Day 2", "steps": ["Dambulla Golden Cave Temple", "Kandy Sacred Temple of Tooth"]}, {"day": "Day 3", "steps": ["Scenic Nuwara Eliya Tea Factory"]}, {"day": "Day 4", "steps": ["Famous Blue Train to Ella", "Ella Nine Arch Bridge"]}, {"day": "Day 5", "steps": ["Little Adam\'s Peak Hike", "Airport Departure Transfer"]}]',
  '["Private AC Vehicle & Chauffeur", "Pinnawala Elephant Sanctuary", "Nuwara Eliya Ceylon Tea Plantation", "Iconic Kandy to Ella Train Journey"]',
  '5-Day Essential Sri Lanka Tour'
),
(
  '7-Day Island Wonder & Yala Safari Expedition',
  '🐘 WILDLIFE SAFARI',
  'Sigiriya · Kandy · Ella · Yala',
  '5.0 (65 Reviews)',
  '$379 USD / person',
  '(~115,000 LKR)',
  '["/assets/Images/roundtour/thirdcard/yapahuwa.webp", "/assets/Images/roundtour/thirdcard/dambulla.webp", "/assets/Images/roundtour/thirdcard/nuwaraeliya.webp", "/assets/Images/roundtour/thirdcard/ninearch.webp", "/assets/Images/roundtour/thirdcard/yala.webp", "/assets/Images/roundtour/thirdcard/gallefort.webp"]',
  '[{"day": "Day 1", "steps": ["Airport Transfer", "Sigiriya Rock Fortress"]}, {"day": "Day 2", "steps": ["Polonnaruwa Ancient Kingdom Tour"]}, {"day": "Day 3", "steps": ["Dambulla Cave Temple", "Kandy Cultural Dance Show"]}, {"day": "Day 4", "steps": ["Ceylon Tea Plantations", "Nuwara Eliya Waterfalls"]}, {"day": "Day 5", "steps": ["Ella Nine Arch Bridge", "Ravana Waterfalls"]}, {"day": "Day 6", "steps": ["Yala National Park 4x4 Safari"]}, {"day": "Day 7", "steps": ["Mirissa Beach & Galle Dutch Fort", "Airport Transfer"]}]',
  '["Private AC Transport with Fuel & Tolls", "Sigiriya Rock & Cave Temples", "Ella Nine Arch Bridge Hike", "Yala National Park 4x4 Jeep Safari"]',
  '7-Day Island Wonder Tour'
),
(
  '10-Day Complete Sri Lanka Grand Heritage & Beach',
  '🏝️ GRAND TOUR',
  'Full Island Grand Tour',
  '5.0 (48 Reviews)',
  '$549 USD / person',
  '(~165,000 LKR)',
  '["/assets/Images/roundtour/fourthcard/ruwanwalisaya.webp", "/assets/Images/roundtour/fourthcard/sigiriya.webp", "/assets/Images/roundtour/fourthcard/teacountry.webp", "/assets/Images/roundtour/fourthcard/yalasafari.webp", "/assets/Images/roundtour/fourthcard/gallefort.webp", "/assets/Images/roundtour/fourthcard/Buddha.webp"]',
  '[{"day": "Day 1-3", "steps": ["Anuradhapura Ancient Kingdom", "Sigiriya Rock Fortress"]}, {"day": "Day 4-5", "steps": ["Kandy Sacred Temple of Tooth", "Ceylon Tea Country"]}, {"day": "Day 6-7", "steps": ["Ella Mountains & Nine Arch Bridge", "Yala Leopard Safari Expedition"]}, {"day": "Day 8-10", "steps": ["Mirissa Coast & Galle Dutch Fort", "Airport Departure Transfer"]}]',
  '["Ancient Capitals (Anuradhapura & Polonnaruwa)", "Central Highlands & Tea Country", "Yala Leopard Safari Expedition", "Mirissa Whale Watching & Galle Fort"]',
  '10-Day Grand Heritage Tour'
);

-- --------------------------------------------------------
-- Table structure for `safari_tours` (Adventure & Safaris)
-- --------------------------------------------------------
DROP TABLE IF EXISTS `safari_tours`;
CREATE TABLE `safari_tours` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `badge` VARCHAR(100) DEFAULT 'Adventure',
  `location` VARCHAR(255) NOT NULL,
  `rating` VARCHAR(100) DEFAULT '5.0 (50 Reviews)',
  `price_usd` VARCHAR(100) NOT NULL,
  `price_lkr` VARCHAR(100) NOT NULL,
  `images` TEXT NOT NULL,
  `inclusions` TEXT NOT NULL,
  `status` ENUM('active', 'inactive') DEFAULT 'active',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `safari_tours` (`name`, `badge`, `location`, `rating`, `price_usd`, `price_lkr`, `images`, `inclusions`) VALUES
(
  'Kitulgala White Water Rafting',
  'Bestseller',
  'Kitulgala River',
  '5.0 (68 Reviews)',
  '$7 USD / person',
  '(~2,000 LKR)',
  '["/assets/Images/safari/firstcard/waterrafting.webp", "/assets/Images/safari/firstcard/boatride.webp", "/assets/Images/safari/firstcard/boatride2.webp"]',
  '["5km Grade 2 & 3 Kelani River Rapids", "Certified Safety Gear, Helmets & Life Vests", "River Bathing & Natural Rock Jumps"]'
),
(
  'Waterfall Abseiling & Rappelling',
  'Extreme Action',
  'Sandun Ella Waterfall',
  '5.0 (42 Reviews)',
  '$15 USD / person',
  '(~4,500 LKR)',
  '["/assets/Images/safari/secondcard/sandunella1.webp", "/assets/Images/safari/secondcard/sandunella2.webp", "/assets/Images/safari/secondcard/sandunella3.webp"]',
  '["105ft Waterfall Descend Challenge", "Professional Climbing Instructors", "Confidence Rope Harness & Safety Systems"]'
),
(
  'Yala Leopard 4x4 Jeep Safari',
  'Wildlife Safari',
  'Yala National Park',
  '5.0 (84 Reviews)',
  '$40 USD / jeep',
  '(~12,000 LKR)',
  '["/assets/Images/safari/thirdcard/yalasafari1.webp", "/assets/Images/safari/thirdcard/yalasafari2.webp", "/assets/Images/safari/thirdcard/yalasafari3.webp"]',
  '["Private Modified 4x4 Open Safari Jeep", "Expert Wildlife Tracker & Driver", "Highest Density Leopard Sighting Zone"]'
),
(
  'Udawalawe Wild Elephant Jeep Safari',
  'Elephants',
  'Udawalawe National Park',
  '5.0 (59 Reviews)',
  '$35 USD / jeep',
  '(~10,500 LKR)',
  '["/assets/Images/safari/fourthcard/udawalawe.webp", "/assets/Images/safari/fourthcard/udawalawe2.webp", "/assets/Images/safari/fourthcard/udawalawe3.webp"]',
  '["Guaranteed Wild Elephant Herds Sightings", "Elephant Transit Home Feeding Visit", "Water Birds & Crocodiles"]'
);

-- --------------------------------------------------------
-- Table structure for `day_tours` (Single-Day Excursions)
-- --------------------------------------------------------
DROP TABLE IF EXISTS `day_tours`;
CREATE TABLE `day_tours` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `badge` VARCHAR(100) DEFAULT 'Day Tour',
  `location` VARCHAR(255) NOT NULL,
  `rating` VARCHAR(100) DEFAULT '5.0 (40 Reviews)',
  `price_usd` VARCHAR(100) NOT NULL,
  `price_lkr` VARCHAR(100) NOT NULL,
  `images` TEXT NOT NULL,
  `inclusions` TEXT NOT NULL,
  `status` ENUM('active', 'inactive') DEFAULT 'active',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `day_tours` (`name`, `badge`, `location`, `rating`, `price_usd`, `price_lkr`, `images`, `inclusions`) VALUES
(
  'Anuradhapura Sacred Citadel Pilgrimage Day Tour',
  'Anuradhapura HQ',
  'Anuradhapura Ancient Kingdom',
  '5.0 (46 Reviews)',
  '$35 USD / person',
  '(~10,500 LKR)',
  '["/assets/Images/day-tours/firstcard/anuradhapura.webp", "/assets/Images/day-tours/firstcard/anuradhapura1.webp", "/assets/Images/day-tours/firstcard/anuradhapura2.webp"]',
  '["Sacred Jaya Sri Maha Bodhi Tree", "Ruwanwelisaya & Jetavanaramaya Stupas", "Twin Ponds (Kuttam Pokuna) & Samadhi Buddha"]'
),
(
  'Sigiriya Rock Fortress & Dambulla Cave Excursion',
  'UNESCO World Heritage',
  'Sigiriya & Dambulla',
  '5.0 (72 Reviews)',
  '$45 USD / person',
  '(~13,500 LKR)',
  '["/assets/Images/day-tours/secondcard/sigiriya.webp", "/assets/Images/day-tours/secondcard/dambulla.webp", "/assets/Images/day-tours/secondcard/traditionalvillage.webp"]',
  '["Climb 5th Century Sigiriya Lion Rock Fortress", "Explore Dambulla Golden Rock Temple Caves", "Traditional Village Lunch & Bullock Cart Ride"]'
),
(
  'Madu River Mangrove Boat Safari & Fish Therapy',
  'Coastal Safari',
  'Balapitiya / Bentota',
  '5.0 (39 Reviews)',
  '$20 USD / boat',
  '(~6,000 LKR)',
  '["/assets/Images/day-tours/thirdcard/maduriver.webp", "/assets/Images/day-tours/thirdcard/maduriver2.webp", "/assets/Images/day-tours/thirdcard/maduriver3.webp"]',
  '["Mangrove Tunnel Cruise & Cinnamon Island Visit", "Natural Fish Massage Spa in River", "Turtle Hatchery Visit in Kosgoda"]'
),
(
  'Colombo to Trincomalee Shuttle & Safari Drive',
  'Shuttle & Safari',
  'Colombo → Trincomalee',
  '5.0 (54 Reviews)',
  'Daily Shuttle Schedule',
  '12 Hours Tour & Safari Drive',
  '["/assets/Images/day-tours/fourthcard/0_cover.webp", "/assets/Images/day-tours/fourthcard/1_minneriya.webp", "/assets/Images/day-tours/fourthcard/2_kaudulla.webp", "/assets/Images/day-tours/fourthcard/3_foodtestinginsigiriya.webp"]',
  '["Hotel pickup from Colombo, Negombo & suburbs", "Exclusive Safari at Minneriya & Kaudulla National Park with Authentic Food Tasting in Sigiriya Village and more", "Hotel drop to Trincomalee, Nilaveli & suburbs"]'
),
(
  'Mirissa to Ella Shuttle & Udawalawe Safari Drive',
  'Shuttle & Safari',
  'Mirissa → Ella',
  '5.0 (62 Reviews)',
  'Daily Departure Times',
  'Shuttle Transfer & Udawalawe 4x4 Safari Included',
  '["/assets/Images/day-tours/fifthcard/0_cover.webp", "/assets/Images/day-tours/fifthcard/1_udawalawe.webp", "/assets/Images/day-tours/fifthcard/2_udawalawe.webp", "/assets/Images/day-tours/fifthcard/3_udawalawe.webp", "/assets/Images/day-tours/fifthcard/4_udawalawe.webp"]',
  '["Hotel Pickup from Mirissa, Galle, Dickwella, Tangalle & Suburbs", "3.5 – 4 Hours of Pure Wilderness", "Hotel Drop to Ella, Haputale, Bandarawela & Suburbs"]'
),
(
  'Ella to Mirissa Shuttle & Udawalawe Safari Drive',
  'Shuttle & Safari',
  'Ella → Mirissa',
  '5.0 (48 Reviews)',
  'Daily Departure Times',
  'Shuttle Transfer & Udawalawe 4x4 Safari Included',
  '["/assets/Images/day-tours/sixthcard/0_cover.webp", "/assets/Images/day-tours/sixthcard/1_udawlawe.webp", "/assets/Images/day-tours/sixthcard/2_udawalawe.webp", "/assets/Images/day-tours/sixthcard/3_udawalawe.webp", "/assets/Images/day-tours/sixthcard/4_udawalawe.webp", "/assets/Images/day-tours/sixthcard/5_udawalawe.webp", "/assets/Images/day-tours/sixthcard/6_udawalawe.webp"]',
  '["Hotel Pickup from Ella, Haputale, Bandarawela & Suburbs", "3.5 – 4 Hours of Pure Wilderness", "Hotel Drop to Mirissa, Galle, Dickwella, Tangalle & Suburbs"]'
),
(
  'Dambulla to Trincomalee Shuttle & Safari Drive',
  'Shuttle & Safari',
  'Dambulla → Trincomalee',
  '5.0 (41 Reviews)',
  'Daily Shuttle Schedule',
  '6 Hours Tour & Safari Drive',
  '["/assets/Images/day-tours/seventhcard/0_cover.webp", "/assets/Images/day-tours/seventhcard/1_minneriya.webp", "/assets/Images/day-tours/seventhcard/2_minneriya.webp", "/assets/Images/day-tours/seventhcard/3_kaudulla.webp", "/assets/Images/day-tours/seventhcard/4_kaudulla.webp"]',
  '["Hotel pickup from Dambulla, Sigiriya, Habarana & suburbs", "Exclusive Safari at Minneriya or Kaudulla National park", "Hotel drop to Trincomalee, Nilaveli & suburbs"]'
),
(
  'Anuradhapura to Wilpattu Safari & Return Day Tour',
  'Wildlife & Safari',
  'Anuradhapura ⇄ Wilpattu',
  '5.0 (58 Reviews)',
  'Daily Safari Departures',
  'Same-Day Wilpattu Safari Round Trip',
  '["/assets/Images/day-tours/eightthcard/0_cover.webp", "/assets/Images/day-tours/eightthcard/1_wilpattu.webp", "/assets/Images/day-tours/eightthcard/2_wilpattu.webp", "/assets/Images/day-tours/eightthcard/3_wilpattu.webp", "/assets/Images/day-tours/eightthcard/4_wilpattu.webp"]',
  '["Hotel pickup from Anuradhapura & suburbs", "Exclusive 4x4 Jeep Safari at Wilpattu National Park (Leopards, Sloth Bears & Lakes)", "Hotel drop back to Anuradhapura & suburbs in one day"]'
),
(
  'Colombo to Sigiriya Shuttle & Heritage Excursion',
  'Shuttle & Excursion',
  'Colombo → Sigiriya',
  '5.0 (52 Reviews)',
  'Daily Departure Schedule',
  'Shuttle Transfer & Heritage Excursion Included',
  '["/assets/Images/day-tours/ninethcard/0_cover.webp", "/assets/Images/day-tours/ninethcard/1_dambulla.webp", "/assets/Images/day-tours/ninethcard/2_sigiriya.webp", "/assets/Images/day-tours/ninethcard/3_traditionalvillage.webp"]',
  '["Pickup from Colombo / Negombo & suburbs", "Explore Dambulla Golden Rock Temple Caves", "Traditional Village Lunch & Bullock Cart Ride", "Climb 5th Century Sigiriya Lion Rock Fortress", "Drop off to Sigiriya & suburbs"]'
);

-- --------------------------------------------------------
-- Table structure for `transport_services` (Vehicle Fleet)
-- --------------------------------------------------------
DROP TABLE IF EXISTS `transport_services`;
CREATE TABLE `transport_services` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `badge` VARCHAR(100) DEFAULT 'Vehicle',
  `vehicle_type` VARCHAR(100) NOT NULL,
  `rating` VARCHAR(100) DEFAULT '5.0 (30 Reviews)',
  `price_usd` VARCHAR(100) NOT NULL,
  `price_lkr` VARCHAR(100) NOT NULL,
  `image` VARCHAR(255) NOT NULL,
  `inclusions` TEXT NOT NULL,
  `status` ENUM('active', 'inactive') DEFAULT 'active',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `transport_services` (`name`, `badge`, `vehicle_type`, `rating`, `price_usd`, `price_lkr`, `image`, `inclusions`) VALUES
(
  'Toyota Roomy / Compact AC Car',
  'Compact AC Car',
  'Dual AC Hatchback',
  '5.0 (30 Reviews)',
  '$0.40 USD / km',
  '(120 LKR/km)',
  '/assets/Images/optimized/roomy.webp',
  '["Dual AC, Sliding Doors & Plush Interior", "Capacity: 3 Passengers + Luggage Bags", "Includes Fuel, Driver Accommodation & Tolls"]'
),
(
  'Honda Vezel / Luxury Hybrid SUV',
  'Luxury SUV',
  'Climate Control SUV',
  '5.0 (45 Reviews)',
  '$0.60 USD / km',
  '(180 LKR/km)',
  '/assets/Images/optimized/vezel.webp',
  '["High Ground Clearance & Panoramic Comfort", "Capacity: 4 Passengers + Large Luggage", "Full Airport Pickups & Highway Tolls Included"]'
),
(
  'Mitsubishi Montero / Premium SUV',
  'Premium VVIP',
  'VVIP Chauffeur Service',
  '5.0 (20 Reviews)',
  '$0.80 USD / km',
  '(240 LKR/km)',
  '/assets/Images/optimized/Montero.webp',
  '["4WD Full Option Luxury Comfort & Safety", "Capacity: 4 Passengers + Large Suitcases", "VIP English-speaking Chauffeur Guide Included"]'
),
(
  'Toyota KDH High-Roof Mini Van',
  'Group Van',
  'High Roof Dual AC',
  '5.0 (62 Reviews)',
  '$0.80 USD / km',
  '(240 LKR/km)',
  '/assets/Images/optimized/kdhvan.webp',
  '["Reclining Velvet Seats & Dual Climate AC", "Capacity: 6 to 9 Passengers + Suitcases", "Perfect for Family & Group Island Tours"]'
);

-- --------------------------------------------------------
-- Table structure for `gallery`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `label` VARCHAR(255) NOT NULL,
  `icon` VARCHAR(100) NOT NULL,
  `status` ENUM('active', 'inactive') DEFAULT 'active',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `gallery` (`label`, `icon`) VALUES
('Beach Camping', 'fa-campground'),
('Madu River Safari', 'fa-water'),
('Kitulgala Hike', 'fa-hiking'),
('Abseiling', 'fa-arrow-up'),
('Rafting', 'fa-raft'),
('Fishing Tour', 'fa-fish'),
('Day Outing', 'fa-umbrella-beach'),
('Whale Watching', 'fa-whale');

-- --------------------------------------------------------
-- Table structure for `inquiries`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `inquiries`;
CREATE TABLE `inquiries` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `country` VARCHAR(100) DEFAULT NULL,
  `service` VARCHAR(255) DEFAULT NULL,
  `email` VARCHAR(255) DEFAULT NULL,
  `phone` VARCHAR(100) DEFAULT NULL,
  `subject` VARCHAR(255) DEFAULT NULL,
  `travel_date` DATE DEFAULT NULL,
  `travelers` VARCHAR(100) DEFAULT NULL,
  `message` TEXT NOT NULL,
  `status` ENUM('pending', 'contacted', 'completed') DEFAULT 'pending',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for `reviews`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `country` VARCHAR(100) NOT NULL,
  `rating` INT DEFAULT 5,
  `review` TEXT NOT NULL,
  `tour_type` VARCHAR(100) DEFAULT 'Round Tour',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `reviews` (`name`, `country`, `rating`, `review`, `tour_type`) VALUES
('Sarah & Mark Jenkins', 'United Kingdom', 5, 'Sanjeewa was the most helpful and polite driver we could ask for! He took us from Colombo to Sigiriya, Kandy, and Ella with so much care. Vehicle was spotless and comfortable.', '7-Day Island Wonder'),
('Elena Rostova', 'Germany', 5, 'Exceptional 10-day trip around Sri Lanka! Sanjeewa arranged everything smoothly, including our Yala safari and train tickets to Ella. Highly recommended!', '10-Day Grand Heritage'),
('David Miller', 'Australia', 5, 'Fantastic day tour of Anuradhapura and Sigiriya! Sanjeewa is very knowledgeable, punctual, and safe driver.', 'Day Excursion');

