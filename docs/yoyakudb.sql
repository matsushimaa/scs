CREATE TABLE `reservations` (
  `name` text NOT NULL,
  `people_count` int(11) NOT NULL,
  `time` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `tour_reservations` (
  `TCoop` int(11) NOT NULL,
  `TName` varchar(11) NOT NULL,
  `TDate` date NOT NULL,
  `TTime` int(11) NOT NULL,
  `TPlace` int(11) NOT NULL,
  `TNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
