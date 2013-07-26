#categories table

CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mealID` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#recipes table
#categoryID, mealID and letterID are used for sorting
#TODO add in referential integrity. Bad developer!

CREATE TABLE `recipes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `ingredients` TEXT, 
  `directions` TEXT,
  `categoryID` int(11) NOT NULL,
  `mealID` int(2) NOT NULL,
  `letterID` int(2) NOT NULL,
  `url` varchar(255) NOT NULL,
  'description' varchar(255) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


# meals table

CREATE TABLE `meals` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;