CREATE TABLE `reservations` (
  `name` text NOT NULL,
  `people_count` int(11) NOT NULL,
  `time` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;