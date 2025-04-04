-- CREATE DATABASE restaurents
-- SELECT * FROM user

-- delete from  excursions
-- INSERT INTO excursions (name, descriptions, price, photo) VALUES
-- ('La Vallée de l\'Ourika', 'Explorez la magnifique vallée de l\'Ourika, célèbre pour ses montagnes et ses villages berbères.', '50', 'ourika.jpg'),
-- ('Cascades d\'Ouzoud', 'Découvrez les impressionnantes cascades d\'Ouzoud, l\'une des plus grandes chutes d\'eau du Maroc.', '70', 'ouzoud.jpg'),
-- ('Désert d\'Agafay', 'Un voyage à travers le désert d\'Agafay, une expérience authentique du Sahara.', '100', 'agafay.jpg'),
-- ('Médina de Marrakech', 'Visitez la médina de Marrakech, avec ses souks et monuments historiques, pour une immersion dans la culture marocaine.', '30', 'medina_marrakech.jpg'),
-- ('Palais Bahia', 'Explorez l\'impressionnant Palais Bahia, un exemple parfait de l\'architecture marocaine traditionnelle.', '40', 'bahia_palace.jpg'),
-- ('Jardin Majorelle', 'Promenez-vous dans le Jardin Majorelle, un jardin botanique emblématique avec une histoire fascinante.', '20', 'jardin_majorelle.jpg');



-- INSERT INTO piscine (name, description, photo) VALUES
-- ('Piscine Al-Mansour', 'Piscine de luxe avec vue panoramique sur la ville.', 'al_mansour.jpg'),
-- ('Piscine Riad Marrakech', 'Piscine située dans un riad traditionnel de Marrakech, offrant une expérience unique.', 'riad_marrakech.jpg'),
-- ('Piscine Jardin Majorelle', 'Piscine entourée de jardins luxuriants, inspirée par les couleurs de Majorelle.', 'jardin_majorelle.jpg'),
-- ('Piscine Palmeraie Resort', 'Grande piscine à l\'intérieur du complexe de la Palmeraie, avec des installations modernes.', 'palmeraie_resort.jpg'),
-- ('Piscine Royal Mansour', 'Piscine privée et chauffée dans un cadre royal, idéale pour la détente.', 'royal_mansour.jpg'),
-- ('Piscine Le Méridien', 'Piscine en forme de lagon, dans un cadre calme et élégant.', 'le_meridien.jpg'),
-- ('Piscine Ksar Char-Bagh', 'Piscine de style traditionnel berbère, entourée de palmiers et de jardins exotiques.', 'ksar_char_bagh.jpg'),
-- ('Piscine Les Jardins de la Koutoubia', 'Piscine spacieuse dans un hôtel 5 étoiles, offrant une vue imprenable sur la mosquée Koutoubia.', 'jardins_koutoubia.jpg'),
-- ('Piscine Atlas Golf Resort', 'Piscine moderne avec vue sur le parcours de golf, idéale pour les sportifs et les familles.', 'atlas_golf_resort.jpg'),
-- ('Piscine Amanjena', 'Piscine de rêve dans un cadre somptueux, au cœur du resort de luxe Amanjena.', 'amanjena.jpg');

-- UPDATE user
-- SET roles = JSON_ARRAY_APPEND(roles, '$', 'ROLE_ADMIN')
-- WHERE id = 2;

-- select * from reserva_restaurants
-- ALTER TABLE excursions MODIFY COLUMN photo VARCHAR(255) DEFAULT 'default.jpg';
-- SELECT * from hotel


-- INSERT INTO hotel (name, etoile, description, photo) VALUES
-- Hôtels 1 étoile
-- ("Hotel Amira", 1, "Petit hôtel économique situé au cœur de Marrakech, offrant des chambres simples et fonctionnelles pour les voyageurs à petit budget.", "img/Hôtels/hotel1.webp"),
-- ("Hotel Central", 1, "Hôtel pratique et abordable, idéal pour les voyageurs qui recherchent un hébergement simple au centre de la ville.", "img/Hôtels/hotel2.webp"),
-- ("Hotel Marrakech Inn", 1, "Hôtel économique avec des chambres basiques, idéal pour les courts séjours.", "img/Hôtels/hotel3.jpeg"),
-- ("Hotel Atlas", 1, "Un hôtel économique situé près de la gare, avec des chambres simples et un service basique.", "img/Hôtels/hotel4.webp"),
-- ("Hotel Koutoubia", 1, "Petit hôtel à proximité des principales attractions touristiques, offrant des chambres modestes.", "img/Hôtels/hotel5.jpg"),

-- -- Hôtels 2 étoiles
-- ("Riad Bahia", 2, "Riad traditionnel dans la médina de Marrakech, offrant des services basiques et un excellent rapport qualité-prix pour les touristes.", "img/Hôtels/hotel6.jpg"),
-- ("Hotel Ali", 2, "Hôtel confortable avec une décoration traditionnelle, situé à quelques pas de la place Jemaa el-Fna.", "img/Hôtels/hotel7.jpg"),
-- ("Hotel Atlas Medina", 2, "Hôtel sympathique offrant un bon rapport qualité-prix, situé dans un quartier calme et agréable.", "img/Hôtels/hotel8.jpg"),
-- ("Riad Dar Silsila", 2, "Riad authentique avec des chambres simples mais agréables, parfait pour une escapade tranquille.", "img/Hôtels/hotel9.jpg"),
-- ("Hotel Tazi", 2, "Un hôtel modeste avec un excellent service, situé dans la médina de Marrakech.", "img/Hôtels/hotel10.jpg"),

-- -- Hôtels 3 étoiles
-- ("Hotel Mogador", 3, "Hôtel moderne avec des chambres confortables et bien équipées, idéal pour les séjours touristiques à un prix raisonnable.", "img/Hôtels/hotel11.jpg"),
-- ("Hotel Les Jardins de La Koutoubia", 3, "Un hôtel confortable offrant une piscine, un restaurant et un excellent service au cœur de Marrakech.", "img/Hôtels/hotel12.jpg"),
-- ("Riad Zarka", 3, "Riad charmant offrant un excellent rapport qualité-prix, avec un service soigné et des chambres confortables.", "img/Hôtels/hotel13.jpg"),
-- ("Hotel Le Caspien", 3, "Un hôtel moderne avec une décoration élégante et un emplacement central, parfait pour les familles.", "img/Hôtels/hotel14.jpg"),
-- ("Hotel Oudaya", 3, "Hôtel au décor traditionnel marocain, offrant des chambres spacieuses et un bon service, situé près de la place Jemaa el-Fna.", "img/Hôtels/hotel15.jpg"),

-- -- Hôtels 4 étoiles
-- ("La Mamounia", 4, "Hôtel de luxe avec un service exceptionnel, des jardins magnifiques et des installations haut de gamme, parfait pour une expérience inoubliable.", "img/Hôtels/hotel16.jpg"),
-- ("Royal Mansour Marrakech", 4, "Un hôtel somptueux avec des villas privées, des piscines, des restaurants étoilés et un service personnalisé.", "img/Hôtels/hotel17.jpg"),
-- ("Riad Fès", 4, "Riad élégant et raffiné avec un service impeccable, une belle piscine et un cadre tranquille.", "img/Hôtels/hotel18.jpg"),
-- ("Hotel Le Meridien N'fis", 4, "Un hôtel luxueux avec une belle vue sur les montagnes de l'Atlas et une piscine extérieure.", "img/Hôtels/hotel19.jpg"),
-- ("Riad Kniza", 4, "Riad traditionnel offrant des chambres magnifiques, une piscine intérieure et un service exceptionnel.", "img/Hôtels/hotel20.jpg"),

-- -- Hôtels 5 étoiles
-- ("Four Seasons Resort Marrakech", 5, "L'un des hôtels les plus luxueux de Marrakech, offrant des chambres somptueuses, un service de classe mondiale et une expérience inoubliable.", "img/Hôtels/hotel21.jpg"),
-- ("Amanjena", 5, "Complexe hôtelier de luxe au bord d'un lac, avec des villas privées et un service personnalisé exceptionnel.", "img/Hôtels/hotel22.jpg"),
-- ("Palais Namaskar", 5, "Hôtel de luxe offrant un cadre époustouflant, avec une architecture spectaculaire et des services exclusifs.", "img/Hôtels/hotel23.jpg"),
-- ("La Sultana Marrakech", 5, "Un hôtel raffiné au cœur de la médina, avec des chambres élégantes, un spa et une vue incroyable sur la ville.", "img/Hôtels/hotel24.jpg"),
-- ("Selman Marrakech", 5, "Luxueux resort offrant des villas privées, une piscine olympique et des installations de spa haut de gamme.", "img/Hôtels/hotel25.jpg");

-- DELETE from hotel 


-- INSERT INTO menu (id, name, description, price) VALUES
-- (1, 'Menu Traditionnel Marocain', 'Couscous, Tajine, Pastilla', 30),
-- (2, 'Menu Marrakech Spécialités', 'Tagine de poulet, Kefta, Zaalouk', 35),
-- (3, 'Menu Végétarien', 'Salade marocaine, Couscous aux légumes', 25),
-- (4, 'Menu Fruits de Mer', 'Poisson grillé, Crevettes, Calamars', 40),
-- (5, 'Menu Oriental', 'Pide, Kebabs, Fattoush', 28),
-- (6, 'Menu Couscous Royal', 'Couscous avec agneau, poulet et légumes', 45),
-- (7, 'Menu de Luxe', 'Tajine de foie gras, Couscous aux fruits secs', 60),
-- (8, 'Menu du Chef', 'Tajine d’agneau, Brick, Harira', 38),
-- (9, 'Menu Authentique', 'Pastilla, Harira, Salade marocaine', 30),
-- (10, 'Menu Oriental Premium', 'Kebabs, Couscous, Brochettes', 50);



-- INSERT INTO restaurent (id, name, description, photo, menu_id) VALUES
-- (1, 'Le Palais de Marrakech', 'Restaurant traditionnel avec une vue imprenable', 'palais_marrakech.jpg', 1),
-- (2, 'La Kasbah Gourmande', 'Spécialités marocaines dans une atmosphère chaleureuse', 'kasbah_gourmande.jpg', 2),
-- (3, 'Les Saveurs de Marrakech', 'Cuisine traditionnelle et raffinée', 'saveurs_marrakech.jpg', 3),
-- (4, 'Riad d’Orient', 'Cuisine fine marocaine et ambiance exotique', 'riad_orient.jpg', 4),
-- (5, 'L’Authentique Marrakech', 'Restaurant au style marocain avec plats de qualité', 'authentique_marrakech.jpg', 5),
-- (6, 'Le Jardin de Marrakech', 'Cuisine légère et saine dans un cadre reposant', 'jardin_marrakech.jpg', 6),
-- (7, 'Le Comptoir des Rêves', 'Restaurant haut de gamme avec menu spécial', 'comptoir_reves.jpg', 7),
-- (8, 'La Table de Marrakech', 'Cuisine marocaine contemporaine', 'table_marrakech.jpg', 8),
-- (9, 'Chez Ali', 'Restaurant traditionnel avec une large variété de menus', 'chez_ali.jpg', 9),
-- (10, 'Marrakech Elégance', 'Un restaurant élégant avec une cuisine innovante', 'marrakech_elegance.jpg', 10);


-- INSERT INTO restaurent_menu (restaurent_id, menu_id) VALUES
-- -- Le Palais de Marrakech propose 10 menus
-- (1, 1), (1, 2), (1, 3), (1, 4), (1, 5), (1, 6), (1, 7), (1, 8), (1, 9), (1, 10),

-- -- La Kasbah Gourmande propose 10 menus
-- (2, 1), (2, 2), (2, 3), (2, 4), (2, 5), (2, 6), (2, 7), (2, 8), (2, 9), (2, 10),

-- -- Les Saveurs de Marrakech propose 10 menus
-- (3, 1), (3, 2), (3, 3), (3, 4), (3, 5), (3, 6), (3, 7), (3, 8), (3, 9), (3, 10),

-- -- Riad d’Orient propose 10 menus
-- (4, 1), (4, 2), (4, 3), (4, 4), (4, 5), (4, 6), (4, 7), (4, 8), (4, 9), (4, 10),

-- -- L’Authentique Marrakech propose 10 menus
-- (5, 1), (5, 2), (5, 3), (5, 4), (5, 5), (5, 6), (5, 7), (5, 8), (5, 9), (5, 10),

-- -- Le Jardin de Marrakech propose 10 menus
-- (6, 1), (6, 2), (6, 3), (6, 4), (6, 5), (6, 6), (6, 7), (6, 8), (6, 9), (6, 10),

-- -- Le Comptoir des Rêves propose 10 menus
-- (7, 1), (7, 2), (7, 3), (7, 4), (7, 5), (7, 6), (7, 7), (7, 8), (7, 9), (7, 10),

-- -- La Table de Marrakech propose 10 menus
-- (8, 1), (8, 2), (8, 3), (8, 4), (8, 5), (8, 6), (8, 7), (8, 8), (8, 9), (8, 10),

-- -- Chez Ali propose 10 menus
-- (9, 1), (9, 2), (9, 3), (9, 4), (9, 5), (9, 6), (9, 7), (9, 8), (9, 9), (9, 10),

-- -- Marrakech Elégance propose 10 menus
-- (10, 1), (10, 2), (10, 3), (10, 4), (10, 5), (10, 6), (10, 7), (10, 8), (10, 9), (10, 10);


-- SELECt * FROM restaurent