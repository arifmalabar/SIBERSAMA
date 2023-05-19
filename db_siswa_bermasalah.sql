-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2023 pada 15.49
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswa_bermasalah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_31_093022_guru', 1),
(6, '2023_03_31_093737_jurusan', 1),
(7, '2023_03_31_093757_kelas', 1),
(8, '2023_03_31_093835_siswa', 1),
(9, '2023_03_31_093901_semester', 1),
(10, '2023_03_31_094030_mpk', 1),
(11, '2023_03_31_094210_preferensi', 1),
(12, '2023_03_31_094230_kriteria', 1),
(13, '2023_03_31_094259_jenis_kriteria', 1),
(14, '2023_03_31_094320_pelanggaran', 1),
(15, '2023_03_31_113332_informasi', 2),
(16, '2023_04_05_130422_jabatan', 3),
(17, '2023_04_05_130955_ubah_guru', 4),
(19, '2023_04_05_140429_kepangkatan_guru', 5),
(20, '2023_04_05_141447_informasi_jabatan', 6),
(21, '2023_04_09_044128_operator', 7),
(22, '2023_04_30_064228_ubah_jurusan', 8),
(23, '2023_04_30_064548_ubah_kelas', 9),
(24, '2023_04_30_065117_kelas_edit', 10),
(25, '2023_04_30_065220_kelas_ubah', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `NIP` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(15) NOT NULL,
  `last_access` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kd_jabatan` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pangkat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`NIP`, `nama`, `username`, `password`, `role`, `last_access`, `kd_jabatan`, `kode_pangkat`) VALUES
('12919291212', 'bahrul', 'bahrul@gmail.com', '$2y$10$BnyKmFaNmbU99Jz29jU5BOeYbMCnb4GxF/p88jbLm999xtzutc3Oy', 1, '2023-05-18 07:07:19', 'JB-2', 'PK-1'),
('197811920002021004', 'Arika Risma', 'arika@gmail.com', '$2y$10$LsY19Fs75rhV4t0IkYqmROgwBmQYJrJPhmT4lFhPgPnPUu5duhDk2', 1, '2023-05-10 00:30:38', 'JB-1', 'PK-1'),
('2002121220230110004', 'Ridho Arif W', 'ridhoarif40@gmail.com', '$2y$10$p3vnUrnNJJsIUG.lO8xt9uBoMB.wvvxr6S.wmF/4hbgUWeeI.nf/u', 0, '2023-05-07 12:07:02', 'JB-1', 'PK-1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_informasi` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_posting` time NOT NULL,
  `kd_jabatan` char(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `kd_jabatan` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jabatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`kd_jabatan`, `nama_jabatan`) VALUES
('JB-1', 'Kepala Sekolah'),
('JB-2', 'Guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_kriteria`
--

CREATE TABLE `tb_jenis_kriteria` (
  `kode_jenis_kriteria` bigint(20) UNSIGNED NOT NULL,
  `kode_kriteria` bigint(20) UNSIGNED NOT NULL,
  `jenis_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `kode_jurusan` bigint(20) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`kode_jurusan`, `nama_jurusan`) VALUES
(9, 'Teknik Komputer Jaringan'),
(10, 'Elektronika Industries');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `kode_kelas` bigint(20) UNSIGNED NOT NULL,
  `kode_jurusan` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`kode_kelas`, `kode_jurusan`, `nama_kelas`) VALUES
(3, 9, 'X TKJ D'),
(4, 9, 'XI TKJ D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kepangkatan`
--

CREATE TABLE `tb_kepangkatan` (
  `kode_pangkat` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_kepangkatan`
--

INSERT INTO `tb_kepangkatan` (`kode_pangkat`, `pangkat`) VALUES
('PK-1', 'IIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `kode_kriteria` bigint(20) UNSIGNED NOT NULL,
  `nama_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mpkosis`
--

CREATE TABLE `tb_mpkosis` (
  `kode_anggota` bigint(20) UNSIGNED NOT NULL,
  `NISN` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_periode_aktif` year(4) NOT NULL,
  `tahun_periode_non` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_operator`
--

CREATE TABLE `tb_operator` (
  `NIP` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_operator`
--

INSERT INTO `tb_operator` (`NIP`, `nama`, `username`, `password`) VALUES
('119999', 'Ridho', 'ridhoarif40@gmail.com', '$2y$10$4ECPwGYaUTMRRrWAE0OqouNf387K2ufJsxFTzPCJWcnNEG1abqbrW');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggaran`
--

CREATE TABLE `tb_pelanggaran` (
  `kode_pelanggaran` bigint(20) UNSIGNED NOT NULL,
  `NIP` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_anggota` bigint(20) UNSIGNED NOT NULL,
  `NISN` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jenis_kriteria` bigint(20) UNSIGNED NOT NULL,
  `semester` int(11) NOT NULL,
  `tanggal_pelanggaran` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pereferensi`
--

CREATE TABLE `tb_pereferensi` (
  `kode_pereferensi` bigint(20) UNSIGNED NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_semester`
--

CREATE TABLE `tb_semester` (
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `NISN` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_kelas` bigint(20) UNSIGNED NOT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('pria','wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`NISN`, `kode_kelas`, `nama_siswa`, `jenis_kelamin`, `username`, `password`) VALUES
('27197004', 4, 'Ridho Arif Wicaksono', 'pria', '27197004@sch.id', '$2y$10$IOqUiJtweGakbBA6HN./j.zOyCyTu/0FoTYrozQsECRE8HDZOxIi2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`NIP`),
  ADD UNIQUE KEY `tb_guru_username_unique` (`username`),
  ADD KEY `kd_jabatan` (`kd_jabatan`),
  ADD KEY `kode_pangkat` (`kode_pangkat`);

--
-- Indeks untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_informasi`),
  ADD KEY `tb_informasi_kd_jabatan_foreign` (`kd_jabatan`);

--
-- Indeks untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`kd_jabatan`);

--
-- Indeks untuk tabel `tb_jenis_kriteria`
--
ALTER TABLE `tb_jenis_kriteria`
  ADD PRIMARY KEY (`kode_jenis_kriteria`),
  ADD KEY `tb_jenis_kriteria_kode_kriteria_foreign` (`kode_kriteria`);

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`kode_kelas`),
  ADD KEY `tb_kelas_kode_jurusan_foreign` (`kode_jurusan`);

--
-- Indeks untuk tabel `tb_kepangkatan`
--
ALTER TABLE `tb_kepangkatan`
  ADD PRIMARY KEY (`kode_pangkat`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`kode_kriteria`);

--
-- Indeks untuk tabel `tb_mpkosis`
--
ALTER TABLE `tb_mpkosis`
  ADD PRIMARY KEY (`kode_anggota`),
  ADD KEY `tb_mpkosis_nisn_foreign` (`NISN`);

--
-- Indeks untuk tabel `tb_operator`
--
ALTER TABLE `tb_operator`
  ADD PRIMARY KEY (`NIP`);

--
-- Indeks untuk tabel `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  ADD PRIMARY KEY (`kode_pelanggaran`),
  ADD KEY `tb_pelanggaran_nip_foreign` (`NIP`),
  ADD KEY `tb_pelanggaran_kode_anggota_foreign` (`kode_anggota`),
  ADD KEY `tb_pelanggaran_nisn_foreign` (`NISN`),
  ADD KEY `tb_pelanggaran_kode_jenis_kriteria_foreign` (`kode_jenis_kriteria`),
  ADD KEY `tb_pelanggaran_semester_foreign` (`semester`);

--
-- Indeks untuk tabel `tb_pereferensi`
--
ALTER TABLE `tb_pereferensi`
  ADD PRIMARY KEY (`kode_pereferensi`);

--
-- Indeks untuk tabel `tb_semester`
--
ALTER TABLE `tb_semester`
  ADD PRIMARY KEY (`semester`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`NISN`),
  ADD UNIQUE KEY `tb_siswa_username_unique` (`username`),
  ADD KEY `tb_siswa_kode_kelas_foreign` (`kode_kelas`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_informasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_kriteria`
--
ALTER TABLE `tb_jenis_kriteria`
  MODIFY `kode_jenis_kriteria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `kode_jurusan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `kode_kelas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `kode_kriteria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_mpkosis`
--
ALTER TABLE `tb_mpkosis`
  MODIFY `kode_anggota` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  MODIFY `kode_pelanggaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pereferensi`
--
ALTER TABLE `tb_pereferensi`
  MODIFY `kode_pereferensi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `tb_guru_ibfk_1` FOREIGN KEY (`kd_jabatan`) REFERENCES `tb_jabatan` (`kd_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_guru_ibfk_2` FOREIGN KEY (`kode_pangkat`) REFERENCES `tb_kepangkatan` (`kode_pangkat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD CONSTRAINT `tb_informasi_kd_jabatan_foreign` FOREIGN KEY (`kd_jabatan`) REFERENCES `tb_jabatan` (`kd_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jenis_kriteria`
--
ALTER TABLE `tb_jenis_kriteria`
  ADD CONSTRAINT `tb_jenis_kriteria_kode_kriteria_foreign` FOREIGN KEY (`kode_kriteria`) REFERENCES `tb_kriteria` (`kode_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD CONSTRAINT `tb_kelas_kode_jurusan_foreign` FOREIGN KEY (`kode_jurusan`) REFERENCES `tb_jurusan` (`kode_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_mpkosis`
--
ALTER TABLE `tb_mpkosis`
  ADD CONSTRAINT `tb_mpkosis_nisn_foreign` FOREIGN KEY (`NISN`) REFERENCES `tb_siswa` (`NISN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  ADD CONSTRAINT `tb_pelanggaran_kode_anggota_foreign` FOREIGN KEY (`kode_anggota`) REFERENCES `tb_mpkosis` (`kode_anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pelanggaran_kode_jenis_kriteria_foreign` FOREIGN KEY (`kode_jenis_kriteria`) REFERENCES `tb_jenis_kriteria` (`kode_jenis_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pelanggaran_nip_foreign` FOREIGN KEY (`NIP`) REFERENCES `tb_guru` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pelanggaran_nisn_foreign` FOREIGN KEY (`NISN`) REFERENCES `tb_siswa` (`NISN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pelanggaran_semester_foreign` FOREIGN KEY (`semester`) REFERENCES `tb_semester` (`semester`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_kode_kelas_foreign` FOREIGN KEY (`kode_kelas`) REFERENCES `tb_kelas` (`kode_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
