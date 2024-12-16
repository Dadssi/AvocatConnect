CREATE TABLE `users` (
  `id_user` integer PRIMARY KEY AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` integer,
  `email` varchar(100) UNIQUE NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_date` datetime DEFAULT (CURRENT_TIMESTAMP),
  `role` ENUM(client,avocat) NOT NULL,
  `user_description` text,
  `photo` mediumblob,
  `experience_years` integer
);

CREATE TABLE `specialities` (
  `id_speciality` integer PRIMARY KEY AUTO_INCREMENT,
  `id_lawyer` integer,
  `spaciality_name` varchar(100) NOT NULL,
  `spaciality_description` text
);

CREATE TABLE `availabilities` (
  `id_availability` integer PRIMARY KEY AUTO_INCREMENT,
  `id_lawyer` integer,
  `availability_date` date NOT NULL,
  `start_hour` time NOT NULL,
  `end_hour` time NOT NULL,
  `is_available` boolean DEFAULT true
);

CREATE TABLE `reservations` (
  `id_reservation` integer PRIMARY KEY AUTO_INCREMENT,
  `id_client` integer,
  `id_lawyer` integer,
  `reservation_date` datetime NOT NULL,
  `status` ENUM(en_attente,acceptee,refusee) DEFAULT 'en_attente',
  `reason` text,
  `reservation_creation_date` datetime DEFAULT (CURRENT_TIMESTAMP)
);

CREATE TABLE `reviews` (
  `id_review` integer PRIMARY KEY AUTO_INCREMENT,
  `id_client` integer,
  `id_lawyer` integer,
  `rating` integer COMMENT 'must be between 1 and 5',
  `comment` text,
  `review_date` datetime DEFAULT (CURRENT_TIMESTAMP)
);

ALTER TABLE `specialities` ADD FOREIGN KEY (`id_lawyer`) REFERENCES `users` (`id_user`);

ALTER TABLE `availabilities` ADD FOREIGN KEY (`id_lawyer`) REFERENCES `users` (`id_user`);

ALTER TABLE `reservations` ADD FOREIGN KEY (`id_client`) REFERENCES `users` (`id_user`);

ALTER TABLE `reservations` ADD FOREIGN KEY (`id_lawyer`) REFERENCES `users` (`id_user`);

ALTER TABLE `reviews` ADD FOREIGN KEY (`id_client`) REFERENCES `users` (`id_user`);

ALTER TABLE `reviews` ADD FOREIGN KEY (`id_lawyer`) REFERENCES `users` (`id_user`);
