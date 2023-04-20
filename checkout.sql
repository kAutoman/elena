/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100419
 Source Host           : localhost:3306
 Source Schema         : test

 Target Server Type    : MySQL
 Target Server Version : 100419
 File Encoding         : 65001

 Date: 20/04/2023 05:30:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for transactions
-- ----------------------------
DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions`  (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'id',
  `f_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'first name',
  `l_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'last name',
  `amount` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ref_url` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL COMMENT 'payment receipt url',
  `result` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'payment result',
  `created_at` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'payment description',
  `payment_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'checkout id',
  `tariff` int NULL DEFAULT NULL COMMENT 'deadline',
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `contact_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `contact`(`contact_id` ASC) USING BTREE,
  CONSTRAINT `contact` FOREIGN KEY (`contact_id`) REFERENCES `user_contacts` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transactions
-- ----------------------------
INSERT INTO `transactions` VALUES (1, NULL, NULL, '69', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KKjDz6EGMgZd3wetMQg6LBaxD5d3ORHT5sfLKBxMGaaPL1_mnzYYhIhPO9pgDoMF4c09x8Ozphoo769r', 'succeeded', '2023-04-10 12:13:25', 'Astrology checkout', 'ch_3MvHkaKuZdcMdc5t23SjAv5n', NULL, NULL, NULL);
INSERT INTO `transactions` VALUES (2, 'rqwr', 'qweq', '69', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KN_Dz6EGMgY2Wg8V6WU6LBY97QWNh1JHUrIJY_4HZ4TLS5GeEcZTOy_zPCWcYd0lbcnXdVLMz6TXyJdt', 'succeeded', '2023-04-10 12:14:19', 'Astrology checkout', 'ch_3MvHlSKuZdcMdc5t0eaOIUFt', NULL, NULL, NULL);
INSERT INTO `transactions` VALUES (3, 'test', 'fw', '69', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KOjHz6EGMga3kH6f09g6LBZ6dWpjbTQW_OeGit61vsKgUXjQQPa9oSOU1T8lNQhCx333O6NxT2K_6hOm', 'succeeded', '2023-04-10 12:23:00', 'Astrology checkout', 'ch_3MvHtrKuZdcMdc5t0lQfC01W', 6, NULL, NULL);
INSERT INTO `transactions` VALUES (4, 'test', 'test', '97', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KN3Iz6EGMgbdaKsBMvk6LBY5QJLlithy74YVk3jh_VnMSvAsl-hqii0FaV3ycE2hcR7iKwh2XXBzlH59', 'succeeded', '2023-04-10 12:24:56', 'Astrology checkout', 'ch_3MvHvkKuZdcMdc5t1B2KvryF', 12, NULL, NULL);
INSERT INTO `transactions` VALUES (5, 'James', 'Hu', '97', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KKnS0KEGMgZQ_oye3_06LBZkBGmTpCO5VU7af1G5kn3v8-_ZRTZ4sI2uy4hnaIyoe5Ls7FEqIbDqoNpG', 'succeeded', '2023-04-10 17:18:29', 'Astrology checkout', 'ch_3MvMVpKuZdcMdc5t09O1dPip', 12, 'automan990923@gmail.com', NULL);
INSERT INTO `transactions` VALUES (6, 'James', 'Hu', '69', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KMu-_6EGMgazu4uhSyE6LBbZnMKlS8E1YlbIqBdtefAdFzmgnVSrKjA3AF6ckjFm20_UlM6t0pd-Q9an', 'succeeded', '2023-04-19 14:30:37', 'Astrology checkout', 'ch_3MyaBCKuZdcMdc5t1DOzAYRU', 6, 'automan990923@gmail.com', NULL);
INSERT INTO `transactions` VALUES (7, 'James', 'Hu', '69', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KKfD_6EGMgbl9iDN_7o6LBZeBLrPjnqlVNBnil-Noo3S9Tyyyj42GnnUoASDiMsxBStGuROaDlRmLB5_', 'succeeded', '2023-04-19 14:40:40', 'Astrology checkout', 'ch_3MyaKwKuZdcMdc5t2RamR2yd', 6, 'automan990923@gmail.com', NULL);
INSERT INTO `transactions` VALUES (8, 'James', 'Hu', '69', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KKnD_6EGMgY85w5J_hs6LBY0DRZJCQCo_kTe1hcpKndnBrB38e3-enDjfvm7POQjP1DnKv5IipC-DFpY', 'succeeded', '2023-04-19 14:40:42', 'Astrology checkout', 'ch_3MyaKzKuZdcMdc5t23PtmjCM', 6, 'automan990923@gmail.com', NULL);
INSERT INTO `transactions` VALUES (9, 'James', 'Hu', '97', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KPHN_6EGMgbnaSayaM46LBb3sJzMam9tcTuO3l53u9Q35yZ_wY-NevhVdN0SgjGibVS48A0RYtAgFQLu', 'succeeded', '2023-04-19 15:03:15', 'Astrology checkout', 'ch_3MyagmKuZdcMdc5t0v3paYwn', 12, 'automan990923@gmail.com', NULL);
INSERT INTO `transactions` VALUES (10, 'James', 'D', '39', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KKLR_6EGMgat5NB0VvE6LBZwVkoewhkdI9urP07WLrmYi__SHC1rsIOoxbXKfE8wyPWmuC1my8vkZIyc', 'succeeded', '2023-04-19 15:10:27', 'Astrology checkout', 'ch_3MyanmKuZdcMdc5t0f2CxJib', 3, 'automan990923@gmail.com', NULL);
INSERT INTO `transactions` VALUES (11, 'James', 'D', '69', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KOvS_6EGMgYgkg4NROY6LBZBmGxWkBYC-Tw0mGjrQgvWjPaNwOpL87VT7yIvy7gZeJChYC2_hF9hjLQp', 'succeeded', '2023-04-19 15:13:49', 'Astrology checkout', 'ch_3Myar0KuZdcMdc5t1qjLL6oB', 6, 'automan990923@gmail.com', NULL);
INSERT INTO `transactions` VALUES (12, 'James', 'D', '97', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KOzX_6EGMga38HmYyQM6LBbX_YGnMyJb0FaBxn7MOZ5igvII6D4L-HWurr4mRKPAHz0tk9lLY9Q1rX9J', 'succeeded', '2023-04-19 15:24:30', 'Astrology checkout', 'ch_3Myb1LKuZdcMdc5t0FT84qDc', 12, 'test@gmail.com', NULL);
INSERT INTO `transactions` VALUES (13, 'James', 'D', '39', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KOvb_6EGMgYnoCNjl6s6LBbpkJqLvmvs-YE6M5rJGTe6QG_a3wYJyJ8PkhLNCrWbXZNEWz9GMt1-HbTc', 'succeeded', '2023-04-19 15:33:00', 'Astrology checkout', 'ch_3Myb9bKuZdcMdc5t1vKRx5Jt', 3, 'test@gmail.com', NULL);
INSERT INTO `transactions` VALUES (14, 'James', 'D', '97', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KMfl_6EGMgYdIfJuOW06LBZD8r0MirHTp5GXuGFXHHrdVXG7JrjNySajNO1CsoKHqMXwZ7hjIYXG8HeA', 'succeeded', '2023-04-19 15:53:44', 'Astrology checkout', 'ch_3MybTfKuZdcMdc5t1zGS1yaC', 12, 'test@gmail.com', NULL);
INSERT INTO `transactions` VALUES (15, NULL, NULL, NULL, NULL, NULL, '2023-04-20 10:12:33', 'Astrology checkout', NULL, NULL, NULL, NULL);
INSERT INTO `transactions` VALUES (16, NULL, NULL, NULL, NULL, NULL, '2023-04-20 10:13:19', 'Astrology checkout', NULL, NULL, NULL, NULL);
INSERT INTO `transactions` VALUES (17, NULL, NULL, NULL, NULL, NULL, '2023-04-20 10:14:36', 'Astrology checkout', NULL, NULL, NULL, NULL);
INSERT INTO `transactions` VALUES (18, 'James', 'Hu', '69', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KKODhKIGMgY1vqUQpfo6LBZ8QOASDzQwJN4c2ygPnAVym3Gc3MdcqDiy6HZdz1L26kdfnwGaM3ugDCfa', 'succeeded', '2023-04-20 11:09:25', 'Astrology checkout', 'ch_3MytW2KuZdcMdc5t0ZWty6LW', 6, 'automan990923@gmail.com', NULL);
INSERT INTO `transactions` VALUES (19, 'James', 'Hu', '69', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KK-KhKIGMgZ3j5Z_MHw6LBYnzDGcA09xavv-lhrfd63pLtYn5KmL_YOX_1hYb3kRpjoJEiMKwHZlBemL', 'succeeded', '2023-04-20 11:24:33', 'Astrology checkout', 'ch_3MytkhKuZdcMdc5t2k62TKVj', 6, 'automan@gmail.com', NULL);
INSERT INTO `transactions` VALUES (20, 'James', 'Hu', '69', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KL-LhKIGMgb9M-sU3XI6LBaZdC3CQg89uT9QkvKq_IEJVZkF4UxfNWrrz5IlqgS1l8wf_B8pavdG8EkS', 'succeeded', '2023-04-20 11:26:58', 'Astrology checkout', 'ch_3Mytn1KuZdcMdc5t1AKVKaBR', 6, 'automan@gmail.com', NULL);
INSERT INTO `transactions` VALUES (21, 'James', 'Hu', '69', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTW9PRnNLdVpkY01kYzV0KM-MhKIGMgZIWNWYR1w6LBboU43zkZfR9uvNoRyMYSmtzAj9wwkYaciWKnyb2NK3e5Q-eVavI8dkF79T', 'succeeded', '2023-04-20 11:29:21', 'Astrology checkout', 'ch_3MytpKKuZdcMdc5t0rLWeRkJ', 6, 'automan@gmail.com', 2);

-- ----------------------------
-- Table structure for user_contacts
-- ----------------------------
DROP TABLE IF EXISTS `user_contacts`;
CREATE TABLE `user_contacts`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `l_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `street` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `town` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'town',
  `province` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'province',
  `postal_code` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'postal_code',
  `country` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'country_code',
  `apartment` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'apartment',
  `created_at` datetime NULL DEFAULT NULL,
  `question_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `foreign`(`question_id` ASC) USING BTREE,
  CONSTRAINT `foreign` FOREIGN KEY (`question_id`) REFERENCES `user_questions` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_contacts
-- ----------------------------
INSERT INTO `user_contacts` VALUES (1, 'James', 'Hu', 'automan@gmail.com', 'test', 'test', 'test', '000001', 'CA', 'test', '2023-04-20 11:26:58', 4);
INSERT INTO `user_contacts` VALUES (2, 'James', 'Hu', 'automan@gmail.com', 'test', 'test', 'test', '000001', 'CA', 'test', '2023-04-20 11:29:21', 4);

-- ----------------------------
-- Table structure for user_questions
-- ----------------------------
DROP TABLE IF EXISTS `user_questions`;
CREATE TABLE `user_questions`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bith_date` datetime NOT NULL,
  `birth_country` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `birth_town` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `aspects` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'aspects data by json',
  `created_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_questions
-- ----------------------------
INSERT INTO `user_questions` VALUES (4, 'James', '1995-01-02 01:02:00', 'AX', 'CA', '[{\"name\":\"love\",\"value\":\"\"},{\"name\":\"family\",\"value\":\"\"}]', '2023-04-20 11:01:51');

SET FOREIGN_KEY_CHECKS = 1;
