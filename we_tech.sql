-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 07:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `we_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(500) NOT NULL,
  `admin_phn` varchar(50) NOT NULL,
  `admin_image` varchar(500) NOT NULL,
  `admin_pass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_phn`, `admin_image`, `admin_pass`) VALUES
(1, 'Rezowaunur Rahman Robin', '01795371964', 'admin.png', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `career_id` int(11) NOT NULL,
  `career_language` varchar(100) NOT NULL,
  `career_title` varchar(100) NOT NULL,
  `career_duties` varchar(2000) NOT NULL,
  `career_educational` varchar(2000) NOT NULL,
  `career_qualification` varchar(2000) NOT NULL,
  `career_app_ins` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`career_id`, `career_language`, `career_title`, `career_duties`, `career_educational`, `career_qualification`, `career_app_ins`) VALUES
(1, 'React,Node', 'Lead Software Engineer', '<ol>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalents.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>Must be familiar with any major programming language like C/C++, C#, Java, PHP, etc.</li>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalent.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>Must be familiar with any major programming language like C/C++, C#, Java, PHP, etc.</li>\r\n</ol>', '<ol>\r\n<li>4+ years of experience in related field.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalent.</li>\r\n</ol>', '<ol>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalent.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>Must be familiar with any major programming language like C/C++, C#, Java, PHP, etc.</li>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalent.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>Must be familiar with any major programming language like C/C++, C#, Java, PHP, etc.</li>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalent.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>Must be familiar with any major programming language like C/C++, C#, Java, PHP, etc.</li>\r\n</ol>', '<ol>\r\n<ol>If you meet the above requirements, please send us your updated resume to the following email address:</ol>\r\n</ol>\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; career@wetechbd.com</strong></p>\r\n<ol>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Please write in the subject &ldquo;Application for Project Lead&rdquo; Only short listed candidates will be called for interview.</ol>\r\n<p>&nbsp;</p>'),
(3, 'Python,Django', 'Software Engineer', '<ol>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalents.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>Must be familiar with any major programming language like C/C++, C#, Java, PHP, etc.</li>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalent.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>Must be familiar with any major programming language like C/C++, C#, Java, PHP, etc.</li>\r\n</ol>', '<ol>\r\n<li>4+ years of experience in related field.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalent.</li>\r\n</ol>', '<ol>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalent.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>Must be familiar with any major programming language like C/C++, C#, Java, PHP, etc.</li>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalent.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>Must be familiar with any major programming language like C/C++, C#, Java, PHP, etc.</li>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalent.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>Must be familiar with any major programming language like C/C++, C#, Java, PHP, etc.</li>\r\n</ol>', '<ol>\r\n<ol>If you meet the above requirements, please send us your updated resume to the following email address:</ol>\r\n</ol>\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; career@wetechbd.com</strong></p>\r\n<ol>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Please write in the subject &ldquo;Application for Project Lead&rdquo; Only short listed candidates will be called for interview.</ol>\r\n<p>&nbsp;</p>'),
(4, 'Figba,Adobe xd,Photoshp,Illustrator', 'Graphics Designer', '<ol>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalents.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>Must be familiar with any major programming language like C/C++, C#, Java, PHP, etc.</li>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalent.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>Must be familiar with any major programming language like C/C++, C#, Java, PHP, etc.</li>\r\n</ol>', '<ol>\r\n<li>4+ years of experience in related field.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalent.</li>\r\n</ol>', '<ol>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalent.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>Must be familiar with any major programming language like C/C++, C#, Java, PHP, etc.</li>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalent.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>Must be familiar with any major programming language like C/C++, C#, Java, PHP, etc.</li>\r\n<li>B.Sc or M.Sc in Computer Science/Engineering or equivalent.</li>\r\n<li>Proven experience of leading a team of software Engineers including performance, development and disciplinary issues.</li>\r\n<li>Must be familiar with any major programming language like C/C++, C#, Java, PHP, etc.</li>\r\n</ol>', '<ol>\r\n<ol>If you meet the above requirements, please send us your updated resume to the following email address:</ol>\r\n</ol>\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; career@wetechbd.com</strong></p>\r\n<ol>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Please write in the subject &ldquo;Application for Project Lead&rdquo; Only short listed candidates will be called for interview.</ol>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`) VALUES
(2, 'Web'),
(3, 'Mobile'),
(4, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `c_id` int(100) NOT NULL,
  `c_title` varchar(100) NOT NULL,
  `c_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`c_id`, `c_title`, `c_img`) VALUES
(3, 'Client 1', 'download.png'),
(4, 'Client 2', 'e92e58ec9d338a234945ae3d3ffd5be3.jpg'),
(5, 'Client 3', 'luxury-beauty-logo-mockup_4513-551.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `p_id` int(100) NOT NULL,
  `p_title` varchar(100) NOT NULL,
  `p_desc` varchar(2000) NOT NULL,
  `p_category` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`p_id`, `p_title`, `p_desc`, `p_category`) VALUES
(14, 'PRIME EDU', '<h3 class=\"css-17jiu04\">A Stateful Component</h3>\r\n<div>\r\n<p>In addition to taking input data (accessed via&nbsp;<code class=\"gatsby-code-text\">this.props</code>), a component can maintain internal state data (accessed via&nbsp;<code class=\"gatsby-code-text\">this.state</code>). When a component&rsquo;s state data changes, the rendered markup will be updated by re-invoking&nbsp;<code class=\"gatsby-code-text\">render()</code>.</p>\r\n<p>&nbsp;</p>\r\n<h3 class=\"css-17jiu04\">An Application</h3>\r\n<div>\r\n<p>Using&nbsp;<code class=\"gatsby-code-text\">props</code>&nbsp;and&nbsp;<code class=\"gatsby-code-text\">state</code>, we can put together a small Todo application. This example uses&nbsp;<code class=\"gatsby-code-text\">state</code>&nbsp;to track the current list of items as well as the text that the user has entered. Although event handlers appear to be rendered inline, they will be collected and implemented using event delegation.</p>\r\n<p>&nbsp;</p>\r\n<div>\r\n<p><code class=\"gatsby-code-text\"></code></p>\r\n<h2 id=\"learn-react\">Learn React</h2>\r\n<p><code class=\"gatsby-code-text\"></code></p>\r\n<p>People come to React from different backgrounds and with different learning styles. Whether you prefer a more theoretical or a practical approach, we hope you&rsquo;ll find this section helpful.</p>\r\n<p><code class=\"gatsby-code-text\"></code></p>\r\n<ul>\r\n<li>If you prefer to&nbsp;<strong>learn by doing</strong>, start with our&nbsp;<a href=\"https://reactjs.org/tutorial/tutorial.html\">practical tutorial</a>.</li>\r\n<li>If you prefer to&nbsp;<strong>learn concepts step by step</strong>, start with our&nbsp;<a href=\"https://reactjs.org/docs/hello-world.html\">guide to main concepts</a>.</li>\r\n</ul>\r\n<p><code class=\"gatsby-code-text\"></code></p>\r\n<p>Like any unfamiliar technology, React does have a learning curve. With practice and some patience, you&nbsp;<em>will</em> get the&nbsp;</p>\r\n<p><code class=\"gatsby-code-text\"></code></p>\r\n<h3 id=\"first-examples\"></h3>\r\n</div>\r\n</div>\r\n</div>', 2),
(15, 'DURAVIT', '<h3 class=\"css-17jiu04\">A Stateful Component</h3>\r\n<div>\r\n<p>In addition to taking input data (accessed via&nbsp;<code class=\"gatsby-code-text\">this.props</code>), a component can maintain internal state data (accessed via&nbsp;<code class=\"gatsby-code-text\">this.state</code>). When a component&rsquo;s state data changes, the rendered markup will be updated by re-invoking&nbsp;<code class=\"gatsby-code-text\">render()</code>.</p>\r\n<p>&nbsp;</p>\r\n<h3 class=\"css-17jiu04\">An Application</h3>\r\n<div>\r\n<p>Using&nbsp;<code class=\"gatsby-code-text\">props</code>&nbsp;and&nbsp;<code class=\"gatsby-code-text\">state</code>, we can put together a small Todo application. This example uses&nbsp;<code class=\"gatsby-code-text\">state</code>&nbsp;to track the current list of items as well as the text that the user has entered. Although event handlers appear to be rendered inline, they will be collected and implemented using event delegation.</p>\r\n<p>&nbsp;</p>\r\n<div>\r\n<p><code class=\"gatsby-code-text\"></code></p>\r\n<h2 id=\"learn-react\">Learn React</h2>\r\n<p><code class=\"gatsby-code-text\"></code></p>\r\n<p>People come to React from different backgrounds and with different learning styles. Whether you prefer a more theoretical or a practical approach, we hope you&rsquo;ll find this section helpful.</p>\r\n<p><code class=\"gatsby-code-text\"></code></p>\r\n<ul>\r\n<li>If you prefer to&nbsp;<strong>learn by doing</strong>, start with our&nbsp;<a href=\"https://reactjs.org/tutorial/tutorial.html\">practical tutorial</a>.</li>\r\n<li>If you prefer to&nbsp;<strong>learn concepts step by step</strong>, start with our&nbsp;<a href=\"https://reactjs.org/docs/hello-world.html\">guide to main concepts</a>.</li>\r\n</ul>\r\n<p><code class=\"gatsby-code-text\"></code></p>\r\n<p>Like any unfamiliar technology, React does have a learning curve. With practice and some patience, you&nbsp;<em>will</em> get the&nbsp;</p>\r\n<p><code class=\"gatsby-code-text\"></code></p>\r\n</div>\r\n</div>\r\n</div>', 3),
(17, 'Testing name', '<p>asdf asdf dsf asdf as af</p>', 3),
(18, 'Another Project', '<p><strong>Study Corp</strong>: It&rsquo;s a higher study platform website.</p>\r\n<p><strong>Functions:</strong></p>\r\n<ul>\r\n<li>Service</li>\r\n<li>Gallery</li>\r\n<li>FAQs</li>\r\n<li>Contacts</li>\r\n<li>Quick links</li>\r\n<li>Live Chat box</li>\r\n<li>Clinets Reviews</li>\r\n</ul>', 4),
(19, 'Another Pro', '<p>asdfasdf sadf asf</p>', 2),
(20, 'Testing name3', '<h2 class=\"item-title\">PRIME EDU</h2>\r\n<div class=\"projectDesc\">\r\n<p><strong>Journey of WE Tech</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>2019(Established): </strong></p>\r\n<ul>\r\n<li>We Tech was founded.</li>\r\n<li>Got our First project of Study Corp.</li>\r\n<li>Delivered the First project.</li>\r\n<li>Our First Product Launched in Play Store: &ldquo;PrimeEdu&rdquo;.</li>\r\n</ul>\r\n<p>&nbsp;<strong>2020(Second Year):</strong></p>\r\n<ul>\r\n<li>Educational Platform project launched for &ldquo;Dreams for Tomorrow&rdquo;.</li>\r\n<li>Handed over multinational company project: &ldquo;OCS&rdquo;.</li>\r\n<li>Start working outside Dhaka at Mymensingh &amp; Rangpur.</li>\r\n</ul>\r\n<p><strong>2021(The Pandemic Year):</strong></p>\r\n<ul>\r\n<li>Started E-commerce System at Mymensingh.</li>\r\n<li>PrimeEdu creates a new platform in school management.</li>\r\n<li>To be continued&hellip;&hellip;&hellip;</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>We work with 3 years of Experience:</p>\r\n<ul>\r\n<li>Web development</li>\r\n<li>School Management</li>\r\n<li>E-commerce</li>\r\n<li>Mobile App</li>\r\n</ul>\r\n<p>Services: Only name and Image</p>\r\n<p>Company Goals:</p>\r\n<p>We Tech refers to the particular, day-to-day operational activities that are required to run a firm and that aid in scalability and expansion. Employee and management performance, productivity, profitability, innovation, market share, and social responsibility are all essential organizational goals.</p>\r\n</div>', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pro_details_aspects`
--

CREATE TABLE `pro_details_aspects` (
  `p_a_id` int(100) NOT NULL,
  `p_a_title` varchar(500) NOT NULL,
  `p_project_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_details_aspects`
--

INSERT INTO `pro_details_aspects` (`p_a_id`, `p_a_title`, `p_project_id`) VALUES
(25, 'ONLINE ATTENDANCE AND UPGRADED CLASS MANAGEMENT', 14),
(26, 'PROVIDING CLASS RESULTS', 14),
(27, 'NOTICE BOARD FOR INDIVIDUAL SCHOOL AND CLASS', 14),
(28, 'NOTICE BOARD FOR INDIVIDUAL SCHOOL AND CLASS', 14),
(29, 'PROVIDING CLASS RESULTS', 14),
(30, 'abc', 15),
(31, 'def', 15),
(32, 'ghi', 15),
(38, 'afsdf asf as f', 17),
(39, 'PROVIDING CLASS RESULTS', 17),
(40, 'ONLINE ATTENDANCE AND UPGRADED CLASS MANAGEMENT', 18),
(41, 'PROVIDING CLASS RESULTS', 18),
(42, 'ONLINE ATTENDANCE AND UPGRADED CLASS MANAGEMENT', 19),
(43, 'PROVIDING CLASS RESULTS', 19),
(44, 'ONLINE ATTENDANCE AND UPGRADED CLASS MANAGEMENT', 20),
(45, 'PROVIDING CLASS RESULTS', 20),
(46, 'NOTICE BOARD FOR INDIVIDUAL SCHOOL AND CLASS', 20);

-- --------------------------------------------------------

--
-- Table structure for table `pro_details_slider`
--

CREATE TABLE `pro_details_slider` (
  `p_d_id` int(100) NOT NULL,
  `p_d_img` varchar(500) NOT NULL,
  `p_project_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_details_slider`
--

INSERT INTO `pro_details_slider` (`p_d_id`, `p_d_img`, `p_project_id`) VALUES
(14, '36aacb37-14c1-4ffb-8c7e-618c730cf559.jfif', 14),
(15, 'e4687b8d-bf91-4d5e-a38d-37af7e3d59c8.jfif', 14),
(16, 'e680b7b8-f397-4df7-a7fc-dd9d90e9a73e.jfif', 14),
(17, 'e680b7b8-f397-4df7-a7fc-dd9d90e9a73e.jfif', 15),
(22, 'e4687b8d-bf91-4d5e-a38d-37af7e3d59c8.jfif', 17),
(23, 'forkan6.png', 17),
(24, 'e680b7b8-f397-4df7-a7fc-dd9d90e9a73e.jfif', 18),
(25, 'forkan8.png', 18),
(26, 'b915f31838083a4a94d67602014ae45d.jpg', 19),
(27, 'ratulvai6.png', 19),
(28, 'Blog Banner.png', 20),
(29, 'JavaScript.jpg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `r_id` int(100) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `r_img` varchar(1000) NOT NULL,
  `r_profession` varchar(100) NOT NULL,
  `r_desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`r_id`, `r_name`, `r_img`, `r_profession`, `r_desc`) VALUES
(11, 'Patho Vai', 'images.jfif', 'CEO,Wetech', '<p>Grursus mal suada faci lisis Lorem ipsum dolarorit more a ametion consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm ipsum that dolocons rsus mal suada and fadolorit to the consectetur elit. All the Lorem Ipsum generators on the Internet tend to repeat predefined.</p>'),
(12, 'Hasan', 'close-smiling-young-businessman-wearing-260nw-598133198.jpg', 'Software Developer', '<p>Grursus mal suada faci lisis Lorem ipsum dolarorit more a ametion consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm ipsum that dolocons rsus mal suada and fadolorit to the consectetur elit. All the Lorem Ipsum generators on the Internet tend to repeat predefined.</p>'),
(13, 'Sumaiya Haque', 'jty32.png', 'Doctor', '<p>Grursus mal suada faci lisis Lorem ipsum dolarorit more and dumm ametion consectetur elit. Vesti dolocons rsus mal suada and the fadolorit to is the consectetur elit.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `t_role` varchar(100) NOT NULL,
  `t_img` varchar(500) NOT NULL,
  `t_fb` varchar(100) DEFAULT NULL,
  `t_twitter` varchar(100) DEFAULT NULL,
  `t_instragram` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`t_id`, `t_name`, `t_role`, `t_img`, `t_fb`, `t_twitter`, `t_instragram`) VALUES
(5, 'Amanullah Aman', 'Software Engineer', 'team2.jpg', '', '', ''),
(6, 'Shihab Sakib', 'Software Engineer', 'team3.jpg', '', '', ''),
(7, 'Forkan Uddin Ahmed', 'Software Engineer', 'images.jfif', '', '', ''),
(8, 'Fahim Arif', 'Software Engineer', 'team4.jpg', '', '', ''),
(9, 'Moin Khan', 'Software Engineer', 'team5.jpg', '', '', ''),
(10, 'Testing name', 'Software Engineer', 'team8.jpg', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `pro_details_aspects`
--
ALTER TABLE `pro_details_aspects`
  ADD PRIMARY KEY (`p_a_id`);

--
-- Indexes for table `pro_details_slider`
--
ALTER TABLE `pro_details_slider`
  ADD PRIMARY KEY (`p_d_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pro_details_aspects`
--
ALTER TABLE `pro_details_aspects`
  MODIFY `p_a_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `pro_details_slider`
--
ALTER TABLE `pro_details_slider`
  MODIFY `p_d_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `r_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
