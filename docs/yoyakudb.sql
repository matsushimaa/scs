CREATE TABLE `reservations` (
  `name` text NOT NULL,
  `people_count` int(11) NOT NULL,
  `time` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `tour_reservations` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;