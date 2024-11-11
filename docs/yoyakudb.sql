CREATE TABLE `reservations` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,  -- 予約ID (自動増分)
  `name` VARCHAR(255) NOT NULL,         -- 予約者の名前（文字列型に変更）
  `people_count` INT NOT NULL,         -- 予約人数
  `time` TIME NOT NULL,                -- 予約時間（TIME型に変更）
  `date` DATE DEFAULT NULL,            -- 予約日（必要であればDATETIMEに変更可能）
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,  -- 作成日時（自動挿入）
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  -- 更新日時（自動更新）
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