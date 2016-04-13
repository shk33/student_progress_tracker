-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-04-2016 a las 10:45:10
-- Versión del servidor: 5.6.28-0ubuntu0.15.10.1
-- Versión de PHP: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ss`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(10) unsigned NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `taken_test_id` int(10) unsigned NOT NULL,
  `option_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `question_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `answers`
--

INSERT INTO `answers` (`id`, `is_correct`, `taken_test_id`, `option_id`, `created_at`, `updated_at`, `question_id`) VALUES
(3, 0, 8, 20, '2016-03-10 06:37:07', '2016-03-29 02:38:00', 1),
(4, 0, 8, 3, '2016-03-10 06:46:00', '2016-03-29 02:38:04', 2),
(5, 1, 8, 7, '2016-03-10 06:46:06', '2016-03-29 02:38:07', 3),
(6, 1, 8, 9, '2016-03-10 06:46:59', '2016-03-29 02:38:10', 4),
(7, 0, 8, 13, '2016-03-10 06:47:05', '2016-03-29 02:38:13', 5),
(8, 0, 8, 17, '2016-03-10 06:53:15', '2016-03-29 02:38:16', 10),
(9, 0, 8, 21, '2016-03-10 06:53:42', '2016-03-29 02:38:18', 11),
(10, 0, 8, 33, '2016-03-10 06:53:49', '2016-03-29 02:38:23', 15),
(11, 1, 9, 2, '2016-03-10 10:08:32', '2016-03-10 10:08:32', 1),
(12, 1, 9, 5, '2016-03-10 10:08:37', '2016-03-10 10:08:37', 2),
(13, 1, 9, 7, '2016-03-10 10:08:43', '2016-03-10 10:08:43', 3),
(14, 0, 9, 10, '2016-03-10 10:08:49', '2016-03-10 10:08:49', 4),
(15, 1, 9, 14, '2016-03-10 10:09:23', '2016-03-10 10:09:23', 5),
(16, 1, 9, 18, '2016-03-10 10:09:27', '2016-03-10 10:09:27', 10),
(17, 1, 9, 22, '2016-03-10 10:09:31', '2016-03-10 10:09:31', 11),
(18, 0, 9, 33, '2016-03-10 10:09:36', '2016-03-10 10:09:36', 15),
(19, 1, 10, 2, '2016-03-10 10:10:37', '2016-03-10 10:10:37', 1),
(20, 0, 10, 4, '2016-03-10 10:10:40', '2016-03-10 10:10:40', 2),
(21, 0, 10, 6, '2016-03-10 10:10:44', '2016-03-10 10:10:44', 3),
(22, 0, 10, 10, '2016-03-10 10:10:48', '2016-03-10 10:10:48', 4),
(23, 0, 10, 13, '2016-03-10 10:10:53', '2016-03-10 10:10:53', 5),
(24, 0, 10, 17, '2016-03-10 10:10:57', '2016-03-10 10:10:57', 10),
(25, 0, 10, 21, '2016-03-10 10:11:00', '2016-03-10 10:11:00', 11),
(26, 0, 10, 33, '2016-03-10 10:11:04', '2016-03-10 10:11:04', 15),
(27, 0, 11, 1, '2016-03-10 10:27:39', '2016-03-10 10:27:39', 1),
(28, 0, 11, 4, '2016-03-10 10:27:42', '2016-03-10 10:27:42', 2),
(29, 0, 11, 6, '2016-03-10 10:27:46', '2016-03-10 10:27:46', 3),
(30, 0, 11, 10, '2016-03-10 10:27:50', '2016-03-10 10:27:50', 4),
(31, 0, 11, 12, '2016-03-10 10:27:53', '2016-03-10 10:27:53', 5),
(32, 1, 11, 18, '2016-03-10 10:27:56', '2016-03-10 10:27:56', 10),
(33, 0, 11, 21, '2016-03-10 10:27:59', '2016-03-10 10:27:59', 11),
(34, 1, 11, 32, '2016-03-10 10:28:02', '2016-03-10 10:28:02', 15),
(35, 1, 12, 2, '2016-03-10 11:14:40', '2016-03-10 11:14:40', 1),
(36, 1, 12, 5, '2016-03-10 11:14:43', '2016-03-10 11:14:43', 2),
(37, 0, 12, 6, '2016-03-10 11:14:47', '2016-03-10 11:14:47', 3),
(38, 1, 12, 9, '2016-03-10 11:14:54', '2016-03-10 11:14:54', 4),
(39, 1, 12, 14, '2016-03-10 11:14:58', '2016-03-10 11:14:58', 5),
(40, 1, 12, 18, '2016-03-10 11:15:00', '2016-03-10 11:15:00', 10),
(41, 0, 12, 21, '2016-03-10 11:15:05', '2016-03-10 11:15:05', 11),
(42, 1, 12, 32, '2016-03-10 11:15:08', '2016-03-10 11:15:08', 15),
(43, 1, 13, 2, '2016-03-10 11:15:34', '2016-03-10 11:15:34', 1),
(44, 1, 13, 5, '2016-03-10 11:15:37', '2016-03-10 11:15:37', 2),
(45, 1, 13, 7, '2016-03-10 11:15:40', '2016-03-10 11:15:40', 3),
(46, 1, 13, 9, '2016-03-10 11:15:44', '2016-03-10 11:15:44', 4),
(47, 1, 13, 14, '2016-03-10 11:15:48', '2016-03-10 11:15:48', 5),
(48, 1, 13, 18, '2016-03-10 11:15:52', '2016-03-10 11:15:52', 10),
(49, 1, 13, 22, '2016-03-10 11:15:56', '2016-03-10 11:15:56', 11),
(50, 1, 13, 32, '2016-03-10 11:16:00', '2016-03-10 11:16:00', 15),
(51, 1, 14, 2, '2016-03-10 11:52:07', '2016-03-10 11:52:07', 1),
(52, 1, 14, 5, '2016-03-10 11:52:13', '2016-03-10 11:52:13', 2),
(53, 0, 14, 8, '2016-03-10 11:52:17', '2016-03-10 11:52:17', 3),
(54, 0, 14, 11, '2016-03-10 11:52:21', '2016-03-10 11:52:21', 4),
(55, 0, 14, 13, '2016-03-10 11:52:24', '2016-03-10 11:52:24', 5),
(56, 0, 14, 17, '2016-03-10 11:52:28', '2016-03-10 11:52:28', 10),
(57, 0, 14, 21, '2016-03-10 11:52:34', '2016-03-10 11:52:34', 11),
(58, 0, 14, 34, '2016-03-10 11:52:38', '2016-03-10 11:52:38', 15),
(59, 1, 15, 2, '2016-03-10 11:53:20', '2016-03-10 11:53:20', 1),
(60, 1, 15, 5, '2016-03-10 11:53:22', '2016-03-10 11:53:22', 2),
(61, 1, 15, 7, '2016-03-10 11:53:26', '2016-03-10 11:53:26', 3),
(62, 0, 15, 11, '2016-03-10 11:53:30', '2016-03-10 11:53:30', 4),
(63, 0, 15, 13, '2016-03-10 11:53:33', '2016-03-10 11:53:33', 5),
(64, 0, 15, 17, '2016-03-10 11:53:37', '2016-03-10 11:53:37', 10),
(65, 0, 15, 21, '2016-03-10 11:53:43', '2016-03-10 11:53:43', 11),
(66, 0, 15, 34, '2016-03-10 11:53:46', '2016-03-10 11:53:46', 15),
(67, 0, 16, 1, '2016-03-10 21:50:37', '2016-03-10 22:11:32', 1),
(68, 0, 16, 3, '2016-03-10 21:50:43', '2016-03-10 22:11:36', 2),
(69, 1, 16, 7, '2016-03-10 21:50:47', '2016-03-10 22:11:39', 3),
(70, 1, 16, 9, '2016-03-10 21:50:52', '2016-03-10 22:11:45', 4),
(71, 0, 16, 13, '2016-03-10 21:50:56', '2016-03-10 22:11:48', 5),
(72, 0, 16, 17, '2016-03-10 21:51:01', '2016-03-10 22:11:51', 10),
(73, 0, 16, 21, '2016-03-10 21:51:06', '2016-03-10 22:11:54', 11),
(74, 1, 16, 32, '2016-03-10 21:51:10', '2016-03-10 22:11:57', 15),
(75, 0, 17, 20, '2016-03-11 03:47:29', '2016-03-11 03:47:29', 1),
(76, 0, 17, 3, '2016-03-11 03:47:33', '2016-03-11 03:47:33', 2),
(77, 1, 17, 7, '2016-03-11 03:47:36', '2016-03-11 03:47:36', 3),
(78, 1, 17, 9, '2016-03-11 03:47:40', '2016-03-11 03:47:40', 4),
(79, 0, 17, 13, '2016-03-11 03:47:42', '2016-03-11 03:47:42', 5),
(80, 0, 17, 17, '2016-03-11 03:47:45', '2016-03-11 03:47:45', 10),
(81, 0, 17, 21, '2016-03-11 03:47:48', '2016-03-11 03:47:48', 11),
(82, 1, 17, 32, '2016-03-11 03:47:50', '2016-03-11 03:47:50', 15),
(83, 1, 18, 41, '2016-03-29 04:37:43', '2016-03-29 04:46:10', 18),
(84, 1, 18, 45, '2016-03-29 04:38:43', '2016-03-29 04:46:14', 19),
(85, 1, 18, 49, '2016-03-29 04:38:47', '2016-03-29 04:46:18', 20),
(86, 1, 18, 50, '2016-03-29 04:38:50', '2016-03-29 04:46:23', 21),
(87, 1, 18, 54, '2016-03-29 04:38:54', '2016-03-29 04:46:26', 22),
(88, 1, 18, 57, '2016-03-29 04:46:31', '2016-03-29 04:46:31', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2012_11_06_225921_add_roles', 1),
('2012_12_06_225921_add_users', 1),
('2012_14_06_225921_seed_roles', 1),
('2016_02_23_211704_create_student_test_table', 1),
('2016_02_23_212540_create_questions_table', 1),
('2016_02_23_220559_create_options_table', 1),
('2016_02_24_202336_create_taken_tests_table', 1),
('2016_02_24_213716_create_answers_table', 1),
('2016_03_02_043705_add_image_to_question', 2),
('2016_03_02_061233_add_name_to_options_table', 3),
('2016_03_03_003047_change_index_of_options_table', 4),
('2016_03_03_010154_change_index_of_student_tests_table', 5),
('2016_03_03_214004_add_is_active_to_test_student_tests_table', 6),
('2016_03_10_002507_add_question_index_to_answers', 7),
('2016_04_13_030111_add_presentation_to_student_test_table', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `id` int(10) unsigned NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `question_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `options`
--

INSERT INTO `options` (`id`, `text`, `is_correct`, `question_id`, `created_at`, `updated_at`, `name`) VALUES
(1, 'Laravel', 0, 1, '2016-03-02 12:34:21', '2016-03-16 22:12:32', 'A'),
(2, 'Rails', 1, 1, '2016-03-02 12:34:22', '2016-03-16 22:12:32', 'B'),
(3, 'Politico 1', 0, 2, '2016-03-02 12:46:10', '2016-04-13 10:48:25', 'A'),
(4, 'Politico 2', 0, 2, '2016-03-02 12:46:10', '2016-04-13 10:48:25', 'B'),
(5, 'López Obrado', 1, 2, '2016-03-02 12:46:10', '2016-04-13 10:48:25', 'C'),
(6, 'Tu celular', 0, 3, '2016-03-02 12:47:09', '2016-03-03 05:45:05', 'A'),
(7, 'Tu corazón', 1, 3, '2016-03-02 12:47:09', '2016-03-03 05:45:05', 'B'),
(8, 'Tu vida', 0, 3, '2016-03-02 12:47:09', '2016-03-03 05:45:05', 'C'),
(9, '4', 1, 4, '2016-03-02 12:48:54', '2016-04-13 10:48:47', 'A'),
(10, '100', 0, 4, '2016-03-02 12:48:54', '2016-04-13 10:48:47', 'B'),
(11, '200', 0, 4, '2016-03-02 12:48:55', '2016-04-13 10:48:47', 'C'),
(12, 'Linus Tovarld', 0, 5, '2016-03-03 04:32:55', '2016-04-13 10:49:04', 'A'),
(13, 'Geek McQuenzy', 0, 5, '2016-03-03 04:32:55', '2016-04-13 10:49:04', 'B'),
(14, 'Harry Potter', 1, 5, '2016-03-03 04:32:56', '2016-04-13 10:49:04', 'C'),
(17, 'Ki Ki KI Ki', 0, 10, '2016-03-03 06:06:45', '2016-03-03 06:07:20', 'A'),
(18, 'Ow Ow Ow Ow', 1, 10, '2016-03-03 06:06:45', '2016-03-03 06:07:20', 'B'),
(19, 'Au Au Au', 0, 10, '2016-03-03 06:06:45', '2016-03-03 06:06:58', 'C'),
(20, 'Spring', 0, 1, '2016-03-03 06:17:28', '2016-03-16 22:12:32', 'C'),
(21, 'No', 0, 11, '2016-03-03 06:18:17', '2016-04-13 11:30:43', 'A'),
(22, 'Si', 1, 11, '2016-03-03 06:18:17', '2016-04-13 11:30:43', 'B'),
(23, 'Ratzonak', 0, 12, '2016-03-04 00:38:55', '2016-03-04 00:39:04', 'A'),
(24, 'Hola', 1, 12, '2016-03-04 00:38:55', '2016-03-04 00:39:04', 'B'),
(25, 'Adios', 0, 12, '2016-03-04 00:38:55', '2016-03-04 00:39:04', 'C'),
(32, 'AA', 1, 15, '2016-03-04 03:08:36', '2016-04-13 11:31:34', 'A'),
(33, 'HJ', 0, 15, '2016-03-04 03:08:36', '2016-04-13 11:31:34', 'B'),
(34, 'Scotts', 0, 15, '2016-03-04 03:08:36', '2016-04-13 11:31:34', 'C'),
(41, 'estructuradas y no estructuradas ', 1, 18, '2016-03-29 04:29:16', '2016-03-29 04:29:16', 'A'),
(42, 'transcritas y fluidas', 0, 18, '2016-03-29 04:29:16', '2016-03-29 04:29:16', 'B'),
(43, 'pequeñas y sin importancia', 0, 18, '2016-03-29 04:29:16', '2016-03-29 04:29:16', 'C'),
(44, '5', 0, 19, '2016-03-29 04:32:12', '2016-03-29 04:32:12', 'A'),
(45, '4', 1, 19, '2016-03-29 04:32:12', '2016-03-29 04:32:12', 'B'),
(46, '12', 0, 19, '2016-03-29 04:32:12', '2016-03-29 04:32:12', 'C'),
(47, 'Ciclo de la vida', 0, 20, '2016-03-29 04:34:17', '2016-03-29 04:34:17', 'A'),
(48, 'Ciclo de la muerte', 0, 20, '2016-03-29 04:34:18', '2016-03-29 04:34:18', 'B'),
(49, 'Ciclo del agua', 1, 20, '2016-03-29 04:34:18', '2016-03-29 04:34:18', 'C'),
(50, 'Carnes', 1, 21, '2016-03-29 04:35:32', '2016-03-29 04:35:32', 'A'),
(51, 'Lacteos', 0, 21, '2016-03-29 04:35:32', '2016-03-29 04:35:32', 'B'),
(52, 'Vegetales', 0, 21, '2016-03-29 04:35:32', '2016-03-29 04:35:32', 'C'),
(53, '2/10', 0, 22, '2016-03-29 04:36:59', '2016-03-29 04:36:59', 'A'),
(54, '1', 1, 22, '2016-03-29 04:36:59', '2016-03-29 04:36:59', 'B'),
(55, '9/10', 0, 22, '2016-03-29 04:36:59', '2016-03-29 04:36:59', 'C'),
(56, 'Naranja', 0, 23, '2016-03-29 04:46:02', '2016-03-29 04:46:02', 'A'),
(57, 'Platano', 1, 23, '2016-03-29 04:46:02', '2016-03-29 04:46:02', 'B'),
(58, 'Manzana', 0, 23, '2016-03-29 04:46:02', '2016-03-29 04:46:02', 'C'),
(59, '', 0, 11, '2016-04-13 11:30:43', '2016-04-13 11:30:43', 'C'),
(60, 'Si', 1, 24, '2016-04-13 20:33:31', '2016-04-13 20:33:50', 'A'),
(61, 'No', 0, 24, '2016-04-13 20:33:31', '2016-04-13 20:33:50', 'B'),
(62, '', 0, 24, '2016-04-13 20:33:50', '2016-04-13 20:33:50', 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `student_test_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `name`, `text`, `student_test_id`, `created_at`, `updated_at`, `image`) VALUES
(1, '', 'Según la Figura mostrada arriba,\r\nY siguiendo \r\n¿Cuál de todos los juegos es mejor?', 1, '2016-03-02 12:34:21', '2016-03-16 22:12:32', 'images/questions/1457507139.png'),
(2, '', '¿ Con quién estaríamos mejor? ', 1, '2016-03-02 12:46:10', '2016-03-02 12:46:10', ''),
(3, '', '¿Qué me robe de ti?', 1, '2016-03-02 12:47:09', '2016-03-02 12:47:09', ''),
(4, '', '¿2+2?', 1, '2016-03-02 12:48:54', '2016-03-02 12:48:54', ''),
(5, '', '¿Quién es el padre de Linux?', 1, '2016-03-03 04:32:55', '2016-03-03 04:32:55', ''),
(10, '', 'What does the fox say?', 1, '2016-03-03 06:06:45', '2016-03-03 06:06:45', ''),
(11, '', '¿Test?', 1, '2016-03-03 06:18:17', '2016-03-03 06:18:17', ''),
(12, '', 'Drozzz', 2, '2016-03-04 00:38:55', '2016-03-04 00:38:55', ''),
(15, '', '¿cuál es el mejor restaurante?', 1, '2016-03-04 03:08:36', '2016-04-13 11:31:34', 'images/questions/1457040359.png'),
(18, '', '¿Cómo pueden ser las entrevistas según las preguntas que se estructuran? ', 3, '2016-03-29 04:29:16', '2016-03-29 04:29:16', ''),
(19, '', '¿cuántos alumnos tienen como mascota un hamster?', 3, '2016-03-29 04:32:12', '2016-03-29 04:32:12', 'images/questions/1459204332.png'),
(20, '', '¿Cómo se llama el ciclo descrito en la imagen?', 3, '2016-03-29 04:34:17', '2016-03-29 04:34:18', 'images/questions/1459204458.png'),
(21, '', '¿Qué clase de alimentos se muestran en la figura?\r\n', 3, '2016-03-29 04:35:32', '2016-03-29 04:35:32', 'images/questions/1459204532.gif'),
(22, '', 'El resultado de la operación es:', 3, '2016-03-29 04:36:58', '2016-03-29 04:36:59', 'images/questions/1459204619.png'),
(23, '', '¿Qué fruta es la siguiente?', 3, '2016-03-29 04:46:02', '2016-03-29 04:46:02', 'images/questions/1459205162.jpg'),
(24, '', '¿es culpa de windows que falle todo?', 8, '2016-04-13 20:33:31', '2016-04-13 20:33:50', 'images/questions/1460561630.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Teacher', '2016-02-25 03:59:10', '2016-02-25 03:59:10'),
(2, 'Student', '2016-02-25 03:59:10', '2016-02-25 03:59:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student_tests`
--

CREATE TABLE IF NOT EXISTS `student_tests` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'normal',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `presentation` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `student_tests`
--

INSERT INTO `student_tests` (`id`, `name`, `type`, `created_at`, `updated_at`, `is_active`, `presentation`) VALUES
(1, 'Examen Bloque 2', 'Image', '2016-03-02 11:32:23', '2016-03-04 04:05:28', 1, ''),
(2, 'Examen Sorpresa JHajaja', 'Image', '2016-03-04 00:38:34', '2016-03-04 04:03:47', 0, ''),
(3, 'Examen Bueno', 'Image', '2016-03-29 04:20:23', '2016-04-13 10:47:18', 1, ''),
(7, 'Examen con Presentacion', 'Image', '2016-04-13 09:19:13', '2016-04-13 10:47:26', 0, 'tests/presentations/1460525778.pdf'),
(8, 'Test', 'Image', '2016-04-13 20:13:12', '2016-04-13 20:13:12', 0, 'tests/presentations/1460560392.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taken_tests`
--

CREATE TABLE IF NOT EXISTS `taken_tests` (
  `id` int(10) unsigned NOT NULL,
  `student_test_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `taken_tests`
--

INSERT INTO `taken_tests` (`id`, `student_test_id`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 1, 1, '2016-03-10 02:54:55', '2016-03-10 02:54:55'),
(9, 1, 4, '2016-03-10 10:08:16', '2016-03-10 10:08:16'),
(10, 1, 5, '2016-03-10 10:10:32', '2016-03-10 10:10:32'),
(11, 1, 6, '2016-03-10 10:12:33', '2016-03-10 10:12:33'),
(12, 1, 7, '2016-03-10 11:13:54', '2016-03-10 11:13:54'),
(13, 1, 8, '2016-03-10 11:15:28', '2016-03-10 11:15:28'),
(14, 1, 10, '2016-03-10 11:51:57', '2016-03-10 11:51:57'),
(15, 1, 11, '2016-03-10 11:53:16', '2016-03-10 11:53:16'),
(16, 1, 12, '2016-03-10 21:50:13', '2016-03-10 21:50:13'),
(17, 1, 13, '2016-03-11 03:47:16', '2016-03-11 03:47:16'),
(18, 3, 1, '2016-03-29 04:37:36', '2016-03-29 04:37:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enrollment_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `first_name`, `last_name`, `remember_token`, `enrollment_number`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'student@student.com', '$2y$10$s7mCbnuNQ2jhGHwNQeINLuSZ7kfJsOAOscuZeU9VR3fX8dF4F97Su', 'student', 'Adrian', 'Ferrara de Gouchi', 'jCitqCxhX9VD8Sf3L45PfiHWcAxUNcMpis12rs0eW1PlWQ0FZ4Rl7fVCDkXw', NULL, 2, '2016-02-25 04:02:40', '2016-03-29 02:38:43'),
(2, 'tutor@tutor.com', '$2y$10$E7ROpHQLlSWLmusXq6qUuOkHJPSsbwKYxY070Z0R1CkItry36KaSi', 'tutor', 'Jhon Doe', 'Blue White', 'TdFY2j2zkx4ghZWmpTEfCl4GzHwhiQt8jb7cDq8ldJSdCEoRoXPAphZkeK85', NULL, 1, '2016-02-25 04:02:40', '2016-03-29 02:36:22'),
(3, 'student0@student0.com', '$2y$10$yiYvPM88rlCOcVaMoOWo1u0xC/9FT6GhEpOoN94TAiq9xZ2LY4q/2', 'student0', 'Stevie', 'Grimes', '', NULL, 2, '2016-02-25 04:02:40', '2016-02-25 04:02:40'),
(4, 'student1@student1.com', '$2y$10$xNLFSd6UlitR05Up9X/7z.evHVfv52V6EVT4MF0VhSn9LuSDmtR96', 'student1', 'Tracey', 'Ullrich', '7YMrsn3GQqO9eiNkABPtscVdg9nhpdXZL7y4UMl4jmeGBtl0DgyFwPWAqglw', NULL, 2, '2016-02-25 04:02:40', '2016-03-10 10:10:19'),
(5, 'student2@student2.com', '$2y$10$4F0fXtpk7NUpDL3kUogNpew.hidMB9EGKcUWABbTb2s58wP3kJMjq', 'student2', 'Kira', 'Roberts', 'lNATQbtxR3Kr1baRH1KEef9PJMZJS0z9m6nNcxBOY86Bypt4EUrJ2GWeUYP3', NULL, 2, '2016-02-25 04:02:40', '2016-03-10 10:12:19'),
(6, 'student3@student3.com', '$2y$10$C1.ZQok5S7Yvr6jqEYYenuBUEoHmjJZXU.Y7HJvhboJLNC9cn8zXS', 'student3', 'Sabryna', 'Beahan', 'zIv1tLrDntS44JQUhDg1uFFpB6FnsYhmnf1VOZMccW8PvVfiWs2D330ulyR9', NULL, 2, '2016-02-25 04:02:41', '2016-03-10 11:14:04'),
(7, 'student4@student4.com', '$2y$10$N/AEsZ37.Gs3lFx4N6wdxe/XBXMK5NRkUWK8.RkovYD/IFdFKC9y.', 'student4', 'Mercedes', 'Rosenbaum', 'Ta4uUhdyVlUVhBpUHKDKTNG9cKfwAtV5CLbfzk1ylzKnw7hVAi8i6aiXsn8M', NULL, 2, '2016-02-25 04:02:41', '2016-03-10 11:15:11'),
(8, 'student5@student5.com', '$2y$10$.E2SVUmC.vFsq3FQXwlP/.i.NTZ3NE/f.wcga0eOpIZxLlBpvlDGy', 'student5', 'Maryjane', 'Bogan', 'TD7Azrn6e3VfDmwsc47SxdxXdq0d7uHSNOzRsoeNXFoUlaDWhXrRtQTgthJd', NULL, 2, '2016-02-25 04:02:41', '2016-03-10 11:16:03'),
(9, 'student6@student6.com', '$2y$10$mkvJxW5ZZalMtoK4vrBd3e0n4f7h8Ulh944LpB4t9OY4VOVYp3tpS', 'student6', 'Madeline', 'Abernathy', '', NULL, 2, '2016-02-25 04:02:41', '2016-02-25 04:02:41'),
(10, 'student7@student7.com', '$2y$10$JMAejjfJiQs6kTdcMhATQuvnJiIOQhM9Jl7l5j6f.01jpmB5bj17K', 'student7', 'Jayne', 'Schoen', '2DN0aikggYDQBcgONsVcVnjeYmDicBRuMTnnsiEU06FlxRi08sB8QhCAZvlm', NULL, 2, '2016-02-25 04:02:41', '2016-03-10 11:53:03'),
(11, 'student8@student8.com', '$2y$10$FtDHW.kn1Ah1Bi3uRTKK4.Ksd7Dy5/8pQhAGCPeGwKVQmc7SSpc9S', 'student8', 'Kyleigh', 'Parisian', '', NULL, 2, '2016-02-25 04:02:41', '2016-02-25 04:02:41'),
(12, 'student9@student9.com', '$2y$10$wg3lR5uYLcPhSGL1536dtOUwTYYXF2bQy0tluWC1iSVBJc1KENxDO', 'student9', 'Marian', 'Aufderhar', '48VIyjFMBhqFDEhpGfKOsh8hre91wiTNKNVClTLmkVqVqoaehHII9CmKmiTf', NULL, 2, '2016-02-25 04:02:41', '2016-03-10 22:15:07'),
(13, 'student10@student10.com', '$2y$10$pfd/E2IGVfeltZrrKGEmP./LzRGx0ezs69PBcEl26sgzPW0uNsI/u', 'student10', 'Steve', 'Schumm', 'FSWDrttilJdoC6P82UultsgYLFfLkHXNMOko7Mx8B2Tpj2jy7g2uO2h4rVDt', NULL, 2, '2016-02-25 04:02:41', '2016-03-11 03:48:24'),
(14, 'student11@student11.com', '$2y$10$D8SzbSVc5MKc8wWKIMTEc.iNB6Dm5sH/2UlxluyIgjj4THQ9H27qm', 'student11', 'Winona', 'Yost', '', NULL, 2, '2016-02-25 04:02:42', '2016-02-25 04:02:42'),
(15, 'student12@student12.com', '$2y$10$R6SnEVDqgOIUrxg.iqVtweaRfgqgxSrAAsjTlk3gaJvzchkGpgP7e', 'student12', 'Randall', 'Sanford', '', NULL, 2, '2016-02-25 04:02:42', '2016-02-25 04:02:42'),
(16, 'student13@student13.com', '$2y$10$TcW0OOgvY9X.YZJrnnurre28Pv90eqD9R.D4MchITB3uckfeNKNmW', 'student13', 'Kurt', 'Mohr', '', NULL, 2, '2016-02-25 04:02:42', '2016-02-25 04:02:42'),
(17, 'student14@student14.com', '$2y$10$53hncJAW5oyz8H/oHlYih.oqV/Yl8sYIwzkggN6EuRiVbcNaTTk7C', 'student14', 'Miguel', 'Lakin', '', NULL, 2, '2016-02-25 04:02:42', '2016-02-25 04:02:42'),
(18, 'student15@student15.com', '$2y$10$ucoN1fbLEwShTDEauWLNnudARR9qtOtEOn9hjQz1OmD8T3z0R6Or6', 'student15', 'Martin', 'Kassulke', '', NULL, 2, '2016-02-25 04:02:42', '2016-02-25 04:02:42'),
(19, 'student16@student16.com', '$2y$10$uNIljyai0ivo0FBqxkuyYevH7d4AGfu1yeNgeTwJIanaFuzF2afIe', 'student16', 'Earnestine', 'Block', '', NULL, 2, '2016-02-25 04:02:42', '2016-02-25 04:02:42'),
(20, 'student17@student17.com', '$2y$10$gxAjdFBmUK9QQu6qY8f73OKq67wFfcSImw450qXTE9cx46nfI5MZi', 'student17', 'Einar', 'Murray', '', NULL, 2, '2016-02-25 04:02:42', '2016-02-25 04:02:42'),
(21, 'student18@student18.com', '$2y$10$m3zrEtaae/KqTEg6EuAiEOESNaajLz4lQq3HE6PBVV43GFX7ITCAa', 'student18', 'Jessie', 'Lemke', '', NULL, 2, '2016-02-25 04:02:42', '2016-02-25 04:02:42'),
(22, 'student19@student19.com', '$2y$10$IWgmBeI3x27.KuBKTY3gz..KRX5WHeW7CWiMfiDikVLYn9OaQkdcy', 'student19', 'Kaitlin', 'Labadie', '', NULL, 2, '2016-02-25 04:02:43', '2016-02-25 04:02:43'),
(23, 'student20@student20.com', '$2y$10$5VDEDUaG/GhcPahmKeBd1e3GapIw2DnU3HhcqqXkBASvV3ZppgSDG', 'student20', 'Webster', 'Kihn', '', NULL, 2, '2016-02-25 04:02:43', '2016-02-25 04:02:43'),
(24, 'student21@student21.com', '$2y$10$55ShU2j4Oh.L2TemF3yNDu09cqhc20v7i0YY.dPEJNaKICz94YlPK', 'student21', 'Giovanni', 'Kerluke', '', NULL, 2, '2016-02-25 04:02:43', '2016-02-25 04:02:43'),
(25, 'student22@student22.com', '$2y$10$fM4GMAwGK.fVgfAp4vjcm.sbAmWSULRqTEXzzgHqH65v7Fl7IRV1m', 'student22', 'Coleman', 'Kuvalis', '', NULL, 2, '2016-02-25 04:02:43', '2016-02-25 04:02:43'),
(26, 'student23@student23.com', '$2y$10$Kj3pTe5Dzn3T3PvCi91B8uBQw74vWif30e1pcgTXvukDQHqzc96c6', 'student23', 'Simone', 'Hayes', '', NULL, 2, '2016-02-25 04:02:43', '2016-02-25 04:02:43'),
(27, 'student24@student24.com', '$2y$10$VNe/U4RG8HVOz6eH6xVupeXZidsvmqd.77zP.nW56JHfiI1xWoroW', 'student24', 'Branson', 'D''Amore', '', NULL, 2, '2016-02-25 04:02:43', '2016-02-25 04:02:43'),
(28, 'student25@student25.com', '$2y$10$6a/NBDMeQrZWY82wjH/zn..6KtH8uMvFo4TQSV90Fc7jk0caXR15.', 'student25', 'Ella', 'Johnson', '', NULL, 2, '2016-02-25 04:02:43', '2016-02-25 04:02:43'),
(29, 'student26@student26.com', '$2y$10$OijJrEI/L8ZmqIaHhPNYfeTKaBSbKa4PcoVvaV8f6nJ7Fc1g46Z.2', 'student26', 'Gideon', 'Homenick', '', NULL, 2, '2016-02-25 04:02:43', '2016-02-25 04:02:43'),
(30, 'student27@student27.com', '$2y$10$Ai28R0LvXIPFKvju6CtHSeuG42VV5j/X4SGCaNqMt5byZRdmwVooK', 'student27', 'Layla', 'Ortiz', '', NULL, 2, '2016-02-25 04:02:44', '2016-02-25 04:02:44'),
(31, 'student28@student28.com', '$2y$10$th7vvay9K/3Nv8SOcfBtL.ZXyv1FPNpjei5zHv63uH98.l7Fjng/e', 'student28', 'Kayla', 'Stiedemann', '', NULL, 2, '2016-02-25 04:02:44', '2016-02-25 04:02:44'),
(32, 'student29@student29.com', '$2y$10$PW0ukU01lIQT1/9UcR9e.ufhKacNgmA9FN2/s/IGTBqxaUJgfsbCG', 'student29', 'Winfield', 'Schamberger', '', NULL, 2, '2016-02-25 04:02:44', '2016-02-25 04:02:44'),
(33, 'student30@student30.com', '$2y$10$FQNOlWHVTvUh0tfo0HnPAO4b0h75USn8KIQwdwa5/ymfiWHQkiOma', 'student30', 'Bertram', 'Blanda', '', NULL, 2, '2016-02-25 04:02:44', '2016-02-25 04:02:44'),
(34, 'student31@student31.com', '$2y$10$SmAQqMIYJkb.I/S11fIpqexgzMJCA5SeksxarWtXuYpSvChgH4u3W', 'student31', 'Zachariah', 'Hamill', '', NULL, 2, '2016-02-25 04:02:44', '2016-02-25 04:02:44'),
(35, 'student32@student32.com', '$2y$10$wE3e.GnK01tqYvzutm0E7Oo6orJFQoojdHjAowdC1XkiITXL5oUmC', 'student32', 'Norene', 'Nolan', '', NULL, 2, '2016-02-25 04:02:44', '2016-02-25 04:02:44'),
(36, 'student33@student33.com', '$2y$10$tAPiFv934u.bZxwXSgoDg.ZGMbEurrmpWqJlKtjI.qR8bY.2ejjL.', 'student33', 'Earnest', 'Ankunding', '', NULL, 2, '2016-02-25 04:02:44', '2016-02-25 04:02:44'),
(37, 'student34@student34.com', '$2y$10$IU2IA0gsusfwhejeLvvfXOk9260kW7zriHtrY4jS.azDO5mEqMGbu', 'student34', 'Paris', 'Hahn', '', NULL, 2, '2016-02-25 04:02:44', '2016-02-25 04:02:44'),
(38, 'student35@student35.com', '$2y$10$N65wGQN6EEZmaAgBuWS/FOnS5.t.P1AX64GtBLn5fKIwe8yPN1JNS', 'student35', 'Chelsie', 'Keeling', '', NULL, 2, '2016-02-25 04:02:45', '2016-02-25 04:02:45'),
(39, 'student36@student36.com', '$2y$10$XR6RWP7Gh2iRRAy2OaZhreQOWlIiC6cHGD24NjdvO2Q3ufcJn8sbC', 'student36', 'Giovanni', 'Shields', '', NULL, 2, '2016-02-25 04:02:45', '2016-02-25 04:02:45'),
(40, 'student37@student37.com', '$2y$10$.DrxC5vlacq.7/YP8QDC3.mXhugamNmUN8m1E/vPB/XDKTSt/b0HC', 'student37', 'Bessie', 'Farrell', '', NULL, 2, '2016-02-25 04:02:45', '2016-02-25 04:02:45'),
(41, 'student38@student38.com', '$2y$10$XG2DdUZi1pbEjFiKYgMJc.l7fDRGtMCvbn.brQ/eZCXwCdy8ZT2wu', 'student38', 'Velda', 'Hagenes', '', NULL, 2, '2016-02-25 04:02:45', '2016-02-25 04:02:45'),
(42, 'student39@student39.com', '$2y$10$BV3beJj/HANQtml4n9NcAeQloz6B3eGpODf859A3DMIWWNnh6UTU.', 'student39', 'Ben', 'Gislason', '', NULL, 2, '2016-02-25 04:02:45', '2016-02-25 04:02:45'),
(43, 'student40@student40.com', '$2y$10$2u9RdBZAMoGe1TpSNdwcCOTpb60xnuygBabK6b5xFSVswlAVF.1Qq', 'student40', 'Lucas', 'Crist', '', NULL, 2, '2016-02-25 04:02:45', '2016-02-25 04:02:45'),
(44, 'student41@student41.com', '$2y$10$tae3569HiJ6ECSflF2v9te2Nb4yXlRUQm5Qt91.jpX08eF0ptuZXa', 'student41', 'Adolph', 'Kuvalis', '', NULL, 2, '2016-02-25 04:02:45', '2016-02-25 04:02:45'),
(45, 'student42@student42.com', '$2y$10$AeO0FIycitxBCNCv4WiTCuKMP3jDqMdy6YzcNf9z6XNYNg8Qg1jg6', 'student42', 'Sophia', 'Schiller', '', NULL, 2, '2016-02-25 04:02:46', '2016-02-25 04:02:46'),
(46, 'student43@student43.com', '$2y$10$T2dT//nt71ZJXYybjq7.0OFe7sieWeCWdMDmIhzNp9mKXgzf8ik6e', 'student43', 'Heath', 'Hammes', '', NULL, 2, '2016-02-25 04:02:46', '2016-02-25 04:02:46'),
(47, 'student44@student44.com', '$2y$10$gkaeKcjquRoJo47w240jju7alhZbWfL8pgUR6A8z7d.G8fZ1YDRGO', 'student44', 'Isaiah', 'Crona', '', NULL, 2, '2016-02-25 04:02:46', '2016-02-25 04:02:46'),
(48, 'student45@student45.com', '$2y$10$sSs2NZqIvI6kCB4nLtJGb.52klK7v2Gcm9IWMSQ.lF42Ecu9lmTcK', 'student45', 'Yasmeen', 'O''Hara', '', NULL, 2, '2016-02-25 04:02:46', '2016-02-25 04:02:46'),
(49, 'student46@student46.com', '$2y$10$8wOgfYVOpSDXMEcZ.9D.2OjnU7ZzGiaf92pW7Y7mV2fZt.TzTaD2.', 'student46', 'Casper', 'Goldner', '', NULL, 2, '2016-02-25 04:02:46', '2016-02-25 04:02:46'),
(50, 'student47@student47.com', '$2y$10$OOoSkcDqG2QHiqvn0ZWqe.tyXJQsFn8NO5lwnFJz2hJzBabFuWWvm', 'student47', 'Reta', 'Ankunding', '', NULL, 2, '2016-02-25 04:02:46', '2016-02-25 04:02:46'),
(51, 'student48@student48.com', '$2y$10$nGIg6vpAw12iTC1SHM0WLOrQVi7Irjv5n44x6g1ppxaCJCorHGeNW', 'student48', 'Zoie', 'Ryan', '', NULL, 2, '2016-02-25 04:02:46', '2016-02-25 04:02:46'),
(52, 'student49@student49.com', '$2y$10$er6xtQtTRS./T14e3nxRE.BteH1KD0W7X.E0dwHhJ8r743lbIpmC2', 'student49', 'Flo', 'Stracke', '', NULL, 2, '2016-02-25 04:02:46', '2016-02-25 04:02:46'),
(53, 'student50@student50.com', '$2y$10$mrj5PQIty38YE7uHDufmlOCgWRC9zWRouiGM/8GfzAo4NemPpKt4.', 'student50', 'Laurianne', 'Keebler', '', NULL, 2, '2016-02-25 04:02:47', '2016-02-25 04:02:47'),
(54, 'student51@student51.com', '$2y$10$JdDKibArPkt/9RNljRzsCOFVClNmY7n1URvO2P7xgQ2zL9P7dDPzG', 'student51', 'Blair', 'Jacobi', '', NULL, 2, '2016-02-25 04:02:47', '2016-02-25 04:02:47'),
(55, 'student52@student52.com', '$2y$10$3UN70kZN.aaX1LpEiIGRT.8R1EWaRu7EMrjeQJPgL3uWnC0oooBUy', 'student52', 'Joannie', 'Collier', '', NULL, 2, '2016-02-25 04:02:47', '2016-02-25 04:02:47'),
(56, 'student53@student53.com', '$2y$10$JC.bHmLgcAbkdF8gXL6Tye1k5SFdPciZGHarNX7odfAnBZgo2QnUG', 'student53', 'Clay', 'Wilderman', '', NULL, 2, '2016-02-25 04:02:47', '2016-02-25 04:02:47'),
(57, 'student54@student54.com', '$2y$10$H6rTsTIN49FzoyXWYxruLuBtHl2YuAhyLApmiuE40xUNR0EvAPk3y', 'student54', 'Hans', 'Langosh', '', NULL, 2, '2016-02-25 04:02:47', '2016-02-25 04:02:47'),
(58, 'student55@student55.com', '$2y$10$waGNg0y9X4NCroBkFIs2Hu1uPeYwqpkB.SfeTUbdirwGSY9Ez92m6', 'student55', 'Rahul', 'Klocko', '', NULL, 2, '2016-02-25 04:02:47', '2016-02-25 04:02:47'),
(59, 'student56@student56.com', '$2y$10$w33vKlBxw2/qG9/eGCVha.kOYlwXQvUD4wca6u1oMmRgl95kxxFwy', 'student56', 'Dustin', 'Hahn', '', NULL, 2, '2016-02-25 04:02:48', '2016-02-25 04:02:48'),
(60, 'student57@student57.com', '$2y$10$lCxmATXERb/AqXRWn9bdEO2z.StKJEwh7aatJqhIzlZs0nZ.KBMCC', 'student57', 'Vivien', 'Grady', '', NULL, 2, '2016-02-25 04:02:48', '2016-02-25 04:02:48'),
(61, 'student58@student58.com', '$2y$10$R0vyT83jGEI7FdS6I6Dmv.SZ1GC6ZhNUSEpxi9EmjNaIYULHCLLga', 'student58', 'Tiara', 'O''Kon', '', NULL, 2, '2016-02-25 04:02:48', '2016-02-25 04:02:48'),
(62, 'student59@student59.com', '$2y$10$dKzXtZ.FXXj/Ua8rggKQie7/jNhyOcNSRECHm.5m5GzBlOWLSCKSS', 'student59', 'Kennedi', 'Jaskolski', '', NULL, 2, '2016-02-25 04:02:48', '2016-02-25 04:02:48'),
(63, 'student60@student60.com', '$2y$10$7OArT4KMzXKk7LonDawSH.22JdOXXtK/B8VTOLSi0xnEm9KGxIum.', 'student60', 'Eusebio', 'Mitchell', '', NULL, 2, '2016-02-25 04:02:48', '2016-02-25 04:02:48'),
(64, 'student61@student61.com', '$2y$10$K7bnL3/PgyHY4NHFBFY0ZunaoIRVD9OBe.INKD2iD7OxGhhdt/J2G', 'student61', 'Jerrod', 'Nolan', '', NULL, 2, '2016-02-25 04:02:48', '2016-02-25 04:02:48'),
(65, 'student62@student62.com', '$2y$10$fDfNMlxJQyxOMpTc1kgxA.14aNNVDvXuYDEGjvP/4HD8dL5ByUEtG', 'student62', 'Bill', 'White', '', NULL, 2, '2016-02-25 04:02:48', '2016-02-25 04:02:48'),
(66, 'student63@student63.com', '$2y$10$7E6I.koFTPZLzqcjwLro/.SyaazChu/ANVEmjJF34IN.HWMT8ymvm', 'student63', 'Maegan', 'Rolfson', '', NULL, 2, '2016-02-25 04:02:48', '2016-02-25 04:02:48'),
(67, 'student64@student64.com', '$2y$10$DjgsFqcQDUa20zO0x/4cM.9miq/UXoyceEiL7dtxqrxT0SJsBK4ka', 'student64', 'Hadley', 'Koss', '', NULL, 2, '2016-02-25 04:02:49', '2016-02-25 04:02:49'),
(68, 'student65@student65.com', '$2y$10$v2zmklL7usiIdwehpc5t3OqjHNCXbdg2fZwEgTG2juhnUwuPlHsqO', 'student65', 'Nickolas', 'Oberbrunner', '', NULL, 2, '2016-02-25 04:02:49', '2016-02-25 04:02:49'),
(69, 'student66@student66.com', '$2y$10$LJxl8meMDS6bgWjIFPC4BenY2UuXXut1P1FRuGlJptJOtQPesqNhi', 'student66', 'Adah', 'Rutherford', '', NULL, 2, '2016-02-25 04:02:49', '2016-02-25 04:02:49'),
(70, 'student67@student67.com', '$2y$10$NI7eNbmHkB9UgNFM7pl/5.7hgVlB8UTqDudT4.3A1fPUHHNmUUhy6', 'student67', 'Declan', 'Brown', '', NULL, 2, '2016-02-25 04:02:49', '2016-02-25 04:02:49'),
(71, 'student68@student68.com', '$2y$10$CnW7k7wCRoZV71QVYBZSG.fEyaUg/PffhtRSXjEc178.upYKX0K7.', 'student68', 'Syble', 'Nienow', '', NULL, 2, '2016-02-25 04:02:49', '2016-02-25 04:02:49'),
(72, 'student69@student69.com', '$2y$10$XvBSceG/IvwAwcJKy.6IkuoiqsNAEgiGESlaRbuHYQqcinJALXPhG', 'student69', 'Columbus', 'Reinger', '', NULL, 2, '2016-02-25 04:02:49', '2016-02-25 04:02:49'),
(73, 'student70@student70.com', '$2y$10$2x.5vh6bbKcpMoCLiA7DReG268p7EWKGWYro3uKlK8gRfZyJgwMaC', 'student70', 'Eladio', 'Reichel', '', NULL, 2, '2016-02-25 04:02:49', '2016-02-25 04:02:49'),
(74, 'student71@student71.com', '$2y$10$BzjIfcDFlVIHw0bGqSg7Iu8p8gxc4HMFZ8n.zZ8iEB5mZlhdOMTsq', 'student71', 'Elmo', 'Mueller', '', NULL, 2, '2016-02-25 04:02:49', '2016-02-25 04:02:49'),
(75, 'student72@student72.com', '$2y$10$OtoUMooS7gCbzBuJ5pl4CeKVjKzGsY..tSQR4icoF.zeYluUsNcqG', 'student72', 'Ernest', 'Streich', '', NULL, 2, '2016-02-25 04:02:49', '2016-02-25 04:02:49'),
(76, 'student73@student73.com', '$2y$10$cKJYYshDqLHDjthyNLRkaOT9KnKo6MHBNCX5l5gV3a5yBlXg25Ny.', 'student73', 'Laney', 'Mann', '', NULL, 2, '2016-02-25 04:02:50', '2016-02-25 04:02:50'),
(77, 'student74@student74.com', '$2y$10$nbg2HDNzUDGkjGQw4jJxCenJzj6n2k3ldYIoL0sbOhJ1ClIaXXn5u', 'student74', 'Alexys', 'Kuhic', '', NULL, 2, '2016-02-25 04:02:50', '2016-02-25 04:02:50'),
(78, 'student75@student75.com', '$2y$10$CavL86/r.Dp3bMAj9zwwUejqlmTqDZFw63vH2fJmjtJFo8W21uLpO', 'student75', 'Kelley', 'McKenzie', '', NULL, 2, '2016-02-25 04:02:50', '2016-02-25 04:02:50'),
(79, 'student76@student76.com', '$2y$10$h2Xsik.GdiDo09WjwaYxlOkJsDfyQ3DBUGYhFJ/GPCyJmMOs.ytwu', 'student76', 'Gia', 'Maggio', '', NULL, 2, '2016-02-25 04:02:50', '2016-02-25 04:02:50'),
(80, 'student77@student77.com', '$2y$10$60WoUEB2EGk7J4nqa0alduT8IabEM8uhkz.JHE9vimoeEw/9pt34m', 'student77', 'Cole', 'Lemke', '', NULL, 2, '2016-02-25 04:02:50', '2016-02-25 04:02:50'),
(81, 'student78@student78.com', '$2y$10$lBAPl17ilqC5zUQbYuQMH.HGEfYNWMa8p5rHIkoJDoHq/sxRZcIJK', 'student78', 'Lorena', 'Beer', '', NULL, 2, '2016-02-25 04:02:50', '2016-02-25 04:02:50'),
(82, 'student79@student79.com', '$2y$10$bZBbHgrH3j8crebIzjZ2LewCJQyrWtwAZ8G60Hjv.YdMLmM.krIB.', 'student79', 'Coty', 'Grant', '', NULL, 2, '2016-02-25 04:02:50', '2016-02-25 04:02:50'),
(83, 'student80@student80.com', '$2y$10$LVYH7tqGGA7W3UlwZfRDsum9OqtVpNVlZdY4eu/w2IGJrS70xaB/G', 'student80', 'Molly', 'Baumbach', '', NULL, 2, '2016-02-25 04:02:50', '2016-02-25 04:02:50'),
(84, 'student81@student81.com', '$2y$10$ynlk2SPEhRY63Gz1qF/65.MEjRmC54l9dfwBLBRrt5Q9gw.6TGJrC', 'student81', 'Luella', 'O''Hara', '', NULL, 2, '2016-02-25 04:02:51', '2016-02-25 04:02:51'),
(85, 'student82@student82.com', '$2y$10$VHInwKNV.xxxpnU3.hVoNe.wZNIxPCLMw7tWs/ny0GYE.3zP8dxES', 'student82', 'Ova', 'Senger', '', NULL, 2, '2016-02-25 04:02:51', '2016-02-25 04:02:51'),
(86, 'student83@student83.com', '$2y$10$FPEmyrbitXCgXWeKTV2bEeRPMxh5R7qZ/n7j3csnQWwatZoFNcgUW', 'student83', 'Joanie', 'Morar', '', NULL, 2, '2016-02-25 04:02:51', '2016-02-25 04:02:51'),
(87, 'student84@student84.com', '$2y$10$QNkS0jBYSGEnGTdR2FYa.uQY0aWEbbuUTwzuIvFlpoGnS9xO3pSi2', 'student84', 'Kathleen', 'Leannon', '', NULL, 2, '2016-02-25 04:02:51', '2016-02-25 04:02:51'),
(88, 'student85@student85.com', '$2y$10$jJDyWIFw0/I1TqP1IrsWQO3PGZYipP1Lu9y2mtBg7JUD.eVNub5fC', 'student85', 'Cathrine', 'King', '', NULL, 2, '2016-02-25 04:02:51', '2016-02-25 04:02:51'),
(89, 'student86@student86.com', '$2y$10$m9376SSA5MGQN7x8V/vKK.wrwM95mQM.g1WvI0FCtw4I.L1mDJOwO', 'student86', 'Amanda', 'Waters', '', NULL, 2, '2016-02-25 04:02:51', '2016-02-25 04:02:51'),
(90, 'student87@student87.com', '$2y$10$HlroywJM4c3E.HrtNO3KFOzNqgOcQ4YJtzfSV0ms3AxZeK9wDqsIK', 'student87', 'Garry', 'Haag', '', NULL, 2, '2016-02-25 04:02:51', '2016-02-25 04:02:51'),
(91, 'student88@student88.com', '$2y$10$9f35fPE9aBj8JX9GtjK5oOdc1wXd5QDoBQFlpzW.nkCkbjxQiXrR6', 'student88', 'Chasity', 'Auer', '', NULL, 2, '2016-02-25 04:02:51', '2016-02-25 04:02:51'),
(92, 'student89@student89.com', '$2y$10$HHjD2EuIhTtA6v5hn1VdV.a2fe4tUI7wSUPhySOaLKyEnJfBAmpXK', 'student89', 'Juanita', 'Keeling', '', NULL, 2, '2016-02-25 04:02:52', '2016-02-25 04:02:52'),
(93, 'student90@student90.com', '$2y$10$Ut5dutlmg0Kavo.Yq0C7.OASmcJSsaAc4rw64x0OitBGtlLM65J0m', 'student90', 'Eloise', 'Grimes', '', NULL, 2, '2016-02-25 04:02:52', '2016-02-25 04:02:52'),
(94, 'student91@student91.com', '$2y$10$aACa/tAFvBCUeXD0KCY0E.I5v2QUWmn2TapxFxP67qgde/rtDNIX6', 'student91', 'Dakota', 'Dickinson', '', NULL, 2, '2016-02-25 04:02:52', '2016-02-25 04:02:52'),
(95, 'student92@student92.com', '$2y$10$nCs/4CWbGp/50cb3kzxYzeWK4uncHV7OaFnrEDuOCVyMFSjyw2b6G', 'student92', 'Johathan', 'Hegmann', '', NULL, 2, '2016-02-25 04:02:52', '2016-02-25 04:02:52'),
(96, 'student93@student93.com', '$2y$10$zHi4Z8oARpQn4xKEbFkuuelirCCo4tJMZZPrr66SOIzGoA0KtBlRK', 'student93', 'Madelynn', 'Feil', '', NULL, 2, '2016-02-25 04:02:52', '2016-02-25 04:02:52'),
(97, 'student94@student94.com', '$2y$10$nPIKS5dzbA2FRY3HLdUif.uSE4z5GqEMwUhLRtE9./bKQI8.zvdEC', 'student94', 'Caterina', 'Kozey', '', NULL, 2, '2016-02-25 04:02:52', '2016-02-25 04:02:52'),
(98, 'student95@student95.com', '$2y$10$/mMnjocA8mlG9ot9cwac1uvrW5dyfu58eXctPZNrZH/O3t/rKcpFu', 'student95', 'Adele', 'Parker', '', NULL, 2, '2016-02-25 04:02:52', '2016-02-25 04:02:52'),
(99, 'student96@student96.com', '$2y$10$ibLuCm/wX4Vk1z98tODpSum3oYRW.YlvlFQKgFS4F03yLwfkNTk8q', 'student96', 'Tyree', 'Hansen', '', NULL, 2, '2016-02-25 04:02:53', '2016-02-25 04:02:53'),
(100, 'student97@student97.com', '$2y$10$S.sj5od/TJjfb5GnN8ztZe7LOeWpo7pNn3mFDr9vrDThluRFPOO32', 'student97', 'Paula', 'Wilkinson', '', NULL, 2, '2016-02-25 04:02:53', '2016-02-25 04:02:53'),
(101, 'student98@student98.com', '$2y$10$aBNxjPBCdxL6T9BWHI3xb.leC3QTPNc3fkVxE6fol0S3a8aG9trOq', 'student98', 'Adah', 'Mayer', '', NULL, 2, '2016-02-25 04:02:53', '2016-02-25 04:02:53'),
(102, 'student99@student99.com', '$2y$10$fFcvf/stxaLq9PICMjiI..nIHsR.o8ewZfBO4pxwBai7Q3.Zzg6.i', 'student99', 'Shanel', 'Crona', '', NULL, 2, '2016-02-25 04:02:53', '2016-02-25 04:02:53'),
(103, 'Colorado@gmail.com', 'password', 'colorado', 'Colorado', 'Colorado', '', '537252345', 2, '2016-04-13 20:12:11', '2016-04-13 20:12:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_taken_test_id_foreign` (`taken_test_id`),
  ADD KEY `answers_option_id_foreign` (`option_id`),
  ADD KEY `answers_question_id_foreign` (`question_id`);

--
-- Indices de la tabla `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_question_id_foreign` (`question_id`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_student_test_id_foreign` (`student_test_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `student_tests`
--
ALTER TABLE `student_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `taken_tests`
--
ALTER TABLE `taken_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taken_tests_student_test_id_foreign` (`student_test_id`),
  ADD KEY `taken_tests_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT de la tabla `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `student_tests`
--
ALTER TABLE `student_tests`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `taken_tests`
--
ALTER TABLE `taken_tests`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`),
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_taken_test_id_foreign` FOREIGN KEY (`taken_test_id`) REFERENCES `taken_tests` (`id`);

--
-- Filtros para la tabla `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_student_test_id_foreign` FOREIGN KEY (`student_test_id`) REFERENCES `student_tests` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `taken_tests`
--
ALTER TABLE `taken_tests`
  ADD CONSTRAINT `taken_tests_student_test_id_foreign` FOREIGN KEY (`student_test_id`) REFERENCES `student_tests` (`id`),
  ADD CONSTRAINT `taken_tests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
