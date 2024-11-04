-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2024 at 09:16 AM
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
-- Database: `computerinstituteindelhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_image` varchar(255) DEFAULT 'default_image.jpg',
  `course_title` varchar(255) NOT NULL,
  `course_desc` text NOT NULL,
  `course_content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_image`, `course_title`, `course_desc`, `course_content`, `created_at`, `updated_at`, `course_url`) VALUES
(113, '66dceabd3e4ba_nice_computer_institute.jpeg', 'Basic', 'The Basic Computer Course is designed for individuals who are new to computers or want to improve their foundational skills. It provides a comprehensive understanding of essential computer operations, commonly used software, and the internet. Upon completing this course, students will have the confidence to use computers effectively for personal, academic, or professional purposes.\r\n\r\nDuration: 4 months\r\nMode: Classroom/Online\r\nCertification: Yes', 'Course Content:\r\n1. Introduction to Computers\r\nWhat is a Computer? – Definition, types (desktop, laptop), and applications\r\nComponents of a Computer – Hardware and software overview\r\nBasic Terminology – Understanding terms like CPU, RAM, storage, peripherals, etc.\r\n2. Operating Systems (Windows/Linux)\r\nUnderstanding Operating Systems – What is an OS, types, and functions\r\nBasic Navigation – Desktop environment, icons, taskbar, start menu, system settings\r\nFile Management – Creating, saving, deleting, and organizing files and folders\r\nBasic Troubleshooting – Restart, shutdown, task manager, installing/uninstalling programs\r\n3. Microsoft Office Suite\r\nMicrosoft Word – Creating, formatting, and saving documents, using templates, printing, basic editing features\r\nMicrosoft Excel – Introduction to spreadsheets, entering data, formulas, basic functions, creating simple charts\r\nMicrosoft PowerPoint – Creating slides, adding text/images, slide transitions, and presenting\r\n4. Internet and Email\r\nIntroduction to the Internet – Browsers, search engines, URLs, opening and navigating websites\r\nInternet Safety – Importance of security, strong passwords, identifying phishing emails, and cyber safety practices\r\nCreating and Managing an Email Account – Sending, receiving, and organizing emails, attaching files\r\nSocial Media Basics – Introduction to platforms like Facebook, Instagram, and LinkedIn\r\n5. Introduction to Digital Literacy\r\nUsing Search Engines Effectively – How to search for information online, understanding search results\r\nIntroduction to Cloud Storage – Google Drive, Dropbox, etc., saving and sharing files online\r\nBasic Online Communication Tools – Introduction to WhatsApp, Zoom, Google Meet for online interactions\r\n6. Basics of Digital Transactions\r\nIntroduction to Online Banking – Mobile banking, using payment apps like Paytm, Google Pay, and UPI for transactions\r\nOnline Shopping – Understanding e-commerce platforms, how to order, payment methods, tracking deliveries\r\n7. Practical Assignments and Projects\r\nTyping Practice – Improving speed and accuracy with typing tutor software\r\nCreating Documents – Practical assignments using Microsoft Word and Excel\r\nInternet Search Exercises – Finding information online and using email\r\n8. Introduction to Basic Graphic Design (Optional)\r\nBasic Image Editing – Using tools like Microsoft Paint, basic introduction to Canva for creating social media posts\r\nLearning Outcomes\r\nBy the end of the course, students will:\r\n\r\nUnderstand how to operate a computer and perform basic tasks.\r\nBe able to use Microsoft Office tools (Word, Excel, PowerPoint) for daily tasks.\r\nNavigate the internet confidently and securely.\r\nManage and operate an email account for communication.\r\nConduct basic digital transactions safely.', '2024-09-07 18:37:26', '2024-09-07 19:05:39', ''),
(114, '66dcf2a9e114a_nice_computer_institute3.jpeg', 'Tally Prime', 'This Tally Prime course is designed for students and professionals who want to manage accounts, inventory, payroll, GST, TDS, and taxation efficiently. The program will provide you with practical skills in using Tally Prime software, the latest version of Tally, a widely used accounting and business management software in India.\r\n\r\nWho Should Enroll:\r\nBusiness Owners\r\nAccounting Students\r\nProfessionals in Finance and Accounting\r\nEntrepreneurs\r\nAnyone looking to learn Tally for career advancement', 'Module 1: Introduction to Tally Prime\r\nWhat is Tally Prime?\r\nInstallation & Features\r\nUnderstanding the interface\r\nModule 2: Company Creation and Configuration\r\nCreate and manage multiple companies\r\nSetting up company details (GST, TDS, etc.)\r\nSecurity management in Tally Prime\r\nModule 3: Accounting Management\r\nAccounting Groups & Ledgers\r\nVoucher entries and types (Sales, Purchase, Payment, Receipt)\r\nManaging daybook and accounting reports\r\nBudgeting & controls in Tally\r\nBank reconciliation\r\nModule 4: Inventory Management\r\nStock Group, Stock Categories, Stock Items\r\nUnits of measure, Godowns, Batches\r\nPurchase & Sales Orders Processing\r\nInventory Vouchers\r\nModule 5: Taxation (GST, TDS, and TCS)\r\nConfiguring GST in Tally Prime\r\nGST Returns and adjustments\r\nTDS management\r\nTCS setup and reporting\r\nModule 6: Payroll Management\r\nEmployee data setup\r\nSalary and payroll processing\r\nStatutory compliance for payroll (EPF, ESI)\r\nGenerating payroll reports\r\nModule 7: MIS Reports and Analysis\r\nFinancial reports (Profit & Loss, Balance Sheet)\r\nRatio Analysis and Cost Centres\r\nBudgeting and Variance Reports\r\nCash Flow and Fund Flow Analysis\r\nModule 8: Advanced Features\r\nBackup, Restore, and Data Management\r\nMulti-currency management\r\nBanking transactions (E-payments, Cheques)\r\nAudit and security features\r\nBenefits of Tally Prime Course:\r\nHands-on training with real-life business scenarios\r\nLearn to handle accounting, inventory, and payroll efficiently\r\nExpertise in GST and tax compliance\r\nCertification upon course completion\r\nCareer-oriented training suitable for both beginners and professionals\r\nThis course is ideal for anyone looking to build a career in accounting, business management, or finance, offering comprehensive training on Tally Prime software.', '2024-09-07 19:11:13', '2024-09-07 19:11:13', ''),
(115, '66dcf4a54e9c8_Nice_computer_Insitute.jpeg', 'Advance Excel', 'Advanced Excel Course: Overview\r\nThe Advanced Excel Course is crafted for individuals who already have a basic understanding of Excel and wish to elevate their skills to an advanced level. This comprehensive course covers advanced functions, data analysis, and automation techniques including Macros and VBA. Students will gain the expertise to manage complex data, automate repetitive tasks, and create sophisticated reports.\r\n\r\nDuration: 3 months\r\nMode: Classroom/Online\r\nCertification: Yes', '1. Advanced Excel Functions and Formulas\r\nComplex Formulas – Nested IF statements, array formulas\r\nLookup Functions – Advanced VLOOKUP, HLOOKUP, INDEX-MATCH combinations\r\nData Analysis Functions – SUMIFS, COUNTIFS, AVERAGEIFS\r\nText Functions – Advanced text manipulation: LEFT, RIGHT, MID, FIND, SUBSTITUTE\r\n2. Data Analysis and Visualization\r\nPivot Tables – Creating, customizing, and analyzing data with Pivot Tables\r\nPivot Charts – Building and modifying Pivot Charts for dynamic visualizations\r\nAdvanced Charting Techniques – Using combination charts, secondary axes, and trendlines\r\nConditional Formatting – Advanced rules, color scales, and icon sets\r\n3. Data Management and Validation\r\nData Consolidation – Merging data from multiple sources\r\nData Validation – Creating dropdown lists, validation rules, and error messages\r\nDynamic Ranges – Using named ranges and dynamic data ranges for charts and formulas\r\nData Import and Export – Importing data from external sources, exporting data to various formats\r\n4. Introduction to Macros\r\nRecording Macros – How to record and execute Macros\r\nEditing Macros – Basic VBA code editing to customize recorded Macros\r\nAssigning Macros – Creating buttons and shortcuts for running Macros\r\n5. Advanced VBA Programming\r\nVBA Basics – Introduction to the VBA editor, understanding variables and data types\r\nControl Structures – Using loops (For, Do While) and conditional statements (If, Select Case)\r\nUser Forms – Designing and using forms for data entry and interaction\r\nError Handling – Debugging VBA code and managing errors\r\n6. Automating Reports and Workflows\r\nCreating Automated Reports – Generating and formatting reports automatically\r\nEmail Automation – Sending automated emails with Excel data\r\nInteracting with Other Office Applications – Integrating Excel with Word and Outlook\r\n7. Advanced Data Analysis Tools\r\nSolver – Optimization problems and scenarios\r\nGoal Seek – Solving equations by finding input values\r\nScenario Manager – Creating and analyzing different scenarios for decision making\r\n8. Practical Assignments and Projects\r\nCase Studies – Real-world scenarios and exercises to apply advanced techniques\r\nProject Work – Comprehensive project involving data analysis, reporting, and automation\r\nExcel Dashboard Creation – Designing interactive dashboards for data visualization\r\nLearning Outcomes\r\nBy the end of the course, students will:\r\n\r\nMaster advanced Excel functions and formulas for complex data analysis.\r\nCreate and manage Pivot Tables and Pivot Charts for insightful data visualization.\r\nUtilize Macros and VBA to automate tasks and enhance productivity.\r\nDesign automated reports and integrate Excel with other Office applications.\r\nHandle advanced data management, validation, and analysis tools effectively.', '2024-09-07 19:19:41', '2024-09-12 18:14:55', 'advance-excel'),
(116, '66e0fccd766ad_new_nice_computers.jpg', 'Graphic Design', '<h1 class=\"text-center mb-4\">Unlock Your Creative Potential with Our Graphic Design Program</h1>\r\n    <h2 class=\"text-center mb-4\"><span class=\"highlight\">Best Graphic Design Institute in Jahangirpuri</span></h2>', '<div class=\"container py-5\">\r\n    <div class=\"row mb-5\">\r\n \r\n            <h3>About the Course</h3>\r\n            <p>\r\n                Our Graphic Design course is carefully crafted to provide a comprehensive understanding of design principles, \r\n                industry-standard software, and hands-on experience. Whether you are a beginner or seeking to enhance your existing skills, \r\n                our program caters to all levels of expertise.\r\n            </p>\r\n        </div>\r\n    \r\n    </div>\r\n\r\n    <div class=\"row mb-5\">\r\n        <div class=\"col-md-12\">\r\n            <h3>Program Highlights:</h3>\r\n            <ul class=\"list-group list-group-flush\">\r\n                <li class=\"list-group-item\">Hands-On Projects: Engage in real-world design projects to apply your skills and build a compelling portfolio.</li>\r\n                <li class=\"list-group-item\">Expert Faculty: Learn from experienced instructors passionate about nurturing creative talent.</li>\r\n                <li class=\"list-group-item\">State-of-the-Art Facilities: Dynamic learning environment with cutting-edge design labs and software.</li>\r\n                <li class=\"list-group-item\">Internship Opportunities: Gain practical experience through internship placements, connecting classroom learning to the professional world.</li>\r\n            </ul>\r\n        </div>\r\n    </div>\r\n\r\n    <div class=\"row mb-5\">\r\n        <div class=\"col-md-12\">\r\n            <h3>Curriculum Overview</h3>\r\n            <p>Our curriculum covers a wide range of topics, including:</p>\r\n            <ul class=\"list-group list-group-flush\">\r\n                <li class=\"list-group-item\">Fundamentals of Design: Layout, typography, and color theory.</li>\r\n                <li class=\"list-group-item\">Digital Imaging: Manipulate and enhance images using industry-standard software.</li>\r\n                <li class=\"list-group-item\">Web Design: Learn to design engaging and user-friendly websites.</li>\r\n                <li class=\"list-group-item\">Print Design: Create visually striking print materials like brochures and posters.</li>\r\n                <li class=\"list-group-item\">Branding and Identity: Create cohesive brand identities for businesses and organizations.</li>\r\n            </ul>\r\n        </div>\r\n    </div>\r\n\r\n    <div class=\"row mb-5\">\r\n        <div class=\"col-md-12\">\r\n            <h3>Admission Requirements</h3>\r\n            <ul class=\"list-group list-group-flush\">\r\n                <li class=\"list-group-item\">Passion for design and creativity.</li>\r\n                <li class=\"list-group-item\">Basic computer literacy.</li>\r\n                <li class=\"list-group-item\">No prior design experience required.</li>\r\n            </ul>\r\n        </div>\r\n    </div>\r\n\r\n   <div class=\"row mb-5 apply-now-section py-5 animate__animated animate__fadeInUp\" style=\"background-color: #1a1a1a; border-radius: 15px;\">\r\n    <div class=\"col-md-12 text-center\">\r\n        <h3 class=\"mb-4\" style=\"font-size: 2rem; font-weight: 700; color: #f0f0f0;\">\r\n            Apply Now\r\n        </h3>\r\n        <p class=\"mb-4\" style=\"font-size: 1.2rem; color: #e0e0e0;\">\r\n            Ready to turn your passion for design into a fulfilling career? Apply now to join the Best Graphic Design Institute in Jahangirpuri.\r\n        </p>\r\n        <a href=\"contact_us_page.html\" class=\"btn btn-light btn-lg px-4 py-2 me-3 animate__animated animate__pulse animate__infinite\" style=\"border-radius: 50px; font-size: 1rem;\">\r\n            Contact Admissions\r\n        </a>\r\n        <a href=\"https://maps.app.goo.gl/XmA73XpTiUxhwnXw6\" class=\"btn btn-outline-light btn-lg px-4 py-2 animate__animated animate__pulse animate__infinite\" style=\"border-radius: 50px; font-size: 1rem;\">\r\n            Schedule a Visit\r\n        </a>\r\n    </div>\r\n</div>\r\n\r\n\r\n\r\n    <div class=\"row mb-5\">\r\n        <div class=\"col-md-12\">\r\n            <h3>Graphic Design Concepts & Practices</h3>\r\n            <ul class=\"list-group list-group-flush\">\r\n                <li class=\"list-group-item\">Elements of Design: Typography, color, and layout.</li>\r\n                <li class=\"list-group-item\">Page Layout: Create industry-standard layouts with text, color, and graphics.</li>\r\n                <li class=\"list-group-item\">Photoshop: Master photo retouching, graphic creation, and image adjustment for web and print.</li>\r\n                <li class=\"list-group-item\">InDesign, Illustrator, and Photoshop: Create logos, social media graphics, book covers, and more.</li>\r\n                <li class=\"list-group-item\">Portfolio Creation: Develop a professional portfolio showcasing logos, posters, and event designs.</li>\r\n            </ul>\r\n        </div>\r\n    </div>\r\n\r\n</div>', '2024-09-10 20:43:34', '2024-09-12 18:46:35', 'graphic-design');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_24_161407_create_courses_table', 2),
(6, '2024_04_24_162313_create_about_table', 3),
(8, '2024_09_08_054920_update_courses_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
