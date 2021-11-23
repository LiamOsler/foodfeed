-- Script for inserting test values in to the database:

-- Create fake users:
INSERT INTO `users` VALUES
(NULL, MD5(UUID()), "Admin", "", "", "admin@novascotialegalnews.ca", CURRENT_TIMESTAMP, TRUE, TRUE),
(NULL, MD5(UUID()), "Art", "Arthur", "Kirkland", "kirkland@novascotialegalnews.ca", CURRENT_TIMESTAMP, TRUE, TRUE),
(NULL, MD5(UUID()), "Frank", "Francis", "Rayford", "rayford@novascotialegalnews.ca", CURRENT_TIMESTAMP, TRUE, TRUE),
(NULL, MD5(UUID()), "Henry", "Henry", "Fleming", "fleming@novascotialegalnews.ca", CURRENT_TIMESTAMP, TRUE, TRUE),
(NULL, MD5(UUID()), "JayP", "Jay", "Porter", "jayp@gmail.com", CURRENT_TIMESTAMP, TRUE, TRUE),
(NULL, MD5(UUID()), "DJ", "Dave", "Jameson", "dj@gmail.com", CURRENT_TIMESTAMP, TRUE, TRUE),
(NULL, MD5(UUID()), "Windy", "Gail", "Packer", "windy12345@yahoo.com", CURRENT_TIMESTAMP, TRUE, TRUE);

-- Create some random fake salt and pepper values for all the users:
INSERT INTO `userSaltAndPepper`(privateID, userSalt, userPepper)
SELECT privateID, LEFT(MD5(UUID()), 8), LEFT(MD5(UUID()), 8)
FROM `users`;

-- Concat the user salt and peppers together with the word "password" then calculate their MD5 checksum and set it to the user's passwordHash:
INSERT INTO `userHashes`(privateID, passwordHash)
SELECT privateID, MD5(CONCAT(userSalt, md5("password"), userPepper))
FROM `userSaltAndPepper`;

 INSERT INTO `userHashes` VALUES 
('a1ce0152e0fe13f98f550d34695ee2d9', MD5(CONCAT('{$userSalt}', md5('{$password}'),'{$userPepper}')));

INSERT INTO `restaurantChains` VALUES
(NULL, "Big Kahuna Burger", "This is a tasty burger.", "bigkahuna.com")
(NULL, "The Krusty Krab", "Come spend your money here!", "krustykrab.com")

;

INSERT INTO `restaurantChainCategories` VALUES
(NULL, "Hawaiian"),
(NULL, "Seafood");


INSERT INTO `restaurantChainCategorization` VALUES
(1, 1);
(2, 2);

