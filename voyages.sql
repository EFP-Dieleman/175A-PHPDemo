-- --------------------------------------------------------

--
-- Table structure for table `voyage`
--

CREATE TABLE `voyage` (
  `id` int NOT NULL,
  `occured_on` date NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voyage`
--

INSERT INTO `voyage` (`id`, `occured_on`, `label`, `description`, `photo`) VALUES
(1, '2023-01-15', 'Arctic Expedition', 'An exhilarating journey through the Arctic wilderness, observing polar bears and glaciers.', 'photo1.jpg'),
(2, '2023-02-20', 'Amazon River Voyage', 'Exploration of the Amazon river, discovering diverse wildlife and lush rainforests.', 'photo2.jpg'),
(3, '2023-03-10', 'Sahara Desert Trek', 'A challenging trek across the vast dunes of the Sahara, under the starlit sky.', 'photo3.jpg'),
(4, '2023-04-25', 'Himalayan Adventure', 'A climb through the Himalayan peaks, experiencing breathtaking views and ancient monasteries.', 'photo4.jpg'),
(5, '2023-05-05', 'Great Barrier Reef Dive', 'Diving at the Great Barrier Reef to explore the underwater world of colorful corals and marine life.', 'photo5.jpg'),
(6, '2023-06-15', 'Mediterranean Sailing', 'Sailing across the Mediterranean, visiting historic ports and enjoying the coastal cuisine.', 'photo6.jpg'),
(7, '2023-07-25', 'Alaskan Wildlife Tour', 'Witnessing the rich wildlife of Alaska including moose, bears, and bald eagles in their natural habitats.', 'photo7.jpg'),
(8, '2023-08-30', 'Andean Exploration', 'Journey through the Andes, exploring Incan ruins and vibrant local cultures.', 'photo8.jpg'),
(9, '2023-09-15', 'African Safari', 'An African safari adventure, observing the Big Five in the Serengeti plains.', 'photo9.jpg'),
(10, '2023-10-10', 'Antarctic Expedition', 'Exploring the icy landscapes of Antarctica, encountering penguins and colossal icebergs.', 'photo10.jpg'),
(11, '2022-01-20', 'Venice Carnival', 'Experiencing the vibrant and colorful Carnival of Venice with its elaborate masks and costumes.', 'photo11.jpg'),
(12, '2022-02-15', 'Kyoto Cherry Blossoms', 'Viewing the spectacular cherry blossoms in Kyoto, a symbol of transient beauty.', 'photo12.jpg'),
(13, '2022-03-22', 'Trans-Siberian Railway', 'A transcontinental rail journey across Russia on the historic Trans-Siberian Railway.', 'photo13.jpg'),
(14, '2022-04-18', 'New Zealand Hiking', 'Hiking through New Zealand’s stunning landscapes, from fjords to forests.', 'photo14.jpg'),
(15, '2022-05-10', 'Galápagos Islands Expedition', 'Exploring the Galápagos Islands, observing unique species that inspired Darwin’s theory of evolution.', 'photo15.jpg'),
(16, '2022-06-05', 'Norwegian Fjords Cruise', 'A cruise through Norway’s dramatic fjords, with stops at quaint villages and spectacular waterfalls.', 'photo16.jpg'),
(17, '2022-07-19', 'Bali Island Escape', 'Relaxing on the tropical island of Bali, enjoying sun, sea, and sand.', 'photo17.jpg'),
(18, '2022-08-23', 'Icelandic Geysers and Glaciers', 'Touring Iceland to witness geothermal geysers and massive glaciers up close.', 'photo18.jpg'),
(19, '2022-09-28', 'Canadian Rockies Adventure', 'Exploring the rugged landscapes of the Canadian Rockies, with opportunities for hiking and wildlife photography.', 'photo19.jpg'),
(20, '2022-10-16', 'Greek Isles Sailing', 'Sailing around the Greek Isles, exploring ancient ruins and sampling local olive oils and wines.', 'photo20.jpg'),
(21, '2021-01-11', 'Cuban Cultural Tour', 'A cultural tour of Cuba, including its historic cities, music scene, and cigar factories.', 'photo21.jpg'),
(22, '2021-02-27', 'Patagonian Trek', 'Trekking through Patagonia, encountering stunning vistas of mountains and lakes.', 'photo22.jpg'),
(23, '2021-03-18', 'Moroccan Bazaar Experience', 'Exploring the bustling bazaars of Morocco, tasting local delicacies and bargaining for handcrafted goods.', 'photo23.jpg'),
(24, '2021-04-22', 'Australian Outback Journey', 'Venturing into the Australian Outback, learning about Aboriginal culture and the region’s unique wildlife.', 'photo24.jpg'),
(25, '2021-05-25', 'Tuscany Wine Tour', 'Touring the vineyards of Tuscany, tasting renowned wines and learning about the winemaking process.', 'photo25.jpg'),
(26, '2021-06-30', 'Scottish Highlands Exploration', 'Exploring the Scottish Highlands, with its lochs, castles, and mysterious legends.', 'photo26.jpg'),
(27, '2021-07-29', 'Yellowstone National Park', 'Visiting Yellowstone National Park, famous for its geothermal features and abundant wildlife.', 'photo27.jpg'),
(28, '2021-08-21', 'French Riviera Retreat', 'Enjoying the luxury and beauty of the French Riviera, with its beaches, art, and glamorous atmosphere.', 'photo28.jpg'),
(29, '2021-09-20', 'Oktoberfest in Munich', 'Joining the world’s largest Volksfest in Munich, with beer, music, and traditional German festivities.', 'photo29.jpg'),
(30, '2021-10-12', 'Great Wall of China Trek', 'Trekking along the Great Wall of China, experiencing the history and scale of this ancient wonder.', 'photo30.jpg');
