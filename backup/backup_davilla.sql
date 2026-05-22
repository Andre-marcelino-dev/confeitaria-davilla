-- MySQL dump 10.13  Distrib 8.4.8, for Linux (x86_64)
--
-- Host: localhost    Database: davilla
-- ------------------------------------------------------
-- Server version	8.4.8

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(6,'2026_05_22_200202_add_campos_destaque_to_tbl_kits',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('47KtCbz77UvrqbMheK5LQ5UtGom00RTm5MHRh1Bs',NULL,'172.19.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 Edg/148.0.0.0','eyJfdG9rZW4iOiI3Vk9GdnV4MTcyckw2NTBib0daM2s3WkNqNERDMHljeGVBdjhGdFhWIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDgxIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1779484587);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_banner`
--

DROP TABLE IF EXISTS `tbl_banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_banner` (
  `id_banner` int NOT NULL AUTO_INCREMENT,
  `nome_banner` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `titulo_banner` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `subtitulo_banner` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descricao_banner` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `texto_botao_banner` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_botao_banner` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ordem_banner` int NOT NULL DEFAULT '0',
  `foto_banner` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_banner` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_banner`
--

LOCK TABLES `tbl_banner` WRITE;
/*!40000 ALTER TABLE `tbl_banner` DISABLE KEYS */;
INSERT INTO `tbl_banner` VALUES (1,'Vitrine de Páscoa','',NULL,NULL,NULL,NULL,0,'vitrine-de-pascoa.png','INATIVO'),(2,'Bolos sob Encomenda','',NULL,NULL,NULL,NULL,0,'bolos-sob-encomenda.png','INATIVO'),(3,'Café da Tarde','',NULL,NULL,NULL,NULL,0,'cafe-da-tarde.png','INATIVO'),(4,'Bolos por Encomenda','',NULL,NULL,NULL,NULL,0,'bolos-por-encomenda.jpg','ATIVO'),(5,'Promoção Doces Finos','',NULL,NULL,NULL,NULL,0,'promocao-doces-fino.jpg','ATIVO'),(6,'Chá da Tarde','',NULL,NULL,NULL,NULL,0,'cha-da-tarde.png','ATIVO'),(7,'Kit Presente Especial','',NULL,NULL,NULL,NULL,0,'kit-presente-especial.jpg','ATIVO'),(8,'Torta da Semana','',NULL,NULL,NULL,NULL,0,'banner/torta-da-semana.jpg','INATIVO');
/*!40000 ALTER TABLE `tbl_banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_categorias`
--

DROP TABLE IF EXISTS `tbl_categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_categorias` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descricao_categoria` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_categoria` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'ATIVO',
  `ordem_categoria` int NOT NULL DEFAULT '0',
  `criado_em_categoria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_categoria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_categorias`
--

LOCK TABLES `tbl_categorias` WRITE;
/*!40000 ALTER TABLE `tbl_categorias` DISABLE KEYS */;
INSERT INTO `tbl_categorias` VALUES (1,'Bolos','Bolos de vitrine e sob encomenda.','INATIVO',1,'2026-03-05 09:56:50','2026-05-21 21:56:28'),(2,'Doces','Brigadeiro, trufas e doces finos.','ATIVO',2,'2026-03-05 09:57:30','2026-05-21 21:57:25'),(3,'Bebidas quentes','Café, capuccino e chás.','ATIVO',3,'2026-03-05 09:58:21','2026-05-22 16:00:43'),(4,'Tortas','Tortas doces vendidas por fatia ou inteira','ATIVO',4,'2026-03-12 10:01:41','2026-05-21 21:57:27'),(5,'Kits Presente','Kits especiais para presentear','INATIVO',5,'2026-03-12 10:03:45','2026-05-21 21:52:52'),(6,'Kit Bolo churros','kit completo com doces finos','ATIVO',6,'2026-05-21 20:37:42','2026-05-21 21:57:29');
/*!40000 ALTER TABLE `tbl_categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_clientes`
--

DROP TABLE IF EXISTS `tbl_clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_clientes` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tipo_cliente` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cpf_cnpj_cliente` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_nasc_cliente` date NOT NULL,
  `endereco_cliente` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `numero_cliente` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `complemento_cliente` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bairro_cliente` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cidade_cliente` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `uf_cliente` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cep_cliente` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_cliente` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `senha_cliente` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefone_cliente` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto_cliente` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_cliente` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'ATIVO',
  `criado_em_cliente` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_cliente` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `cpf_cnpj_cliente` (`cpf_cnpj_cliente`),
  UNIQUE KEY `email_cliente` (`email_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_clientes`
--

LOCK TABLES `tbl_clientes` WRITE;
/*!40000 ALTER TABLE `tbl_clientes` DISABLE KEYS */;
INSERT INTO `tbl_clientes` VALUES (1,'Fernanda Oliveira','PF','123.456.789-10','1992-07-18','Rua Doce Mel','85','Casa A','Vila Maria','São Paulo','SP','02010-000','fernanda.oli@gmail.com','senha123','(11)98765-8521','cliente/fernanda-oliveira.png','ATIVO','2026-03-10 09:45:10','2026-03-10 09:45:10'),(2,'Amanda Souza','PF','123.456.789-01','1995-04-12','Rua das Flores','120','Casa','Centro','São Paulo','SP','010-10000','amanda@gmail.com','123456','(11)98888-7777','cliente/amanda-souza.png','ATIVO','2026-03-12 11:09:49','2026-03-12 11:09:49'),(3,'Bruno LIma','PF','234.567.890-12','1992-08-21','Av. Paulista','850','Apto 45','Bela Vista','São Paulo','SP','013-10000','bruno@gmail.com','123456','(11)99777-6666','cliente/bruno-lima.png','ATIVO','2026-03-12 11:14:34','2026-03-12 11:14:34'),(4,'Camila Ferreira','PF','345.678.901-23','1998-02-10','Rua do Açúcar','56','Casa','Mooca','São Paulo','SP','031-20000','camila@gmail.com','123456','(11)99666-5555','cliente/camila-ferreira.png','ATIVO','2026-03-12 11:20:01','2026-03-12 11:20:01'),(5,'Diego Martins','PF','456.789.012-34','1989-11-03','Rua do Café','210','Casa','Tatuapé','São Paulo','SP','033-33000','diego@gmail.com','123456','(11)99555-4444','cliente/diego-martins.png','ATIVO','2026-03-12 11:23:31','2026-03-12 11:23:31'),(6,'Elaine Rocha','PF','567.890.123-45','1990-06-17','Rua Brigadeiro','98','Apto 12','Santana','São Paulo','SP','020-20000','elaine@gmail.com','123456','(11)99444-3333','cliente/elaine-rocha.png','ATIVO','2026-03-12 11:26:55','2026-03-12 11:26:55'),(7,'Felipe Nunes','PF','678.901.234-56','1987-09-25','Rua da Palmeiras','333','Casa','Penha','São Paulo','SP','036-54000','felipe@gmail.com','123456','(11)99333-2222','cliente/felipe-nunes.png','ATIVO','2026-03-12 11:29:39','2026-03-12 11:29:39'),(8,'Gabriela Costa','PF','789.012.345-67','1996-03-09','Av. Celso Garcia','741','Apto 67','Brás','São Paulo','SP','030-15000','gabriela@gmail.com','123456','(11)99222-1111','cliente/gabriela-costa.png','ATIVO','2026-03-12 11:32:57','2026-03-12 11:32:57'),(9,'Henrique Alves','PF','890.123.456-78','1993-12-01','Rua dos Sonhos','150','Casa','Ipiranga','São Paulo','SP','042-10000','henrique@gmail.com','123456','(11)99111-0000','cliente/henrique-alves.png','ATIVO','2026-03-12 11:37:01','2026-03-12 11:37:01'),(10,'Festa Feliz Eventos','PJ','12.345.678/0001-90','2005-01-01','Rua dos Eventos','500','Sala 3','Vila Mariana','São Paulo','SP','041-10000','contato@festafeliz.com.br','123456','(11)3333-4444','cliente/festa-feliz-eventos.png','ATIVO','2026-03-12 11:43:57','2026-03-12 11:51:07'),(11,'Cafeteria Central','PJ','98.765.432/0001-88','2010-05-12','Av. Central','1000','Loja 2','República','São Paulo','SP','010-45000','compras@cafecentral.com.br','123456','(11)3222-1111','cliente/cafeteria-central.png','INATIVO','2026-03-12 11:56:19','2026-03-12 11:56:19');
/*!40000 ALTER TABLE `tbl_clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_contato`
--

DROP TABLE IF EXISTS `tbl_contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_contato` (
  `id_contato` int NOT NULL AUTO_INCREMENT,
  `nome_contato` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_contato` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefone_contato` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `assunto_contato` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mensagem_contato` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_contato` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'ENVIADO',
  `criado_em_contato` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_contato` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contato`
--

LOCK TABLES `tbl_contato` WRITE;
/*!40000 ALTER TABLE `tbl_contato` DISABLE KEYS */;
INSERT INTO `tbl_contato` VALUES (1,'Juliana Rocha','juliana.r@gmail.com','(11)98888-1111','Encomenda','Quero um bole de 20kg para um chá de bebê','ENVIADO','2026-03-05 09:37:39','2026-03-05 09:47:01'),(2,'Pedro Martins','pedro.m@gmail.com','(11)97777-2222','Cardápio','Vocês tem opção sem lactose?','ENVIADO','2026-03-05 09:41:25','2026-03-05 09:41:25'),(3,'Carla Nunes','carla.n@gmail.com','(11)96666-3333','Pagamento','Consigo pagar via PIX na entrega?','ENVIADO','2026-03-05 09:43:05','2026-03-05 09:43:05'),(4,'Juliana Rocha','juliana@gmail.com','(11)98888-1111','Encomenda','Gostaria de encomendar um bolo para 20 pessoas.','ENVIADO','2026-03-12 16:53:27','2026-03-12 16:53:27'),(5,'Pedro Martins','pedro@gmail.com','(11)98777-2222','Cardápio','Vocês fazem bolo sem lactose?','ENVIADO','2026-03-12 16:55:09','2026-03-12 16:55:09'),(6,'Carla Nunes','carla@gmail.com','(11)98666-3333','Pagamento','Aceitam Pix e cartão na retirada?','LIDO','2026-03-12 16:59:59','2026-03-12 16:59:59'),(7,'Lucas Almeida','lucas@gmail.com','(11)98555-4444','Orçamento','Qual valor de 100 brigadeiros gourmet?','RESPONDIDO','2026-03-12 17:02:20','2026-03-12 17:02:20'),(8,'Renata Silva','renata@gmail.com','(11)98444-5555','Entrega','Vocês entregam no bairro da Mooca?','ENVIADO','2026-03-12 17:05:32','2026-03-12 17:05:32');
/*!40000 ALTER TABLE `tbl_contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_controle_materia_prima`
--

DROP TABLE IF EXISTS `tbl_controle_materia_prima`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_controle_materia_prima` (
  `id_controle` int NOT NULL AUTO_INCREMENT,
  `id_materia_prima` int NOT NULL,
  `tipo_controle` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `qtde_controle` double(10,3) NOT NULL,
  `data_controle` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `obs_controle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id_controle`),
  KEY `fk_controle_materia_prima_materiaprima` (`id_materia_prima`),
  CONSTRAINT `fk_controle_materia_prima_materiaprima` FOREIGN KEY (`id_materia_prima`) REFERENCES `tbl_materia_prima` (`id_materia_prima`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_controle_materia_prima`
--

LOCK TABLES `tbl_controle_materia_prima` WRITE;
/*!40000 ALTER TABLE `tbl_controle_materia_prima` DISABLE KEYS */;
INSERT INTO `tbl_controle_materia_prima` VALUES (1,1,'ENTRADA',10.000,'2026-03-13 15:40:20','Compra semanal de farinha'),(2,2,'ENTRADA',8.000,'2026-03-13 15:40:26','Reposição de açúcar refinado'),(3,3,'SAIDA',2.500,'2026-03-13 15:40:29','Produção de ovos de Páscoa'),(4,4,'SAIDA',12.000,'2026-03-13 15:40:32','Produção de brigadeiros'),(5,6,'ENTRADA',5.000,'2026-03-13 15:40:37','Compra de morangos frescos'),(6,7,'SAIDA',30.000,'2026-03-13 15:40:39','Produção de bolos e tortas'),(7,8,'SAIDA',1.500,'2026-03-13 15:40:52','Consumo no preparo de cafés'),(8,9,'ENTRADA',20.000,'2026-03-13 15:40:55','Compra de embalagens'),(9,10,'SAIDA',3.000,'2026-03-13 15:40:59','Produção de massas e coberturas'),(10,5,'SAIDA',8.000,'2026-03-13 15:41:47','Produção de recheios');
/*!40000 ALTER TABLE `tbl_controle_materia_prima` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_fornecedores`
--

DROP TABLE IF EXISTS `tbl_fornecedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_fornecedores` (
  `id_fornecedor` int NOT NULL AUTO_INCREMENT,
  `nome_fornecedor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `representante_fornecedor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_fornecedor` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefone_fornecedor` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_fornecedor` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'ATIVO',
  `criado_em_fornecedor` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_fornecedor` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_fornecedor`),
  UNIQUE KEY `email_fornecedor` (`email_fornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_fornecedores`
--

LOCK TABLES `tbl_fornecedores` WRITE;
/*!40000 ALTER TABLE `tbl_fornecedores` DISABLE KEYS */;
INSERT INTO `tbl_fornecedores` VALUES (1,'Doce Sabor Distribuidora','Marcos Lima','contato@docesabor.com.br','11987654321','ATIVO','2026-03-12 10:12:33','2026-03-12 10:16:09'),(2,'Laticínios Serra Azul','Fernanda Rocha','vendas@serraazul.com.br','11981234567','ATIVO','2026-03-12 10:49:54','2026-03-12 10:49:54'),(3,'Embala Festas LTDA','Carla Mendes','comercial@embalafestas.com.br','11993456789','ATIVO','2026-03-12 10:51:46','2026-03-12 10:51:46'),(4,'Frutas Boa Colheita','Pedro Alves','pedidos@boacolheita.com.br','11992345678','ATIVO','2026-03-12 10:53:45','2026-03-12 10:53:45'),(5,'Chocolates Premium Brasil','Juliana Costa','suporte@cpbrasil.com.br','11994567812','INATIVO','2026-03-12 10:57:37','2026-03-12 10:57:37');
/*!40000 ALTER TABLE `tbl_fornecedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_itens_kit`
--

DROP TABLE IF EXISTS `tbl_itens_kit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_itens_kit` (
  `id_item_kit` int NOT NULL AUTO_INCREMENT,
  `id_kit` int NOT NULL,
  `id_produto` int NOT NULL,
  `status_item_kit` varchar(20) NOT NULL,
  `criado_em_item_kit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_item_kit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_item_kit`),
  KEY `fk_item_kit_kit` (`id_kit`),
  KEY `fk_item_kit_produto` (`id_produto`),
  CONSTRAINT `fk_item_kit_kit` FOREIGN KEY (`id_kit`) REFERENCES `tbl_kits` (`id_kit`),
  CONSTRAINT `fk_item_kit_produto` FOREIGN KEY (`id_produto`) REFERENCES `tbl_produtos` (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_itens_kit`
--

LOCK TABLES `tbl_itens_kit` WRITE;
/*!40000 ALTER TABLE `tbl_itens_kit` DISABLE KEYS */;
INSERT INTO `tbl_itens_kit` VALUES (4,1,4,'ATIVO','2026-05-19 17:18:20','2026-05-22 16:38:43');
/*!40000 ALTER TABLE `tbl_itens_kit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_itens_venda`
--

DROP TABLE IF EXISTS `tbl_itens_venda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_itens_venda` (
  `id_item` int NOT NULL AUTO_INCREMENT,
  `id_venda` int NOT NULL,
  `id_produto` int NOT NULL,
  `valor_unit_item` double(10,2) NOT NULL,
  `qtde_item` double(10,2) NOT NULL,
  `status_item` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'APROVADO',
  `atualizado_em_item` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_item`),
  KEY `fk_intens_venda_venda` (`id_venda`),
  KEY `fk_intens_venda_produto` (`id_produto`),
  CONSTRAINT `fk_intens_venda_produto` FOREIGN KEY (`id_produto`) REFERENCES `tbl_produtos` (`id_produto`),
  CONSTRAINT `fk_intens_venda_venda` FOREIGN KEY (`id_venda`) REFERENCES `tbl_vendas` (`id_venda`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_itens_venda`
--

LOCK TABLES `tbl_itens_venda` WRITE;
/*!40000 ALTER TABLE `tbl_itens_venda` DISABLE KEYS */;
INSERT INTO `tbl_itens_venda` VALUES (1,1,4,23.00,2.00,'APROVADO','2026-03-10 10:59:07'),(2,1,5,13.75,1.00,'APROVADO','2026-03-10 11:00:05'),(3,1,1,18.00,1.00,'APROVADO','2026-03-13 15:10:35'),(4,2,6,12.50,1.00,'APROVADO','2026-03-13 15:11:29'),(5,3,9,19.90,1.00,'APROVADO','2026-03-13 15:14:37'),(6,3,10,13.00,1.00,'APROVADO','2026-03-13 15:14:41'),(7,3,5,13.75,2.00,'APROVADO','2026-03-13 15:14:43'),(8,4,11,15.50,1.00,'APROVADO','2026-03-13 15:15:29'),(9,5,7,14.00,1.00,'APROVADO','2026-03-13 15:17:46'),(10,5,9,19.90,1.00,'APROVADO','2026-03-13 15:17:49'),(11,5,5,13.75,2.00,'APROVADO','2026-03-13 15:17:52'),(12,7,10,13.00,3.00,'APROVADO','2026-03-13 15:18:55');
/*!40000 ALTER TABLE `tbl_itens_venda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_kits`
--

DROP TABLE IF EXISTS `tbl_kits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_kits` (
  `id_kit` int NOT NULL AUTO_INCREMENT,
  `nome_kit` varchar(30) NOT NULL,
  `descricao_kit` text NOT NULL,
  `foto_kit` varchar(100) NOT NULL,
  `slug_kit` varchar(30) NOT NULL,
  `criado_em_kit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_kit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `preco_kit` decimal(8,2) DEFAULT NULL,
  `destaque_kit` varchar(255) DEFAULT 'NENHUM',
  `whatsapp_kit` varchar(255) DEFAULT NULL,
  `preco_promocional_kit` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id_kit`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_kits`
--

LOCK TABLES `tbl_kits` WRITE;
/*!40000 ALTER TABLE `tbl_kits` DISABLE KEYS */;
INSERT INTO `tbl_kits` VALUES (1,'Kit Bolo cenoura','Kit com caxa-4-doces-fit','produto/bolo-de-cenoura-(fatia)','kit-bolo-cenoura','2026-05-19 17:07:26','2026-05-22 21:12:54',49.90,'MAIS VENDIDO','5511999999999',23.00);
/*!40000 ALTER TABLE `tbl_kits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_materia_prima`
--

DROP TABLE IF EXISTS `tbl_materia_prima`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_materia_prima` (
  `id_materia_prima` int NOT NULL AUTO_INCREMENT,
  `id_fornecedor` int NOT NULL,
  `nome_materia_prima` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `unid_med_materia_prima` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `qtde_atual_materia_prima` double(10,3) NOT NULL,
  `criado_em_materia_prima` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_materia_prima` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_materia_prima`),
  KEY `fk_materia_prima_fornecedor` (`id_fornecedor`),
  CONSTRAINT `fk_materia_prima_fornecedor` FOREIGN KEY (`id_fornecedor`) REFERENCES `tbl_fornecedores` (`id_fornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_materia_prima`
--

LOCK TABLES `tbl_materia_prima` WRITE;
/*!40000 ALTER TABLE `tbl_materia_prima` DISABLE KEYS */;
INSERT INTO `tbl_materia_prima` VALUES (1,1,'Farinha de Trigo','KG',25.000,'2026-03-12 18:30:15','2026-03-12 18:30:15'),(2,1,'Açúcar Refinado','KG',18.000,'2026-03-12 18:36:22','2026-03-12 18:36:22'),(3,5,'Chocolate em Barra','KG',12.000,'2026-03-12 18:43:40','2026-03-12 18:43:40'),(4,2,'Leite Condensado','UN',40.000,'2026-03-12 18:49:55','2026-03-12 18:49:55'),(5,2,'Creme de Leite','UN',30.000,'2026-03-12 18:56:10','2026-03-12 18:56:10'),(6,4,'Morango','KG',10.000,'2026-03-12 19:02:30','2026-03-12 19:02:30'),(7,1,'Ovos','UN',120.000,'2026-03-12 19:09:18','2026-03-12 19:09:18'),(8,1,'Café em Pó','KG',8.000,'2026-03-12 19:15:45','2026-03-12 19:15:45'),(9,3,'Caixas para Doces','UN',60.000,'2026-03-12 19:22:12','2026-03-12 19:22:12'),(10,2,'Manteiga','KG',9.000,'2026-03-12 19:28:50','2026-03-12 19:28:50');
/*!40000 ALTER TABLE `tbl_materia_prima` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_produtos`
--

DROP TABLE IF EXISTS `tbl_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_produtos` (
  `id_produto` int NOT NULL AUTO_INCREMENT,
  `id_categoria` int NOT NULL,
  `nome_produto` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug_produto` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descricao_produto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tamanho_produto` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `unid_medida_produto` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `valor_produto` double(10,2) NOT NULL,
  `foto_produto` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_produto` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'ATIVO',
  `destaque_produto` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'NAO',
  `ordem_produto` int NOT NULL DEFAULT '0',
  `criado_em_produto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_produto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_produto`),
  KEY `fk_produtos_categorias` (`id_categoria`),
  CONSTRAINT `fk_produtos_categorias` FOREIGN KEY (`id_categoria`) REFERENCES `tbl_categorias` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produtos`
--

LOCK TABLES `tbl_produtos` WRITE;
/*!40000 ALTER TABLE `tbl_produtos` DISABLE KEYS */;
INSERT INTO `tbl_produtos` VALUES (1,2,'Brigadeiro Gourmet','brigadeiro-gourmet','6 brigadeiros sortidos','Médio','CX',18.00,'produto/brigadeiro-gourmet-(6un)','ATIVO','NAO',0,'2026-03-10 08:51:19','2026-05-19 19:57:50'),(4,1,'Bolo de Cenoura (Fatia)','bolo-de-cenoura-fatia','Fatia de bolo de cenoura com cobertura de chocolate','Pequeno','FT',23.00,'produto/bolo-de-cenoura-(fatia)','ATIVO','NAO',0,'2026-03-10 09:19:33','2026-05-21 19:16:30'),(5,3,'Capuccino 300ml','capuccino-300ml','Capuccino cremoso','Grande','ML',13.75,'produto/capuccino-300ml','ATIVO','NAO',0,'2026-03-10 09:24:16','2026-05-19 19:57:51'),(6,1,'Bolo de Chocolate Fatia','bolo-de-chocolate-fatia','Fatia de bolo de chocolate com cobertura','Médio','FT',12.50,'produto/bolo-de-chocolate-fatia.png','ATIVO','NAO',0,'2026-03-12 17:20:05','2026-05-19 19:57:51'),(7,1,'Bolo Red Velvet Fatia','bolo-red-velvet-fatia','Fatia de bolo red velvet com cream cheese','Grande','FT',14.00,'produto/bolo-red-velvet-fatia.png','ATIVO','NAO',0,'2026-03-12 17:26:15','2026-05-19 19:57:51'),(8,2,'Beijinho Gourmet','beijinho-gourmet','Beijinho gourmet tradicional','Pequeno','UN',3.50,'produto/beijinho-gourmet.png','ATIVO','NAO',0,'2026-03-12 17:33:40','2026-05-19 19:57:51'),(9,2,'Caixa com 6 Doces Finos','caixa-com-6-doces-finos','Caixa com 6 doces finos variados','Médio','CX',19.90,'produto/caixa-com-6-doces-finos.png','ATIVO','NAO',0,'2026-03-12 17:39:22','2026-05-19 19:57:51'),(10,4,'Torta de Limão','torta-de-limao','Torta-de-limão pedaço','Médio','UN',18.00,'produto/torta-de-limao-fatia.png','ATIVO','NAO',0,'2026-03-12 17:46:10','2026-05-22 16:23:11'),(11,4,'Cheesecake de Frutas Vermelhas','cheesecake-de-frutas-vermelhas','Pedaço de cheesecake com frutas vermelhas','Grande','UN',15.50,'produto/cheesecake-de-frutas-vermelhas.png','ATIVO','NAO',0,'2026-03-12 17:52:45','2026-05-19 19:57:51'),(12,3,'Café Expresso 80ml','cafe-expresso-80ml','Café expresso tradicional','Pequeno','ML',6.00,'produto/cafe-expresso.png','ATIVO','NAO',0,'2026-03-12 17:59:18','2026-05-19 19:57:51'),(13,3,'Cappuccino 600ml','cappuccino-600ml','Cappuccino cremoso servido quente','Grande','ML',10.50,'produto/cappuccino-cremoso.png','ATIVO','NAO',0,'2026-03-12 18:05:30','2026-05-19 19:57:51'),(14,5,'Kit Presente Doce','kit-presente-doce','Kit com mini bolo e doces especiais','Grande','UN',49.90,'produto/kit-presente-doce.png','INATIVO','NAO',0,'2026-03-12 18:12:55','2026-05-19 19:57:51'),(15,1,'Mini-bolo-de-cenoura','bolo-cenoura-mini','Bolo de cenoura tradicional','Médio','UN',20.00,'produto/mini-bolo-de-cenoura.png','ATIVO','NAO',0,'2026-03-12 18:18:40','2026-05-22 16:26:48');
/*!40000 ALTER TABLE `tbl_produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_usuario` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `senha_usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `perfil_usuario` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto_usuario` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_usuario` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `criado_em_usuario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_usuario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email_usuario` (`email_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` VALUES (1,'Roberto Souza','roberto.atend@davilla.com.br','senha123','ATENDENTE','usuario/roberto-souza.png','ATIVO','2026-03-10 09:58:36','2026-03-10 09:58:36'),(2,'Ana Caixa','ana.atend@davilla.com','123456','ATENDENTE','usuario/ana-caixa.jpg','ATIVO','2026-03-12 15:56:53','2026-03-12 15:56:53'),(3,'Beatriz Vendas','beatriz.atend@davilla.com','123456','ATENDENTE','usuario/beatriz-vendas.jpg','ATIVO','2026-03-12 16:27:12','2026-03-12 16:27:12'),(4,'Carlos Gerente','carlos.gerend@davilla.com','123456','GERENTE','usuario/carlos-gerente.jpg','ATIVO','2026-03-12 16:28:46','2026-03-12 16:28:46'),(5,'Daniela Admin','daniela.admind@davilla.com','123456','ADMIN','usuario/daniela-admin.jpg','ATIVO','2026-03-12 16:30:36','2026-03-12 16:30:36'),(6,'Eduardo Produção','eduardo.confe@davilla.com','123456','CONFEITEIRO','usuario/eduardo-producao.jpg','INATIVO','2026-03-12 16:32:00','2026-03-12 16:32:00');
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_vendas`
--

DROP TABLE IF EXISTS `tbl_vendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_vendas` (
  `id_venda` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int NOT NULL,
  `id_usuario` int NOT NULL,
  `data_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `valor_venda` double(10,2) NOT NULL,
  `status_venda` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'EM ANDAMENTO',
  `data_entrega_venda` datetime DEFAULT NULL,
  `atualizado_em_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_venda`),
  KEY `fk_vendas_clientes` (`id_cliente`),
  KEY `fk_vendas_usuarios` (`id_usuario`),
  CONSTRAINT `fk_vendas_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`),
  CONSTRAINT `fk_vendas_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_vendas`
--

LOCK TABLES `tbl_vendas` WRITE;
/*!40000 ALTER TABLE `tbl_vendas` DISABLE KEYS */;
INSERT INTO `tbl_vendas` VALUES (1,1,1,'2026-03-13 14:42:31',77.75,'FINALIZADA','2026-03-05 15:30:00','2026-03-13 15:10:40'),(2,2,2,'2026-03-12 19:40:15',12.50,'FINALIZADA','2026-03-05 16:00:00','2026-03-13 15:11:39'),(3,3,1,'2026-03-12 19:46:22',60.40,'FINALIZADA','2026-03-06 10:00:00','2026-03-13 15:14:48'),(4,4,3,'2026-03-12 19:53:40',15.50,'FINALIZADA','2026-03-06 18:30:00','2026-03-13 15:15:32'),(5,5,2,'2026-03-12 19:59:55',61.40,'FINALIZADA','2026-03-07 14:00:00','2026-03-13 15:17:55'),(6,6,1,'2026-03-12 20:06:10',0.00,'CANCELADA','2026-03-07 16:20:00','2026-03-12 20:06:10'),(7,7,4,'2026-03-12 20:12:30',39.00,'FINALIZADA','2026-03-08 11:00:00','2026-03-13 15:19:09'),(8,8,2,'2026-03-12 20:19:45',0.00,'EM ANDAMENTO','2026-03-08 17:00:00','2026-03-12 20:19:45');
/*!40000 ALTER TABLE `tbl_vendas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-05-22 21:18:27
