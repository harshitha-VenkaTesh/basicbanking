
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users` (`name`, `email`, `amount`) VALUES
('Bob', 'Bob@gmail.com', 1010),
('Tim', 'Tim@gmail.com', 990),
('Percy', 'Percy@gmail.com', 1000),
('Frank', 'Frank@gmail.com', 950),
('Tessa', 'Tessa@gmail.com', 1000),
('Reynold', 'Reynold@gmail.com', 1000),
('Brenden', 'Brenden@gmail.com', 1000),
('Ben', 'Ben@gmail.com', 1050),
('Rose', 'Rose@gmail.com', 800),
('Alice', 'Alice@gmail.com', 1200);
COMMIT;
