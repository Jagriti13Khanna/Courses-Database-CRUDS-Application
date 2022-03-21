-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2022 at 12:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jkhanna1_courses_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses_EDT`
--

CREATE TABLE `courses_EDT` (
  `c_id` int(5) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_name` varchar(80) NOT NULL,
  `course_desc` text NOT NULL,
  `deletedYN` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_EDT`
--

INSERT INTO `courses_EDT` (`c_id`, `course_code`, `course_name`, `course_desc`, `deletedYN`) VALUES
(1, 'COMM1163', 'Engineering Communications', 'This course is a specialized and practical introduction to communications encountered in the engineering workplace. Topics include professional written and oral communication, report writing, job searching, as well as the principles and mechanics of technical writing.', 'Y'),
(2, 'COMP1101', 'Introduction To AutoCAD', 'This course introduces the student to Autodesk AutoCAD software, used to create industry standard engineering drawings. Students are also introduced to Microsoft Excel, in order to efficiently manipulate non-graphical data. Students are expected to properly manage electronic files, and demonstrate an understanding of computer hardware.', 'Y'),
(3, 'DRFT1131', 'Engineering Graphics', 'This course covers the fundamentals for drafting using traditional equipment and techniques to produce drawings that meet the CSA Drafting Standard. Foundational concepts such as spatial relationships of points, lines and planes will be used in producing multi-view drawings.', 'Y'),
(4, 'MATH1137', 'Technical Mathematics And Statistics', 'This course is for Engineering Design students, presenting the fundamentals of mathematics with applications to technological problems. Students will acquire knowledge in trigonometric functions and basic and intermediate algebra. Topics include oblique triangles, linear and quadratic equations, and exponential functions. Included in this course is an introduction to statistics and statistical methods used in engineering. Topics include linear regression, normal distribution, confidence intervals and hypothesis tests.', 'Y'),
(5, 'STRC1150', 'Statics', 'This course teaches the student how to use vector analysis to understand the concept of equilibrium for statically determinate structures. The cross-sectional properties of structural elements will also be determined.', 'N'),
(6, 'SURV1132', 'Introduction To Surveying', 'Surveys are the basis for measuring the natural and built environment. This course introduces basic surveying field procedures, equipment, and calculations. Students learn survey concepts as they relate to the measurement of distances, angles, and elevations.', 'N'),
(7, 'COMP1201', 'Intermediate AutoCAD', 'This course will introduce students to three-dimensional AutoCAD modeling, by having them create, edit, and produce drawings from solid models.', 'N'),
(8, 'EDDT1221', 'Fluid Mechanics', 'This course requires the student to analyze and apply the fundamental principles of fluid mechanics as they apply to Newtonian fluids and incompressible flow. Forces and their resultants on fluids at rest will be applied to analyze piping systems for various fluids for a variety of conditions.', 'N'),
(9, 'EDDT1231', 'Mapping Systems And Survey Drawings', 'This course expands upon the survey and topographic principles previously taken in DRFT1130. Basic road design (development of horizontal and vertical curves) is introduced through various design projects using AutoCAD drawing software. Projects will be of a practical nature, which involves understanding of regulations and their application to survey drawings as well as mathematical solutions to problems of distance, azimuth, area, grade and volume. Cut and Fill exercises will introduce students to estimating earth volumes.', 'N'),
(10, 'EDDT1241', 'Machine Elements', 'This course looks at the relationships between fundamental machine design principles such as examining material specifications, codes, permanent and non-permanent fasteners, and tolerancing. A complete set of Working Drawings will be produced which the students will then manufacture.', 'N'),
(11, 'EDDT1250', 'Strength Of Materials', 'This course will apply the concepts of the stress strain diagram to solve basic problems of strength of materials. The student will develop shear and moment diagrams as well as analyze and design simply supported beams and columns.', 'N'),
(12, 'MATH1237', 'Calculus', 'This course is for Engineering Design students, presenting the basic concepts of differential and integral calculus. Topics will include: differentiation and integration of elementary and transcendental functions. Both the derivative and the integral will be applied to technological problems.', 'N'),
(13, 'COMP2301', 'COMP2301', 'This course covers the use of MicroStation CAD software in the development and creation of technical and graphic information, including 3 dimensional objects. The student will operate a CAD station to produce design drawings related to a variety of engineering disciplines. Various approaches of manipulating MicroStation variables to produce scaled drawings and plots of designs will be accomplished while comparing and utilizing different sheet sizes, scales and systems of units. Design file element creation, manipulation and non-graphical data creation will be developed and utilized to produce efficiency and consistency in data management.', 'N'),
(14, 'DSGN2331', 'Subdivision Design', 'This course presents the students with real world design problems. The students will review and apply regulations relating to the submission of digital plans of a residential subdivision for submission to the Land Titles Office. They will also apply the principals of plane trigonometry, topography, remote sensing, hydrology, and hydraulics in the design of urban services such as roads, sewer and water systems. Consideration to any environmental impact is considered throughout the design process. A subdivision design project is used the bring together all the design aspects of generating working drawings, effectively challenging students with both time and drawing management skills.', 'N'),
(15, 'DSGN2341', 'Mechanical Design', 'This course builds upon what was learned in EDDT1241 (Machine Elements) by using industry accepted engineering standards, codes and formulaâ€™s to design and select different components for power transmission. Using what they learned, the student will produce sets of Working Drawings for various mechanical problems using CAD software.', 'N'),
(16, 'DSGN2342', 'Process Vessel Design', 'This course introduces the student to the ASME Section VIII Div. 1 code for pressure vessel design, and the API 12F and API 650 codes for steel storage tank design. The student will complete calculations, designs, and fabrication drawings to industry standards, using the applicable codes.', 'N'),
(17, 'EDDT2350', 'Structural Design And Theory', 'This course requires the student to apply the concepts of mechanics and strength of materials to analyse mechanical equipment and structural components. The student will be able to apply the relevant codes to design various structural steel systems including beam, columns and connections. The student will prepare calculations and engineering drawings to satisfy the latest edition of the relevant code as required by design.', 'N'),
(18, 'THRM2343', 'Thermodynamics And Heat Transfer', 'This course applies the principles of thermodynamics and heat transfer. The students will be able to; perform analysis of thermodynamics systems and do appropriate calculations with steam, ideal gases and mixtures, analyze the performance of power and refrigeration cycles and compute and describe performance of any types of heat exchanges and will demonstrate his/her familiarity with conduction, convection and radiation.', 'N'),
(19, 'THRM2343', 'Thermodynamics And Heat Transfer', 'This course applies the principles of thermodynamics and heat transfer. The students will be able to; perform analysis of thermodynamics systems and do appropriate calculations with steam, ideal gases and mixtures, analyze the performance of power and refrigeration cycles and compute and describe performance of any types of heat exchanges and will demonstrate his/her familiarity with conduction, convection and radiation.', 'N'),
(20, 'A', 'B', 'C    Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Perspiciatis illo architecto ea minima, sit ex ab facere laboriosam quasi officiis quaerat explicabo voluptate accusamus animi tenetur, reprehenderit iusto, reiciendis eius! \" \' \"', 'Y'),
(21, 'COMP1017', 'Web Fundamentals 1dd', 'Test', 'N'),
(22, 'DSGN2331', 'Engineering Communications', 'Http://jkhanna1.dmitstudent.ca/dmit2025/practice/php&sql/form.php', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses_EDT`
--
ALTER TABLE `courses_EDT`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses_EDT`
--
ALTER TABLE `courses_EDT`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
