-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 08:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handyman`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblapplicants`
--

CREATE TABLE `tblapplicants` (
  `APPLICANTID` int(11) NOT NULL,
  `FNAME` varchar(90) NOT NULL,
  `LNAME` varchar(90) NOT NULL,
  `MNAME` varchar(90) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `SEX` varchar(11) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `AGE` int(2) NOT NULL,
  `USERNAME` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `EMAILADDRESS` varchar(90) NOT NULL,
  `CONTACTNO` varchar(90) NOT NULL,
  `APPLICANTPHOTO` varchar(255) NOT NULL,
  `SKILL1` varchar(244) NOT NULL,
  `SKILL2` varchar(244) NOT NULL,
  `SKILL3` varchar(244) NOT NULL,
  `FRONT_ID` varchar(255) NOT NULL,
  `BACK_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblapplicants`
--

INSERT INTO `tblapplicants` (`APPLICANTID`, `FNAME`, `LNAME`, `MNAME`, `ADDRESS`, `SEX`, `BIRTHDATE`, `AGE`, `USERNAME`, `PASS`, `EMAILADDRESS`, `CONTACTNO`, `APPLICANTPHOTO`, `SKILL1`, `SKILL2`, `SKILL3`, `FRONT_ID`, `BACK_ID`) VALUES
(2023023, 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '2001-05-31', 21, 'zahraluangco', '8cb2237d0679ca88db6464eac60da96345513964', 'zahraluangco@outlook.com', '09179053670', 'photos/team1.jpg', 'Programmer', 'Web Designing', 'Digital Art', '2022_03_19 5_21 PM Office Lens (2).jpg', '2022_03_19 5_21 PM Office Lens (1).jpg'),
(2023026, 'Lindsy Lou', 'Capuyan', 'Zagado', 'Phase J Block 18 Lot 11 Francisco Homes-Guijo CSDJM Bulacan', 'Male', '2000-07-18', 22, 'lindsyx2000', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'lindsylouzagado@gmail.com', '09202311835', 'photos/team2.jpg', 'Video Editor', 'Programmer', 'Music Editor', '', ''),
(2023044, 'Angel', 'Largado', 'Torrente', ' Hacienda Caretas, Graceville CSJDM Bulacan', 'Female', '2000-03-12', 23, 'angellargado', '8cb2237d0679ca88db6464eac60da96345513964', 'largadoangel00@gmail.com', '09276226814', 'photos/team5.jpg', 'Writer', 'Translator', 'Graphic Designer', '', ''),
(2023045, 'Yana Chrystelle', 'Go', 'M', 'Blk 18 Purok 8, Brgy. Yakal, Francisco Homes, rnCSJDM, Bulacan', 'Female', '2001-01-28', 22, 'yanago', '8cb2237d0679ca88db6464eac60da96345513964', 'yanayango@gmail.com', '09123456789', 'photos/team3.jpg', 'Accountant', 'Editor', 'Blogger', '', ''),
(2023046, 'Ericka Mhae', 'Jinete', 'Candidato', 'Quarry Minuyan Proper CSJDM Bulacan', 'Female', '2000-05-05', 22, 'erickajinete', '8cb2237d0679ca88db6464eac60da96345513964', 'mhaejinete@gmail.com', '09123456789', 'photos/team4.jpg', 'Photographer', 'Web Designer', 'Data Analyst', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblattachmentfile`
--

CREATE TABLE `tblattachmentfile` (
  `ID` int(11) NOT NULL,
  `FILEID` varchar(30) DEFAULT NULL,
  `JOBID` int(11) NOT NULL,
  `FILE_NAME` varchar(90) NOT NULL,
  `FILE_LOCATION` varchar(255) NOT NULL,
  `USERATTACHMENTID` int(11) NOT NULL,
  `FRONT_ID` varchar(255) NOT NULL,
  `BACK_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblattachmentfile`
--

INSERT INTO `tblattachmentfile` (`ID`, `FILEID`, `JOBID`, `FILE_NAME`, `FILE_LOCATION`, `USERATTACHMENTID`, `FRONT_ID`, `BACK_ID`) VALUES
(1, '202369125107', 2, 'Resume', 'photos/05042023030630CV.docx', 2023023, '', ''),
(2, '202369125108', 4, 'Resume', 'photos/05042023033335CV.docx', 2023023, '', ''),
(3, '202369125109', 19, 'Resume', 'photos/05042023033614CV.docx', 2023023, '', ''),
(4, '202369125110', 15, 'Resume', 'photos/05042023071309CV.docx', 2023023, '', ''),
(5, '202369125111', 19, 'Resume', 'photos/05042023071519CV.docx', 2023023, '', ''),
(6, '202369125112', 3, 'Resume', 'photos/05042023071613CV.docx', 2023023, '', ''),
(7, '202369125113', 13, 'Resume', 'photos/05042023071850CV.docx', 2023023, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumbers`
--

CREATE TABLE `tblautonumbers` (
  `AUTOID` int(11) NOT NULL,
  `AUTOSTART` varchar(30) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOKEY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumbers`
--

INSERT INTO `tblautonumbers` (`AUTOID`, `AUTOSTART`, `AUTOEND`, `AUTOINC`, `AUTOKEY`) VALUES
(1, '02983', 49, 1, 'userid'),
(2, '000', 84, 1, 'employeeid'),
(3, '0', 49, 1, 'APPLICANT'),
(4, '69125', 114, 1, 'FILEID');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `CATEGORYID` int(11) NOT NULL,
  `CATEGORY` varchar(250) NOT NULL,
  `SERVICE_TYPE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`CATEGORYID`, `CATEGORY`, `SERVICE_TYPE`) VALUES
(1, 'Design', 'Virtual Services'),
(2, 'Video and Audio', 'Virtual Services'),
(3, 'Development and IT', 'Virtual Services'),
(4, 'Marketing', 'Virtual Services'),
(5, 'Writing and Translation', 'Virtual Services'),
(6, 'Virtual Assistant', 'Virtual Services'),
(7, 'Project Management', 'Virtual Services'),
(8, 'Transcripts', 'Virtual Services'),
(9, 'Handyman', 'Physical Services'),
(10, 'Cleaning', 'Physical Services'),
(11, 'Plumbing', 'Physical Services'),
(12, 'Babysitting', 'Physical Services'),
(13, 'Painting', 'Physical Services'),
(14, 'Electrical', 'Physical Services'),
(15, 'Flooring', 'Physical Services'),
(16, 'Lawn and Garden', 'Physical Services'),
(17, 'Delivery', 'Physical Services'),
(18, 'Help Moving', 'Physical Services'),
(19, 'Installation', 'Physical Services'),
(20, 'Other Services', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

CREATE TABLE `tblcompany` (
  `COMPANYID` int(11) NOT NULL,
  `COMPANYNAME` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`COMPANYID`, `COMPANYNAME`) VALUES
(1, 'default');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `INCID` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `F_FNAME` varchar(50) NOT NULL,
  `F_LNAME` varchar(50) NOT NULL,
  `F_MNAME` varchar(50) NOT NULL,
  `F_ADDRESS` varchar(90) NOT NULL,
  `SEX` varchar(30) NOT NULL,
  `F_CONTACTNO` varchar(40) NOT NULL,
  `F_EMAILADDRESS` varchar(90) NOT NULL,
  `POSITION` varchar(50) NOT NULL,
  `WORKSTATS` varchar(90) NOT NULL,
  `DATEHIRED` date NOT NULL,
  `AGE` int(2) NOT NULL,
  `c_id` int(11) NOT NULL,
  `j_id` int(4) NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`INCID`, `EMPLOYEEID`, `F_FNAME`, `F_LNAME`, `F_MNAME`, `F_ADDRESS`, `SEX`, `F_CONTACTNO`, `F_EMAILADDRESS`, `POSITION`, `WORKSTATS`, `DATEHIRED`, `AGE`, `c_id`, `j_id`, `payment`) VALUES
(1, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Video Editor', 'Completed', '2023-04-05', 21, 298339, 2, 30000),
(2, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Video Editor', 'Completed', '2023-04-05', 21, 298339, 2, 30000),
(3, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Social Media Management', 'Completed', '2023-04-05', 21, 298340, 4, 30000),
(4, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Project Manager', 'Completed', '2023-04-05', 21, 298347, 19, 40000),
(5, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Video Editor', 'Completed', '2023-04-05', 21, 298339, 2, 30000),
(6, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Social Media Management', 'Completed', '2023-04-05', 21, 298340, 4, 30000),
(7, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Project Manager', 'Completed', '2023-04-05', 21, 298347, 19, 40000),
(8, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', ' Audio Transcription', 'Completed', '2023-04-05', 21, 298341, 15, 10000),
(12, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Video Editor', 'Completed', '2023-04-05', 21, 298339, 2, 30000),
(13, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Social Media Management', 'Completed', '2023-04-05', 21, 298340, 4, 30000),
(14, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Project Manager', 'Completed', '2023-04-05', 21, 298347, 19, 40000),
(15, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', ' Audio Transcription', 'Completed', '2023-04-05', 21, 298341, 15, 10000),
(16, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Project Manager', 'Completed', '2023-04-05', 21, 298347, 19, 40000),
(17, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Junior Full Stack Developer', 'Completed', '2023-04-05', 21, 298348, 3, 80000),
(19, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Video Editor', 'Completed', '2023-04-05', 21, 298339, 2, 30000),
(20, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Social Media Management', 'Completed', '2023-04-05', 21, 298340, 4, 30000),
(21, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Project Manager', 'Completed', '2023-04-05', 21, 298347, 19, 40000),
(22, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', ' Audio Transcription', 'Completed', '2023-04-05', 21, 298341, 15, 10000),
(23, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Project Manager', 'Completed', '2023-04-05', 21, 298347, 19, 40000),
(24, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Junior Full Stack Developer', 'Completed', '2023-04-05', 21, 298348, 3, 80000),
(25, '2023023', 'Zahra Vette', 'Luangco', 'Luangco', 'Manila, Philippines', 'Female', '09179053670', 'zahraluangco@outlook.com', 'Help Moving', 'Completed', '2023-04-05', 21, 298342, 13, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `FEEDBACKID` int(11) NOT NULL,
  `APPLICANTID` int(11) NOT NULL,
  `REGISTRATIONID` int(11) NOT NULL,
  `FEEDBACK` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`FEEDBACKID`, `APPLICANTID`, `REGISTRATIONID`, `FEEDBACK`) VALUES
(1, 2023023, 1, 'you may start the project on April 10, 2023'),
(2, 2023023, 2, 'Schedule of interview, April 22, 2023'),
(3, 2023023, 3, 'congratulations'),
(4, 2023023, 4, 'congratulations!'),
(5, 2023023, 6, 'Congratulations! you may start the project on April 10, 2023'),
(6, 2023023, 7, 'Congratulations!');

-- --------------------------------------------------------

--
-- Table structure for table `tbljob`
--

CREATE TABLE `tbljob` (
  `JOBID` int(11) NOT NULL,
  `client_user` varchar(244) NOT NULL,
  `CATEGORY` varchar(250) NOT NULL,
  `OCCUPATIONTITLE` varchar(90) NOT NULL,
  `SALARIES` double NOT NULL,
  `DURATION_EMPLOYEMENT` varchar(90) NOT NULL,
  `QUALIFICATION_WORKEXPERIENCE` text NOT NULL,
  `JOBDESCRIPTION` text NOT NULL,
  `job_address` text NOT NULL,
  `JOBSTATUS` varchar(90) NOT NULL,
  `DATEPOSTED` datetime NOT NULL,
  `client_id` int(24) NOT NULL,
  `COMPANYID` int(11) NOT NULL,
  `client_no` varchar(11) NOT NULL,
  `client_email` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljob`
--

INSERT INTO `tbljob` (`JOBID`, `client_user`, `CATEGORY`, `OCCUPATIONTITLE`, `SALARIES`, `DURATION_EMPLOYEMENT`, `QUALIFICATION_WORKEXPERIENCE`, `JOBDESCRIPTION`, `job_address`, `JOBSTATUS`, `DATEPOSTED`, `client_id`, `COMPANYID`, `client_no`, `client_email`) VALUES
(1, 'Isabel Santos', 'Design', 'Web Designer', 30000, '1 month', 'Skilled with Adobe Creative Cloud (Dreamweaver, Photoshop, InDesign, Illustrator)', 'Web designers plan, create and code internet sites and web pages, many of which combine text with sounds, pictures, graphics and video clips. A web designer is responsible for creating the design and layout of a website or web pages. It and can mean working on a brand new website or updating an already existing site.', 'San Jose del Monte, Bulacan', '', '2023-03-30 11:47:00', 298339, 1, '09228765432', 'isabelsantos@gmail.com'),
(2, 'Isabel Santos', 'Video and Audio', 'Video Editor', 30000, '1 month', 'Some experience of using video and editing equipment.', 'As a film/video editor, you\\\'ll manage material such as camera footage, dialogue, sound effects, graphics and special effects to produce a final film or video product. This is a key role in the post-production process and your skills can determine the quality and delivery of the finished result.', 'Marilao, Bulacan', '', '2023-03-30 11:53:00', 298339, 1, '09228765432', 'isabelsantos@gmail.com'),
(3, 'Tyler Davis', 'Development and IT', 'Junior Full Stack Developer', 80000, '2 months', 'You have knowledge of multiple front-end languages and libraries (like HTML, CSS and JavaScript). You\\\'re familiar with databases (like MySQL and MongoDB), web servers (e.g. Apache) and UI/UX design. You have experience with testing and debugging.', 'You\\\'ll be involved in the entire product development lifecycle including the design, development, deployment and maintenance of new and existing features. You\\\'ll write clean and functional code on the front- and back-end.', 'Manila, Philippines', '', '2023-03-30 11:56:00', 298348, 1, '09356789012', 'tyler@gmail.com'),
(4, 'Nathan Kim', 'Marketing', 'Social Media Management', 30000, '1 month', 'Excellent copywriting skills.', 'Social media management is the ongoing process of creating and scheduling content designed to grow and nurture an audience across social media platforms. This includes, but is not limited to: Social media content strategy. Online reputation management. Community management and programming.', 'Brgy. Tungkong Mangga', '', '2023-03-30 12:00:00', 298340, 1, '09339876543', 'nathankim@gmail.com'),
(5, 'Lily Chen', 'Writing and Translation', 'Tagalog Translator', 20000, '3 weeks', 'Must be fluent in Filipino Language', 'Reading material and researching industry-specific terminology. Converting text and audio recordings in one language to one or more others. Ensuring translated texts conveys original meaning and tone.', 'Araneta, Cubao', '', '2023-03-30 12:21:00', 298345, 1, '09324567890', 'lily@gmail.com'),
(6, 'Lily Chen', 'Handyman', 'Light Fixture Replacement', 20000, '1 week', 'Performing electrical repairs or installations outside of those mentioned above could be a breach of law.', 'Install lighting fixtures, lamps, ballasts, controls, or other items associated with lighting systems. Work in a safe manner so as not to damage or disturb customer\\\'s facilities. Work from ladders, scaffolds, or roofs to install, maintain, or repair electrical wiring, equipment, or fixtures.', 'Norzagaray, Bulacan', '', '2023-03-30 12:29:00', 298345, 1, '09324567890', 'lily@gmail.com'),
(7, 'Samantha Johnson', 'Cleaning', 'Production Cleaner', 5000, '1 week', 'Ability to handle heavy equipment and machinery.', 'We are Looking for 2 enthusiastic, hardworking individuals to join our friendly team working in a manufacturing environment. To maintain the cleanliness of all designated areas as directed using appropriate equipment and/or materials as supplied. Primary Responsibilities - Cleaning, washing walls, sweeping, emptying of litter bins, cleaning of filler machinary as required. To keep to a high audit standard at all times', 'Gumaoc West', '', '2023-03-30 12:40:00', 298347, 1, '09265432109', 'samantha@gmail.com'),
(8, 'Jackson Brown', 'Plumbing', 'Plumber', 10000, '2 months', 'Must be hardworking and willing to work within a flexible schedule', 'Inspect, diagnose malfunction, repair, maintain, and test backflow devices, heating, cooling, and other process piping system. Remove and replace, and install any types of plumbing fixtures. Maintain and repair piping, tanks, steam, water, air, gas, and draining systems. Construct various types of pipe joints for high and low-pressure systems. Work with leaders to discuss the proposed project and may develop cost estimates for installation or repair.', 'Taguig, Metro Manila', '', '2023-03-30 12:46:00', 298346, 1, '09187654321', 'jackson@gmail.com'),
(9, 'Daniel Lee', 'Installation', 'CCTV Technician', 10000, '5 days', 'Familiar with some basic computer programs.', 'Work involves performing internal inspection of the collection system with a camera to evaluate the defects in the system including services; cleaning lines; rating the defects in the line segment; and counting and identifying service location.', 'Pasay City', '', '2023-03-30 12:53:00', 298344, 1, '09203456789', 'daniel@gmail.com'),
(10, 'Ava Nguyen', 'Electrical', 'Electrical Technician', 25000, '1 month', 'Ability to troubleshoot Variable Frequency Drives (VFD) controls.', 'Knowledgeable of Elevator Maintenance. Assisting and interpret company engineers drawings, schematic diagrams, or formulas. Test electrical systems and continuity of circuits in electrical wiring, equipment, and fixture, using testing devices. Perform effective trouble shooting to identify hazards or malfunctions and repair or subtitute damaged units. Assemble, install and maintain electrical or electronic wiring, equipment, applicances, apparatus, and fixtures, using hand tools and power tools. other responsibilities that may assign', 'Makati City', '', '2023-03-30 14:03:00', 298343, 1, '09278901234', 'ava@gmail.com'),
(11, 'Ava Nguyen', 'Flooring', 'Floor Plan Designer', 25000, '2 months', 'Design skills including concept design and design developments.', 'Use ExpoCad and graphic design software to maintain accurate electronic floor plans and output files in electronic files. Assist users in making floor plan changes and communicate with internal users and Floor Plan, GBS Systems Development Manager.Please read our', 'Quezon City', '', '2023-03-30 14:12:00', 298343, 1, '09278901234', 'ava@gmail.com'),
(12, 'Marcus Wong', 'Babysitting', 'Babysitting', 5000, '4 months', 'Enthusiastic babysitter with a warm, caring, and nurturing personality.', 'Hello I am looking for a reliable sitter that is able to come to my home and watch my three year old Monday through Thursday night 5-10 pm 100 for the entire week . Please message me if you are in Arizona looking for someone Immediately thank you if you are a babysitter messaging me please reach out to me via email or texting \\r\\nThank you', 'Ortigas City', '', '2023-03-30 14:27:00', 298342, 1, '09152345678', 'marcus@gmail.com'),
(13, 'Marcus Wong', 'Help Moving', 'Help Moving', 5000, '2 weeks', 'Physically fit and able to lift heavy objects throughout the day. Punctual and professional attitude.', ' The primary responsibility of a Mover is to ensure no items are damaged while moving. They need to load, unload, pack items with care, wrap the furniture in protective material and take inventory throughout the day.', 'Mandaluyong City', '', '2023-03-30 14:45:00', 298342, 1, '09152345678', 'marcus@gmail.com'),
(14, 'Amelia Patel', 'Delivery', 'Delivery Driver', 5000, '2 months', 'At least High School Graduate- Possess 1,2,3 Driver\\\'s license restriction code - Familiar with the route in Metro Manila - Punctual and trustworthy', 'We are looking for a responsible Delivery Driver to distribute products promptly to our customers.', 'Quezon City', '', '2023-03-31 00:46:00', 298341, 1, '09175432109', 'amelia@gmail.com'),
(15, 'Amelia Patel', 'Transcripts', ' Audio Transcription', 10000, 'Part-time', 'Must live in the Philippines and must be a native speaker of Tagalog.', 'Help improve machine speech recognition for Tagalog (Philippines). Listen to audio files and categorize them following the provided guidelines and conventions. Flexible hours.', 'Manila', '', '2023-03-31 02:40:00', 298341, 1, '09175432109', 'amelia@gmail.com'),
(16, 'Amelia Patel', 'Painting', 'Acrylic Wall Art Creator', 5000, '2 weeks', 'Design skills and knowledge.', 'I am looking for a designer who can help us create different kinds of abstract art. It should be in the form of digital. We\\\'d like to have a total about 30 art prints. It should be in high resolution and can be shown at home with Samsung TV art display. Size can be square, horizontal or vertical. The art style should be calm, interesting, modern, bohemian. We also like abstract figurative. I am attaching some samples here for your reference. If you like some jobs like this you can send us your sample of work. Thanks!', 'Sta. Maria, Bulacan', '', '2023-03-31 03:02:00', 298341, 1, '09175432109', 'amelia@gmail.com'),
(17, 'Amelia Patel', 'Lawn and Garden', 'Gardener', 10000, '1 month', 'Ability to handle a range of horticultural machinery and powered hand tools. In-depth knowledge of plants and gardening techniques.', 'The Gardener is responsible for taking care of gardens and lawns for residential, estate, villages, public/private parks and hotels. S/he maintains the beautification of the lawns and gardens in order to minimize damage and pest occurrence.', 'Sapang Palay, Bulacan', '', '2023-03-31 03:16:00', 298341, 1, '09175432109', 'amelia@gmail.com'),
(18, 'Samantha Johnson', 'Virtual Assistant', 'General Assistant', 30000, '2 months', 'Advanced knowledge in video and photo editing. Excellent computer literacy and MS office suite experience. Excellent organization and English communication skills, verbal and written. Capacity to manage several tasks simultaneously.', 'This is a remote position. My Virtual Mate is a registered Australian company that helps businesses with business process outsourcing. Our mission is to make a positive change in our partners’ business, which ultimately helps them gain more profits, and grow their business with truly talented staff.', 'Manila', '', '2023-03-31 03:26:00', 298347, 1, '09265432109', 'samantha@gmail.com'),
(19, 'Samantha Johnson', 'Project Management', 'Project Manager', 40000, '6 months', 'Excellent verbal and written communication skills', 'Your job will be to coordinate people and processes to ensure that our projects are delivered on time and produce the desired results. You will be the go-to person for everything involving a project’s organization and timeline.', 'Makati City', '', '2023-03-31 03:36:00', 298347, 1, '09265432109', 'samantha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbljobregistration`
--

CREATE TABLE `tbljobregistration` (
  `REGISTRATIONID` int(11) NOT NULL,
  `COMPANYID` int(11) NOT NULL,
  `JOBID` int(11) NOT NULL,
  `APPLICANTID` int(11) NOT NULL,
  `c_id` int(24) NOT NULL,
  `APPLICANT` varchar(90) NOT NULL,
  `REGISTRATIONDATE` date NOT NULL,
  `REMARKS` varchar(255) NOT NULL DEFAULT 'Pending',
  `STATUS` varchar(255) NOT NULL,
  `FILEID` varchar(30) DEFAULT NULL,
  `PENDINGAPPLICATION` tinyint(1) NOT NULL DEFAULT 1,
  `HVIEW` tinyint(1) NOT NULL DEFAULT 1,
  `DATETIMEAPPROVED` datetime NOT NULL,
  `F_TITLE` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljobregistration`
--

INSERT INTO `tbljobregistration` (`REGISTRATIONID`, `COMPANYID`, `JOBID`, `APPLICANTID`, `c_id`, `APPLICANT`, `REGISTRATIONDATE`, `REMARKS`, `STATUS`, `FILEID`, `PENDINGAPPLICATION`, `HVIEW`, `DATETIMEAPPROVED`, `F_TITLE`) VALUES
(1, 1, 2, 2023023, 298339, 'Zahra Vette Luangco', '2023-04-05', 'you may start the project on April 10, 2023', 'Hired', '202369125107', 0, 1, '2023-04-05 03:09:02', 'Video Editor'),
(2, 1, 4, 2023023, 298340, 'Zahra Vette Luangco', '2023-04-05', 'Schedule of interview, April 22, 2023', 'Hired', '202369125108', 0, 0, '2023-04-05 03:35:30', 'Social Media Management'),
(3, 1, 19, 2023023, 298347, 'Zahra Vette Luangco', '2023-04-05', 'congratulations', 'Hired', '202369125109', 0, 0, '2023-04-05 03:36:52', 'Project Manager'),
(4, 1, 15, 2023023, 298341, 'Zahra Vette Luangco', '2023-04-05', 'congratulations!', 'Hired', '202369125110', 0, 0, '2023-04-05 07:13:59', ' Audio Transcription'),
(5, 1, 19, 2023023, 298347, 'Zahra Vette Luangco', '2023-04-05', '', 'Pending', '202369125111', 1, 1, '2023-04-05 07:15:00', 'Project Manager'),
(6, 1, 3, 2023023, 298348, 'Zahra Vette Luangco', '2023-04-05', 'Congratulations! you may start the project on April 10, 2023', 'Hired', '202369125112', 0, 0, '2023-04-05 07:17:05', 'Junior Full Stack Developer'),
(7, 1, 13, 2023023, 298342, 'Zahra Vette Luangco', '2023-04-05', 'Congratulations!', 'Hired', '202369125113', 0, 0, '2023-04-05 07:19:26', 'Help Moving');

-- --------------------------------------------------------

--
-- Table structure for table `tblreviews`
--

CREATE TABLE `tblreviews` (
  `fdmsg` varchar(244) NOT NULL,
  `applicant_id` varchar(244) NOT NULL,
  `client_name` varchar(244) NOT NULL,
  `rating` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblreviews`
--

INSERT INTO `tblreviews` (`fdmsg`, `applicant_id`, `client_name`, `rating`) VALUES
('Great communication. Timely replies. Attention to detail with great creativity', '2023023', 'Isabel Santos', '5'),
('Very pleasant to work with. In addition, he did excellent work. I recommend her highly', '2023023', 'Samantha Johnson', '4'),
('Excellent work and very quick turn around.', '2023023', 'Nathan Kim', '5'),
('Very responsive and work completed very quickly. Thank you', '2023023', 'Amelia Patel', '5'),
('Creative, professional, knowledgeable, on time...', '2023023', 'Tyler Davis', '5'),
('Above and beyond. Phenomenal work.', '2023023', 'Marcus Wong', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `USERID` varchar(30) NOT NULL,
  `FULLNAME` varchar(40) NOT NULL,
  `USERNAME` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `PICLOCATION` varchar(255) NOT NULL,
  `EMAIL` varchar(244) NOT NULL,
  `CONTACTNO` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`USERID`, `FULLNAME`, `USERNAME`, `PASS`, `PICLOCATION`, `EMAIL`, `CONTACTNO`) VALUES
('0298339', 'Isabel Santos', 'isabel0917', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 'isabelsantos@gmail.com', '09228765432'),
('0298340', 'Nathan Kim', 'nathankim2109', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 'nathankim@gmail.com', '09339876543'),
('0298341', 'Amelia Patel', 'amelia0922', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 'amelia@gmail.com', '09175432109'),
('0298342', 'Marcus Wong', 'marcus0915', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 'marcus@gmail.com', '09152345678'),
('0298343', 'Ava Nguyen', 'ava0927', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 'ava@gmail.com', '09278901234'),
('0298344', 'Daniel Lee', 'daniel0920', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 'daniel@gmail.com', '09203456789'),
('0298345', 'Lily Chen', 'lily0932', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 'lily@gmail.com', '09324567890'),
('0298346', 'Jackson Brown', 'jackson0918', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 'jackson@gmail.com', '09187654321'),
('0298347', 'Samantha Johnson', 'samantha0926', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 'samantha@gmail.com', '09265432109'),
('0298348', 'Tyler Davis', 'tyler0935', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 'tyler@gmail.com', '09356789012');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblapplicants`
--
ALTER TABLE `tblapplicants`
  ADD PRIMARY KEY (`APPLICANTID`);

--
-- Indexes for table `tblattachmentfile`
--
ALTER TABLE `tblattachmentfile`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  ADD PRIMARY KEY (`AUTOID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`CATEGORYID`);

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`COMPANYID`);

--
-- Indexes for table `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`INCID`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`FEEDBACKID`);

--
-- Indexes for table `tbljob`
--
ALTER TABLE `tbljob`
  ADD PRIMARY KEY (`JOBID`);

--
-- Indexes for table `tbljobregistration`
--
ALTER TABLE `tbljobregistration`
  ADD PRIMARY KEY (`REGISTRATIONID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`USERID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblapplicants`
--
ALTER TABLE `tblapplicants`
  MODIFY `APPLICANTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2023049;

--
-- AUTO_INCREMENT for table `tblattachmentfile`
--
ALTER TABLE `tblattachmentfile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  MODIFY `AUTOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `CATEGORYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `COMPANYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `INCID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `FEEDBACKID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbljob`
--
ALTER TABLE `tbljob`
  MODIFY `JOBID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbljobregistration`
--
ALTER TABLE `tbljobregistration`
  MODIFY `REGISTRATIONID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
