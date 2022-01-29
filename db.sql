/*
SQLyog Community v12.5.0 (64 bit)
MySQL - 5.7.19 : Database - kesho_csec
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

/*Table structure for table `csec_followup` */

/*Table structure for table `csec_user` */

DROP TABLE IF EXISTS `csec_user`;

CREATE TABLE `csec_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(500) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `passwd` varchar(500) DEFAULT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `mname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `csec_user` */

/*Table structure for table `csec_beneficiary` */

DROP TABLE IF EXISTS `csec_beneficiary`;

CREATE TABLE `csec_beneficiary` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `fname` varchar(100) DEFAULT NULL COMMENT 'First Name',
  `mname` varchar(100) DEFAULT NULL COMMENT 'Middle Name',
  `lname` varchar(100) DEFAULT NULL COMMENT 'Last Name',
  `date_intake` date DEFAULT NULL COMMENT 'Date of Case intake',
  `unique_id` varchar(50) DEFAULT NULL COMMENT 'Unique identifier',
  `child_status` varchar(20) DEFAULT NULL COMMENT 'Vulnerable or Exploited (choose one)',
  `gender` varchar(10) DEFAULT NULL COMMENT 'Gender',
  `disability` varchar(5) DEFAULT NULL COMMENT 'Child With Disability',
  `disability_type` int(11) DEFAULT NULL COMMENT 'Type of disability',
  `county` int(11) DEFAULT NULL COMMENT 'County',
  `subcounty` int(11) DEFAULT NULL COMMENT 'Sub-county',
  `location` int(11) DEFAULT NULL COMMENT 'Location',
  `village` int(11) DEFAULT NULL COMMENT 'Village',
  `subcounty_office` varchar(100) DEFAULT NULL COMMENT 'Name of Sub-county children office identifying child (when applicable)',
  `refer_agency` varchar(100) DEFAULT NULL COMMENT 'Name of referring agency (school, NGO, FBO, DCO, etc.)',
  `type_csec` int(11) DEFAULT NULL COMMENT 'Type of CSEC',
  `type_csec_specify` varchar(100) DEFAULT NULL COMMENT 'Specify',
  `cause_csec` int(11) DEFAULT NULL COMMENT 'Reported causes of child''s involvement in CSEC',
  `cause_csec_specify` varchar(100) DEFAULT NULL COMMENT 'Specify',
  `activity_desc` text COMMENT 'Description of CSEC Activity',
  `rescued_csec` varchar(100) DEFAULT NULL COMMENT 'Rescued from CSEC',
  `tracing_date` date DEFAULT NULL COMMENT 'Tracing Conducted On (Date)',
  `counseling` int(11) DEFAULT NULL COMMENT 'Provided with counselling',
  `counseling_date` date DEFAULT NULL COMMENT 'Date Provided Counselling',
  `medical_care` int(11) DEFAULT NULL COMMENT 'Provided with medical care',
  `medical_care_date` date DEFAULT NULL COMMENT 'Medical Care Date',
  `legal_support` int(11) DEFAULT NULL COMMENT 'Provided with legal support',
  `legal_support_date` date DEFAULT NULL COMMENT 'Legal Support Date',
  `education_support` int(11) DEFAULT NULL COMMENT 'Provided with education support',
  `educational_support_date` date DEFAULT NULL COMMENT 'Educational Support Date',
  `vocational_training` int(11) DEFAULT NULL COMMENT 'Provided with vocational training',
  `vocational_training_date` date DEFAULT NULL COMMENT 'Vocational Training Date',
  `empl_voc_training` int(11) DEFAULT NULL COMMENT 'Provided with legal employment after vocational training',
  `empl_voc_training_date` date DEFAULT NULL COMMENT 'Employment After Vocational Training Date',
  `provided_income` int(11) DEFAULT NULL COMMENT 'Provided with kitty for income generating support',
  `provided_income_date` date DEFAULT NULL COMMENT 'Date Provided Income Kitty',
  `parent_guard_names` varchar(200) DEFAULT NULL COMMENT 'Name of parent/guardian of child',
  `parent_guard_contacts` text COMMENT 'Contacts For Parent/Guardian',
  `family_counseling` int(11) DEFAULT NULL COMMENT 'Provided  Child''s family with counselling',
  `familty_counseling_date` date DEFAULT NULL COMMENT 'Date of Family Counselling',
  `family_training` int(11) DEFAULT NULL COMMENT 'Provided  Child''s family with training on IGA',
  `family_training_date` date DEFAULT NULL COMMENT 'Date of Family Training',
  `family_income` int(11) DEFAULT NULL COMMENT 'Provided  Child''s family with income generating kitty',
  `family_income_date` int(11) DEFAULT NULL COMMENT 'Date of Family Income',
  `main_care_arrangement` int(11) DEFAULT NULL COMMENT 'Main care arrangement provided to CSEC beneficiary',
  `main_care_specify` int(11) DEFAULT NULL COMMENT 'Specify',
  `main_care_agency` int(11) DEFAULT NULL COMMENT 'Name of agency child has been referred to (when applicable)',
  `main_support_provider` int(11) DEFAULT NULL COMMENT 'Main Persons, groups and/or institutions in the community that has provided support to the child',
  `main_support_provider_specify` varchar(200) DEFAULT NULL COMMENT 'Specify',
  `comm_contact_person` varchar(200) DEFAULT NULL COMMENT 'Community Contact Person',
  `comm_contact_person_position` int(11) DEFAULT NULL COMMENT 'Community Contact Person Position',
  `comm_contact_person_pos_specify` varchar(200) DEFAULT NULL COMMENT 'Specify',
  `comm_contact_person_tel` varchar(100) DEFAULT NULL COMMENT 'Community Contact Person Telephone',
  `risk_level` int(11) DEFAULT NULL COMMENT 'Child''s risk level',
  `followup_visit` int(11) DEFAULT NULL COMMENT 'Child''s follou up visits',
  `case_final_result` int(11) DEFAULT NULL COMMENT 'Child''s case final result',
  `cause_failure` int(11) DEFAULT NULL COMMENT 'Main cause of failure (when applicable)',
  `cause_failure_specify` varchar(200) DEFAULT NULL COMMENT 'Specify',
  `cause_success` int(11) DEFAULT NULL COMMENT 'Main cause of success (when applicable)',
  `cause_success_specify` varchar(200) DEFAULT NULL COMMENT 'Specify',
  `data_entry_staff` varchar(100) DEFAULT NULL COMMENT 'Name of person uploading information on database',
  `data_entry_staff_designation` int(11) DEFAULT NULL COMMENT 'Designation of person uploading information on database',
  `date_created` datetime DEFAULT NULL COMMENT 'Date Created',
  `date_modified` datetime DEFAULT NULL COMMENT 'Date Modified',
  `created_by` int(11) DEFAULT NULL COMMENT 'Created By',
  `modified_by` int(11) DEFAULT NULL COMMENT 'Modified By',
  PRIMARY KEY (`id`),
  KEY `created_by` (`created_by`),
  KEY `modified_by` (`modified_by`),
  CONSTRAINT `csec_beneficiary_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `csec_user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `csec_beneficiary_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `csec_user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `csec_followup`;

CREATE TABLE `csec_followup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_beneficiary` int(11) DEFAULT NULL,
  `followup_date` date DEFAULT NULL,
  `followup_outcome` int(11) DEFAULT NULL,
  `followup_outcome_desc` text,
  PRIMARY KEY (`id`),
  KEY `fk_beneficiary` (`fk_beneficiary`),
  CONSTRAINT `csec_followup_ibfk_1` FOREIGN KEY (`fk_beneficiary`) REFERENCES `csec_beneficiary` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `csec_followup` */

/*Table structure for table `csec_lookup` */

DROP TABLE IF EXISTS `csec_lookup`;

/*Table structure for table `csec_lookup_category` */

DROP TABLE IF EXISTS `csec_lookup_category`;

CREATE TABLE `csec_lookup_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

CREATE TABLE `csec_lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_category` int(11) DEFAULT NULL,
  `key` int(11) DEFAULT NULL,
  `value` text,
  `_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_category` (`fk_category`),
  CONSTRAINT `csec_lookup_ibfk_1` FOREIGN KEY (`fk_category`) REFERENCES `csec_lookup_category` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_sibling` */

DROP TABLE IF EXISTS `csec_sibling`;

CREATE TABLE `csec_sibling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_beneficiary` int(11) DEFAULT NULL,
  `sibling_names` varchar(500) DEFAULT NULL,
  `sibling_dob` date DEFAULT NULL,
  `sibling_school` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_beneficiary` (`fk_beneficiary`),
  CONSTRAINT `csec_sibling_ibfk_1` FOREIGN KEY (`fk_beneficiary`) REFERENCES `csec_beneficiary` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `csec_sibling` */

/*Data for the table `csec_lookup_category` */

insert  into `csec_lookup_category`(`id`,`category_name`) values 
(6,'Child Status'),
(7,'YESNO'),
(8,'Gender'),
(9,'Type of disability'),
(10,'County'),
(11,'Sub-county office'),
(12,'Type of CSEC'),
(13,'causes of involvement in CSEC'),
(14,'Main care'),
(15,'Main person'),
(16,'Rescued from CSEC'),
(17,'Tracing Conducted On (Date)'),
(18,'Provided with counselling'),
(20,'Provided with medical care'),
(21,'Provided with legal support '),
(22,'Provided with education support'),
(23,'Provided with vocational training'),
(24,'Legal employment after vocational training'),
(25,'Provided with income generating support '),
(26,'Name of parent/guardian of child'),
(27,'Parent/Guardian Contacts'),
(28,'Name of Sibling '),
(29,'Sibling\'s age'),
(30,'Sibling school status '),
(31,'Provided  Child\'s family with counselling'),
(32,'Provided  Child\'s family with training on IGA'),
(33,'Provided  Child\'s family with income generating kitty'),
(34,'Contact person'),
(35,'Child\'s risk level'),
(36,'Followup Outcome'),
(37,'Final Result'),
(38,'Failure Cause'),
(39,'Success Cause'),
(40,'Staff Name'),
(41,'Staff Designation'),
(42,'Sub-county');



insert  into `csec_user`(`id`,`email`,`username`,`passwd`,`fname`,`mname`,`lname`,`designation`,`last_login`) values 
(1,'narshon@gmail.com','admin','$2y$13$NmMIf5NqxL5bh.nitwrDPe10YZafmic10ribwFXHHq.4oIecWsj3O',NULL,NULL,NULL,NULL,'2019-02-13 01:26:12');


/*Data for the table `csec_lookup` */

insert  into `csec_lookup`(`id`,`fk_category`,`key`,`value`,`_status`) values 
(1,6,1,'at risk',NULL),
(2,6,2,'vulnerable',NULL),
(3,6,3,'exploited/abused',NULL),
(4,7,1,'Yes',NULL),
(5,7,2,'No',NULL),
(6,8,1,'Male',NULL),
(7,8,2,'Female',NULL),
(8,9,1,'Physical',NULL),
(9,9,2,'Visual',NULL),
(10,9,3,'Audio',NULL),
(11,9,4,'Skin',NULL),
(12,9,5,'Physical',NULL),
(13,9,6,'Mental',NULL),
(14,9,7,'Other',NULL),
(15,10,1,'Kwale',NULL),
(16,10,2,'Mombasa',NULL),
(17,10,3,'Kilifi',NULL),
(18,11,1,'Kilifi South',NULL),
(19,11,2,'Kisauni',NULL),
(20,11,3,'Nyali',NULL),
(21,11,4,'Lungalunga',NULL),
(22,11,5,'Msambweni',NULL),
(23,11,6,'Matuga',NULL),
(24,11,7,'Mvita',NULL),
(25,11,8,'Mtwapa',NULL),
(26,12,1,'Child prostitution',NULL),
(27,12,2,'Domestic servitude',NULL),
(28,12,3,'Child sex tourism',NULL),
(29,12,4,'Child pornography',NULL),
(30,12,5,'Child marriage',NULL),
(31,12,6,'Child trafficking',NULL),
(32,12,7,'Child transactional sex',NULL),
(33,12,8,'Other',NULL),
(34,13,1,'Lack of food/shelter (poverty)',NULL),
(35,13,2,'Having lost parents/caregiver',NULL),
(36,13,3,'Neglect by family',NULL),
(37,13,4,'Caregivers willingly sending to work',NULL),
(38,13,5,'Peer pressure',NULL),
(39,13,6,'Parent/caregiver sick',NULL),
(40,13,7,'Forced recruitment',NULL),
(41,13,8,'Being the house head',NULL),
(42,13,9,'Child Trafficking',NULL),
(43,13,10,'Been living on his/her own',NULL),
(44,13,11,'Other',NULL),
(45,14,1,'Legal Support',NULL),
(46,14,2,'Medical Care',NULL),
(47,14,3,'Psychosocial Support',NULL),
(48,14,5,'Family reintegration',NULL),
(49,15,1,'Religious leaders',NULL),
(50,15,2,'Sibling',NULL),
(51,15,3,'Parents',NULL),
(52,15,4,'CPC member',NULL),
(53,15,5,'Teacher\r\n',NULL),
(54,15,6,'Relative',NULL),
(55,15,7,'Neighbour',NULL),
(56,15,8,'Employer',NULL),
(57,15,9,'VCO',NULL),
(58,15,10,'Community Member',NULL),
(59,15,15,'DCO',NULL),
(60,16,1,'Yes',NULL),
(61,16,2,'No',NULL),
(62,17,1,'Yes',NULL),
(63,17,2,'No',NULL),
(64,18,1,'Yes',NULL),
(65,18,2,'No',NULL),
(66,20,1,'Yes',NULL),
(67,20,2,'No',NULL),
(68,21,1,'Yes',NULL),
(69,21,2,'No',NULL),
(70,22,1,'Yes',NULL),
(71,22,2,'No',NULL),
(72,23,1,'Yes',NULL),
(73,23,2,'No',NULL),
(74,24,1,'Yes',NULL),
(75,24,2,'No',NULL),
(76,25,1,'Yes',NULL),
(77,25,2,'No',NULL),
(78,26,1,'Yes',NULL),
(79,26,2,'No',NULL),
(80,27,1,'Yes',NULL),
(81,27,2,'No',NULL),
(82,28,1,'Yes',NULL),
(83,28,2,'No',NULL),
(84,29,1,'Yes',NULL),
(85,29,2,'No',NULL),
(86,30,1,'In-school',NULL),
(87,30,2,'Out-of-school',NULL),
(88,31,1,'Yes',NULL),
(89,31,2,'No',NULL),
(90,32,1,'Yes',NULL),
(91,32,2,'No',NULL),
(92,33,1,'Yes',NULL),
(93,33,2,'No',NULL),
(94,14,6,'Referral to agency (DCO, NGO,CBO, etc.)',NULL),
(95,14,7,'Admission in temporary shelter',NULL),
(96,14,8,'Education Support',NULL),
(97,14,9,'Other',NULL),
(98,15,15,'Chief',NULL),
(99,15,15,'Village Elder',NULL),
(100,15,15,'Other',NULL),
(101,34,1,'DCO',NULL),
(102,34,2,'Chief',NULL),
(103,34,3,'Village Elder',NULL),
(104,34,4,'Religious Leaders',NULL),
(105,34,5,'Sibling',NULL),
(106,34,6,'Parents',NULL),
(107,34,7,'CPC member',NULL),
(108,34,8,'Teacher\r\n',NULL),
(109,34,9,'Relative',NULL),
(110,34,10,'Neighbor\r\n',NULL),
(111,34,11,'Employer',NULL),
(112,34,12,'VCO\r\n',NULL),
(113,34,13,'Family Friend',NULL),
(114,35,1,'High\r\n',NULL),
(115,35,2,'Medium\r\n',NULL),
(116,35,3,'Low',NULL),
(117,36,2,'On going\r\n',NULL),
(118,36,3,'Case dropped\r\n',NULL),
(119,36,4,'Case exited',NULL),
(120,37,1,'Successfully exited',NULL),
(121,37,2,'Pending',NULL),
(122,37,3,'Relapsed',NULL),
(123,37,4,'Lost track',NULL),
(124,37,5,'Failed',NULL),
(125,38,1,'Environmental pressure (peers)',NULL),
(126,38,2,'Cultural factors\r\n',NULL),
(127,38,3,'Childs need of independence\r\n',NULL),
(128,38,4,'Forced labor\r\n',NULL),
(129,38,5,'Lack of childs education\r\n',NULL),
(130,38,6,'Trafficking\r\n',NULL),
(131,38,7,'Family financial needs\r\n',NULL),
(132,38,8,'Other',NULL),
(133,39,1,'Environmental positive pressure (peers)\r\n',NULL),
(134,39,2,'Cultural factors\r\n',NULL),
(135,39,3,'Child\s desire of education\r\n',NULL),
(136,39,4,'Community support (CLC, FBOs, CBO, etc.)\r\n',NULL),
(137,39,5,'GOK support (DCO, VCO, Chief, etc)\r\n',NULL),
(138,39,6,'Other',NULL),
(139,40,1,'Male',NULL),
(140,40,2,'Female',NULL),
(141,41,1,'Project Officer',NULL),
(142,41,2,'Social worker',NULL),
(143,41,3,'Programme Officer',NULL),
(144,41,4,'Counselor',NULL),
(145,42,1,'Kilifi South.',NULL),
(146,42,2,'Kisauni',NULL),
(147,42,3,'Nyali',NULL),
(148,42,4,'Lungalunga',NULL),
(149,42,5,'Msambweni',NULL),
(150,42,6,'Matuga',NULL),
(151,42,7,'Mvita',NULL),
(152,42,8,'Mtwapa',NULL),
(153,34,14,'Other',NULL);





/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
