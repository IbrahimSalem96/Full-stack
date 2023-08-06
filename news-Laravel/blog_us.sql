-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 05:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_us`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `parent` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `image`, `parent`, `created_at`, `updated_at`, `deleted_at`, `user_id`) VALUES
(43, 'images/2be277c5-6f47-4265-bb60-d96d17dfb2dbcat-500x80-2.jpg', 0, '2023-02-12 10:02:22', '2023-02-16 11:44:15', NULL, NULL),
(44, 'images/550b9d45-968a-4ab2-bd27-f97ca9b56341cook-2364221_1280 (1).jpg', 0, '2023-02-12 10:03:12', '2023-02-16 11:57:24', NULL, NULL),
(45, 'images/b0ed7e94-03ad-40c4-8867-768ca85b73a9cat-500x80-4.jpg', 0, '2023-02-12 10:04:05', '2023-02-16 11:51:58', NULL, NULL),
(50, 'images/2dfa6727-148b-4409-868c-41ae34f24b67cat-500x80-1.jpg', 0, '2023-02-13 10:33:13', '2023-02-16 11:44:42', NULL, NULL),
(52, 'images/c1908ac2-c4ad-4b25-9f7f-82e6e94dc8c2cat-500x80-3.jpg', 0, '2023-02-13 10:34:30', '2023-02-16 11:45:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `category_id`, `locale`, `title`, `content`) VALUES
(103, 43, 'ar', 'تكنولوجيا المعلومات', 'تكنولوجيا المعلومات  تكنولوجيا المعلومات'),
(104, 43, 'en', 'technology', 'technology technology technology'),
(105, 44, 'ar', 'طعام وصحه', 'طعام وصحه  طعام وصحه'),
(106, 44, 'en', 'Food and health', 'Food and health'),
(107, 45, 'ar', 'دواء وصحه', 'دواء وصحه دواء وصحه'),
(108, 45, 'en', 'Medicine and health', 'Medicine and health'),
(117, 50, 'en', 'Business', 'Business'),
(118, 50, 'ar', 'أعمال', 'أعمال'),
(121, 52, 'en', 'Entertainments', 'Entertainment'),
(122, 52, 'ar', 'ترفيه', 'ترفيه');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `body` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `body`, `created_at`, `updated_at`, `name`) VALUES
(1, 37, 'ddd', '2023-02-16 11:23:37', '2023-02-16 11:23:37', 'ibraheem salem');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_09_095352_create_settings_table', 1),
(6, '2023_02_09_100002_create_setting_translations_table', 1),
(7, '2023_02_09_113125_create_categories_table', 1),
(8, '2023_02_09_113215_create_category_translations_table', 1),
(9, '2023_02_09_113722_create_posts_table', 1),
(10, '2023_02_09_113738_create_post_translations_table', 1),
(11, '2023_02_09_114219_create_tags_table', 1),
(12, '2023_02_09_114434_create_post_tag_table', 1),
(13, '2023_02_11_112151_add_softdelete_to_users_table', 2),
(14, '2023_02_12_115257_create_post_translations_table', 3),
(15, '2023_02_12_154844_add_user_id_to_posts_table', 4),
(16, '2023_02_12_223313_add_user_id_to_categories_table', 5),
(17, '2023_02_15_123839_create_comments_table', 5),
(18, '2023_02_15_130202_add_name_to_comments_table', 5);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `category_id`, `created_at`, `updated_at`, `deleted_at`, `user_id`) VALUES
(14, 'images/d819cd89-7601-4d75-a73d-ad6fb9db0baf240_F_164562000_AuB4fwJAm5KWP9KxpYvXqH86gVDpnRho.jpg', 43, '2023-02-12 10:11:23', '2023-02-16 12:03:30', NULL, 503),
(15, 'images/ca34a1e5-43e3-49c4-b400-f15df5665bb1cook-2364221_1280 (1).jpg', 44, '2023-02-12 10:13:45', '2023-02-16 11:59:51', NULL, 503),
(16, 'images/80159086-3b19-4753-a118-515b8cff5388download (2).jpg', 44, '2023-02-12 11:17:13', '2023-02-12 11:17:18', '2023-02-12 11:17:18', NULL),
(17, 'images/dbc18852-e403-4287-aef0-669e5214bf98download (2).jpg', 44, '2023-02-12 13:00:52', '2023-02-13 16:31:20', '2023-02-13 16:31:20', 503),
(18, 'images/bd7c9916-98a3-47ee-b1d6-1236f558c55ddownload (1).jpg', 44, '2023-02-12 13:08:49', '2023-02-13 16:31:17', '2023-02-13 16:31:17', 506),
(19, 'images/76e5b2e9-7b3f-4be9-8bbb-2c6a86ec00d6download.jpg', 43, '2023-02-12 17:39:09', '2023-02-12 17:40:19', '2023-02-12 17:40:19', 505),
(20, 'images/07df2301-ad86-45f1-bb9d-ad226af33f14download (1).jpg', 44, '2023-02-12 18:31:32', '2023-02-13 16:31:13', '2023-02-13 16:31:13', 505),
(33, 'images/9a8fd41e-7fb6-49c5-b17e-549729290109cat-500x80-1.jpg', 43, '2023-02-13 18:00:07', '2023-02-13 18:00:13', '2023-02-13 18:00:13', 503),
(34, 'images/25ffb617-3db4-489a-a403-e88aaa7a41051000_F_51490712_YGjCvUhtV970HAB6KeB8jgyZbkPLKGvj.jpg', 43, '2023-02-13 18:02:37', '2023-02-16 12:02:47', NULL, 503),
(35, 'images/6ad78cfc-3ffd-466f-89a0-e184e07a8795news-300x300-5.jpg', 44, '2023-02-16 11:09:39', '2023-02-16 12:33:59', '2023-02-16 12:33:59', 503),
(39, 'images/70fd7fe6-fc11-4950-b4e3-a2708697c6d3avatar.png', 44, '2023-02-16 11:39:55', '2023-02-16 11:40:26', '2023-02-16 11:40:26', 503),
(40, 'images/c4dd2b63-0f98-4e41-a922-a5a75010628c240_F_547204627_UjF9y32sL6F4On11b7bDkEkLEhOX2rWj.jpg', 45, '2023-02-16 12:12:18', '2023-02-16 12:12:18', NULL, 503),
(41, 'images/a7be16dd-fc0b-45a8-a2c8-4a5ea95c311e240_F_223123089_xJIFti7j05Jz7NhfGlmJKu8IKXeUDiV1.jpg', 45, '2023-02-16 12:15:06', '2023-02-16 12:33:40', NULL, 503),
(42, 'images/e283b3d1-3b3f-4507-8bb0-c67fe898dc73240_F_295563207_VnAoiTHgS9bk2BNwzuFiaAHnaL3uM2Wh.jpg', 50, '2023-02-16 12:17:24', '2023-02-16 12:17:24', NULL, 503),
(43, 'images/4c30deae-b460-42e6-a2bf-12a51eaceadc240_F_303448308_m1DFu5bUwIGNJiLRYLcuJzxqkQXzshzU.jpg', 50, '2023-02-16 12:20:17', '2023-02-16 12:20:17', NULL, 503),
(44, 'images/bf3f7bef-4051-4186-aae5-705245f63556240_F_309752475_fuHnuSdlpyMA9NLLB1FEofz4846ia7H5.jpg', 52, '2023-02-16 12:23:50', '2023-02-16 12:31:43', NULL, 503);

-- --------------------------------------------------------

--
-- Table structure for table `post_translations`
--

CREATE TABLE `post_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `smallDesc` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_translations`
--

INSERT INTO `post_translations` (`id`, `post_id`, `locale`, `title`, `content`, `smallDesc`, `tags`, `created_at`, `updated_at`) VALUES
(7, 14, 'ar', 'تكنولوجيا', '<p>يرجع تاريخ مصطلح التكنولوجيا إلى أوائل القرن السابع عشر ، وهو يعني \"المعالجة المنهجية\" (من اليونانية Τεχνολογία ، من \"الفن والحرفة\" و -α ، \"الدراسة والمعرفة\"). [4] [5] وقد سبقه في الاستخدام من قبل اليونانية القديمة τέχνη ، وكان يستخدم ليعني \"معرفة كيفية صنع الأشياء\" ، والتي تشمل أنشطة مثل الهندسة المعمارية.</p>', '<p>التكنولوجيا هي تطبيق المعرفة لتحقيق الأهداف العملية بطريقة قابلة للتكرار. [1] يمكن أن تعني كلمة \"التكنولوجيا\" أيضًا المنتجات الناتجة عن هذه الجهود ، [2]: 117 [3] بما في ذلك الأدوات الملموسة مثل الأدوات أو الآلات ، والأدوات غير الملموسة مثل البرامج. تلعب التكنولوجيا دورًا مهمًا في العلوم والهندسة والحياة اليومية.</p>', 'ويكا', NULL, NULL),
(8, 14, 'en', 'Technology', '<p>Technology is a term dating back to the early 17th century that meant \'systematic treatment\' (from Greek Τεχνολογία, from τέχνη \'art, craft\' and -λογία, \'study, knowledge\').[4][5] It is predated in use by the Ancient Greek τέχνη, used to mean \'knowledge of how to make things\', which encompassed activities like architecture.[6]</p>', '<p><strong>Technology</strong> is the application of <a href=\"https://en.wikipedia.org/wiki/Knowledge\">knowledge</a> for achieving practical <a href=\"https://en.wikipedia.org/wiki/Goal\">goals</a> in a <a href=\"https://en.wikipedia.org/wiki/Reproducibility\">reproducible</a> way.<a href=\"https://en.wikipedia.org/wiki/Technology#cite_note-1\">[1]</a> The word <i>technology</i> can also mean the products resulting from such efforts,<a href=\"https://en.wikipedia.org/wiki/Technology#cite_note-:2-2\">[2]</a>: 117 <a href=\"https://en.wikipedia.org/wiki/Technology#cite_note-3\">[3]</a> including both tangible <a href=\"https://en.wikipedia.org/wiki/Tool\">tools</a> such as <a href=\"https://en.wikipedia.org/wiki/Kitchen_utensil\">utensils</a> or <a href=\"https://en.wikipedia.org/wiki/Machine\">machines</a>, and intangible ones such as <a href=\"https://en.wikipedia.org/wiki/Software\">software</a>. Technology plays a critical role in <a href=\"https://en.wikipedia.org/wiki/Science\">science</a>, <a href=\"https://en.wikipedia.org/wiki/Engineering\">engineering</a>, and <a href=\"https://en.wikipedia.org/wiki/Everyday_life\">everyday life</a>.</p><p><br>&nbsp;</p>', 'wiki', NULL, NULL),
(9, 15, 'ar', 'سلامة الغذاء', '<p>لذا اسمحوا لي أن أقدم ضيفي اليوم الذي انضم إلي في الاستوديو لمعالجة مشكلة سلامة الغذاء. أول ما يصل هو تيم سلينجزبي. تيم من مؤسسة Lloyd\'s Register وهو مدير المهارات والتعليم. انضم إلينا من روما ماركوس ليب من منظمة الأمم المتحدة للأغذية والزراعة ، حيث يشغل منصب كبير مسؤولي سلامة الأغذية. تعد شركة Mondelez International واحدة من أكبر العلامات التجارية للمواد الغذائية في العالم. واحدة من تلك الشركات التي ربما لم تسمع بها من قبل ، ولكنها مالكة العلامات التجارية الكبرى مثل Cadbury\'s و Philadelphia و Ritz و Oreos و Toblerone. تبلغ إيرادات الشركة السنوية حوالي 26 مليار دولار وتعمل في حوالي 160 دولة ، ويعمل بها حوالي 83000 شخص. لذلك نحن محظوظون جدًا لأن ينضم إلينا رئيس الاستدامة ، جوناثان هوريل. وأخيراً الدكتور مورجين مثلي الجنس. إنها عالمة مستقبل للطعام وهي في وضع ممتاز لإعطائنا فكرة عما سنأكله في العقود القادمة. مرحبًا بكم جميعًا. شكرًا جزيلاً على حضوركم حول هذه الطاولة هنا. أولا ، سؤال لكم جميعا. لماذا تعتبر سلامة الغذاء مشكلة كبيرة في عام 2020؟ وهل هو يتحسن أم يسوء؟</p>', '<p>ماذا لو أخبرتك أنه في كل عام يصاب 600 مليون شخص بالمرض بسبب شيء ما أكلوه وعلى الرغم من أن 600 مليون ، 420.000 منهم سيموتون؟ هذا يعني أن أكثر من 1100 شخص يموتون كل يوم لمجرد أن الطعام ملوث. ثم هناك 820 مليون شخص ينامون جائعين كل ليلة بينما يضيع ثلث الطعام المنتج حول العالم. مرحبًا بكم في Global Safety Podcast ، وهو بودكاست جديد تمامًا من مؤسسة Lloyd\'s Register Foundation ، وهي مؤسسة خيرية تهدف إلى حماية سلامة الأرواح والممتلكات. في حلقة اليوم ، نناقش أمن طعامنا. سنسمع من منظمة الصحة العالمية الذين يقفون على الخط الأمامي للمشكلة.</p>', 'lrfoundation', NULL, NULL),
(10, 15, 'en', 'Food Safety', '<p>&nbsp;So let me introduce my guest today joining me in the studio to tackle the problem of food safety. First up is Tim Slingsby. Tim is from Lloyd\'s Register Foundation and is their director of skills and education. We\'re joined from Rome by Marcus Leape from the United Nations Food and Agriculture Organization, where he\'s a senior food safety officer. Mondelez International is one of the world\'s largest food brands. One of those companies you may not have heard of, but is the owner of big brands like Cadbury\'s, Philadelphia, Ritz, Oreos and Toblerone. The company has an annual revenue of about 26 billion dollars and operates in approximately 160 countries, employing around 83000 people. So we\'re very lucky to be joined by the head of sustainability, Jonathan Hurrell. And finally, Dr. Morgaine gay. She\'s a food futurologist and is superbly placed to give us an idea of what we\'ll be eating in the coming decades. Welcome, everyone. Thank you very much for coming around this table here. So first, a question to all of you. Why in 2020 is food safety such a huge problem? And is it getting better or worse?<br>&nbsp;</p>', '<p>&nbsp;What if I told you that each year 600 million people fall ill because of something they\'ve eaten and although 600 million, 420,000 of them will die? That is just over 1,100 people dying every day simply because of contaminated food. And then there\'s the 820 million people who go to bed hungry every night whilst a third of all food produced around the world is wasted. Welcome to the Global Safety Podcast, a brand new podcast from Lloyd\'s Register Foundation, a charity with the aim of protecting the safety of life and property. In today\'s episode, we discuss the security of our food. We\'ll hear from the World Health Organization who are on the front line of the problem.<br>&nbsp;</p>', 'مؤسسة lr', NULL, NULL),
(11, 16, 'ar', 'tt', '<p>tt</p>', '<p>tt</p>', 'tt', NULL, NULL),
(12, 16, 'en', 'tt', '<p>tt</p>', '<p>ttt</p>', 'tt', NULL, NULL),
(13, 17, 'en', 'health', '<p>health</p>', '<p>health</p>', 'health', NULL, NULL),
(14, 17, 'ar', 'صحه', '<p>صحه</p>', '<p>صحه</p>', 'صحه', NULL, NULL),
(15, 18, 'en', 'ss', '<p>sss</p>', '<p>sss</p>', 'ss', NULL, NULL),
(16, 18, 'ar', 'ssss', '<p>sss</p>', '<p>sss</p>', 'sss', NULL, NULL),
(17, 19, 'en', 'ss', '<p>ss</p>', '<p>ss</p>', 'sss', NULL, NULL),
(18, 19, 'ar', 'ss', '<p>ss</p>', '<p>ss</p>', 'ss', NULL, NULL),
(19, 20, 'en', 'sss', '<p>sss</p>', '<p>ss</p>', 'sss', NULL, NULL),
(20, 20, 'ar', 'sss', '<p>ss</p>', '<p>sss</p>', 'sss', NULL, NULL),
(25, 33, 'en', NULL, NULL, NULL, NULL, '2023-02-13 18:00:07', '2023-02-13 18:00:07'),
(26, 33, 'ar', NULL, NULL, NULL, NULL, '2023-02-13 18:00:07', '2023-02-13 18:00:07'),
(27, 34, 'en', 'Technology', '<p>SSS</p>', '<p>SSS</p>', 'SSS', '2023-02-13 18:02:37', '2023-02-13 18:02:37'),
(28, 34, 'ar', 'SSS', '<p>SSS</p>', '<p>SSS</p>', 'SSS', '2023-02-13 18:02:37', '2023-02-13 18:02:37'),
(29, 35, 'en', 'ss', '<p>s</p>', '<p>ss</p>', 'ss', '2023-02-16 11:09:39', '2023-02-16 11:09:39'),
(30, 35, 'ar', 'ss', '<p>ss</p>', '<p>sss</p>', 'ss', '2023-02-16 11:09:39', '2023-02-16 11:09:39'),
(37, 39, 'en', 'delete', '<p>delete</p>', '<p>delete</p>', 'delete', '2023-02-16 11:39:55', '2023-02-16 11:39:55'),
(38, 39, 'ar', 'delete', '<p>delete</p>', '<p>delete</p>', 'delete', '2023-02-16 11:39:55', '2023-02-16 11:39:55'),
(39, 40, 'en', 'Health News', '<p>So, if you’re looking to give your business an advantage in 2021, or finally start that business you’ve been thinking about, then heading online is actually a great place to start. From general business tips and funny entrepreneurial quips to legitimately invaluable advice and how-to guides, business blogs have everything you could ever want. In fact, a study done by <a href=\"https://quickbooks.intuit.com/cas/dam/IMAGE/A1Eap3mEl/Whats_next_for_the_small_business_economy-Sept_2020.pdf\">QuickBooks</a> suggests that almost half of all ready-to-start entrepreneurs rely solely on business blogs and websites for their information. (No business degrees required.)</p><p><br>&nbsp;</p>', '<p>Plenty of medical institutions have blogs, but <a href=\"https://blog.cedars-sinai.edu/\">Cedars-Sinai’s</a> stands out for covering genuinely interesting topics. Instead of numerous posts about their faculty and facilities, expect to read about health topics relevant to just about everyone.</p><p><br>&nbsp;</p><p><br>&nbsp;</p>', 'health', '2023-02-16 12:12:18', '2023-02-16 12:12:18'),
(40, 40, 'ar', 'أخبار الصحة', '<p>لذلك ، إذا كنت تتطلع إلى منح نشاطك التجاري ميزة في عام 2021 ، أو تبدأ أخيرًا هذا النشاط التجاري الذي كنت تفكر فيه ، فإن التوجه عبر الإنترنت هو في الواقع مكان رائع للبدء. من النصائح التجارية العامة والمزاح الريادية المضحكة إلى النصائح التي لا تقدر بثمن والأدلة الإرشادية ، تحتوي مدونات الأعمال على كل ما تريده. في الواقع ، تشير دراسة أجرتها شركة QuickBooks إلى أن ما يقرب من نصف رواد الأعمال الجاهزين للبدء يعتمدون فقط على مدونات ومواقع الأعمال للحصول على معلوماتهم. (لا يشترط الحصول على درجات علمية في مجال الأعمال).</p>', '<p>تمتلك الكثير من المؤسسات الطبية مدونات ، لكن Cedars-Sinai تتميز بتغطية موضوعات مثيرة للاهتمام حقًا. بدلاً من المنشورات العديدة حول أعضاء هيئة التدريس والمرافق الخاصة بهم ، توقع أن تقرأ عن الموضوعات الصحية ذات الصلة بالجميع تقريبًا.</p>', 'صحه', '2023-02-16 12:12:18', '2023-02-16 12:12:18'),
(41, 41, 'en', 'Health Essentials', '<p>This <a href=\"http://www.npr.org/sections/health-shots/\">health blog</a> from NPR takes a fairly broad look at the medical world, so there’s something for everyone. In addition to the typical news, there’s also some commentary about the intersection of health and pop culture, plus the occasional feel-good piece.</p>', '<p>&nbsp;This <a href=\"http://www.npr.org/sections/health-shots/\">health blog</a> from NPR takes a fairly broad look at the medical world, so there’s something for everyone. In addition to the typical news, there’s also some commentary about the intersection of health and pop culture, plus the occasional feel-good piece.</p>', 'health', '2023-02-16 12:15:06', '2023-02-16 12:15:06'),
(42, 41, 'ar', 'أساسيات الصحة', '<p>تلقي هذه المدونة الصحية من NPR نظرة شاملة إلى حد ما على عالم الطب ، لذلك هناك شيء للجميع. بالإضافة إلى الأخبار النموذجية ، هناك أيضًا بعض التعليقات حول التقاطع بين الصحة وثقافة البوب ​​، بالإضافة إلى قطعة عرضية تشعرك بالسعادة.</p>', '<p>تلقي هذه المدونة الصحية من NPR نظرة شاملة إلى حد ما على عالم الطب ، لذلك هناك شيء للجميع. بالإضافة إلى الأخبار النموذجية ، هناك أيضًا بعض التعليقات حول التقاطع بين الصحة وثقافة البوب ​​، بالإضافة إلى قطعة عرضية تشعرك بالسعادة.</p>', 'صحه', '2023-02-16 12:15:06', '2023-02-16 12:15:06'),
(43, 42, 'en', 'business', '<p>I’m not sure missionaries are always aware of the trap of seeking others’ approval, especially when it feels good to have them accept your message and when it appears strategic to reach a broader community.[1] But when we read Paul’s Corinthian correspondence, we discover that he was extremely careful while working in a culture eager…</p>', '<p>I’m not sure missionaries are always aware of the trap of seeking others’ approval, especially when it feels good to have them accept your message and when it appears strategic to reach a broader community.[1] But when we read Paul’s Corinthian correspondence, we discover that he was extremely careful while working in a culture eager…</p>', 'business', '2023-02-16 12:17:24', '2023-02-16 12:17:24'),
(44, 42, 'ar', 'عمل', '<p>لست متأكدًا من أن المبشرين دائمًا على دراية بفخ السعي للحصول على موافقة الآخرين ، خاصة عندما يكون من الجيد جعلهم يقبلون رسالتك وعندما يبدو الوصول إلى مجتمع أوسع أمرًا استراتيجيًا. [1] ولكن عندما قرأنا مراسلات بولس الكورنثية ، اكتشفنا أنه كان حريصًا للغاية أثناء العمل في ثقافة حريصة ...</p>', '<p>لست متأكدًا من أن المبشرين دائمًا على دراية بفخ السعي للحصول على موافقة الآخرين ، خاصة عندما يكون من الجيد جعلهم يقبلون رسالتك وعندما يبدو الوصول إلى مجتمع أوسع أمرًا استراتيجيًا. [1] ولكن عندما قرأنا مراسلات بولس الكورنثية ، اكتشفنا أنه كان حريصًا للغاية أثناء العمل في ثقافة حريصة ...</p>', 'عمل', '2023-02-16 12:17:24', '2023-02-16 12:17:24'),
(45, 43, 'en', 'E-business', '<p>WIKA has been using the latest technologies and optimised processes very successfully since many years to cover the versatile requirements of the market. Our goal is to provide 24/7 support of a fully-automated process between the involved systems to exchange electronic business documents.</p><p><br>&nbsp;</p>', '<p>WIKA has been using the latest technologies and optimised processes very successfully since many years to cover the versatile requirements of the market. Our goal is to provide 24/7 support of a fully-automated process between the involved systems to exchange electronic business documents.</p><p><br>&nbsp;</p>', 'business', '2023-02-16 12:20:17', '2023-02-16 12:20:17'),
(46, 43, 'ar', 'الأعمال الإلكترونية', '<p>تستخدم WIKA أحدث التقنيات والعمليات المحسنة بنجاح كبير منذ سنوات عديدة لتغطية المتطلبات المتنوعة للسوق. هدفنا هو توفير دعم على مدار الساعة طوال أيام الأسبوع لعملية مؤتمتة بالكامل بين الأنظمة المعنية لتبادل مستندات الأعمال الإلكترونية.</p>', '<p>تستخدم WIKA أحدث التقنيات والعمليات المحسنة بنجاح كبير منذ سنوات عديدة لتغطية المتطلبات المتنوعة للسوق. هدفنا هو توفير دعم على مدار الساعة طوال أيام الأسبوع لعملية مؤتمتة بالكامل بين الأنظمة المعنية لتبادل مستندات الأعمال الإلكترونية.</p>', 'عمل', '2023-02-16 12:20:17', '2023-02-16 12:20:17'),
(47, 44, 'en', 'entertainment', '<p>Articles celebrate geek culture, including news about cult movies and TV shows. Opinion pieces review new and upcoming books, comics, and movies in the geek world along with popular clothing, collectibles, toys, and games.</p>', '<p>Articles celebrate geek culture, including news about cult movies and TV shows. Opinion pieces review new and upcoming books, comics, and movies in the geek world along with popular clothing, collectibles, toys, and games.</p><p>&nbsp;</p>', 'entertainment', '2023-02-16 12:23:50', '2023-02-16 12:23:50'),
(48, 44, 'ar', 'ترفيه', '<p>المقالات تحتفل بثقافة المهووسين ، بما في ذلك الأخبار عن الأفلام والبرامج التلفزيونية. تستعرض مقالات Opinion الكتب والكوميديا ​​والأفلام الجديدة والقادمة في عالم المهووسين جنبًا إلى جنب مع الملابس والمقتنيات والألعاب والألعاب الشعبية.</p>', '<p>المقالات تحتفل بثقافة المهووسين ، بما في ذلك الأخبار عن الأفلام والبرامج التلفزيونية. تستعرض مقالات Opinion الكتب والكوميديا ​​والأفلام الجديدة والقادمة في عالم المهووسين جنبًا إلى جنب مع الملابس والمقتنيات والألعاب والألعاب الشعبية.</p>', 'ترفيه', '2023-02-16 12:23:50', '2023-02-16 12:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `facebook`, `instagram`, `phone`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'images/6df2f60b-bcbf-412f-b3d9-2e58dcdf5f56avatar-03.png', 'images/cfedd4f5-8a8d-4c13-a43c-2f49bb6316e8avatar-03.png', 'Facebook Facebook Facebook', 'Instagram Instagram Instagram', NULL, NULL, '2023-02-09 18:48:29', '2023-02-10 08:37:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting_translations`
--

CREATE TABLE `setting_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `setting_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_translations`
--

INSERT INTO `setting_translations` (`id`, `setting_id`, `locale`, `title`, `content`, `address`) VALUES
(1, 1, 'ar', 'العربية', 'ff', 'hia'),
(2, 1, 'en', 'English', 'fff', 'asda'),
(3, 1, 'fr', 'frensh', 'ff', NULL);

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
  `status` enum('writer','admin') DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(503, 'Ibraheem salem', 'ebrheem-salem@hotmail.com', NULL, '$2y$10$QIX4JzQ3812uymJ5lUVdy.XdtfTHbpq1hglqHfBwrrz1GiZwjiDyK', 'admin', NULL, '2023-02-11 08:26:47', '2023-02-12 17:34:00', NULL),
(505, 'Ahmmad Salem', 'ahmad-salem@hotmail.com', NULL, '$2y$10$QIX4JzQ3812uymJ5lUVdy.XdtfTHbpq1hglqHfBwrrz1GiZwjiDyK', 'writer', NULL, NULL, '2023-02-12 17:56:59', NULL),
(506, 'ali salem', 'ali-salem@hotmail.com', NULL, '$2y$10$jx.W58T5qjxgG1KvyXsaYODKRPfcS37tp1ha1kUR7rsC7zBCdqscy', NULL, NULL, '2023-02-11 10:29:31', '2023-02-12 17:58:52', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_translations_category_id_locale_unique` (`category_id`,`locale`),
  ADD KEY `category_translations_locale_index` (`locale`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `post_translations`
--
ALTER TABLE `post_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_translations_post_id_locale_unique` (`post_id`,`locale`),
  ADD KEY `post_translations_locale_index` (`locale`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`),
  ADD KEY `setting_translations_locale_index` (`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `post_translations`
--
ALTER TABLE `post_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=507;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_translations`
--
ALTER TABLE `post_translations`
  ADD CONSTRAINT `post_translations_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD CONSTRAINT `setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
