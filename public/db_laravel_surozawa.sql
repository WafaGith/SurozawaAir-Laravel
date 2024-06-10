-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Jun 2024 pada 06.26
-- Versi server: 8.0.30
-- Versi PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laravel_surozawa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_08_172040_create_planes_table', 1),
(6, '2024_06_08_172053_create_schedules_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `planes`
--

CREATE TABLE `planes` (
  `id_pesawat` bigint UNSIGNED NOT NULL,
  `nama_pesawat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` int NOT NULL,
  `jenis_pesawat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pembuatan` date NOT NULL,
  `nomor_registrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `planes`
--

INSERT INTO `planes` (`id_pesawat`, `nama_pesawat`, `kapasitas`, `jenis_pesawat`, `tanggal_pembuatan`, `nomor_registrasi`, `created_at`, `updated_at`) VALUES
(1, 'SUROZAWA AIRWAYS-132', 406, 'Boeing 777', '2024-06-07', 'SA-R12', '2024-06-09 08:39:15', '2024-06-09 11:26:02'),
(2, 'BAGUS AIR-23', 247, 'Boeing 777', '2024-05-31', 'BA-23', '2024-06-09 10:59:55', '2024-06-09 10:59:55'),
(3, 'MUFIO AIR-11', 406, 'Airbus A330', '2024-05-31', 'MA-R11', '2024-06-09 11:02:16', '2024-06-09 11:02:16'),
(4, 'QATAR AIRWAYS-13', 406, 'Airbus A330', '2014-01-29', 'QA-R13', '2024-06-09 11:28:32', '2024-06-09 11:28:32'),
(5, 'SUROZAWA AIRWAYS-134', 247, 'Boeing 777', '2024-06-13', 'SA-R134', '2024-06-09 11:29:06', '2024-06-09 11:29:06'),
(6, 'GARUDA INDONESIA-17', 406, 'Boeing 747', '2015-02-04', 'GA-R17', '2024-06-09 11:39:20', '2024-06-09 11:39:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedules`
--

CREATE TABLE `schedules` (
  `id_schedule` bigint UNSIGNED NOT NULL,
  `id_pesawat` bigint UNSIGNED NOT NULL,
  `tanggal_keberangkatan` date NOT NULL,
  `waktu_keberangkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bandara_asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bandara_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `schedules`
--

INSERT INTO `schedules` (`id_schedule`, `id_pesawat`, `tanggal_keberangkatan`, `waktu_keberangkatan`, `bandara_asal`, `bandara_tujuan`, `created_at`, `updated_at`) VALUES
(3, 1, '2024-06-10', '12.30', 'Juanda Surabaya', 'Soekarno-Hatta Jakarta', '2024-06-09 10:00:17', '2024-06-09 10:00:17'),
(4, 2, '2024-05-31', '12.30', 'Juanda Surabaya', 'Soekarno-Hatta Jakarta', '2024-06-09 11:04:00', '2024-06-09 11:04:00'),
(5, 3, '2024-06-13', '08.30', 'Ngurah Rai (DPS) - Denpasar, Bali', 'Juanda (SUB) - Surabaya, Jawa Timur', '2024-06-09 11:04:58', '2024-06-09 11:04:58'),
(7, 3, '2024-06-11', '09.00', 'Lombok (LOP) - Lombok, NTB', 'Kualanamu (KNO) - Deli Serdang, Sumatera Utara', '2024-06-09 11:06:28', '2024-06-09 11:06:28'),
(8, 2, '2024-06-18', '12.30', 'Lombok (LOP) - Lombok, NTB', 'Soekarno-Hatta Jakarta', '2024-06-09 11:06:48', '2024-06-09 11:06:48'),
(9, 4, '2024-06-12', '04.10', 'Sultan Hasanuddin (UPG) - Makassar, Sulawesi Selatan', 'Soekarno-Hatta (CGK) - Jakarta', '2024-06-09 11:37:57', '2024-06-09 11:37:57'),
(10, 3, '2024-06-11', '01.00', 'Juanda (SUB) - Surabaya, Jawa Timur', 'Soekarno-Hatta (CGK) - Jakarta', '2024-06-09 11:38:19', '2024-06-09 11:38:19'),
(11, 2, '2024-06-11', '08.30', 'Lombok (LOP) - Lombok, NTB', 'Kualanamu (KNO) - Deli Serdang, Sumatera Utara', '2024-06-09 11:40:47', '2024-06-09 11:40:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`id_pesawat`),
  ADD UNIQUE KEY `planes_nomor_registrasi_unique` (`nomor_registrasi`);

--
-- Indeks untuk tabel `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id_schedule`),
  ADD KEY `schedules_id_pesawat_foreign` (`id_pesawat`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `planes`
--
ALTER TABLE `planes`
  MODIFY `id_pesawat` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id_schedule` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_id_pesawat_foreign` FOREIGN KEY (`id_pesawat`) REFERENCES `planes` (`id_pesawat`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
