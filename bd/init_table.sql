-- Insertion des catégories
INSERT INTO Category (id, name) VALUES
(0, 'Table basse'),
(1, 'Table très basse'),
(2, 'Table un peu trop haute'),
(3, 'Table pas fifou'),
(4, 'Table banger'),
(5, 'Table nains'),
(6, 'Table pour les pauvres'),
(7, 'Table'),
(8, 'Table sexy'),
(9, 'Table bien'),
(10, 'Table avec un s');

-- Insertion des articles
INSERT INTO Article (id, name, price, description, stock, category_id) VALUES
(1, 'Table Basse Moderne', 49.99, 'Table basse élégante en bois massif.', 20, 0),
(2, 'Table Basse en Verre', 59.99, 'Table basse avec plateau en verre trempé.', 15, 0),
(3, 'Table Basse Scandinave', 39.99, 'Table basse au design scandinave épuré.', 30, 0),
(4, 'Table Basse Industrielle', 69.99, 'Table basse avec cadre en métal noir.', 25, 0),

(5, 'Table Ultra Basse Zen', 29.99, 'Table très basse idéale pour salons de style zen.', 10, 1),
(6, 'Table Ultra Basse Minimaliste', 34.99, 'Table basse minimaliste avec pieds courts.', 12, 1),
(7, 'Table Très Basse Japonaise', 44.99, 'Table traditionnelle basse en bois laqué.', 8, 1),
(8, 'Table Lounge Ultra Basse', 39.99, 'Table basse pour salons et zones de détente.', 9, 1),

(9, 'Table Basse Un Peu Haute', 29.99, 'Table légèrement plus haute pour plus de confort.', 7, 2),
(10, 'Table Mi-Haute Chic', 39.99, 'Table basse mais légèrement élevée pour salons modernes.', 12, 2),
(11, 'Table Vintage Un Peu Haute', 49.99, 'Table au design rétro avec une hauteur supérieure.', 6, 2),
(12, 'Table Un Peu Trop Haute Boisée', 32.99, 'Table en bois avec un plateau légèrement trop haut.', 11, 2),

(13, 'Table Basique', 19.99, 'Table simple et fonctionnelle.', 25, 3),
(14, 'Table Ordinaire', 24.99, 'Table ordinaire pour usage ordinaire.', 18, 3),
(15, 'Table Sobre', 22.99, 'Table au design modeste sans extravagance.', 30, 3),
(16, 'Table Correcte', 27.99, 'Table convenable, rien de spectaculaire.', 16, 3),

(17, 'Table Ultra Moderne', 149.99, 'Table au design innovant qui attire tous les regards.', 5, 4),
(18, 'Table Design Banger', 199.99, 'Table au look exceptionnel avec des matériaux premium.', 3, 4),
(19, 'Table Époustouflante', 179.99, 'Table chic et élégante qui impose son style.', 7, 4),
(20, 'Table Avant-Gardiste', 169.99, 'Table au design avant-gardiste et audacieux.', 4, 4),

(21, 'Table Miniature Nain', 9.99, 'Petite table pour les plus petites tailles.', 15, 5),
(22, 'Table pour Enfants', 14.99, 'Table de petite taille idéale pour enfants.', 20, 5),
(23, 'Table Très Petite', 11.99, 'Table miniature pour espaces réduits.', 18, 5),
(24, 'Table Spéciale Nain', 12.99, 'Table spécialement conçue pour les nains.', 10, 5),

(25, 'Table Discount', 9.99, 'Table à petit prix pour budgets serrés.', 50, 6),
(26, 'Table Économique', 12.99, 'Table pratique à un prix abordable.', 40, 6),
(27, 'Table Ultra Bon Marché', 7.99, 'Table fonctionnelle à prix imbattable.', 55, 6),
(28, 'Table Premier Prix', 8.99, 'Table basique pour petits budgets.', 60, 6),

(29, 'Table Standard', 29.99, 'Table classique pour salon.', 25, 7),
(30, 'Table Multi-Usage', 34.99, 'Table polyvalente pour diverses occasions.', 20, 7),
(31, 'Table Traditionnelle', 49.99, 'Table au design traditionnel en bois massif.', 12, 7),
(32, 'Table Moderne', 59.99, 'Table au look moderne et raffiné.', 15, 7),

(33, 'Table Élégante', 89.99, 'Table en verre et métal aux courbes raffinées.', 8, 8),
(34, 'Table Design Sensuelle', 129.99, 'Table avec des formes uniques et audacieuses.', 4, 8),
(35, 'Table Glamour', 99.99, 'Table brillante avec des finitions luxueuses.', 6, 8),
(36, 'Table Luxe', 149.99, 'Table haute gamme avec des matériaux sophistiqués.', 3, 8),

(37, 'Table Haut de Gamme', 79.99, 'Table de qualité supérieure au design chic.', 12, 9),
(38, 'Table Confort', 69.99, 'Table solide et pratique pour usage quotidien.', 20, 9),
(39, 'Table Fonctionnelle', 59.99, 'Table stable et pratique pour tous les usages.', 22, 9),
(40, 'Table Classique', 49.99, 'Table fiable avec une belle finition en bois.', 25, 9),

(41, 'Tables Gigognes', 79.99, 'Ensemble de tables gigognes en bois.', 10, 10),
(42, 'Tables Design Empilables', 89.99, 'Set de tables modernes empilables.', 8, 10),
(43, 'Tables Modulables', 99.99, 'Tables modulaires pour un espace flexible.', 6, 10),
(44, 'Tables en Lot', 59.99, 'Lot de deux tables pour salle de séjour.', 15, 10);
