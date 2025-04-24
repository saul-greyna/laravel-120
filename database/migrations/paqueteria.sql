-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2025 at 04:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paqueteria`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `camioneros`
--

CREATE TABLE `camioneros` (
  `id_camionero` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `salario` decimal(10,2) DEFAULT NULL,
  `licencia` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `camioneros`
--

INSERT INTO `camioneros` (`id_camionero`, `nombre`, `apellidos`, `direccion`, `salario`, `licencia`, `created_at`, `updated_at`) VALUES
(22, 'Lola', 'Truck driver', 'Jerez De La Luz 430', 300000.00, 'Clase B', '2025-04-22 18:47:37', '2025-04-22 18:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `camiones`
--

CREATE TABLE `camiones` (
  `num_camion` bigint(20) UNSIGNED NOT NULL,
  `placas` varchar(20) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `id_camionero` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `camiones`
--

INSERT INTO `camiones` (`num_camion`, `placas`, `tipo`, `id_camionero`, `created_at`, `updated_at`) VALUES
(8, 'LMN-123', 'Remolque', NULL, '2025-04-09 11:31:48', '2025-04-16 23:36:01'),
(16, 'LMN-560', 'Remolque', 22, '2025-04-17 02:34:34', '2025-04-22 18:51:52'),
(28, 'LMN-389', 'Remolque', NULL, '2025-04-17 03:18:42', '2025-04-17 03:18:42'),
(29, 'GHK-2332', 'Carga', NULL, '2025-04-22 18:48:36', '2025-04-22 18:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `lugares`
--

CREATE TABLE `lugares` (
  `id_lugar` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lugares`
--

INSERT INTO `lugares` (`id_lugar`, `nombre`, `direccion`, `cp`, `created_at`, `updated_at`) VALUES
(1, 'Almacén Central', 'Calle universidad #123', '37000', '2025-04-09 09:54:20', '2025-04-22 18:18:49'),
(2, 'Sucursal Norte', 'Av. Reforma 200', '12800', '2025-04-09 09:54:20', '2025-04-22 18:54:26'),
(4, 'Almacen Monterrey', 'Calle Reforma #198', '66120', '2025-04-22 08:06:10', '2025-04-22 08:06:10'),
(5, 'Sucursal Nayarit', 'Calle Guerrero #321', '63157', '2025-04-22 08:06:56', '2025-04-22 08:06:56'),
(6, 'Almacén Central Cuernavaca', 'Blvd. Emiliano Zapata #150', '62130', '2025-04-22 08:08:03', '2025-04-22 08:08:03'),
(7, 'Oaxaca', 'calle 23', '71502', '2025-04-22 18:54:08', '2025-04-22 18:54:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2025_04_02_173909_create_camioneros', 1),
(3, '2025_04_02_174504_create_camiones', 1),
(4, '2025_04_02_174552_create_lugares', 1),
(5, '2025_04_02_174626_create_paquetes', 1),
(6, '2025_04_02_174903_create_usuarios', 1),
(7, '2025_04_03_111539_create_sessions_table', 1),
(8, '2025_04_08_051801_create_users_table', 1),
(9, '2025_04_09_193658_create_cache_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `paquetes`
--

CREATE TABLE `paquetes` (
  `id_paq` bigint(20) UNSIGNED NOT NULL,
  `descripcion` text DEFAULT NULL,
  `remitente` varchar(100) NOT NULL,
  `id_camionero` bigint(20) UNSIGNED DEFAULT NULL,
  `id_lugar_destino` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paquetes`
--

INSERT INTO `paquetes` (`id_paq`, `descripcion`, `remitente`, `id_camionero`, `id_lugar_destino`, `created_at`, `updated_at`) VALUES
(18, 'Electrodomésticos', 'Juan Pérez', 22, 7, '2025-04-09 10:35:01', '2025-04-22 18:57:00'),
(19, 'Ropa y accesorios', 'Luisa Rodríguez', NULL, 2, '2025-04-09 10:35:01', '2025-04-16 23:46:21'),
(20, 'Libros y revistas', 'Carlos Gómez', NULL, 1, '2025-04-09 10:35:01', '2025-04-09 10:35:01'),
(21, 'Comida no perecedera', 'Ana Martínez', NULL, 2, '2025-04-09 10:35:01', '2025-04-09 10:35:01'),
(26, 'Autos', 'Luisa Rodríguez', NULL, 2, '2025-04-17 02:46:43', '2025-04-17 02:46:43'),
(27, 'Mochila', 'Luisa Rodríguez', 22, 7, '2025-04-22 18:58:37', '2025-04-22 18:58:37'),
(28, 'Tenis', 'Juan Pérez', 22, 1, '2025-04-22 19:05:18', '2025-04-22 19:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('FPKdcIh8Fcnwj5Pkrvv97YFa322UikxIMH9Vrt9D', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaDBzQ0JGd0NkSTg3YlcwdUlNQnNZb1VCQTlHTXZwWXZDMUpaQzh3RCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1745344602),
('TYMrXnE5TTiQhBC7S5DL3R4qr7MCIl0rlQ9hMAso', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkJwZVhTV3FGR1JId0hiQjRvT3M3S2RmZkpjSkM2OE9wNGR1eHEyWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1745344601),
('TyOGga13bNUgb8NrSiEZ53WiQKYTYcmbEhoRiE5j', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieUF4S25jOWZSTmJZcHhDY1ZsZjlYZ2dHQ09Kd09DWWkzR0JQY0R5biI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb25zdWx0YXMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTc0NTM0ODQ4Mjt9fQ==', 1745348739),
('zx3rotyKhPPZUWzajiiEbBgMZyOX5riF8ZpAsnLB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoianVXVmc1d2pDNkw5VVVOTmJJTFo3Q3lhN0E2T0RCNmRicENKcjJWZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1745344602);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Angel Saul Reyna Guerra', 'saulreynag.07@gmail.com', NULL, '$2y$12$wkS03Mzi51iRy4XWv45fP./ypDzbGUD629aQWbjoxOkL6x3n71FaK', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `perfil` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`, `perfil`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Juan Pérez Martinez', 'juan.perez@example.com', '123456', 'Usuario', 'images/juan.jpg', '2025-04-09 10:47:32', '2025-04-22 18:56:05'),
(5, 'Anahi', 'antorres@utleon.edu.mx', '123456789', 'Administrador', 'images/julia.jpg', '2025-04-22 18:55:47', '2025-04-22 18:55:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `camioneros`
--
ALTER TABLE `camioneros`
  ADD PRIMARY KEY (`id_camionero`),
  ADD UNIQUE KEY `camioneros_licencia_unique` (`licencia`);

--
-- Indexes for table `camiones`
--
ALTER TABLE `camiones`
  ADD PRIMARY KEY (`num_camion`),
  ADD UNIQUE KEY `camiones_placas_unique` (`placas`),
  ADD UNIQUE KEY `camiones_id_camionero_unique` (`id_camionero`);

--
-- Indexes for table `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id_lugar`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`id_paq`),
  ADD KEY `paquetes_id_camionero_foreign` (`id_camionero`),
  ADD KEY `paquetes_id_lugar_destino_foreign` (`id_lugar_destino`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuarios_correo_unique` (`correo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camioneros`
--
ALTER TABLE `camioneros`
  MODIFY `id_camionero` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `camiones`
--
ALTER TABLE `camiones`
  MODIFY `num_camion` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id_lugar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `id_paq` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `camiones`
--
ALTER TABLE `camiones`
  ADD CONSTRAINT `camiones_id_camionero_foreign` FOREIGN KEY (`id_camionero`) REFERENCES `camioneros` (`id_camionero`) ON DELETE SET NULL;

--
-- Constraints for table `paquetes`
--
ALTER TABLE `paquetes`
  ADD CONSTRAINT `paquetes_id_camionero_foreign` FOREIGN KEY (`id_camionero`) REFERENCES `camioneros` (`id_camionero`) ON DELETE SET NULL,
  ADD CONSTRAINT `paquetes_id_lugar_destino_foreign` FOREIGN KEY (`id_lugar_destino`) REFERENCES `lugares` (`id_lugar`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
