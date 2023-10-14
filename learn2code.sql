-- --------------------------------------------------------
-- Host:                         127.0.0.2
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for learn2code
CREATE DATABASE IF NOT EXISTS `learn2code` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `learn2code`;

-- Dumping structure for table learn2code.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  PRIMARY KEY (`admin_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table learn2code.admins: ~0 rows (approximately)

-- Dumping structure for table learn2code.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) NOT NULL,
  `course_description` varchar(500) DEFAULT NULL,
  `group_id` int DEFAULT NULL,
  PRIMARY KEY (`course_id`),
  KEY `group_id` (`group_id`),
  CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `course_groups` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table learn2code.courses: ~0 rows (approximately)

-- Dumping structure for table learn2code.course_groups
CREATE TABLE IF NOT EXISTS `course_groups` (
  `group_id` int NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) DEFAULT NULL,
  `group_description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table learn2code.course_groups: ~0 rows (approximately)

-- Dumping structure for table learn2code.exercises
CREATE TABLE IF NOT EXISTS `exercises` (
  `exercise_id` int NOT NULL AUTO_INCREMENT,
  `lesson_id` int NOT NULL,
  `exercise_title` varchar(255) NOT NULL,
  `exercise_desc` varchar(500) DEFAULT NULL,
  `exercise_content` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`exercise_id`),
  KEY `lesson_id` (`lesson_id`),
  CONSTRAINT `exercises_ibfk_1` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table learn2code.exercises: ~0 rows (approximately)

-- Dumping structure for table learn2code.lessons
CREATE TABLE IF NOT EXISTS `lessons` (
  `lesson_id` int NOT NULL AUTO_INCREMENT,
  `course_id` int NOT NULL,
  `lesson_title` varchar(255) NOT NULL,
  `lesson_description` varchar(500) DEFAULT NULL,
  `section_sort` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`lesson_id`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table learn2code.lessons: ~0 rows (approximately)

-- Dumping structure for table learn2code.moderators
CREATE TABLE IF NOT EXISTS `moderators` (
  `mod_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  PRIMARY KEY (`mod_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `moderators_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table learn2code.moderators: ~0 rows (approximately)

-- Dumping structure for table learn2code.quizzes
CREATE TABLE IF NOT EXISTS `quizzes` (
  `quiz_id` int NOT NULL AUTO_INCREMENT,
  `course_id` int NOT NULL,
  `question` varchar(500) DEFAULT NULL,
  `right_choice` varchar(500) DEFAULT NULL,
  `wrong_choice1` varchar(500) DEFAULT NULL,
  `wrong_choice2` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`quiz_id`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `quizzes_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table learn2code.quizzes: ~0 rows (approximately)

-- Dumping structure for table learn2code.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) DEFAULT NULL,
  `role_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table learn2code.roles: ~0 rows (approximately)

-- Dumping structure for table learn2code.sections
CREATE TABLE IF NOT EXISTS `sections` (
  `section_id` int NOT NULL AUTO_INCREMENT,
  `lesson_id` int NOT NULL,
  `section_title` varchar(255) NOT NULL,
  `section_content` varchar(1000) DEFAULT NULL,
  `section_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`section_id`),
  KEY `lesson_id` (`lesson_id`),
  CONSTRAINT `sections_ibfk_1` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table learn2code.sections: ~0 rows (approximately)

-- Dumping structure for table learn2code.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `profile_img` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `role_id` int DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table learn2code.users: ~1 rows (approximately)
INSERT INTO `users` (`user_id`, `email`, `password`, `name`, `profile_img`, `github`, `linkedin`, `phone`, `is_active`, `role_id`) VALUES
	(1, 'test@gmail.com', '1', 'test', NULL, NULL, NULL, NULL, NULL, NULL);

-- Dumping structure for table learn2code.users_exercises
CREATE TABLE IF NOT EXISTS `users_exercises` (
  `user_id` int NOT NULL,
  `exercise_id` int NOT NULL,
  `is_done` tinyint(1) NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `exercise_id` (`exercise_id`),
  CONSTRAINT `users_exercises_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `users_exercises_ibfk_2` FOREIGN KEY (`exercise_id`) REFERENCES `exercises` (`exercise_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table learn2code.users_exercises: ~0 rows (approximately)

-- Dumping structure for table learn2code.users_lessons
CREATE TABLE IF NOT EXISTS `users_lessons` (
  `lesson_id` int NOT NULL,
  `user_id` int NOT NULL,
  `checked_date` datetime DEFAULT NULL,
  KEY `lesson_id` (`lesson_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `users_lessons_ibfk_1` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`),
  CONSTRAINT `users_lessons_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table learn2code.users_lessons: ~0 rows (approximately)

-- Dumping structure for table learn2code.users_quizzes
CREATE TABLE IF NOT EXISTS `users_quizzes` (
  `user_id` int NOT NULL,
  `quiz_id` int NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `quiz_id` (`quiz_id`),
  CONSTRAINT `users_quizzes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `users_quizzes_ibfk_2` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`quiz_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table learn2code.users_quizzes: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
