-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 06, 2022 at 10:04 AM
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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `industries` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solutions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(3, 'hp', '1664088842.png', '2022-09-08 00:24:53', '2022-09-25 00:54:02'),
(4, 'Lenovo', '1664088953.png', '2022-09-10 21:47:19', '2022-09-25 00:55:53'),
(5, 'Microsoft', '1664088962.png', '2022-09-18 00:27:18', '2022-09-25 00:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Laptop', '1664088985.png', '2022-09-08 00:33:50', '2022-09-25 00:56:25'),
(6, 'Accessories', '1664087535.jpg', '2022-09-25 00:32:16', '2022-09-25 00:32:16'),
(7, 'Cables', '1664087551.jpg', '2022-09-25 00:32:31', '2022-09-25 00:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `help_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(10, '2022_09_06_053732_create_categories_table', 1),
(11, '2022_09_06_053920_create_brands_table', 1),
(15, '2022_09_11_065057_create_clients_table', 4),
(16, '2022_09_11_093137_widget1', 5),
(17, '2022_09_13_062902_create_permission_tables', 6),
(19, '2022_09_04_050027_create_contact_us_table', 7),
(22, '2022_09_06_054032_create_products_table', 8),
(23, '2022_09_22_042405_create_orders_table', 8),
(24, '2022_09_22_042438_create_order_details_table', 8),
(29, '2022_09_27_052500_create_page_builders_table', 10),
(30, '2022_09_20_100222_create_solutions_table', 11),
(31, '2022_10_08_031506_create_industries_table', 12),
(32, '2022_09_13_083554_create_successes_table', 13),
(33, '2022_09_06_084339_create_blogs_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` int NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_slip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(6, 27, 6, 'billal', 1875510694, 'dev1.ngenit@gmail.com', 'keraniganj Dhaka-1310', 'Dhaka', 'Dhaka', 1310, 'Bangladesh', '0', '0', '2022-10-05 05:06:50', '2022-10-05 05:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` int NOT NULL,
  `quantity` int NOT NULL,
  `total_amount` int NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(6, 6, 'Jamf Connect - subscription license - 1 license', 26, 1, 26, 'Checking', 'Processing', '2022-10-05 05:06:50', '2022-10-05 22:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `page_builders`
--

CREATE TABLE `page_builders` (
  `id` bigint UNSIGNED NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `circle1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ctitle1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `circle2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ctitle2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `circle3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ctitle3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `image`, `product_type`, `category`, `sub_category`, `brand`, `industry`, `created_at`, `updated_at`) VALUES
(1, 'Cisco Integrated Services Router 1111 - router - desktop', 1215, 'Cisco Integrated Services Router 1111 - Router - 4-port switch - GigE', '1664093376.jpg', 'Hardware', 'Accessories', 'Popular', 'hp', 'Select Industry', '2022-09-25 02:09:36', '2022-09-25 02:09:36'),
(2, 'Microsoft Surface Pro 8 - 13\" - Core i3 1115G4 - 8 GB RAM - 128 GB SSD', 986, 'Microsoft Surface Pro 8 - Tablet - Intel Core i3 1115G4 - Win 11 Pro - UHD Graphics - 8 GB RAM - 128 GB SSD - 13\" touchscreen 2880 x 1920 @ 120 Hz - Wi-Fi 6 - platinum - commercial', '1664093554.jpg', 'Hardware', 'Laptop', 'Popular', 'Microsoft', 'Select Industry', '2022-09-25 02:12:34', '2022-09-25 02:12:34'),
(3, 'Lenovo ThinkStation P620 - tower - Ryzen ThreadRipper PRO 3955WX 3.9 GHz - AMD PRO - 32 GB - SSD 1 TB - US', 4351, 'Lenovo ThinkStation P620 30E0 - Tower - 1 x Ryzen ThreadRipper PRO 3955WX / 3.9 GHz - AMD PRO - RAM 32 GB - SSD 1 TB - TCG Opal Encryption, NVMe - Quadro RTX 4000 - 10 GigE - Win 10 Pro 64-bit - monitor: none - keyboard: US - TopSeller - with 3 Years Leno', '1664093627.jpg', 'Hardware', 'Accessories', 'Popular', 'Lenovo', 'Select Industry', '2022-09-25 02:13:47', '2022-09-25 02:13:47'),
(4, 'HP EliteBook 840 G8 Notebook - Wolf Pro Security - 14\" - Core i7 1185G7 - Evo vPro - 16 GB RAM - 512 GB SSD - US - with HP Wolf Pro Security Edition (1 year)', 2215, 'HP EliteBook 840 G8 Notebook - Wolf Pro Security - Intel Core i7 1185G7 / 3 GHz - Evo vPro - Win 10 Pro 64-bit (includes Win 11 Pro License) - Iris Xe Graphics - 16 GB RAM - 512 GB SSD NVMe, TLC - 14\" IPS HP SureView Reflect 1920 x 1080 (Full HD) - NFC, W', '1664093739.jpg', 'Hardware', 'Laptop', 'Popular', 'hp', 'Select Industry', '2022-09-25 02:15:39', '2022-09-25 02:15:39'),
(5, 'Microsoft Surface Laptop 4 - 13.5\" - Core i7 1185G7 - 16 GB RAM - 256 GB SSD - English', 1599, 'Microsoft Surface Laptop 4 - Intel Core i7 1185G7 - Win 10 Pro - Iris Xe Graphics - 16 GB RAM - 256 GB SSD - 13.5\" touchscreen 2256 x 1504 - Wi-Fi 6 - matte black - kbd: English - commerci', '1664093989.png', 'Hardware', 'Laptop', 'Popular', 'Microsoft', 'Select Industry', '2022-09-25 02:19:49', '2022-09-25 02:19:49'),
(6, 'Jamf Connect - subscription license - 1 license', 26, 'Jamf Connect - Subscription license - Mac', '1664094214.jpg', 'Software', 'Laptop', 'Popular', 'Microsoft', 'Select Industry', '2022-09-25 02:23:34', '2022-09-25 02:23:34'),
(7, 'Windows 11 Pro - license - 1 license', 150, 'Windows 10 Pro - License - 1 license - OEM - DVD - 64-bit - English', '1664094300.png', 'Software', 'Accessories', 'Popular', 'Microsoft', 'Select Industry', '2022-09-25 02:25:00', '2022-09-25 02:25:00'),
(8, 'Adobe Acrobat Pro 2020 - upgrade license - 1 user', 287, 'Adobe Acrobat Pro 2020 - Upgrade license - 1 user - TLP - level 1 (1+) - Win, Mac - Universal English', '1664094726.jpg', 'Software', 'Cables', '', 'Microsoft', 'Select Industry', '2022-09-25 02:27:14', '2022-09-25 02:32:06'),
(9, 'Absolute Resilience - subscription license (1 year) - 1 device', 44, 'Absolute Resilience - Subscription license (1 year) - 1 device - volume - level 1 (1-2499) - ESD - Win, Mac, Android', '1664094584.jpg', 'Software', 'Accessories', 'Popular', 'Lenovo', 'Select Industry', '2022-09-25 02:29:44', '2022-09-25 02:29:44'),
(10, 'Microsoft Windows Server 2022 Standard - license - 16 cores', 866, 'Microsoft Windows Server 2022 Standard - License - 16 cores - DVD - 64-bit - UK English', '1664094816.jpg', 'Software', 'Accessories', 'Popular', 'Microsoft', 'Select Industry', '2022-09-25 02:33:36', '2022-09-25 02:33:36'),
(31, 'Cisco Catalyst 9500 - Network Advantage', 346, 'Cisco Catalyst 9500 - Network Advantage - switch - L3 - managed - 16 x 10 Gigabit Ethernet + 2 x 10 Gigabit SFP+ - rack-mountable', '1664788460.jpg', 'Hardware', 'Accessories', 'Popular', 'hp', 'Automotive', '2022-10-03 03:14:20', '2022-10-03 03:14:20'),
(32, 'Demo', 345, 'Demo', '1664795878.png', 'Hardware', 'Laptop', 'Popular', 'Adobe', 'Select Industry', '2022-10-03 05:17:59', '2022-10-03 05:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4vGN86END9r8G098lyeKH1J19G5EceToELAb2Sji', 12, '192.168.0.109', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNXBxRUthT0ZpV2RCNlhZOFNyQlo4clRQell6UnpPNVpPYkd2YkV3NSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ2OiJodHRwOi8vMTkyLjE2OC4wLjExMC9uZ2VuaXQvcHVibGljL3BhZ2VidWlsZGVyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkdXFET3pQNGxZcEdzWlAzazU1OXF0LlpQbHBoVmxNZHgwYmR4dFJaS3ZMU1psOFV2aWpZOG0iO30=', 1665043430),
('iORKZLRLI1q4RvO7DskZm4TvDCT7a9pk1cGyUl3u', NULL, '192.168.0.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSzFjaXVDNjBhUjYwVUJlb1pVRGJoVjZJQzFXM2Y3bGExYXFlZzRMQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xOTIuMTY4LjAuMTEwL25nZW5pdC9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjI2OiI0eVRsVERLdTNvSk9mekRfY2FydF9pdGVtcyI7TzozMjoiRGFycnlsZGVjb2RlXENhcnRcQ2FydENvbGxlY3Rpb24iOjI6e3M6ODoiACoAaXRlbXMiO2E6MTp7aTozO086MzI6IkRhcnJ5bGRlY29kZVxDYXJ0XEl0ZW1Db2xsZWN0aW9uIjozOntzOjk6IgAqAGNvbmZpZyI7YTo2OntzOjE0OiJmb3JtYXRfbnVtYmVycyI7YjowO3M6ODoiZGVjaW1hbHMiO2k6MDtzOjk6ImRlY19wb2ludCI7czoxOiIuIjtzOjEzOiJ0aG91c2FuZHNfc2VwIjtzOjE6IiwiO3M6Nzoic3RvcmFnZSI7TjtzOjY6ImV2ZW50cyI7Tjt9czo4OiIAKgBpdGVtcyI7YTo2OntzOjI6ImlkIjtzOjE6IjMiO3M6NDoibmFtZSI7czoxMDY6Ikxlbm92byBUaGlua1N0YXRpb24gUDYyMCAtIHRvd2VyIC0gUnl6ZW4gVGhyZWFkUmlwcGVyIFBSTyAzOTU1V1ggMy45IEdIeiAtIEFNRCBQUk8gLSAzMiBHQiAtIFNTRCAxIFRCIC0gVVMiO3M6NToicHJpY2UiO2Q6NDM1MTtzOjg6InF1YW50aXR5IjtzOjE6IjEiO3M6MTA6ImF0dHJpYnV0ZXMiO086NDE6IkRhcnJ5bGRlY29kZVxDYXJ0XEl0ZW1BdHRyaWJ1dGVDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6NToiaW1hZ2UiO3M6MTQ6IjE2NjQwOTM2MjcuanBnIjt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjEwOiJjb25kaXRpb25zIjthOjA6e319czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319', 1665049743),
('uvGD9VPMj3JgdeJYU3Q5LeVBl9c9WU0xAArMKjMS', 12, '192.168.0.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQVZOaEJsbmI1RzQwWWEwUVVsYTJxa3M1WUh1TGRvR20xNjdoYXNRTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xOTIuMTY4LjAuMTEwL25nZW5pdC9wdWJsaWMvYWRtaW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkdXFET3pQNGxZcEdzWlAzazU1OXF0LlpQbHBoVmxNZHgwYmR4dFJaS3ZMU1psOFV2aWpZOG0iO30=', 1665039240),
('ZiX9UPbVRvCMo3g9TcRwYp2AWPTN7vdoqJSSv5Ow', 12, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiS0xWTWFoUjlXdlJVWHJJdGM0NVEzN0NJUXJPQ2tJR0tGUHd6RkR6NiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Qvbmdlbml0L3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MjY6IjR5VGxUREt1M29KT2Z6RF9jYXJ0X2l0ZW1zIjthOjA6e31zOjM6InVybCI7YTowOnt9czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkdXFET3pQNGxZcEdzWlAzazU1OXF0LlpQbHBoVmxNZHgwYmR4dFJaS3ZMU1psOFV2aWpZOG0iO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEyO30=', 1665050633);

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `successes`
--

CREATE TABLE `successes` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Hasiful', 'Hasiful@gmail.com', NULL, '$2y$10$98ZDqnV0KFPXpzeJYTo08.uFLVN8FjMPQo8FLginu7DhilwhS3GXm', NULL, NULL, NULL, 'NSxIqHErTuZiMZboQ4a18XZ3w3dF3EQo6cY71yucL09TsvZmncTICjhXjkmq', NULL, NULL, '2022-09-06 22:43:43', '2022-09-06 22:43:43'),
(7, 'Motiur', 'motiur922083@gmail.com', '2022-09-12 03:33:41', '$2y$10$k7E0XPM7a.0aBF5nFJCvhOXrmMdT.9FjhlWiQbHFIYwaz5Ayie5pO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-12 05:54:54', '2022-09-12 05:54:54'),
(11, 'billal', 'billalhossennn@gmail.com', '2022-09-13 09:14:38', '$2y$10$3tH3pL.UrdyfF76LXfMNMueo86ghCHxLDUOo7OV9f1wr.DcQFYb4a', NULL, NULL, NULL, 'hVyUMrUW9BJUql2IPljqWYh9LJmC8HbZNPpQg5ftrtwFH8fFXepcDF7WHAkW', NULL, NULL, '2022-09-12 23:14:23', '2022-09-18 21:48:38'),
(12, 'Billal Hossen', 'admin@gmail.com', '2022-09-13 08:01:51', '$2y$10$uqDOzP4lYpGsZP3k559qt.ZPlphVlMdx0bdxtRZKvLSZl8UvijY8m', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-13 00:52:07', '2022-09-13 00:52:07'),
(13, 'hasiful', 'hasifulislam32@gmail.com', NULL, '$2y$10$SWN0cD09wLLwqng6pWdBTeFp.o9ZOlZLZlMEtHpvF3Lg6fDerPHqm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-13 01:14:32', '2022-09-13 01:14:32'),
(24, 'Billal', 'billal.cinebaz@gmail.com', '2022-09-15 03:50:03', '$2y$10$442lsQc28LEQo8X0d14B.eDcUtobAv6fYp7EMfFxEP8OslLHD/TVK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-15 03:49:41', '2022-09-15 03:50:03'),
(27, 'dev', 'dev1.ngenit@gmail.com', '2022-09-19 04:22:31', '$2y$10$.jEjR98Aya7/2x8JvTg.reIlikbeAIYHGg36YVDQJ8Dc.uQtEn34.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-17 22:01:34', '2022-09-17 22:04:09'),
(28, 'hasiful', 'Hasiful@ggmail.com', '2022-09-18 11:37:14', '$2y$10$nhixvO/i4FfEBG/0RJuigOUKMoUDiiYvKxCOmLpvKo9kbWvGh7ZnG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-18 05:35:40', '2022-09-18 05:35:40'),
(29, 'Motiur Rahman', 'dev4.ngenit@gmail.com', '2022-09-24 22:38:10', '$2y$10$RlFQk8mkPNTYwgYtTVDOAOp9IHXy3bHxTOa.rPu/KjO8v709A0iWa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-24 22:37:47', '2022-09-24 22:38:10'),
(31, 'rubaiyat', 'rubaiyat@gmail.com', '2022-09-26 22:18:01', '$2y$10$Ezcm.v3fJDPmgZ26vvEdRu5uFBB0KpKoelFdHJ2wAR4nHHYJwdAaa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-26 22:18:18', '2022-09-26 22:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `widget1`
--

CREATE TABLE `widget1` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `widget1`
--

INSERT INTO `widget1` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Client Experience 1', '1662962249.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-13 03:35:48', '2022-09-13 03:35:48'),
(2, 'Client Experience 2', '1662962318.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-12 00:00:01', '2022-09-12 00:00:01'),
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `widget1`
--
ALTER TABLE `widget1`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `page_builders`
--
ALTER TABLE `page_builders`
  ADD CONSTRAINT `page_builders_sec1_id_foreign` FOREIGN KEY (`sec1_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `page_builders_sec2_id_foreign` FOREIGN KEY (`sec2_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `page_builders_sec3_id_foreign` FOREIGN KEY (`sec3_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `page_builders_sec4_id_foreign` FOREIGN KEY (`sec4_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `page_builders_section1_id_foreign` FOREIGN KEY (`section1_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `page_builders_section2_id_foreign` FOREIGN KEY (`section2_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `page_builders_section3_id_foreign` FOREIGN KEY (`section3_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `page_builders_section4_id_foreign` FOREIGN KEY (`section4_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
