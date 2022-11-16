-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2022 at 10:53 AM
-- Server version: 8.0.30-0ubuntu0.20.04.2
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngenit`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `header1` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `industries` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `solutions` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `logo`, `tags`, `header1`, `industries`, `solutions`, `description`, `created_at`, `updated_at`) VALUES
(3, 'How Westerra Prioritized Digital Transformation in the Face of Disruption', '1664874498.jpg', 'Client story', 'Disruption came to every organization in 2020, but some were able to bounce back faster than others. Learn how Westerra Credit Union was able to put its IT modernization plans on hold while dealing with disruption and then pick them right back up again just a few months later.', 'Technology', 'Select Solution', '<blockquote>\r\n<h2>Facts at a glance</h2>\r\n\r\n<h4>Client industry:</h4>\r\n\r\n<p>Banking</p>\r\n\r\n<h4>Size of company:</h4>\r\n\r\n<p>500 employees</p>\r\n\r\n<h4>Challenge:</h4>\r\n\r\n<p>Before the pandemic began, Westerra Credit Union was working on an IT modernization strategy around Virtual Desktop Infrastructure (VDI). The company&rsquo;s strategy was years in the making, but was set aside when Westerra had to make an immediate shift to remote work. The company needed to expand its remote work capabilities in the short term and get back to its long-term transformation goals as soon as possible.</p>\r\n\r\n<h4>Solution:</h4>\r\n\r\n<p>The Insight team proposed to support Westerra&rsquo;s short-term and long-term needs through the following motions:</p>\r\n\r\n<ul>\r\n	<li>Device procurement services</li>\r\n	<li>Professional services for VMware Horizon implementation</li>\r\n	<li>Professional services for VMware Workspace ONE implementation</li>\r\n	<li>Ongoing managed endpoint services</li>\r\n</ul>\r\n\r\n<h4>Results:</h4>\r\n\r\n<ul>\r\n	<li>Implemented VMware Horizon and Workspace ONE for 300 users</li>\r\n	<li>Simplified device management</li>\r\n	<li>Improved endpoint security and controls</li>\r\n	<li>Delivered greater flexibility for employees inside and outside the office</li>\r\n</ul>\r\n</blockquote>\r\n\r\n<h2>Planning turns to pivots</h2>\r\n\r\n<p>For Westerra Credit Union, digital transformation wasn&rsquo;t something to be managed overnight, but rather a goal to achieve in due time. In 2018, the company began to take a good look at where it was going as a company and how it might</p>\r\n\r\n<p>Facts at a glance<br />\r\nClient industry:<br />\r\nBanking</p>\r\n\r\n<p>Size of company:<br />\r\n500 employees</p>\r\n\r\n<p>Challenge:<br />\r\nBefore the pandemic began, Westerra Credit Union was working on an IT modernization strategy around Virtual Desktop Infrastructure (VDI). The company&rsquo;s strategy was years in the making, but was set aside when Westerra had to make an immediate shift to remote work. The company needed to expand its remote work capabilities in the short term and get back to its long-term transformation goals as soon as possible.</p>\r\n\r\n<p>Solution:<br />\r\nThe Insight team proposed to support Westerra&rsquo;s short-term and long-term needs through the following motions:</p>\r\n\r\n<p>Device procurement services<br />\r\nProfessional services for VMware Horizon implementation<br />\r\nProfessional services for VMware Workspace ONE implementation<br />\r\nOngoing managed endpoint services<br />\r\nResults:<br />\r\nImplemented VMware Horizon and Workspace ONE for 300 users<br />\r\nSimplified device management<br />\r\nImproved endpoint security and controls<br />\r\nDelivered greater flexibility for employees inside and outside the office<br />\r\nPlanning turns to pivots<br />\r\nFor Westerra Credit Union, digital transformation wasn&rsquo;t something to be managed overnight, but rather a goal to achieve in due time. In 2018, the company began to take a good look at where it was going as a company and how it might differentiate from other banking institutions. Technology was a big driving factor for the members so Westerra started exploring how it could deliver a modern technology experience.</p>\r\n\r\n<p>Dan Groves, Westerra&rsquo;s VP of IT, said this desire for a modern IT experience was what influenced the decision to invest in IT modernization and improve the employee experience:</p>\r\n\r\n<p>&ldquo;We had to look at how we could do things differently, but still maintain proper controls, security, compliance and regulatory needs. All of that had to be balanced with our users&rsquo; ability to work. That&rsquo;s been our biggest challenge.&rdquo;</p>\r\n\r\n<p>Groves had experienced great success with Virtual Desktop Infrastructure (VDI) in the past and knew it could be the solution Westerra was looking for. Since the company already had a long-standing relationship with Insight for hardware procurement and software licensing, Westerra decided to engage Insight for VDI consulting and an implementation strategy.</p>\r\n\r\n<p>Our client&rsquo;s IT modernization plans were years in the making, however. &ldquo;The process took a few years,&rdquo; said Groves. &ldquo;Modernization wasn&#39;t a high priority. We were getting by and managing without any issues, so the urgency wasn&rsquo;t there.&rdquo;</p>\r\n\r\n<p>Eventually, the business grew enough that the time was finally right to get serious about VDI. After engaging in some demos and a full proof of concept with VMware Horizon&reg;, Westerra was ready to take the next step. But all of the company&rsquo;s plans came to an immediate halt with the advent of the 2020 pandemic.</p>\r\n\r\n<p>Infographic<br />\r\nInfographic: Adapting your modern technology to build a digital-first culture. Empower your workforce to build meaningful experiences with the versatile power of the VMware&reg; environment.</p>\r\n\r\n<p>Expanding remote work capabilities<br />\r\nIn March of 2020, Westerra&rsquo;s primary concern was getting all of its employees up and running from home. While our client already had some remote capabilities, the majority of their workforce was based on premises. Users required access to their respective branch as well as full Windows&reg; 10 desktops to perform daily tasks and access databases containing sensitive financial information.</p>\r\n\r\n<p>&ldquo;We did whatever we could to get people working from home, whether that was giving them PCs or laptops to take home,&rdquo; said Groves. The client worked with Insight to acquire additional laptops in the short term just to keep employees working. But even in the midst of major disruption, they never lost sight of their plans for VDI. Plans may have been put on hold, but they weren&rsquo;t forgotten.</p>\r\n\r\n<p>Making VDI a reality<br />\r\nOnce they realized remote work was here to stay, Groves&rsquo; team set their sights on stabilizing their remote environment and establishing standards for Westerra&rsquo;s devices and processes. With Insight&rsquo;s help, they were able to bring their full workforce up to the same standard by the end of August. Once that goal was achieved, it was time to start looking at VDI again.</p>\r\n\r\n<p>Through Insight&rsquo;s professional services for VMware Horizon implementation, Westerra was able to achieve a full-stack Horizon Enterprise deployment with TrueSSO, UAG, App Volumes, DEM, Instant Clones and full Windows 10 desktops.</p>\r\n\r\n<p>The entire Horizon cluster was deployed on premises in Westerra&rsquo;s data center in Colorado with 300 desktop images deployed. Users are now able to connect from their home computers to each branch.</p>\r\n\r\n<p>Keeping the momentum going<br />\r\nOnce they met their VDI goals in September, Groves&rsquo; team was already looking to the next project. With so many remote devices to manage now, he wanted a way to manage them all more efficiently. So the next big project became implementing a Mobile Device Management (MDM) platform, such as VMware Workspace ONE&reg;.</p>\r\n\r\n<p>When we asked Groves why he chose Workspace ONE, he had this to say:</p>\r\n\r\n<p>&ldquo;We really went toward Workspace ONE because it plays well with our existing Horizon environment. It also allows the management of devices that aren&#39;t ours, that don&#39;t belong to the corporate entity. So with someone&#39;s personal device, we can maintain the same level of control. Workspace ONE is what allows us to do all that and &hellip; deliver desktops and applications. So it&#39;s all one big combined platform that really plays well together.&rdquo;</p>\r\n\r\n<p>While Westerra just completed the implementation of this platform in Q1 of 2021, Groves and his team anticipate the combined functionality of Workspace ONE and Horizon will act as a complete digital workspace, delivering:</p>\r\n\r\n<p>Simpler, centralized device management<br />\r\nIncreased security and compliance with financial regulations<br />\r\nGreater flexibility for employees who want to work anywhere and leverage personal devices<br />\r\nWhy partnering with Insight was a must for Westerra<br />\r\nWhen we asked Groves about Westerra&rsquo;s relationship with Insight, he said he valued it because it was a true partnership. Rather than providing Westerra with a turnkey solution for VDI and MDM implementation, Insight worked side-by-side with his team to share knowledge in context and ensure they were fully prepared to take over management of their new environment.</p>\r\n\r\n<p>According to Groves:</p>\r\n\r\n<p>&ldquo;The way we did the implementations is my admins drove while Insight&rsquo;s engineers sat with them and walked through all of it side-by-side. So the knowledge transfer happened during the processes ─ it wasn&#39;t a big knowledge dump at the end (which I find to be fairly useless). If you don&#39;t understand it, if you weren&#39;t part of the process, it doesn&#39;t stick. So my team went through it, they were clicking the buttons, filling out the information and asking questions. Sometimes implementations take a little longer day-to-day, but the knowledge transfer happens during the implementation, which leads to a better implementation overall.&rdquo;</p>\r\n\r\n<p>Looking to the future<br />\r\nOf course, Groves and the Westerra team aren&rsquo;t stopping here ─ there&rsquo;s always another project on the horizon. &ldquo;Workspace ONE I think is going to take a lot a lot of time this year,&rdquo; said Groves. &ldquo;It has a lot of features and the idea is really to continue to leverage what we already have because we already have all the tools we need, which is a great spot to be in.&rdquo;</p>\r\n\r\n<p>The team wants to explore some additional work around:</p>\r\n\r\n<p>Multi-factor authentication<br />\r\nIdentity and access management<br />\r\nEmployee onboarding and offboarding automation<br />\r\n&ldquo;We&#39;re not planning any major new transformations. Now we&#39;re focused on using what we have and frankly, kind of seeing where things land as things reopen and businesses respond. I think we&#39;re waiting to see what that looks like.&rdquo;</p>\r\n\r\n<p>Want to learn more about Westerra&rsquo;s story? Watch our virtual roundtable discussion with Groves and hear more details straight from the source.</p>\r\n\r\n<p>differentiate from other banking institutions. Technology was a big driving factor for the members so Westerra started exploring how it could deliver a modern technology experience.</p>\r\n\r\n<p>Dan Groves, Westerra&rsquo;s VP of IT, said this desire for a modern IT experience was what influenced the decision to invest in IT modernization and improve the employee experience:</p>\r\n\r\n<p>&ldquo;We had to look at how we could do things differently, but still maintain proper controls, security, compliance and regulatory needs. All of that had to be balanced with our users&rsquo; ability to work. That&rsquo;s been our biggest challenge.&rdquo;</p>\r\n\r\n<p>Groves had experienced great success with Virtual Desktop Infrastructure (VDI) in the past and knew it could be the solution Westerra was looking for. Since the company already had a long-standing relationship with Insight for hardware procurement and software licensing, Westerra decided to engage Insight for VDI consulting and an implementation strategy.</p>\r\n\r\n<p>Our client&rsquo;s IT modernization plans were years in the making, however. &ldquo;The process took a few years,&rdquo; said Groves. &ldquo;Modernization wasn&#39;t a high priority. We were getting by and managing without any issues, so the urgency wasn&rsquo;t there.&rdquo;</p>\r\n\r\n<p>Eventually, the business grew enough that the time was finally right to get serious about VDI. After engaging in some demos and a full proof of concept with VMware Horizon<sup>&reg;</sup>, Westerra was ready to take the next step. But all of the company&rsquo;s plans came to an immediate halt with the advent of the 2020 pandemic.</p>\r\n\r\n<p><img alt=\"Infographic\" src=\"https://www.insight.com/content/dam/insight-web/en_US/media/graphics/innovate-lightbulb-setting-cw-icon.png\" /></p>\r\n\r\n<p>Infographic:&nbsp;Adapting your modern technology to build a digital-first culture.&nbsp;<a href=\"https://www.insight.com/en_US/content-and-resources/tech-journal/summer-2021/adapting-modern-technology-to-build-a-digital-first-culture.html?itp=tech-journal-summer-2021\">Empower your workforce to build meaningful experiences with the versatile power of the VMware<sup>&reg;</sup>&nbsp;environment</a>.</p>\r\n\r\n<h2>Expanding remote work capabilities</h2>\r\n\r\n<p>In March of 2020, Westerra&rsquo;s primary concern was getting all of its employees up and running from home. While our client already had some remote capabilities, the majority of their workforce was based on premises. Users required access to their respective branch as well as full Windows<sup>&reg;</sup>&nbsp;10<sup>&nbsp;</sup>desktops to perform daily tasks and access databases containing sensitive financial information.</p>\r\n\r\n<p>&ldquo;We did whatever we could to get people working from home, whether that was giving them PCs or laptops to take home,&rdquo; said Groves. The client worked with Insight to acquire additional laptops in the short term just to keep employees working. But even in the midst of major disruption, they never lost sight of their plans for VDI. Plans may have been put on hold, but they weren&rsquo;t forgotten.</p>\r\n\r\n<h2>Making VDI a reality</h2>\r\n\r\n<p>Once they realized remote work was here to stay, Groves&rsquo; team set their sights on stabilizing their remote environment and establishing standards for Westerra&rsquo;s devices and processes. With Insight&rsquo;s help, they were able to bring their full workforce up to the same standard by the end of August. Once that goal was achieved, it was time to start looking at VDI again.</p>\r\n\r\n<p>Through Insight&rsquo;s professional services for VMware Horizon implementation, Westerra was able to achieve a full-stack Horizon Enterprise deployment with TrueSSO, UAG, App Volumes, DEM, Instant Clones and full Windows 10 desktops.</p>\r\n\r\n<p>The entire Horizon cluster was deployed on premises in Westerra&rsquo;s data center in Colorado with 300 desktop images deployed. Users are now able to connect from their home computers to each branch.</p>\r\n\r\n<h2>Keeping the momentum going</h2>\r\n\r\n<p>Once they met their VDI goals in September, Groves&rsquo; team was already looking to the next project. With so many remote devices to manage now, he wanted a way to manage them all more efficiently. So the next big project became implementing a Mobile Device Management (MDM) platform, such as VMware Workspace ONE<sup>&reg;</sup>.</p>\r\n\r\n<p>When we asked Groves why he chose Workspace ONE, he had this to say:</p>\r\n\r\n<p>&ldquo;We really went toward Workspace ONE because it plays well with our existing Horizon environment. It also allows the management of devices that aren&#39;t ours, that don&#39;t belong to the corporate entity. So with someone&#39;s personal device, we can maintain the same level of control. Workspace ONE is what allows us to do all that and &hellip; deliver desktops and applications. So it&#39;s all one big combined platform that really plays well together.&rdquo;</p>\r\n\r\n<p>While Westerra just completed the implementation of this platform in Q1 of 2021, Groves and his team anticipate the combined functionality of Workspace ONE and Horizon will act as a complete digital workspace, delivering:</p>\r\n\r\n<ul>\r\n	<li>Simpler, centralized device management</li>\r\n	<li>Increased security and compliance with financial regulations</li>\r\n	<li>Greater flexibility for employees who want to work anywhere and leverage personal devices</li>\r\n</ul>\r\n\r\n<h2>Why partnering with Insight was a must for Westerra</h2>\r\n\r\n<p>When we asked Groves about Westerra&rsquo;s relationship with Insight, he said he valued it because it was a true partnership. Rather than providing Westerra with a turnkey solution for VDI and MDM implementation, Insight worked side-by-side with his team to share knowledge in context and ensure they were fully prepared to take over management of their new environment.</p>\r\n\r\n<p>According to Groves:</p>\r\n\r\n<p>&ldquo;The way we did the implementations is my admins drove while Insight&rsquo;s engineers sat with them and walked through all of it side-by-side. So the knowledge transfer happened during the processes ─ it wasn&#39;t a big knowledge dump at the end (which I find to be fairly useless). If you don&#39;t understand it, if you weren&#39;t part of the process, it doesn&#39;t stick. So my team went through it, they were clicking the buttons, filling out the information and asking questions. Sometimes implementations take a little longer day-to-day, but the knowledge transfer happens during the implementation, which leads to a better implementation overall.&rdquo;</p>\r\n\r\n<h2>Looking to the future</h2>\r\n\r\n<p>Of course, Groves and the Westerra team aren&rsquo;t stopping here ─ there&rsquo;s always another project on the horizon. &ldquo;Workspace ONE I think is going to take a lot a lot of time this year,&rdquo; said Groves. &ldquo;It has a lot of features and the idea is really to continue to leverage what we already have because we already have all the tools we need, which is a great spot to be in.&rdquo;</p>\r\n\r\n<p>The team wants to explore some additional work around:</p>\r\n\r\n<ul>\r\n	<li>Multi-factor authentication</li>\r\n	<li>Identity and access management</li>\r\n	<li>Employee onboarding and offboarding automation</li>\r\n</ul>\r\n\r\n<p>&ldquo;We&#39;re not planning any major new transformations. Now we&#39;re focused on using what we have and frankly, kind of seeing where things land as things reopen and businesses respond. I think we&#39;re waiting to see what that looks like.&rdquo;</p>\r\n\r\n<h3><strong>Want to learn more about Westerra&rsquo;s story?</strong>&nbsp;<a href=\"https://www.insight.com/en_US/content-and-resources/webinars/westerras-journey-to-modern-it-with-insight-and-vmware.html\">Watch our virtual roundtable discussion with Groves and hear more details straight from the source</a>.</h3>', '2022-10-04 03:08:18', '2022-10-04 03:08:18'),
(4, 'Harris Teeter Provides Real-Time Peace of Mind With IoT', '1664874656.jpg', 'HealthCare', 'How a major grocery chain used thermal cameras and Insight Connected Platform™ to protect the health of their essential workers', 'Technology', 'Technology', '<blockquote>\r\n<blockquote>\r\n<h2>Facts at a glance</h2>\r\n\r\n<h4>Client industry:</h4>\r\n\r\n<p>Retail grocery and pharmacy</p>\r\n\r\n<h4>Size of company:</h4>\r\n\r\n<p>230+ stores across the U.S.<br />\r\n35,000+ associates</p>\r\n\r\n<h4>Challenge:</h4>\r\n\r\n<p>In response to new public health challenges in 2020, Harris Teeter wanted a safer, more effective way to detect elevated temperatures among employees at their warehouses and distribution centers.</p>\r\n\r\n<h4>Solution:</h4>\r\n\r\n<p>Bolide<sup>&reg;</sup>&nbsp;Access Control thermal cameras and Insight Connected Platform Internet of Things (IoT) framework created an automated system for detecting employee temperatures and providing discreet alerts, eliminating the need for manual scans.</p>\r\n\r\n<h4>Results:</h4>\r\n\r\n<ul>\r\n	<li>42,000+ accurate scans to date</li>\r\n	<li>Average of 121 scans per day</li>\r\n	<li>64 elevated temperatures detected</li>\r\n	<li>Estimated $195K immediate Return on Investment (ROI)</li>\r\n	<li>A flexible IoT foundation for future use cases</li>\r\n</ul>\r\n\r\n<h4>Solution area:</h4>\r\n\r\n<p>Insight&rsquo;s Digital Innovation solutions help clients incorporate emerging tech into their business operations to improve workforce and customer experiences.</p>\r\n</blockquote>\r\n\r\n<p>Harris Teeter, a wholly owned subsidiary of Kroger, is a regional U.S. grocery chain headquartered in North Carolina with more than 230 locations along the East Coast. In addition to its retail stores and in-store pharmacies, Harris Teeter operates 14 fuel centers and several distribution centers.</p>\r\n\r\n<p>The organization prides itself on providing a safe, inclusive environment for associates and a friendly, convenient shopping experience for customers.</p>\r\n\r\n<p>In 2020, the COVID-19 pandemic and recommendations from the Centers for Disease Control and Prevention (CDC) created new challenges for essential operations. Committed to providing the safest possible environment for staff and customers, Harris Teeter began looking for ways to better protect the health of essential workers while continuing to serve its communities.</p>\r\n\r\n<p>Beyond implementing social distancing policies and mask requirements, Harris Teeter also hired nursing staff at each of its distribution centers to scan employee temperatures upon arrival. But while this was an important first step toward providing a safer environment for associates, the process was slow, costly and subject to human error.</p>\r\n\r\n<p>Leaders at Harris Teeter wanted a more effective, automated way to detect potential symptoms and help prevent the spread of illness in the workplace.</p>\r\n\r\n<p><img alt=\"Infographic\" src=\"https://www.insight.com/content/dam/insight-web/en_US/media/graphics/innovate-lightbulb-setting-cw-icon.png\" /></p>\r\n\r\n<p>Infographic:&nbsp;<a href=\"https://www.insight.com/en_US/content-and-resources/tech-journal/summer-2021/protecting-the-health-of-essential-workers-with-thermal-cameras.html?itp=tech-journal-summer-2021\">See how Harris Teeter responded to the challenges of 2020 by implementing smart, thermal cameras and Insight Connected Platform<sup>&trade;</sup></a>.</p>\r\n\r\n<h2>Seeking an automated alternative</h2>\r\n\r\n<p>In August of 2020, thanks to an existing relationship with Harris Teeter&rsquo;s parent company, Insight was brought on to find a solution. Insight&rsquo;s Digital Innovation team worked closely with the organization to understand both its current and future technology goals.</p>\r\n\r\n<p>Recognizing the existing unique use case and the drive for broader automation across the business, members of the team recommended building on Insight&nbsp;<a href=\"https://www.insight.com/en_US/what-we-do/digital-innovation/connected-platform/connected-platform-for-detection-and-prevention.html\">Connected Platform</a>.</p>\r\n\r\n<p>This unique IoT framework, designed and developed by Insight, enables a broad range of connected devices to be integrated and managed through a simple mobile app.</p>\r\n\r\n<p>In this instance, the&nbsp;<a href=\"https://www.insight.com/en_US/shop/product/BN-2600ACTC-B1/BOLIDE%20TECHNOLOGY%20GROUP/BN-2600ACTC-B1/Bolide-Thermal-Access-Control-Camera-+-Standalone-Wall-Mount-Bracket/\">Bolide Access Control thermal camera</a>&nbsp;was the device of choice. The self-contained system uses video analytics to take quick, accurate readings of individual employees, eliminating the costs and risks of manual temperature scans. In the event an elevated temperature is detected, integration with Connected Platform enables real-time alerts to be discreetly sent to authorized personnel to determine next steps.</p>\r\n\r\n<p>Excited by the proposal, Harris Teeter asked Insight to begin with a proof of concept, implementing Connected Platform and installing the thermal camera at a single distribution center.</p>\r\n</blockquote>', '2022-10-04 03:10:56', '2022-10-04 03:10:56'),
(5, 'College Campus Fast Tracks Deployment for Distance Learning', '1664874767.jpg', 'Tech, Healthcare', 'When a college campus needed more than one thousand Apple devices for a distance learning initiative, Insight Public Sector helped accelerate the deployment with peace of mind.', 'Healthcare', 'Healthcare', '<blockquote>\r\n<h2>Facts at a glance</h2>\r\n\r\n<h4>Client industry:</h4>\r\n\r\n<p>Higher education</p>\r\n\r\n<h4>Size of organization:</h4>\r\n\r\n<p>600+ staff, 28,000+ students</p>\r\n\r\n<h4>Challenge:</h4>\r\n\r\n<p>The college needed a simplified way to standardize Apple across the board for a distance learning initiative within two departments. To add to this challenge, the organization needed more than 1,000 MacBook and iPad devices deployed within a 30-day timeframe.</p>\r\n\r\n<h4>Solution:</h4>\r\n\r\n<ul>\r\n	<li>1,000+ MacBook and iPad devices</li>\r\n	<li>Accelerated device deployment</li>\r\n	<li>Asset tagging for easy logistic management</li>\r\n	<li>Apple device enrollment program</li>\r\n	<li>Touchless deployment via Jamf Mobile Device Management</li>\r\n</ul>\r\n\r\n<h4>Results:</h4>\r\n\r\n<ul>\r\n	<li>Successful deployment on time and within budget</li>\r\n	<li>Standardized environment for distance education initiative</li>\r\n	<li>Accelerated time to use for students and staff</li>\r\n</ul>\r\n\r\n<h4>Solution area:</h4>\r\n\r\n<p>Supply Chain Optimization</p>\r\n</blockquote>\r\n\r\n<h3>U.S. higher-education institutions are increasingly turning to distance learning, an educational initiative with many moving parts &mdash; and in the midst of return-to-school planning during a chaotic pandemic, time has become a precious resource. A college campus in Tucson, Arizona was launching a distance learning initiative. With the fall semester approaching, it needed to quickly pinpoint an effective solution.</h3>\r\n\r\n<h3>The college determined that new devices were needed for internal accounting and IT, as well as an ample size of students switching to remote learning.</h3>\r\n\r\n<h2>The importance of standardization</h2>\r\n\r\n<p>For many years, the college had used a handful of other manufacturers within its device ecosystem, and fragmentation was becoming more prevalent. With a remote learning initiative underway, standardization was key to simplifying management on the backend and the broader, frontend experience for end users.</p>\r\n\r\n<h2>No time to lose</h2>\r\n\r\n<p>It was a clear and ambitious goal: to have 1,015 devices in the organization&rsquo;s possession in less than 30 days. With the hardware supply chain stretched thin due to high demand, this was challenging. The college sent communication directly to each provider it was considering &mdash; and Insight Public Sector was first to respond with a number of viable options for their unique objectives.</p>\r\n\r\n<p>Our teams proposed an Apple device deployment which included hardware, warranties and Mobile Device Management (MDM) powered by Jamf. Apple, which is known for its intuitive design, familiar user experience and powerful array of applications, was determined to best meet the needs of the college.</p>\r\n\r\n<h2>A trusted ally, then and now</h2>\r\n\r\n<p>In addition to being the first to respond to the organization, our teams also had a strong, existing relationship with the college. Our close ties enabled us to have in-depth conversations to understand the school&rsquo;s needs, and loop in field reps and other teams immediately.</p>\r\n\r\n<h2>The road to success</h2>\r\n\r\n<p>Engaging a broad pool of resources, Insight Public Sector was able to accelerate deployment to meet the college&rsquo;s less-than-30-day goal. The college is now on track to launch its distance education initiative successfully with 500 MacBook devices and 515 iPad devices ready for use.</p>\r\n\r\n<p>In the next five years, the college plans to standardize Apple on a broader scale for a connected campus effort. With touchless provisioning from Apple, this will drive greater control from IT while simplifying management and providing a future-forward end-user experience.</p>', '2022-10-04 03:12:47', '2022-10-04 03:12:47'),
(6, 'State Agency Launches Critical Mental Telehealth Initiative', '1664874840.jpg', 'Tech, Healthcare', 'When a state’s department of mental health needed devices to deliver critical care remotely, Insight accelerated deployment — from across the globe — in record time.', 'Technology', 'Technology', '<blockquote>\r\n<h2>Facts at a glance</h2>\r\n\r\n<h4>Client industry:</h4>\r\n\r\n<p>Healthcare</p>\r\n\r\n<h4>Size of company:</h4>\r\n\r\n<p>15,000 employees statewide</p>\r\n\r\n<h4>Challenge:</h4>\r\n\r\n<p>The organization needed to provide its physicians, psychiatrists, nurses and other healthcare staff with devices to deliver care at a distance.</p>\r\n\r\n<h4>Solution:</h4>\r\n\r\n<ul>\r\n	<li>Accelerated deployment</li>\r\n	<li>1,000+ Apple iPad devices</li>\r\n</ul>\r\n\r\n<h4>Results:</h4>\r\n\r\n<ul>\r\n	<li>Successful deployment on time and within budget</li>\r\n	<li>Standardized device environment for telehealth initiative</li>\r\n	<li>Accelerated time to use for medical staff</li>\r\n</ul>\r\n\r\n<h4>Solution area:</h4>\r\n\r\n<p>Supply Chain Optimization</p>\r\n</blockquote>\r\n\r\n<h3>At a time when a gripping pandemic has raised mental health concerns for millions of Americans, one state&rsquo;s office of mental health agency rose to the challenge to extend invaluable care to its citizens.</h3>\r\n\r\n<h2>A mission that matters</h2>\r\n\r\n<p>The organization had partnered with a neighboring agency in the state to streamline approval processes and regulations governing&nbsp;<a href=\"https://www.insight.com/en_US/content-and-resources/2017/09112017-telehealth-services-are-redefining-healthcare.html\">telehealth services</a>. This would ensure citizens seeking mental and addiction treatment had faster, easier access to providers at a distance.</p>\r\n\r\n<p>The fourth largest agency in its state, and employing 10% of the state workforce, the mental health system currently serves more than 700,000 individuals each year. As part of its telehealth initiative, the organization needed more than 1,000 devices deployed to psychiatrists, physicians, nurses and other healthcare personnel within a tight timeline.</p>\r\n\r\n<h2>The challenge</h2>\r\n\r\n<p>Setting&nbsp;<a href=\"https://www.insight.com/en_US/content-and-resources/brands/apple/insight-and-apple-deployment-and-management-ds.html\">technology deployment</a>&nbsp;goals during a pandemic &mdash; with the hardware supply chain stretched thin &mdash; required swift action and consistent&nbsp;<a href=\"https://www.insight.com/en_US/content-and-resources/2016/11172016-the-power-of-collaboration-tech-infographic.html\">collaboration</a>. Within minutes of being aware of the organization&rsquo;s needs, our teams established communication to begin facilitating and executing.</p>\r\n\r\n<h3>According to a July 2020&nbsp;<a href=\"https://www.kff.org/coronavirus-covid-19/report/kff-health-tracking-poll-july-2020/\" target=\"_blank\">Kaiser Family Foundation</a>&nbsp;tracking poll, more than half of U.S. citizens feel the novel coronavirus pandemic has had a negative impact on their mental health.</h3>\r\n\r\n<h2>Meaningful connections</h2>\r\n\r\n<p>The agency had previous ties with Insight Public Sector,&nbsp;<a href=\"https://www.ips.insight.com/en_US/content-and-resources/2019/07082019-to-optimize-your-it-supply-chain-focus-on-software.html\">procuring software</a>&nbsp;for many years through an Office of General Services (OGS) contract &mdash; now, a hardware initiative allows our teams to engage a different set of resources to support the organization.</p>\r\n\r\n<h2>A four-day turnaround across the globe</h2>\r\n\r\n<p>After determining that Apple iPad devices would best suit the organization&rsquo;s needs, Insight worked with the Apple team to prioritize and expedite this coronavirus-related public services need. Apple&rsquo;s manufacturing location in China was able to directly ship 1,000 devices within four days of Insight Public Sector receiving the request &mdash; with no Dead on Arrivals (DoAs), breakage or other issues.</p>\r\n\r\n<p>With a quick and efficient deployment, the state&rsquo;s office of mental health was able to start providing remote care with no downtime or disruptions.</p>\r\n\r\n<p>Today, the organization has armed medical staff with reliable&nbsp;<a href=\"https://www.insight.com/en_US/content-and-resources/2018/02062018-mobile-solutions-how-to-empower-your-healthcare-workforce.html\">mobile health technology</a>&nbsp;and is successfully delivering critical mental healthcare at a distance.</p>\r\n\r\n<p>According to Fred Tafoya, Account Executive at Insight Public Sector, &ldquo;Given the business challenges in today&rsquo;s environment, it was rewarding to engage our broad Apple resources to flawlessly provide this vital agency the technology they needed on such short notice.&rdquo;</p>', '2022-10-04 03:14:00', '2022-10-04 03:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `image`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Hp', '1666072675.png', 'top', '2022-10-17 23:54:53', '2022-10-17 23:57:55'),
(2, 'Microsoft', '1666073282.png', 'featured', '2022-10-17 23:56:06', '2022-10-18 00:08:02'),
(3, 'Lenovo', '1666073297.png', 'others', '2022-10-17 23:56:26', '2022-10-18 00:08:17'),
(5, 'Intel', '1667449964.png', 'Featured', '2022-11-02 22:32:44', '2022-11-02 22:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_sub_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_sub_sub_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_sub_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `sub_category`, `sub_img`, `sub_sub_category`, `sub_sub_img`, `sub_sub_sub_category`, `sub_sub_sub_img`, `created_at`, `updated_at`) VALUES
(11, 'Hardware', 'Cables', '1666506056.jpg', 'Display cables', NULL, 'HDMI', '1666506057.png', '2022-10-23 00:20:57', '2022-10-23 00:20:57'),
(12, 'Hardware', 'Cables', '1666506087.jpg', 'Display cables', NULL, 'VGA', '1666506087.png', '2022-10-23 00:21:27', '2022-10-23 00:21:27'),
(13, 'Hardware', 'Cables', '1666506143.jpg', 'Display cables', NULL, 'DisplayPort', '1666506143.png', '2022-10-23 00:22:23', '2022-10-23 00:22:23'),
(14, 'Hardware', 'Cables', '1666506181.jpg', 'Display cables', NULL, 'USB', '1666506181.png', '2022-10-23 00:23:01', '2022-10-23 00:23:01'),
(15, 'Hardware', 'Cables', '1666506238.jpg', 'Network cables', NULL, 'Ethernet', '1666506238.png', '2022-10-23 00:23:58', '2022-10-23 00:23:58'),
(16, 'Hardware', 'Cables', '1666506263.jpg', 'Network cables', NULL, 'Serial', '1666506263.png', '2022-10-23 00:24:23', '2022-10-23 00:24:23'),
(17, 'Hardware', 'Cables', '1666506314.jpg', 'Network cables', NULL, 'Fiber-optic', '1666506314.png', '2022-10-23 00:25:14', '2022-10-23 00:25:14'),
(18, 'Hardware', 'Cables', '1666506343.jpg', 'Network cables', NULL, 'Coaxial', '1666506343.png', '2022-10-23 00:25:43', '2022-10-23 00:25:43'),
(19, 'Hardware', 'Cables', '1666506379.jpg', 'Adapters', NULL, 'VGA', '1666506379.png', '2022-10-23 00:26:19', '2022-10-23 00:26:19'),
(20, 'Hardware', 'Cables', '1666506405.jpg', 'Adapters', NULL, 'HDMI', '1666506405.png', '2022-10-23 00:26:45', '2022-10-23 00:26:45'),
(21, 'Hardware', 'Cables', '1666506448.jpg', 'Adapters', NULL, 'DisplayPort', '1666506448.png', '2022-10-23 00:27:28', '2022-10-23 00:27:28'),
(22, 'Hardware', 'Cables', '1666506474.jpg', 'Adapters', NULL, 'Micro-USB', '1666506474.png', '2022-10-23 00:27:54', '2022-10-23 00:27:54'),
(23, 'Hardware', 'Cables', '1666506515.jpg', 'Storage cables', NULL, 'SATA', '1666506515.png', '2022-10-23 00:28:35', '2022-10-23 00:28:35'),
(24, 'Hardware', 'Cables', '1666506539.jpg', 'Storage cables', NULL, 'SCSI', '1666506539.png', '2022-10-23 00:28:59', '2022-10-23 00:28:59'),
(25, 'Hardware', 'Cables', '1666506583.jpg', 'Storage cables', NULL, 'Mini-SAS', '1666506583.png', '2022-10-23 00:29:43', '2022-10-23 00:29:43'),
(26, 'Hardware', 'Cables', '1666506606.jpg', 'Storage cables', NULL, 'USB', '1666506606.png', '2022-10-23 00:30:06', '2022-10-23 00:30:06'),
(27, 'Hardware', 'Cables', '1666506639.jpg', 'Power cables', NULL, 'Surge protectors', '1666506639.png', '2022-10-23 00:30:39', '2022-10-23 00:30:39'),
(28, 'Hardware', 'Cables', '1666506664.jpg', 'Power cables', NULL, '3-prong cables', '1666506664.png', '2022-10-23 00:31:04', '2022-10-23 00:31:04'),
(29, 'Hardware', 'Cables', '1666506698.jpg', 'Power cables', NULL, 'Laptop chargers', '1666506698.png', '2022-10-23 00:31:38', '2022-10-23 00:31:38'),
(30, 'Software', 'Operating System', '1664087706.png', 'Windows', NULL, 'Windows 11', NULL, '2022-10-26 02:14:48', '2022-10-26 02:14:48'),
(31, 'Software', 'Cloud', '1664088985.png', 'Network Application', NULL, 'nulll', NULL, '2022-10-26 02:22:50', '2022-10-26 02:22:50'),
(32, 'Hardware', 'Printer', '1667450485.jpg', 'Display Printer', NULL, 'HDMI', '1667450403.jpg', '2022-11-02 22:40:03', '2022-11-02 22:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `category_page_builders`
--

CREATE TABLE `category_page_builders` (
  `id` bigint UNSIGNED NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `h1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `h2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category1` bigint UNSIGNED DEFAULT NULL,
  `category2` bigint UNSIGNED DEFAULT NULL,
  `category3` bigint UNSIGNED DEFAULT NULL,
  `category4` bigint UNSIGNED DEFAULT NULL,
  `category5` bigint UNSIGNED DEFAULT NULL,
  `category6` bigint UNSIGNED DEFAULT NULL,
  `category7` bigint UNSIGNED DEFAULT NULL,
  `category8` bigint UNSIGNED DEFAULT NULL,
  `category9` bigint UNSIGNED DEFAULT NULL,
  `category10` bigint UNSIGNED DEFAULT NULL,
  `category11` bigint UNSIGNED DEFAULT NULL,
  `category12` bigint UNSIGNED DEFAULT NULL,
  `category13` bigint UNSIGNED DEFAULT NULL,
  `category14` bigint UNSIGNED DEFAULT NULL,
  `category15` bigint UNSIGNED DEFAULT NULL,
  `category16` bigint UNSIGNED DEFAULT NULL,
  `category17` bigint UNSIGNED DEFAULT NULL,
  `category18` bigint UNSIGNED DEFAULT NULL,
  `category19` bigint UNSIGNED DEFAULT NULL,
  `category20` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_page_builders`
--

INSERT INTO `category_page_builders` (`id`, `category`, `banner`, `h1`, `h2`, `category1`, `category2`, `category3`, `category4`, `category5`, `category6`, `category7`, `category8`, `category9`, `category10`, `category11`, `category12`, `category13`, `category14`, `category15`, `category16`, `category17`, `category18`, `category19`, `category20`, `created_at`, `updated_at`) VALUES
(2, 'Cables', '1667280804.jpg ', 'Cables', 'Make the right connection between your equipment and devices with cables and locks from our partners.', 11, 12, 13, 14, 15, 16, 17, 18, 12, 11, 13, 22, 23, 24, 25, 14, 27, 28, 29, 27, '2022-10-23 00:35:44', '2022-10-23 00:35:44'),
(4, 'Cloud', '1667281034.jpg', 'Cloud applications', 'Our partnerships with the top cloud providers make it easy for you to get leading applications and Infrastructure as a Service (IaaS) solutions.', 14, 13, 12, 11, 18, 17, 16, 15, 22, 13, 11, 12, 14, 25, 24, 23, 29, 28, 27, 29, '2022-10-31 23:37:14', '2022-10-31 23:37:14'),
(5, 'Operating System', '1667282063.jpg', 'PC components', 'Stay connected, improve workflows, and increase productivity and processing with PC components and accessories, available from Insight. You’ll stay up and running around the clock.', 12, 11, 13, 14, 16, 17, 15, 18, 11, 12, 13, 22, 24, 23, 25, 14, 29, 27, 28, 27, '2022-10-31 23:54:23', '2022-10-31 23:54:23');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(7, 'Client Experience 1', '1662962249.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-11 23:57:30', '2022-09-11 23:57:30'),
(8, 'Client Experience 2', '1662962318.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-11 23:58:38', '2022-09-11 23:58:38'),
(9, 'Client Experience 3', '1662962337.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-11 23:58:57', '2022-09-11 23:58:57'),
(10, 'Client Experience 4', '1662962363.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-11 23:59:23', '2022-09-11 23:59:23'),
(11, 'Client Experience 5', '1662962380.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-11 23:59:40', '2022-09-11 23:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `help_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `phone`, `email`, `company`, `state`, `country`, `help_type`, `message`, `created_at`, `updated_at`) VALUES
(1, 'kawsar khan', 1875510694, 'kawsarkhanbd3@gmail.com', NULL, 'Dhaka', 'Bangladesh', 'Exploring solutions and services', 'hi', '2022-09-18 04:12:51', '2022-09-18 04:12:51'),
(2, 'kawsar khan', 1875510694, 'kawsarkhanbd3@gmail.com', 'Ngenit', 'Tamil naidu', 'India', 'Order support', 'I need Support', '2022-09-18 04:29:38', '2022-09-18 04:29:38'),
(3, 'kawsar khan', 1875510694, 'kawsarkhanbd3@gmail.com', 'Ngenit', 'Dhaka', 'Bangladesh', 'Billing support', 'hi', '2022-09-18 04:33:19', '2022-09-18 04:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint UNSIGNED NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', 'Dhaka', '2022-09-07 11:20:04', '2022-09-07 11:20:04'),
(2, 'Bangladesh', 'Chittagong', '2022-09-07 11:20:32', '2022-09-07 11:20:32'),
(3, 'India', 'Tamil naidu', '2022-09-07 11:20:54', '2022-09-07 11:20:54'),
(4, 'India', 'Delhi', '2022-09-07 11:20:54', '2022-09-07 11:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint UNSIGNED NOT NULL,
  `topic_names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `topic_names`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Pricing|Solutions & services content|Product search', '5', '2022-11-05 10:58:01', '2022-11-05 10:58:06'),
(2, 'Pricing', '5', '2022-11-05 01:00:11', '2022-11-05 01:00:11'),
(3, 'Product Details and availability|Articles, reports, & blog content', '1', '2022-11-05 01:02:48', '2022-11-05 01:02:48'),
(4, 'Pricing|Product search', '3', '2022-11-05 02:28:26', '2022-11-05 02:28:26'),
(5, 'Product Details and availability|Articles, reports, & blog content|Purchasing, checkout & cart|Pricing', '5', '2022-11-06 03:52:36', '2022-11-06 03:52:36'),
(6, 'Product Details and availability|Pricing', '4', '2022-11-09 05:27:54', '2022-11-09 05:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `home_page_builders`
--

CREATE TABLE `home_page_builders` (
  `id` bigint UNSIGNED NOT NULL,
  `branner1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `branner2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `branner3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `story1_id` bigint UNSIGNED DEFAULT NULL,
  `story2_id` bigint UNSIGNED DEFAULT NULL,
  `story3_id` bigint UNSIGNED DEFAULT NULL,
  `story4_id` bigint UNSIGNED DEFAULT NULL,
  `story5_id` bigint UNSIGNED DEFAULT NULL,
  `solution1_id` bigint UNSIGNED DEFAULT NULL,
  `solution2_id` bigint UNSIGNED DEFAULT NULL,
  `solution3_id` bigint UNSIGNED DEFAULT NULL,
  `solution4_id` bigint UNSIGNED DEFAULT NULL,
  `success1_id` bigint UNSIGNED DEFAULT NULL,
  `success2_id` bigint UNSIGNED DEFAULT NULL,
  `success3_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page_builders`
--

INSERT INTO `home_page_builders` (`id`, `branner1`, `branner2`, `branner3`, `story1_id`, `story2_id`, `story3_id`, `story4_id`, `story5_id`, `solution1_id`, `solution2_id`, `solution3_id`, `solution4_id`, `success1_id`, `success2_id`, `success3_id`, `created_at`, `updated_at`) VALUES
(2, '1666258953.jpg', '1666258953.jpg', '1666258953.jpg', 7, 8, 9, 10, 11, 3, 4, 5, 6, 1, 3, 2, '2022-10-20 03:42:33', '2022-10-20 03:42:33'),
(3, '1666265874.jpg', '1666265874.jpg', '1666265874.jpg', 8, 11, 9, 7, 10, 6, 3, 5, 4, 3, 2, 1, '2022-10-20 05:37:54', '2022-10-20 05:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `title`, `header`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Healthcare', 'Healthcare', '1664866003.png', '2022-10-04 00:46:43', '2022-10-04 00:46:43'),
(2, 'Technology', 'Technology', '1664866032.jpg', '2022-10-04 00:47:12', '2022-10-04 00:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_09_03_043715_create_sessions_table', 1),
(7, '2022_09_04_040053_create_countries_table', 1),
(9, '2022_09_05_035414_create_stories_table', 1),
(15, '2022_09_11_065057_create_clients_table', 4),
(16, '2022_09_11_093137_widget1', 5),
(17, '2022_09_13_062902_create_permission_tables', 6),
(19, '2022_09_04_050027_create_contact_us_table', 7),
(23, '2022_09_22_042405_create_orders_table', 8),
(24, '2022_09_22_042438_create_order_details_table', 8),
(29, '2022_09_27_052500_create_page_builders_table', 10),
(30, '2022_09_20_100222_create_solutions_table', 11),
(31, '2022_10_08_031506_create_industries_table', 12),
(32, '2022_09_13_083554_create_successes_table', 13),
(33, '2022_09_06_084339_create_blogs_table', 14),
(34, '2022_09_06_053920_create_brands_table', 15),
(37, '2022_10_20_071836_create_home_page_builders_table', 17),
(38, '2022_09_06_053732_create_categories_table', 18),
(40, '2022_10_22_095406_create_category_page_builders_table', 19),
(41, '2022_09_06_054032_create_products_table', 20),
(42, '2022_11_05_045919_create_feedback_table', 21),
(43, '2022_11_07_090256_create_newsletters_table', 22),
(44, '2022_11_10_083702_create_supports_table', 23),
(45, '2022_11_12_091459_create_user_infos_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(3, 'App\\Models\\User', 11),
(4, 'App\\Models\\User', 12),
(2, 'App\\Models\\User', 28),
(4, 'App\\Models\\User', 30),
(3, 'App\\Models\\User', 31);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(2, 'kawsarkhanbd3@gmail.com', '2022-11-07 03:22:49', '2022-11-07 03:22:49'),
(3, 'utyuy@hjhj', '2022-11-11 22:18:26', '2022-11-11 22:18:26'),
(4, 'kawsarkhan@gmail.com', '2022-11-11 22:25:24', '2022-11-11 22:25:24'),
(5, 'fgdfg@gdfgd.com', '2022-11-11 22:25:59', '2022-11-11 22:25:59');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` int NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_order` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_slip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `user_name`, `phone`, `email`, `address`, `city`, `state`, `zip`, `country`, `work_order`, `payment_slip`, `created_at`, `updated_at`) VALUES
(1, 12, 3, 'billal', 1875510694, 'billalhossennn@gmail.com', 'jamalpur', 'dhaka', 'Dhaka', 1214, 'Bangladesh', '0', '0', '2022-09-25 05:41:43', '2022-09-25 05:41:43'),
(2, 12, 3, 'billal', 1875510694, 'kawsarkhanbd3@gmail.com', 'jamalpur', 'dhaka', 'Dhaka', 1214, 'Bangladesh', '1664106148.png', '1664106148.jpg', '2022-09-25 05:42:28', '2022-09-25 05:42:28'),
(3, 12, 2, 'billal', 1875510694, 'kawsarkhanbd3@gmail.com', 'jamalpur', 'dhaka', 'Dhaka', 1214, 'Bangladesh', '1664106148.png', '1664106148.jpg', '2022-09-25 05:42:28', '2022-09-25 05:42:28'),
(4, 27, 9, 'billal', 1875510694, 'dev1.ngenit@gmail.com', 'keraniganj Dhaka-1310', 'dhaka', 'Dhaka', 1214, 'Bangladesh', '0', '1664966776.jpg', '2022-10-05 00:51:51', '2022-10-05 04:46:16'),
(5, 27, 3, 'billal', 1875510694, 'dev1.ngenit@gmail.com', 'keraniganj Dhaka-1310', 'Dhaka', 'Dhaka', 1310, 'Bangladesh', '0', '0', '2022-10-05 04:51:58', '2022-10-05 04:51:58'),
(6, 27, 6, 'billal', 1875510694, 'dev1.ngenit@gmail.com', 'keraniganj Dhaka-1310', 'Dhaka', 'Dhaka', 1310, 'Bangladesh', '0', '0', '2022-10-05 05:06:50', '2022-10-05 05:06:50'),
(7, 32, 2, 'Motiur Rahman', 1909302126, 'motiur.cmt@gmail.com', 'Sharitatpur', 'Dhaka', 'Dhaka', 8000, 'Bangaledsh', '1667472981.jpg', '1667472981.jpg', '2022-11-03 04:56:22', '2022-11-03 04:56:22'),
(8, 12, 3, 'Billal Hossen', 1787722178, 'admin@gmail.com', 'Keranigaj', 'Dhaka', 'Dhaka', 1310, 'Bangladesh', '0', '0', '2022-11-12 04:59:00', '2022-11-12 04:59:00'),
(9, 12, 1, 'Billal Hossen', 1787722178, 'admin@gmail.com', 'Keranigaj', 'Dhaka', 'Dhaka', 1310, 'Bangladesh', '0', '0', '2022-11-12 05:00:53', '2022-11-12 05:00:53'),
(10, 12, 2, 'Billal Hossen', 1787722178, 'admin@gmail.com', 'Keranigaj', 'Dhaka', 'Dhaka', 1310, 'Bangladesh', '0', '0', '2022-11-12 05:00:54', '2022-11-12 05:00:54'),
(11, 12, 3, 'Billal Hossen', 1787722178, 'admin@gmail.com', 'Keranigaj', 'Dhaka', 'Dhaka', 1310, 'Bangladesh', '0', '0', '2022-11-12 22:25:28', '2022-11-12 22:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` int NOT NULL,
  `quantity` int NOT NULL,
  `total_amount` int NOT NULL,
  `payment_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_name`, `unit_price`, `quantity`, `total_amount`, `payment_status`, `delivery_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lenovo ThinkStation P620 - tower - Ryzen ThreadRipper PRO 3955WX 3.9 GHz - AMD PRO - 32 GB - SSD 1 TB - US', 4351, 1, 4351, 'Unpaid', 'Processing', '2022-09-25 05:41:44', '2022-09-25 05:41:44'),
(2, 2, 'Lenovo ThinkStation P620 - tower - Ryzen ThreadRipper PRO 3955WX 3.9 GHz - AMD PRO - 32 GB - SSD 1 TB - US', 4351, 1, 4351, 'Checking', 'Processing', '2022-09-25 05:42:28', '2022-09-25 05:42:28'),
(3, 3, 'Microsoft Surface Pro 8 - 13\" - Core i3 1115G4 - 8 GB RAM - 128 GB SSD', 986, 1, 986, 'Checking', 'Processing', '2022-09-25 05:42:29', '2022-09-25 05:42:29'),
(4, 4, 'Absolute Resilience - subscription license (1 year) - 1 device', 44, 2, 88, 'Paid', 'Delivered', '2022-10-05 00:51:52', '2022-10-05 05:05:42'),
(5, 5, 'Lenovo ThinkStation P620 - tower - Ryzen ThreadRipper PRO 3955WX 3.9 GHz - AMD PRO - 32 GB - SSD 1 TB - US', 4351, 1, 4351, 'Checking', 'Processing', '2022-10-05 04:51:58', '2022-10-05 05:05:23'),
(6, 6, 'Jamf Connect - subscription license - 1 license', 26, 1, 26, 'Checking', 'Processing', '2022-10-05 05:06:50', '2022-11-02 22:08:27'),
(7, 7, 'StarTech.com DisplayPort 1.2 Cable w/ Latches - 6ft / 2m - HBR2 - 4K x 2K Display - Certified DP to DP Video Cable M/M (DISPLPORT6L) - DisplayPort cable - 6 ft', 14, 1, 14, 'Paid', 'Delivered', '2022-11-03 04:56:22', '2022-11-06 04:12:57'),
(8, 8, 'C2G 8in DisplayPort to VGA Adapter Converter - M/F - DisplayPort cable - 8 in', 37, 3, 111, 'Unpaid', 'Processing', '2022-11-12 04:59:00', '2022-11-12 04:59:00'),
(9, 9, 'D-Link Cat-5E Transparent RJ45 Connector. Type - RJ45 Connector', 3, 3, 9, 'Unpaid', 'Processing', '2022-11-12 05:00:54', '2022-11-12 05:00:54'),
(10, 10, 'StarTech.com DisplayPort 1.2 Cable w/ Latches - 6ft / 2m - HBR2 - 4K x 2K Display - Certified DP to DP Video Cable M/M (DISPLPORT6L) - DisplayPort cable - 6 ft', 14, 2, 28, 'Unpaid', 'Processing', '2022-11-12 05:00:54', '2022-11-12 05:00:54'),
(11, 11, 'C2G 8in DisplayPort to VGA Adapter Converter - M/F - DisplayPort cable - 8 in', 37, 16, 592, 'Paid', 'Shipped', '2022-11-12 22:25:28', '2022-11-13 04:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `page_builders`
--

CREATE TABLE `page_builders` (
  `id` bigint UNSIGNED NOT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `h1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `h2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `circle1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ctitle1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `circle2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ctitle2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `circle3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ctitle3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `section1_id` bigint UNSIGNED DEFAULT NULL,
  `section2_id` bigint UNSIGNED DEFAULT NULL,
  `section3_id` bigint UNSIGNED DEFAULT NULL,
  `section4_id` bigint UNSIGNED DEFAULT NULL,
  `sec1_id` bigint UNSIGNED DEFAULT NULL,
  `sec2_id` bigint UNSIGNED DEFAULT NULL,
  `sec3_id` bigint UNSIGNED DEFAULT NULL,
  `sec4_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_builders`
--

INSERT INTO `page_builders` (`id`, `brand`, `banner`, `h1`, `h2`, `circle1`, `ctitle1`, `circle2`, `ctitle2`, `circle3`, `ctitle3`, `section1_id`, `section2_id`, `section3_id`, `section4_id`, `sec1_id`, `sec2_id`, `sec3_id`, `sec4_id`, `created_at`, `updated_at`) VALUES
(7, 'Microsoft', '1664785628.jpg', 'Microsoft', 'Experience powerful features and maximum mobility.', '1664785628.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', '1664785628.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', '1664785628.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', NULL, 2, NULL, 10, 5, NULL, 4, NULL, '2022-10-03 02:27:08', '2022-10-03 02:27:08'),
(9, 'hp', '1664788460.jpg', 'HP', 'Manageable and secure HP® PCs and printers, available from Insight, safeguard your endpoints, data and business identity.', '1664788460.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', '1664788460.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', '1664788460.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', 31, NULL, 4, NULL, NULL, 4, NULL, 5, '2022-10-03 03:14:20', '2022-10-03 03:14:20'),
(10, 'Lenovo', '1664789399.jpg', 'Lenovo', 'As one of Microsoft’s leading global partners, Insight offers outstanding expertise in delivering and deploying Microsoft® hardware, software and cloud solutions.', '1664789399.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', '1664789399.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', '1664789399.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', NULL, 5, NULL, 3, 6, NULL, 5, NULL, '2022-10-03 03:30:00', '2022-10-03 03:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2022-09-13 00:58:50', '2022-09-13 00:58:50'),
(2, 'role-create', 'web', '2022-09-13 00:58:50', '2022-09-13 00:58:50'),
(3, 'role-edit', 'web', '2022-09-13 00:58:50', '2022-09-13 00:58:50'),
(4, 'role-delete', 'web', '2022-09-13 00:58:50', '2022-09-13 00:58:50'),
(5, 'product-list', 'web', '2022-09-13 00:58:51', '2022-09-13 00:58:51'),
(6, 'product-create', 'web', '2022-09-13 00:58:51', '2022-09-13 00:58:51'),
(7, 'product-edit', 'web', '2022-09-13 00:58:51', '2022-09-13 00:58:51'),
(8, 'product-delete', 'web', '2022-09-13 00:58:51', '2022-09-13 00:58:51'),
(9, 'user-create', 'web', '2022-09-14 03:54:40', '2022-09-14 03:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_sub_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `image`, `product_type`, `category`, `sub_category`, `sub_sub_category`, `sub_sub_sub_category`, `brand`, `industry`, `created_at`, `updated_at`) VALUES
(1, 'D-Link Cat-5E Transparent RJ45 Connector. Type - RJ45 Connector', 3, 'Rj45', '1664788460.jpg', 'New', 'Hardware', 'Cables', 'Display Cables', 'VGA', 'Hp', '', '2022-11-01 07:26:18', '2022-11-01 07:26:31'),
(2, 'StarTech.com DisplayPort 1.2 Cable w/ Latches - 6ft / 2m - HBR2 - 4K x 2K Display - Certified DP to DP Video Cable M/M (DISPLPORT6L) - DisplayPort cable - 6 ft', 14, 'StarTech.com DisplayPort 1.2 Cable w/ Latches - 6ft / 2m - HBR2 - 4K x 2K Display - Certified DP to DP Video Cable M/M (DISPLPORT6L) - DisplayPort cable - DisplayPort (M) to DisplayPort (M) - 6 ft - latched - black - for P/N: DK31C3HDPDUE, DKM30CHDPD, DKM', '1666771690.jpg', 'new', 'Hardware', 'Cables', 'Display cables', 'USB', 'Select Brand', 'Select Industry', '2022-10-26 02:08:10', '2022-10-26 02:08:10'),
(3, 'C2G 8in DisplayPort to VGA Adapter Converter - M/F - DisplayPort cable - 8 in', 37, 'C2G 8in DisplayPort to VGA Adapter Converter - M/F - DisplayPort cable - DisplayPort (M) to HD-15 (VGA) (F) - 8 in - latched - black', '1666771774.jpg', 'new', 'Hardware', 'Cables', 'Adapters', 'VGA', 'Select Brand', 'Select Industry', '2022-10-26 02:09:34', '2022-10-26 02:09:34'),
(4, 'Windows 11 You have a Windows 11 license.', 123, 'Windows 11 is a......', '1666772279.png', 'new', 'Software', 'Operating System', 'Windows', 'Windows 11', 'Microsoft', 'Select Industry', '2022-10-26 02:17:59', '2022-10-26 02:17:59'),
(5, 'Cisco Meraki Enterprise Cloud Controller - subscription license (3 years) - 1 access point', 209, 'Compatibility Information:	P/N: MR12-HW, MR16-HW, MR18-HW, MR24-HW, MR26-HW, MR32-HW, MR34-HW, MR62-HW, MR66-HW, MR72-HW\r\nCisco Meraki Enterprise Cloud Controller - Subscription license (3 years) - 1 access point - hosted', '1666772645.jpg', 'new', 'Software', 'Cloud', 'Network Application', 'nulll', 'Microsoft', 'Select Industry', '2022-10-26 02:24:05', '2022-10-26 02:24:05'),
(6, 'Intel Next Unit of Computing 10 Performance kit - NUC10i3FNKN - mini PC - Core i3 10110U 2.1 GHz - 0 GB - no HDD', 454, 'Intel Next Unit of Computing 10 Performance kit - NUC10i3FNKN - Barebone - mini PC - 1 x Core i3 10110U / 2.1 GHz - RAM 0 GB - UHD Graphics - GigE - WLAN: Bluetooth 5.0, 802.11a/b/g/n/ac/ax', '1667450485.jpg', 'deal', 'Hardware', 'Printer', 'Display Printer', 'HDMI', 'Intel', 'Select Industry', '2022-11-02 22:41:25', '2022-11-02 22:41:25'),
(7, 'LENOVO 11E G5, CELERON N4100 1.1GHZ, 8GB RAM, 128GB M.2 SSD, NO ODD, 11.6HD, WIN 10 PRO 64BIT, WEBCAM, GRADE A REFURBISHED 1 YEAR WARRANTY', 209, 'LENOVO 11E G5, CELERON N4100 1.1GHZ, 8GB RAM, 128GB M.2 SSD, NO ODD, 11.6HD, WIN 10 PRO 64BIT, WEBCAM, GRADE A REFURBISHED 1 YEAR WARRANTY', '1667452488.jpg', 'refurbished', 'Hardware', 'Printer', 'Display Printer', 'HDMI', 'Lenovo', 'Select Industry', '2022-11-02 23:14:48', '2022-11-02 23:14:48'),
(8, 'Lexmark B2236dw - printer - B/W - laser', 340, 'Lexmark B2236dw - Printer - B/W - Duplex - laser - A4/Legal - 600 x 600 dpi - up to 36 ppm - capacity: 250 sheets - USB 2.0, LAN, Wi-Fi(n)', '1667456856.jpg', 'deal', 'Hardware', 'Printer', 'Display Printer', 'HDMI', 'Select Brand', 'Select Industry', '2022-11-03 00:27:36', '2022-11-03 00:27:36'),
(9, 'Absolute Resilience - subscription license (1 year) - 1 device', 456, 'Absolute Resilience - Subscription license (1 year) - 1 device - volume - level 1 (1-2499) - ESD', '1667622099.jpg', 'new', 'Software', 'Cloud', 'Network Application', 'nulll', 'Microsoft', 'Healthcare', '2022-11-04 22:21:39', '2022-11-04 22:21:39'),
(16, 'Camtasia 2022 - license + Maintenance - 1 user', 329, 'Camtasia 2022 - License + Maintenance - 1 user - volume, commercial - 1-4 licenses - Win, Mac', '1667884464.jpg', 'deal', 'Software', 'Cloud', 'Network Application', 'nulll', 'Intel', 'Select Industry', '2022-11-07 23:14:24', '2022-11-07 23:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-09-13 00:52:07', '2022-09-13 00:52:07'),
(2, 'Editor', 'web', '2022-09-13 03:10:59', '2022-09-13 03:10:59'),
(3, 'Super admin', 'web', '2022-09-13 03:12:18', '2022-09-13 03:12:18'),
(4, 'billal', 'web', '2022-09-13 05:01:06', '2022-09-13 05:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(1, 3),
(5, 3),
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('aNoEE7UpEPuSOf4KBS4GfCUalzVbmwIcMN8j2Z0O', 12, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiRGl0U2xzNDJsNVlpRHVVNlZXTXpvNXRyNFlwTHlDbmtKR3NGRkxiaCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo1MToiaHR0cDovL2xvY2FsaG9zdC9uZ2VuaXQvcHVibGljL2FsbHNvZnR3YXJlX3RlbXBsYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoyNjoiNHlUbFRES3Uzb0pPZnpEX2NhcnRfaXRlbXMiO2E6MDp7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCR1cURPelA0bFlwR3NaUDNrNTU5cXQuWlBscGhWbE1keDBiZHh0UlpLdkxTWmw4VXZpalk4bSI7fQ==', 1668335478),
('v3iWA74wtvA4lK1L6lTA6BrRDwSxRkDkCJcFz1jj', NULL, '192.168.0.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiamYyOVI5U1NhcVZkQUJPUmc4QVFwQjlNMUhOUlQ4RFJ3RXN6bHlydyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNDoiaHR0cDovLzE5Mi4xNjguMC4xMTAvbmdlbml0L3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1668322736),
('vm2bMrTfmBP0x1AJrj1cCLl5S7yjKYArTCwJ6Wsf', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRkd0Mk4xYW1jR1BIV09iN2taeEtZTnNpREVlMGpQNmdwbjBFeUdXbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXJ0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1668322195);

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'Technology', '2022-10-04 00:51:52', '2022-10-04 00:51:52'),
(3, 'HealthCare', '2022-10-04 22:49:59', '2022-10-04 22:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `successes`
--

CREATE TABLE `successes` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `successes`
--

INSERT INTO `successes` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Heart', 'We are teammates. We take care of each other, our clients and our communities.', '2022-10-04 03:50:45', '2022-10-04 23:07:41'),
(2, 'Hunger', 'We are change agents, united in our passion to improve every day and deliver outstanding results for our clients, partners and Insight.', '2022-10-04 03:50:45', '2022-10-04 23:06:31'),
(3, 'Harmony', 'who value inclusivity and create meaningful connections so we can win together.', '2022-10-04 03:51:38', '2022-10-04 23:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `supports`
--

CREATE TABLE `supports` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `support_topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supports`
--

INSERT INTO `supports` (`id`, `first_name`, `last_name`, `company`, `email`, `phone`, `support_topic`, `comment`, `contact_by`, `created_at`, `updated_at`) VALUES
(1, 'kawsar', 'khan', 'Ngenit', 'kawsarkhanbd3@gmail.com', '01875510694', 'Order tracking/history', 'dsfsd', 'Phone', '2022-11-10 03:03:15', '2022-11-10 03:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Hasiful', 'Hasiful@gmail.com', NULL, '$2y$10$98ZDqnV0KFPXpzeJYTo08.uFLVN8FjMPQo8FLginu7DhilwhS3GXm', NULL, NULL, NULL, 'mzxKBNddncf8M6WaFwtm9WY7ouA3B23lrDxcLemxshtM30aXf9tsM9hQ2vl0', NULL, NULL, '2022-09-06 22:43:43', '2022-09-06 22:43:43'),
(7, 'Motiur', 'motiur922083@gmail.com', '2022-09-12 03:33:41', '$2y$10$k7E0XPM7a.0aBF5nFJCvhOXrmMdT.9FjhlWiQbHFIYwaz5Ayie5pO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-12 05:54:54', '2022-09-12 05:54:54'),
(11, 'billal', 'billalhossennn@gmail.com', '2022-09-13 09:14:38', '$2y$10$3tH3pL.UrdyfF76LXfMNMueo86ghCHxLDUOo7OV9f1wr.DcQFYb4a', NULL, NULL, NULL, 'hVyUMrUW9BJUql2IPljqWYh9LJmC8HbZNPpQg5ftrtwFH8fFXepcDF7WHAkW', NULL, NULL, '2022-09-12 23:14:23', '2022-09-18 21:48:38'),
(12, 'Billal Hossen', 'admin@gmail.com', '2022-09-13 08:01:51', '$2y$10$uqDOzP4lYpGsZP3k559qt.ZPlphVlMdx0bdxtRZKvLSZl8UvijY8m', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-13 00:52:07', '2022-09-13 00:52:07'),
(13, 'hasiful', 'hasifulislam32@gmail.com', NULL, '$2y$10$SWN0cD09wLLwqng6pWdBTeFp.o9ZOlZLZlMEtHpvF3Lg6fDerPHqm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-13 01:14:32', '2022-09-13 01:14:32'),
(24, 'Billal', 'billal.cinebaz@gmail.com', '2022-09-15 03:50:03', '$2y$10$442lsQc28LEQo8X0d14B.eDcUtobAv6fYp7EMfFxEP8OslLHD/TVK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-15 03:49:41', '2022-09-15 03:50:03'),
(27, 'dev', 'dev1.ngenit@gmail.com', '2022-09-19 04:22:31', '$2y$10$.jEjR98Aya7/2x8JvTg.reIlikbeAIYHGg36YVDQJ8Dc.uQtEn34.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-17 22:01:34', '2022-09-17 22:04:09'),
(28, 'hasiful', 'Hasiful@ggmail.com', '2022-09-18 11:37:14', '$2y$10$nhixvO/i4FfEBG/0RJuigOUKMoUDiiYvKxCOmLpvKo9kbWvGh7ZnG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-18 05:35:40', '2022-09-18 05:35:40'),
(31, 'rubaiyat', 'rubaiyat@gmail.com', '2022-09-26 22:18:01', '$2y$10$Ezcm.v3fJDPmgZ26vvEdRu5uFBB0KpKoelFdHJ2wAR4nHHYJwdAaa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-26 22:18:18', '2022-09-26 22:18:18'),
(32, 'Motiur Rahman', 'dev4.ngenit@gmail.com', '2022-11-03 04:54:13', '$2y$10$iTeDoW8cSz6NZNR73eBmX.tizLhKuQK1wRcwfSb0T9F/DseaxB/qK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-03 04:53:47', '2022-11-03 04:54:13'),
(33, 'David', 'David@gmail.com', '2022-11-12 09:43:17', '$2y$10$59o/nrRXxN7/in6PyTKBPu6021H4weji7ycNr1AdAt/yuOyTfKoKa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 03:25:43', '2022-11-12 03:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_infos`
--

CREATE TABLE `user_infos` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_infos`
--

INSERT INTO `user_infos` (`id`, `user_id`, `phone`, `address`, `city`, `state`, `zip`, `country`, `created_at`, `updated_at`) VALUES
(1, 33, 0, '', '', '', '', '', '2022-11-12 03:25:51', '2022-11-12 03:25:51'),
(2, 12, 1787722178, 'Keranigaj', 'Dhaka', 'Dhaka', '1310', 'Bangladesh', '2022-11-12 09:28:12', '2022-11-12 09:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `widget1`
--

CREATE TABLE `widget1` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `widget1`
--

INSERT INTO `widget1` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Client Experience 1', '1662962249.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-10-18 05:09:34', '2022-10-18 05:09:34'),
(2, 'Client Experience 2', '1662962318.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-10-18 01:38:01', '2022-10-18 01:38:01'),
(3, 'Client Experience 3', '1662962337.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-12 00:00:09', '2022-09-12 00:00:09'),
(4, 'Client Experience 4', '1662962363.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-12 00:00:17', '2022-09-12 00:00:17'),
(5, 'Client Experience 5', '1662962380.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-12 00:14:19', '2022-09-12 00:14:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_page_builders`
--
ALTER TABLE `category_page_builders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_page_builders_category1_foreign` (`category1`),
  ADD KEY `category_page_builders_category2_foreign` (`category2`),
  ADD KEY `category_page_builders_category3_foreign` (`category3`),
  ADD KEY `category_page_builders_category4_foreign` (`category4`),
  ADD KEY `category_page_builders_category5_foreign` (`category5`),
  ADD KEY `category_page_builders_category6_foreign` (`category6`),
  ADD KEY `category_page_builders_category7_foreign` (`category7`),
  ADD KEY `category_page_builders_category8_foreign` (`category8`),
  ADD KEY `category_page_builders_category9_foreign` (`category9`),
  ADD KEY `category_page_builders_category10_foreign` (`category10`),
  ADD KEY `category_page_builders_category11_foreign` (`category11`),
  ADD KEY `category_page_builders_category12_foreign` (`category12`),
  ADD KEY `category_page_builders_category13_foreign` (`category13`),
  ADD KEY `category_page_builders_category14_foreign` (`category14`),
  ADD KEY `category_page_builders_category15_foreign` (`category15`),
  ADD KEY `category_page_builders_category16_foreign` (`category16`),
  ADD KEY `category_page_builders_category17_foreign` (`category17`),
  ADD KEY `category_page_builders_category18_foreign` (`category18`),
  ADD KEY `category_page_builders_category19_foreign` (`category19`),
  ADD KEY `category_page_builders_category20_foreign` (`category20`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_builders`
--
ALTER TABLE `home_page_builders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_page_builders_story1_id_foreign` (`story1_id`),
  ADD KEY `home_page_builders_story2_id_foreign` (`story2_id`),
  ADD KEY `home_page_builders_story3_id_foreign` (`story3_id`),
  ADD KEY `home_page_builders_story4_id_foreign` (`story4_id`),
  ADD KEY `home_page_builders_story5_id_foreign` (`story5_id`),
  ADD KEY `home_page_builders_solution1_id_foreign` (`solution1_id`),
  ADD KEY `home_page_builders_solution2_id_foreign` (`solution2_id`),
  ADD KEY `home_page_builders_solution3_id_foreign` (`solution3_id`),
  ADD KEY `home_page_builders_solution4_id_foreign` (`solution4_id`),
  ADD KEY `home_page_builders_success1_id_foreign` (`success1_id`),
  ADD KEY `home_page_builders_success2_id_foreign` (`success2_id`),
  ADD KEY `home_page_builders_success3_id_foreign` (`success3_id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

--
-- Indexes for table `page_builders`
--
ALTER TABLE `page_builders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_builders_section1_id_foreign` (`section1_id`),
  ADD KEY `page_builders_section2_id_foreign` (`section2_id`),
  ADD KEY `page_builders_section3_id_foreign` (`section3_id`),
  ADD KEY `page_builders_section4_id_foreign` (`section4_id`),
  ADD KEY `page_builders_sec1_id_foreign` (`sec1_id`),
  ADD KEY `page_builders_sec2_id_foreign` (`sec2_id`),
  ADD KEY `page_builders_sec3_id_foreign` (`sec3_id`),
  ADD KEY `page_builders_sec4_id_foreign` (`sec4_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `successes`
--
ALTER TABLE `successes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supports`
--
ALTER TABLE `supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_infos_user_id_foreign` (`user_id`);

--
-- Indexes for table `widget1`
--
ALTER TABLE `widget1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `category_page_builders`
--
ALTER TABLE `category_page_builders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home_page_builders`
--
ALTER TABLE `home_page_builders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `page_builders`
--
ALTER TABLE `page_builders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `successes`
--
ALTER TABLE `successes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supports`
--
ALTER TABLE `supports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `widget1`
--
ALTER TABLE `widget1`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_page_builders`
--
ALTER TABLE `category_page_builders`
  ADD CONSTRAINT `category_page_builders_category10_foreign` FOREIGN KEY (`category10`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category11_foreign` FOREIGN KEY (`category11`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category12_foreign` FOREIGN KEY (`category12`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category13_foreign` FOREIGN KEY (`category13`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category14_foreign` FOREIGN KEY (`category14`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category15_foreign` FOREIGN KEY (`category15`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category16_foreign` FOREIGN KEY (`category16`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category17_foreign` FOREIGN KEY (`category17`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category18_foreign` FOREIGN KEY (`category18`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category19_foreign` FOREIGN KEY (`category19`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category1_foreign` FOREIGN KEY (`category1`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category20_foreign` FOREIGN KEY (`category20`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category2_foreign` FOREIGN KEY (`category2`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category3_foreign` FOREIGN KEY (`category3`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category4_foreign` FOREIGN KEY (`category4`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category5_foreign` FOREIGN KEY (`category5`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category6_foreign` FOREIGN KEY (`category6`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category7_foreign` FOREIGN KEY (`category7`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category8_foreign` FOREIGN KEY (`category8`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_page_builders_category9_foreign` FOREIGN KEY (`category9`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `home_page_builders`
--
ALTER TABLE `home_page_builders`
  ADD CONSTRAINT `home_page_builders_solution1_id_foreign` FOREIGN KEY (`solution1_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home_page_builders_solution2_id_foreign` FOREIGN KEY (`solution2_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home_page_builders_solution3_id_foreign` FOREIGN KEY (`solution3_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home_page_builders_solution4_id_foreign` FOREIGN KEY (`solution4_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home_page_builders_story1_id_foreign` FOREIGN KEY (`story1_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home_page_builders_story2_id_foreign` FOREIGN KEY (`story2_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home_page_builders_story3_id_foreign` FOREIGN KEY (`story3_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home_page_builders_story4_id_foreign` FOREIGN KEY (`story4_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home_page_builders_story5_id_foreign` FOREIGN KEY (`story5_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home_page_builders_success1_id_foreign` FOREIGN KEY (`success1_id`) REFERENCES `successes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home_page_builders_success2_id_foreign` FOREIGN KEY (`success2_id`) REFERENCES `successes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home_page_builders_success3_id_foreign` FOREIGN KEY (`success3_id`) REFERENCES `successes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD CONSTRAINT `user_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
