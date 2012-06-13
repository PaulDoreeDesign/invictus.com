/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : invictus

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2012-06-13 09:52:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `c_game`
-- ----------------------------
DROP TABLE IF EXISTS `c_game`;
CREATE TABLE `c_game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `released` datetime DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `hero_image` varchar(150) DEFAULT NULL,
  `teaser_image` varchar(150) DEFAULT NULL,
  `short_description` varchar(150) DEFAULT NULL,
  `long_description` text,
  `is_active` int(11) DEFAULT NULL,
  `is_on_mainpage` int(11) DEFAULT NULL,
  `order_on_mainpage` int(11) DEFAULT NULL,
  `is_teaser` int(11) DEFAULT NULL,
  `is_in_more_games` int(11) DEFAULT NULL,
  `order_in_more_games` int(11) DEFAULT NULL,
  `is_in_footer` int(11) DEFAULT NULL,
  `order_in_footer` int(11) DEFAULT NULL,
  `facebook_app_id` varchar(150) DEFAULT NULL,
  `twitter_page` varchar(150) DEFAULT NULL,
  `facebook_page` varchar(250) DEFAULT NULL,
  `ga_category` varchar(250) DEFAULT NULL,
  `ga_action` varchar(150) DEFAULT NULL,
  `ga_label` varchar(250) DEFAULT NULL,
  `ga_value` int(11) DEFAULT NULL,
  `ga_noninteraction` int(11) DEFAULT NULL,
  `splash_image` varchar(255) NOT NULL,
  `order` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_game_meta` (`meta_id`),
  KEY `fk_game_category` (`category_id`),
  CONSTRAINT `fk_game_category` FOREIGN KEY (`category_id`) REFERENCES `ic_category` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_game_meta` FOREIGN KEY (`meta_id`) REFERENCES `ic_meta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of c_game
-- ----------------------------
INSERT INTO `c_game` VALUES ('13', '19', 'Race of Champions', 'race-of-champions', '2011-11-01 00:00:00', '1334598165_Icon170.png', '1337072686_1334661531_ROC_hero_banner.jpg', '1337072686_1334661531_ROC_teaser_banner.jpg', 'Race of Champions Mobile Game is the official game of the actual event. It includes 6 original tracks and 8 cars from the official racing event.', 'IMP, organisers of the Race Of Champions agreed to co-publish a state of the art racing game together with racing game specialist Invictus. \r\n\r\nThe game includes tracks  and cars from different editions of the renowned event with tarmac and off-road racing. The different game modes let players compete against friends and challenge players to beat the times of the actual participating champions. iOS users are able to compete against each other real-time in a Wifi multiplayer game mode via Apple’s Game center.\r\n\r\nThe featured tracks are: \r\n- Barcelona\r\n- Beijing\r\n- Düsseldorf\r\n- Gran Canaria\r\n- London\r\n- Paris\r\n\r\nPlayers are able to chose from the following cars:\r\n- KTM X-Bow\r\n- RX 150\r\n- VW Scirocco\r\n- ROC Car\r\n- Solution F Prototype\r\n- Skoda Fabia S2000\r\n- VW Polo WRC\r\n- WTR\r\n\r\nAbout Race Of Champions:\r\n\r\nRace Of Champions is a knockout tournament where the world’s greatest drivers battle through a series of head-to-head races in identical cars on a parallel track to become the ‘Champion of Champions’.\r\n\r\nROC WEBSITE: www.raceofchampions.com', '1', '1', '2', null, '1', '1', '1', '1', null, 'rocmobilegame', 'raceofchampions.game', null, null, null, null, null, '1337072686_1334670770_ROC__splash.jpg', '0', '2');
INSERT INTO `c_game` VALUES ('14', '21', 'Greed Corp', 'greed-corp', '2011-11-01 00:00:00', '1334672493_Greed_Corp_Icon.png', '1334672493_Greed_Corp_Hero_Banner.png', '1334672493_Greed_Corp_Teaser_Banner.png', 'Greed Corp is a fun strategy game situated in a steam-punk world, offering single player mode and multiplayer options for up to four players.', 'Vanguard Games, the original developers of Greed Corp and Invictus Games co-published the successful turn-based strategy game for mobile platforms in late 2011. The game is available on iTunes an on GooglePlay.\n\nGreed Corp is about finding a balance between harvesting the land for resources and preserving it to stay alive. Will you defend your territory or sacrifice it to keep it out of enemy hands? Manage the finite available resources to build your army and use the collapsing terrain to your advantage. Destroy your enemies, or destroy the land they stand on, before you fall!\n\nGreed Corp for mobile platforms offers the same features as the PC version:\n\n- An innovative land collapsing mechanic, creating intense strategic battles\n- Earn trophies and titles\n- Reach higher on the online leaderboards by playing as one of four factions in bite-sized matches\n- Campaign mode with 4 chapters spread over 24 unique maps including an extensive tutorial.\n- 2, 3, and 4-player battles spread across 36 maps.\n- Customize cross platform (iOS, Android and Mac) multi-player matches with any combination of local, online, and computer players (with three difficulty levels)', '1', '0', '3', null, '1', '4', '1', '4', null, 'GreedCorpMobile', 'greedcorp.mobile', null, null, null, null, null, '1334672493_Greed_Corp_Splash.png', '4', null);
INSERT INTO `c_game` VALUES ('15', '22', 'Wild Slide', 'wild-slide', '2011-02-05 00:00:00', '1335445561_Wild_Slide_Icon.png', '1334749966_Wildslide_Hero_Banner.png', '1334749966_wildslide_Teaser_banner.png', 'Wild Slide is a  fun bobsleigh-race simulator. Race against the clock or challenge your opponents in the championship!', 'Wild Slide is an easy and entertaining bobsleigh simulator available on iOS. Race against the clock or challenge your opponents in the International Championship! \n\nHow to play?\n- Tilt your iPhone and take every turn in as quickly as possible \n- Tap the screen to brake \n\nMain Features: \n- 16 bobs with different colours and various handling characteristics \n- Non-Linear Career mode and unlock structure \n- Numerous tracks \n- Challenging opponents\n- OpenFeint support with numerous achievements', '1', '0', '3', null, null, null, '0', '4', null, '', '', null, null, null, null, null, '1334749966_Wildslide_Splash.png', '9', null);
INSERT INTO `c_game` VALUES ('16', '23', 'Groovy Garage', 'groovy-garage', '2012-04-05 00:00:00', '1334918503_facebook_logo.png', '1337072301_1334752966_Groovy_Garage_Hero_Banner.jpg', '1337072301_1334752966_Groovy_Garage_Teaser_Banner.jpg', 'Service cars, employ friends, design a car-repair garage and build items to attract more customers in our latest game for Facebook!', 'Groovy Garege is Invictus Games latest and funninest game for Facebook. Invictus sticks to its tradtion of creating games which involve cars, but now the developers put a twist to the game. In Groovy Garage you don\'t drive the car, you fix it. Create and decorate a car-repair garage to attrack more customers and to show your friends who the real boss is!\r\n\r\nCustomize your service shop with various interior designs, luxorious pieces of furniture and tons of useful service tools that suit your taste. Install special devices to gain more money from your customers you can spend on further development. While being busy working in their own shop, players can also visit  friends in the neighbouring car-repair services, and help each other by sending nice gifts and all kinds of tools.\r\n\r\nGroovy Garage is a fun and entertaining social game  and has been designed for casual players, who love completing various tasks and  expressing their personality by decorating.', '1', '1', '0', null, '1', '0', '1', '0', null, 'groovygarage', 'groovygarage.game', null, null, null, null, null, '1337072301_1334752966_Groovy_Garage_Splash.jpg', '1', null);
INSERT INTO `c_game` VALUES ('17', '24', 'Froggy Jump', 'froggy-jump', '2010-04-20 00:00:00', '1334757893_Froggy_Jump_Icon.png', '1337072584_1334757893_Froggy_Jump_Hero_Banner.jpg', '1337072584_1334757893_Froggy_Jump_Teaser_Banner.jpg', 'Froggy Jump is Invictus\' mobile game for iOS and Android. Jump with the help of platforms and power-ups into the galaxy and beyond!', 'Froggy Jump is Invictus Games\' most popular mobile game for iOs and Android. Help Froggy jump higher into the galaxy and beyond with the help of various platforms and different power-ups. Be careful, Froggy\'s journey is full of perils and dangerous enemy frogs also stand in your way upwards!\r\n\r\nFroggy Jump is easy to play: just tilt to move lef or right and tap the screen to launch your space-rocket.\r\n\r\nThe game features: \r\n- Bouncy, moving, disappearing and spiky platforms \r\n- Space rockets, shields, head-bucket, safety laser, magnets to help you reach higher\r\n- Numerous enemies to beat and avoid \r\n- In-game shop to pimp your frog and to purchase power-ups\r\n- OpenFeint and Game Center support to compare player\'s scores and track your achievements \r\n- Word Game every day with various prizes\r\n- 12 themes with different platforms and special skills \r\n- Collectable gold bars to improve your coin rate \r\n- Mystery boxes to win something unique in every 12 hours! \r\n- And many, many more …\r\n\r\nWarning! Extreme addiction is inevitable!', '1', '1', '1', null, '1', '2', '1', '2', null, 'FroggyJumpGame', 'froggyjump.ios', null, null, null, null, null, '1337072584_1334757893_Froggy_Jump_Splash.jpg', '2', null);
INSERT INTO `c_game` VALUES ('18', '25', 'Fly Fu', 'fly-fu', '2011-03-17 00:00:00', '1334845131_Fly_Fu_Icon.png', '1334844523_Fly_Fu_Hero_Banner.png', '1334844523_Fly_Fu_Teaser_Banner.png', 'Kate Moth has been kidnapped by the evil spideress Queen Overseer. Help Monthy McFly rescue her from the claws of the evil insects!', 'Kate Moth, a fluffy little moth has been kidnapped by the evil spideress Queen Overseer and drawn away to a dark attic in the suburbs. Help his boyfriend, Monthy McFly rescue her from the claws of the evil insects! \n\nMcFly is not just a common housefly, but he has been specially trained to fight.  Each chapter ends with a unique boss, the strongest members of The Cuticulous Gang. Beat Rhino and Buster and fight against the stunning fencer, Landon Longhorn! The first chapter is available as a Free download. The story continues in FLY FU PRO!\n\nFeatures:\n- Unique doodle art style combined with real insects\n- Watch the famous \'dead fly art\' in smooth motion\n- Experience the intense doodle violence with heated Kung Fu action\n- Fight your way through bees, wasp, evil lady bugs and more than 20 other insects\n- Get really mad at insects bugging around and GO BERSERK!\n- Arm yourself with matchsticks and needle-pins on your journey to gain more fist power\n- Enjoy dismemberment and decapitation in slow motion\n- Play story mode accompanied with cutscenes with twists on plot\n- Put your endurance to the test in survival mode\n- The game offers OpenFeint support with achievements and 5 leaderboards in survival mode', null, null, null, null, null, null, null, null, null, '', '', null, null, null, null, null, '1334844523_Fly_Fu_Splash.png', '7', null);
INSERT INTO `c_game` VALUES ('19', '26', 'Mist Bouncer', 'mist-bouncer', '2011-12-19 00:00:00', '1334844880_Mist_Bouncer_Icon.png', '1337072494_1334844880_Mist_Bouncer_Hero_Banner.jpg', '1337072494_1334844880_Mist_Bouncer_Teaser_Banner.jpg', 'Help the robots of Greed Corp reach the top of each level with the use of power-ups and by avoiding the enemies who stand in the way!', 'Invictus and Vanguard Games worked together on two games in 2011. Mist Bouncer features the robots from Greed Corp who have to jump higher and higher to reach the top to complete each level. Players have to be  extremely careful: there are many perils and  various enemies who wait eagerly to stop the way up to the top, and some of the platforms can easilly dissappear below them.\r\n\r\nThe game features:\r\n- 3 different themes, with 9 exciting levels each\r\n- 3+1 special robot characters from Greed Corp, all with their special abilities\r\n- Various power ups: Hot-air balloons and Rocket-boosters to name a few\r\n- In-game shop with numerous items to buy\r\n- Cargo-breaking mini-game at the end of each level\r\n\r\nAfter finishing each stage they are transported in a plane where the robots have to smash cargo boxes in a brick-breaking mini game. Mist Bouncer also features a survival mode and many extra gadgets that help players to achieve a higher score. Additionally, when users purchase Greed Corp they get another amazing robot with advanced features in Mist Bouncer. \r\n\r\nMist Bouncer is available for free on iOS.', '1', '1', '3', null, '1', '3', '1', '3', null, 'MistBouncer', 'mistbouncer', null, null, null, null, null, '1337072495_1334844880_Mist_Bouncer_Splash.jpg', '3', null);
INSERT INTO `c_game` VALUES ('20', '27', 'Froggy Launcher', 'froggy-launcher', '2010-09-24 00:00:00', '1335445614_Froggy_Launcher_Icon.png', '1334847710_Froggy_Launcher_Hero_Banner.png', '1334847710_Froggy_Launcher_Teaser_Banner.png', 'Launch Froggy into the sky with the help of the slighshot and use power ups from the in-game shop to reach the Sun God!', 'How to play:\n1. Use the slingshot to launch Froggy into the sky \n2. Tap him to boost him higher while he is in the air and tilt your device to collect coins! \n3. Pick up power-ups to get higher and higher! \n4. Collect coins and gems on the way to buy cool power-ups and clothes for your frog. \n\nThe game has 7 themes, all for free: \n- Reach 100k height to get the ROCKSTAR theme for FREE\n- Reach 90k height to get the EASTER theme for FREE \n- Reach 85k height to get the INFERNAL theme for FREE \n- Reach 75k height to get the VALENTINE\'S DAY theme for FREE \n- Reach 70k height to get the WINTER WONDERLAND theme for FREE \n- Reach 60k height to get the HALLOWEEN for FREE \n- Reach 30k height to get the CANDYLAND theme for FREE \n\nMain features: \n- A customizable ragdoll Froggy \n- In-game shop   \n- Daily quest system\n- Wordgame every day for diamonds \n- Global leaderboard \n- Rockets, Bio-Gas fire, Air-balloon, Magnets, Jumpers to help you reach higher', '1', '0', '3', null, null, null, null, null, null, '', '', null, null, null, null, null, '1334847710_Froggy_Launcher_Splash.png', '5', null);
INSERT INTO `c_game` VALUES ('22', '29', 'Truck Jam', 'truck-jam', '2010-12-29 00:00:00', '1335445472_Truck_Jam_Icon.png', '1334850468_Truck_Jam_Hero_Banner.png', '1334850468_Truck_Jam_Teaser_Banner.png', 'Truck Jam is the most unique off road truck racing game you will ever see on iPhone or iPad with realistic tilted or tapped game control!', 'Truck Jam is the most unique off road truck racing game you will ever see on iPhone and iPad with realistic tilted and tapped game control!\n\nDon\'t look for boundaries like in other racing games! In Truck Jam you can drive as far as you wish across the varied terrains without  limitations. Listen to numerous licensed rock tracks during the intense races! Challenge your opponents on icy mountains or hot sand dunes and experience the excitement of hill climbing with custom build off-road trucks!\n\nTruck Jam features:\n- 4 different modes\n- 9 custom built off-road trucks  each with different performance and driving characteristics \n- 8 unique tracks, including Fields of Europe, Sand-dunes of Africa and the American rock-deserts     \n- Various camera and control modes\n- OpenFeint support for all all game-modes\n- Non-linear career mode with loads of events and unique challenges\n- Collectable truck components\n- High score and best lap time records', '1', '1', '1', null, null, null, null, null, null, '', '', null, null, null, null, null, '1334850468_Truck_Jam_Splash.png', '10', null);
INSERT INTO `c_game` VALUES ('23', '30', '1nsane', '1nsane', '2000-11-01 00:00:00', '1334924690_1nsane_Icon.png', '1334924690_1nsane_Hero_Banner.png', '1334924690_1nsane_Teaser_Banner.png', 'Insane, where dangerous driving is the safest bet. The game turns the ignition key on the multiplayer all-terrain racing game 4x4 Jam.', 'Invictus and Codemasters turned the ignition key on its multiplayer all-terrain 4x4 racing game, ‘Insane’, where dangerous driving is the safest bet.\n\nSpecially designed for Internet and LAN play, Insane put players behind the wheel of a range of off-road vehicles including 4x4, trucks and even military vehicles, all with realistic and individual handling. Featuring stunning simultaneous multiplayer racing, players could kick up plenty of road dirt against human or computer generated competitors across a terrain which puts even the toughest suspension to the test. A full championship series is also available, pitching drivers against the full set of Insane\'s challenges.\n\nFrom the snow and ice of Yosemite to the arid dunes of the African desert, Insane features amazingly detailed 3D locations and delivers riotous 4x4 racing on PC-CD ROM.', '1', null, null, null, null, null, null, null, null, '', '', null, null, null, null, null, '1334924690_1nsane_Splash.png', '18', null);
INSERT INTO `c_game` VALUES ('24', '31', 'Overspeed', 'overspeed', '2007-11-28 00:00:00', '1334923840_Overspeed_Icon.png', '1334923840_Overspeed_Hero_Banner.png', '1334923840_Overspeed_Teaser_Banner.png', 'Overspeed is the European title for LASR. Modify your rides, take up challenges and c become the new illegal street-car racing king of L.A.!', 'The streets of L.A. - the birthplace of illegal streetracing. Here, the drivers of the fastest and most spectacular cars are the legends of the night. Modify your rides, take up challenges and climb the ladder of the underground hierarchy and become the new king of L.A.! \n\nOverspeed will put you in the seat of one of 10 highly detailed cars, challenging you to seek out random street races at night, earning parts and cars. Tune your vehicle into a fine racing machine to take over anything on the streets! Watch out, here are many other racers out there who are willing to do whatever it takes to steal all your glory.\n\nFeatures:\n- Faithfully recreated famous locations of illegal races in Los Angeles\n- Expanded single player career as well as a multiplayer mode for up to 8 players \n- Online Ranking system and matchmaking system \n- Online live head-to-head play \n- Online score / time based competitive play \n- Ghosting or collision enabled play', '1', null, null, null, null, null, null, null, null, '', '', null, null, null, null, null, '1334923840_Overspeed_Splash.png', '19', null);
INSERT INTO `c_game` VALUES ('26', '33', 'L.A. Street Racing', 'la-street-racing', '2007-04-11 00:00:00', '1334925376_LASR_Icon.png', '1334925376_LASR_Hero_Banner.png', '1334925376_LASR_Teaser_Banner.png', 'LASR is the USA title of Overspeed. Modify your rides, take up challenges and c become the new  illegal street-car racing king of L.A.!', 'The streets of L.A. - the birthplace of illegal streetracing. Here, the drivers of the fastest and most spectacular cars are the legends of the night. Modify your rides, take up challenges and climb the ladder of the underground hierarchy and become the new king of L.A.! \n\nL. A. Street Racing will put you in the seat of one of 10 highly detailed cars, challenging you to seek out random street races at night, earning parts and cars. Tune your vehicle into a fine racing machine to take over anything on the streets! Watch out, there are many other racers out there who are willing to do whatever it takes to steal all your glory.\n\nFeatures:\n- Faithfully recreated famous locations of illegal races in Los Angeles\n- Expanded single player career as well as a multiplayer mode for up to 8 players \n- Online Ranking system and matchmaking system \n- Online live head-to-head play \n- Online score / time based competitive play \n- Ghosting or collision enabled play', '1', null, null, null, null, null, null, null, null, '', '', null, null, null, null, null, '1334925376_LASR_Splash.png', '14', null);
INSERT INTO `c_game` VALUES ('27', '34', 'Monster Garage', 'monster-garage', '2003-12-20 00:00:00', '1335172442_Monster_Garage_Icon.png', '1335172442_Monster_Garage_Hero_Banner.png', '1335172442_Monster_Garage_Teaser_Banner.png', 'Monster Garage is based on the hit Discovery Channel TV series. Twist, mold and modify a standard vehicle into the monster machine of your dreams!', 'Based on the hit Discovery Channel TV series - official license. \n\nTwist, mold and modify a standard vehicle into the monster machine of your dreams! With only $3,000 and seven days, you\'ll be workin\' overtime in the Monster Garage to get the job done in time and on budget! Based on the hit Discovery Channel TV series, you will have to plan your monster machine carefully, order parts or create / construct the parts needed and start wrenching away, just like Jesse James and his monster team of experts. Turn a limo into a fire truck or an SUV into a rock crawler! \n\nWhen you have completed your mission - test it against its real-world equivalent. Do you have the skills to take a run-of-the-mill street ride and turn it into an awesome miracle of modern engineering and ingenuity?', '1', null, null, null, null, null, null, null, null, '', '', null, null, null, null, null, '1335421116_Monster_Garage_Splash.png', '13', null);
INSERT INTO `c_game` VALUES ('28', '35', 'Cross Racing Championship', 'cross-racing-championship', '2005-05-02 00:00:00', '1335259854_CRC_Icon.png', '1335173780_CRC_Hero_Banner.png', '1335173780_CRC_Teaser_Banner.png', 'Cross Racing Championship (CRC) allows players to experience the thrills of high-speed on and off road racing across vast open terrains.', 'Cross Racing Championship (CRC) allows players to experience the thrills of high-speed on and off-road racing across vast open terrains.\n\nRacers can contest over 60 races across six distinct environments, ranging from icy mountainous regions and lush countryside to parched desert areas and beaches. CRC appeals to rally and road-racing fans with its crossover approach to vehicles and race circuits.\n\nCRC features multiplayer action and extensive set-up options which are integral parts of the game along with realistic real-time damage and stunning graphical effects bump mapping, dynamic environmental reflections and motion blur. The vehicles are fully customisable both in their appearance and performance using an intuitive and powerful interface.', '1', null, null, null, null, null, null, null, null, '', '', null, null, null, null, null, '1335173780_CRC_Splash.png', '15', null);
INSERT INTO `c_game` VALUES ('29', '36', 'Heat Online', 'heat-online', '2007-09-05 00:00:00', '1335259869_Heat_Online_Icon.png', '1335178221_Heat_Online_Hero_Banner.png', '1335178221_Heat_Online_Teaser_Banner.png', 'Level-R / Heat Online offers experiencing the thrills of high-speed on and off road racing.', 'Level-R / Heat Online offers experiencing the thrills of high-speed on and off road racing. Players can race against thousands of fellow players across the streets of Tokyo, the racetracks of Germany, the off-road tracks of Hungary and Mexico, the English countryside, the rooftops of Shanghai and many more.\n\nLevel-R appeals to street racing fans and circuit racing fans with several crossover approaches to vehicles and race tracks. MMO actions are integral parts of the game along with high-end graphics and audio effects. The game is free to download and play, though some Item Mall features, such as licensed cars, might not be free.\n\nGame Features: \nMMORG (Massively Multiplayer Online Racing Game)\nCutting Edge 3D Graphics\nSeveral Game Modes\nAdvanced Experience and Licensing System\nIntegrated Community features: Friend list and Chat channels\nRacing Clans\nItem Mall for Upgrades and Car Customization\nRealtime Rankings\nTournaments & Events\nSingle player career mode', '1', null, null, null, null, null, null, null, null, '', '', null, null, null, null, null, '1335178221_Heat_Online_Splash.png', '16', null);
INSERT INTO `c_game` VALUES ('30', '37', 'Street Legal', 'street-legal', '2002-10-06 00:00:00', '1335259945_Street_Legal_Icon.png', '1335260251_Street_Legal_Hero_Banner.png', '1335260251_Street_Legal_Teaser_Banner.png', 'Street Legal takes it all to the next level! Whether you\'re in to \"Trick\'n\", \"Tune\'n\", or \"Drag\'n\", this game is a must-have!', 'Street Legal takes it all to the next level! Whether you\'re in to \"Trick\'n\", \"Tune\'n\", or \"Drag\'n\", this game is a must-have!\n\nStart out with an ordinary car, then take on other street racers for cash prizes to upgrade your ride into an extraordinary fire-breathing road racing machine. In the garage you can interactively add licensed components, a new paint job, decals and affect repairs, all in glorious 3D! So keep the pedal to the metal because the STREET action doesn\'t get any more furious than this!\n\nFeatures:\n- Customize and upgrade your vehicle to be the ultimate racing machine with authentic licensed parts. \n- 16 cars to \"trick-out\" and \"tune-up\" in a variety of garages \n- 4 club levels from easy to difficult for a range of challenges \n- Dynamic race path generator for ultimate street action and extended game play! \n- Clever AI opponents. Don\'t get snagged by the cops... you could lose it all!!!\n- Dramatic crashes, resulting in damage which realistically affects the bodywork and handling of the car', '1', '1', '3', null, null, null, null, null, null, '', '', null, null, null, null, null, '1335260251_Street_Legal_Splash.png', '17', null);
INSERT INTO `c_game` VALUES ('32', '39', 'Santa Ride!', 'santa-ride', '2011-12-14 00:00:00', '1335355309_Santa_Ride_Icon.png', '1335355309_Santa_Ride_Hero_Banner.png', '1335355309_Sanra_Ride_Teaser_Banner.png', 'Santa Claus lost his gifts! Help him and his reindeers find the presents! Follow the Christmas Star and deliever them to the children!', 'All year long, the children of winter town have been waiting for Santa Claus to visit them and bring them their well-deserved Christmas presents, when all of a sudden... Oh no! The gifts fell off his sleigh and have scattered all over winter town! \n\nWhere could they be? On the frozen lake, or maybe behind the Christmas trees? Luckily, the Christmas Star knows where you can find all the missing gifts! Follw the Star to help Santa and his loyal reindeers find the presents! Hurry and deliver the presents to everyone!\n\nSanta Ride is Invictus games Christmas Holiday Special free game in 2011. During the first three months of its release, our company decided to give all the in-game commercial profits to the Rock Foundation, to help those who are in need of medical care in Romania and The Ukraine.', '1', null, null, null, null, null, null, null, null, '', '', null, null, null, null, null, '1335355309_Santa_Ride_Splash.png', '12', null);
INSERT INTO `c_game` VALUES ('33', '40', 'Fly Control', 'fly-control', '2009-12-17 00:00:00', '1335433597_fly_control_icon.png', '1335359911_Fly_Control_Hero_Banner.png', '1335359911_Fly_Control_Teaser_Banner.png', 'Get your buzz on and help the cute little flies reach their stinky targets and avoid flies from crashing into each other or who knows what may happen.', 'Get your buzz on and help the cute little flies reach their stinky targets and squish flies as temporary food. Watch out, controlling them is not as easy as it sounds! Avoid flies from crashing into each other or who knows what may happen...\n\nFly Control\'s intuitive controls and fun gameplay make the game amazingly simple and highly addictive!\n\nFly Control features:\n- OpenFeint support\n- 4 leaderboards (3 for each level and a total score leaderboard)\n- 21 achievements\n- Sarcastic humor\n- Crude fly fights\n- Various playfields\n- Domestic and horse flies\n\nFly Control HD features:\n\n- 3 species: fly, butterfly and wasp\n- 4 maps: backyard, picnic in the forest, swamp and the porch at night\n- Carnivorous plants and electric fly zapper\n- Bugs to crush\n- OpenFeint support: 5 leaderboards and 18 cool achievements\n- Versus multiplayer mode to compete against your friend\n- Several battle items are included to provide an amazing game experience and a high replay value\n- In-game shop\n- Funny sound effects, cool animations\n- Hints on settings panels (indicated with question marks)\n\nInitial content is free. \n\nExtra levels and items can be purchased for gems (the in-game virtual money).', '1', null, null, null, null, null, null, null, null, '', '', null, null, null, null, null, '1335359911_Fly_Control_Splash.png', '11', null);
INSERT INTO `c_game` VALUES ('34', '41', 'Blastwave', 'blastwave', '2009-11-20 00:00:00', '1335452187_Blastwave_Icon.png', '1335452187_Blastwave_Hero_Banner.png', '1335452187_Blastwave_Teaser_Banner.png', 'Blastwave is a funny game about Tittles, who dwell in a special colored fluid called Ooze B-50 and offer loads of funny games to play with!', '3 different Game Modes are waiting for you!\n\nCHAIN REACTION\nMeet Blasties with a very sensitive and unbalanced system which makes them explode if they hit anything in the fluid. Your job here is to create a chain of subsequent explosions in order to reach a given popping percentage indicated in the top-left corner of the screen.\n\nCRITICAL MASS\nMeet Floaties, who attract each other very strongly. When two of these species get too close to each other they merge into a bigger, mutated entity.\n\nCOLLECTOR\nSome Floaties are just too lazy to attract each other and merge. They don\'t feel the urge to team up and become a bigger and stronger entity. So you have the chance to play with them and collect them into crates.', '1', null, null, null, null, null, null, null, null, '', '', null, null, null, null, null, '1335452187_Blastwave_Splash.png', '21', null);
INSERT INTO `c_game` VALUES ('35', '42', 'Grim Filler', 'grim-filler', '2009-10-31 00:00:00', '1335452950_Grim_Filler_Icon.png', '1335452950_Grim_Filler_Hero_Banner.png', '1335452950_Grim_Filler_Teaser_Banner.png', 'Play with the members of Halloween-land: Zombies, Frankenstein, Jack-o\'-lanterns, Skulls and other scary players of Nightmare-land in this fun and eas', 'Fill the space with the grim characters until their volume reach the given percent. Although several monsters try to hinder you, each bearing unique characteristics, you can exploit the advantages of gravity and trap them. Tap the screen to inflate the various heads and increase their volume to complete the level!\n\nPlay through the 70 increasingly challenging levels! Fight with bosses and play with action-packed mini games! The gameplay is never the same. If you replay the game you meet new challenges where you can use new tricks. \n\nBe the No. 1 in online leaderboard and compare your achievements to others by each level! What\'s more: unlock the Classic mode with unlimited number of levels.', '1', null, null, null, null, null, null, null, null, '', '', null, null, null, null, null, '1335452950_Grim_Filler_Splash.png', '20', null);
INSERT INTO `c_game` VALUES ('36', '43', 'Fly Fu Pro', 'fly-fu-pro', '2011-05-12 00:00:00', '1335470790_Fly_Fu_Pro_Icon.jpg', '1335470790_Fly_Fu_Pro_Hero_Banner.png', '1335470790_Fly_Fu_Pro_Teaser_Banner.png', 'The most amazing adventure a fly can ever have! Fly Fu Pro is a classic beat\'em up game with adventure, role playing, puzzle and strategy.', 'The most amazing adventure a fly can ever have! Fly Fu Pro is a classic beat\'em up game with adventure, role playing, puzzle and strategic elements available on iPhone and iPad.\n\nHelp Monthy McFly on his mission to save his kidnapped girlfriend, Kate Moth. Fly on a leaf above the suburban area and collect buttons for a Teddy Bear, help the scientist ladybugs finish their \'Juggernaut\' project, storm a stage performance, afterwards make it through the angered fans\' crowd and most importantly: reveal the darkest secrets of the evil spideress queen, Ebony Overseer! \n\nThe game features: \n- unique style of art based on Magnus Muhr\'s \'Dead fly art\' \n- 10 different weapons to use (5 melee weapons, 5 projectiles) \n- 4 different styled mini-games to put your skills to the test \n- survival mode to test your endurance \n- 24 skills to learn - to name a few: fire-breath, life leeching and turning your character into stone\n- 20+ species of insects to fight against, including explosive jawbreaker spiders', '1', null, null, null, null, null, null, null, null, '', '', null, null, null, null, null, '1335470790_Fly_Fu_Pro_Splash.png', '8', null);
INSERT INTO `c_game` VALUES ('37', '44', '4x4 Jam', '4x4-jam', '2009-09-02 00:00:00', '1335508062_4x4jam_icon.png', '1335508062_4x4_Jam_Hero_Banner.png', '1335508062_4x4_Jam_Teaser_Banner.png', '4x4 JAM the most unique all-terrain off-road racing game you will ever see on iPhone and PSP. There are no rules and no boundaries in 4x4 Jam!', '4x4 JAM the most unique all-terrain off-road racing game you will ever see. Find yourself behind the wheels of off-road vehicles with tilted or tapped game control. The game offers 100% total freedom to race across the varied terrains without any limitations. \n\nChallenge your opponents on icy mountains or hot sand dunes and experience the excitement of hill climbing with custom built off-road vehicles. Jump over your opponents or roll down a steep hill - there are no rules and no boundaries in 4x4 Jam!\n\n4x4 Jam features:\n- 8 different tracks: Greenfields, Autumn, Desert, Frozen, Hawaii and Sand Dunes \n- 9 licensed soundtracks\n- Career mode with 32 different achivements – 4x4 Contest, Final Jam and Off-Road Championship \n- 5 game modes – Jam, Off Road Race, Road Race, Free Ride, and Collector\n- 10 unique off-road vehicles: 4x4 Truck, Buggy, Willy Top, Land Raider, Peak Climber, Wrecker \n- Various difficulty levels \n- high score and best lap time records', '1', null, null, null, null, null, null, null, null, '', '4x4jam', null, null, null, null, null, '1335508062_4x4_Jam_Splash_Banner.png', '6', null);
