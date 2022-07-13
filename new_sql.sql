/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.11-MariaDB : Database - csec
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

/*Table structure for table `csec_child` */

DROP TABLE IF EXISTS `csec_child`;

CREATE TABLE `csec_child` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `fk_consent` int(11) DEFAULT NULL,
  `interview_date` date DEFAULT NULL COMMENT 'Date of Identification',
  `child_support_other` text DEFAULT NULL COMMENT 'Is the child enlisted for support with other organisations',
  `child_support_org` varchar(200) DEFAULT NULL COMMENT 'Name of organisation',
  `child_support_service` text DEFAULT NULL COMMENT 'Child service',
  `child_name` varchar(200) DEFAULT NULL COMMENT 'Child name',
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL COMMENT 'Age in years',
  `disability` varchar(20) DEFAULT NULL COMMENT 'If disabled differently',
  `school_name` varchar(200) DEFAULT NULL COMMENT 'School Name',
  `child_educ_level` varchar(20) DEFAULT NULL COMMENT 'Level of Education',
  `class` varchar(10) DEFAULT NULL COMMENT 'Class/Form',
  `country` varchar(200) DEFAULT NULL COMMENT 'Country',
  `sub_county` varchar(200) DEFAULT NULL COMMENT 'Sub County',
  `location` varchar(200) DEFAULT NULL COMMENT 'Location/Village',
  `landmark` varchar(200) DEFAULT NULL COMMENT 'Nearby landmark',
  `landmark_name` varchar(200) DEFAULT NULL,
  `child_school_attendance` int(11) DEFAULT NULL COMMENT 'Child school attendance in the last 6-12 months',
  `not_regular_reason` text DEFAULT NULL COMMENT 'If not regular , give reasons',
  `meal_per_day` int(11) DEFAULT NULL COMMENT 'Meals family have per day',
  `child_chronic_ill` varchar(5) DEFAULT NULL COMMENT 'child chronic illness',
  `child_chronic_ill_spec` text DEFAULT NULL COMMENT 'Family member chronic illness',
  `fmember_chronic_ill` varchar(5) DEFAULT NULL COMMENT 'Family member with chronic illness',
  `fmember_chronic_ill_spec` text DEFAULT NULL,
  `parent_alive` varchar(5) DEFAULT NULL COMMENT 'Are both parents alive',
  `who_alive` varchar(50) DEFAULT NULL,
  `stay_together` varchar(5) DEFAULT NULL,
  `fwife_number` int(11) DEFAULT NULL COMMENT 'How many wifes does your father have',
  `child_live_with` varchar(200) DEFAULT NULL COMMENT 'Who does the child live with',
  `sibling_no` int(11) DEFAULT NULL COMMENT 'How many siblings do you have',
  `sibling_order_9_15` int(11) DEFAULT NULL,
  `sibling_order_16_20` int(11) DEFAULT NULL COMMENT 'Order of siblings from oldest to youngest',
  `sibling_order_21_25` int(11) DEFAULT NULL,
  `sibling_order_26_30` int(11) DEFAULT NULL,
  `sibling_order_31_35` int(11) DEFAULT NULL,
  `sibling_order_35_above` int(11) DEFAULT NULL,
  `father_name` varchar(200) DEFAULT NULL,
  `father_contact` int(11) DEFAULT NULL,
  `mother_name` varchar(200) DEFAULT NULL,
  `mother_contact` int(11) DEFAULT NULL,
  `caregiver_name` varchar(200) DEFAULT NULL,
  `caregiver_contact` int(11) DEFAULT NULL,
  `other_name` varchar(200) DEFAULT NULL,
  `other_name_contact` int(11) DEFAULT NULL,
  `fmember_income_no` int(11) DEFAULT NULL COMMENT 'Family members over 18 years access to income',
  `fmember_income_sources` int(11) DEFAULT NULL,
  `income_regularity` int(11) DEFAULT NULL COMMENT 'Regularity of income',
  `household_indebt` int(11) DEFAULT NULL COMMENT 'Household present indebtness to meet basic needs',
  `household_assets` int(11) DEFAULT NULL COMMENT 'Household acess to natural resources',
  `household_tools` int(11) DEFAULT NULL COMMENT 'Household tools and infrastructure',
  `hhold_educ_level` varchar(100) DEFAULT NULL COMMENT 'Level of education',
  `sex_exploit` text DEFAULT NULL COMMENT 'Nature of sexual exploitaion',
  `exploit_happen_when` varchar(20) DEFAULT NULL COMMENT 'When exploitaion happened',
  `exploit_continue` varchar(10) DEFAULT NULL COMMENT 'Is it continuing',
  `exploit_month` int(11) DEFAULT NULL,
  `exploit_year` int(11) DEFAULT NULL,
  `exploit_reported` int(11) DEFAULT NULL COMMENT 'Has exploitaion been reported',
  `exploit_reported_to` int(11) DEFAULT NULL COMMENT 'Exploit reported to who',
  `exploit_rpt_to_spec` text DEFAULT NULL,
  `exploit_notreported_reason` text DEFAULT NULL COMMENT 'Why child didnt report case to anyone',
  `other_detail` text DEFAULT NULL COMMENT 'Other details noted during interview',
  `child_init` varchar(10) DEFAULT NULL,
  `caregiver_interview_name` varchar(200) DEFAULT NULL,
  `caregiver_interview_contact` int(11) DEFAULT NULL COMMENT 'Contact of caregiver',
  `caregiver_interview_date` date DEFAULT NULL COMMENT 'Date caregiver gave information',
  `kesho_staff_name` varchar(200) DEFAULT NULL COMMENT 'Kesho Kenya child protection staff detail',
  `kesho_staff_contact` int(11) DEFAULT NULL COMMENT 'Kesho Kenya staff contact',
  `kesho_staff_interview_date` date DEFAULT NULL COMMENT 'Date Kesho Kenya staff gave details',
  `kesho_designation` varchar(200) DEFAULT NULL COMMENT 'Kesho Kenya staff designation',
  PRIMARY KEY (`id`),
  KEY `fk_consent` (`fk_consent`),
  CONSTRAINT `csec_child_ibfk_1` FOREIGN KEY (`fk_consent`) REFERENCES `csec_consent` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_child_school` */

DROP TABLE IF EXISTS `csec_child_school`;

CREATE TABLE `csec_child_school` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `fk_child` int(11) DEFAULT NULL,
  `fk_school` int(11) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `stud_reg_no` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_child` (`fk_child`),
  KEY `fk_school` (`fk_school`),
  CONSTRAINT `csec_child_school_ibfk_1` FOREIGN KEY (`fk_child`) REFERENCES `csec_child` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `csec_child_school_ibfk_2` FOREIGN KEY (`fk_school`) REFERENCES `csec_school` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_child_sibling` */

DROP TABLE IF EXISTS `csec_child_sibling`;

CREATE TABLE `csec_child_sibling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_child` int(11) DEFAULT NULL,
  `s_order` int(11) DEFAULT NULL,
  `s_name` varchar(200) DEFAULT NULL,
  `occupation` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `class` varchar(200) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_child` (`fk_child`),
  CONSTRAINT `csec_child_sibling_ibfk_1` FOREIGN KEY (`fk_child`) REFERENCES `csec_child` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_consent` */

DROP TABLE IF EXISTS `csec_consent`;

CREATE TABLE `csec_consent` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `fk_eligibilty_id` int(11) DEFAULT NULL COMMENT 'Eligibility ID',
  `consent_edu` int(11) DEFAULT NULL COMMENT 'Education/school service',
  `consent_legal` int(11) DEFAULT NULL COMMENT 'Legal and protective services',
  `consent_disability` int(11) DEFAULT NULL COMMENT 'Disability specific services',
  `consent_psycho` int(11) DEFAULT NULL COMMENT 'Psychosocial services',
  `consent_comm` int(11) DEFAULT NULL COMMENT 'Community services',
  `consent_health` int(11) DEFAULT NULL COMMENT 'Health/Medical services',
  `consent_livelihood` int(11) DEFAULT NULL COMMENT 'Livelihood services',
  `consent_family` int(11) DEFAULT NULL COMMENT 'Family members',
  `caregiver_init` varchar(10) DEFAULT NULL COMMENT 'Caregiver Initials',
  `caregiver_contact` varchar(20) DEFAULT NULL COMMENT 'Caregiver contact',
  `child_init` varchar(10) DEFAULT NULL COMMENT 'Child Initials',
  `staff_init` varchar(10) DEFAULT NULL COMMENT 'Staff Initials',
  `consent_date` date DEFAULT NULL COMMENT 'Date of consent',
  PRIMARY KEY (`id`),
  KEY `fk_eligibilty_id` (`fk_eligibilty_id`),
  CONSTRAINT `csec_consent_ibfk_1` FOREIGN KEY (`fk_eligibilty_id`) REFERENCES `csec_eligibility` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_eligibility` */

DROP TABLE IF EXISTS `csec_eligibility`;

CREATE TABLE `csec_eligibility` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `child_code` varchar(50) DEFAULT NULL COMMENT 'Code of the child',
  `eligibility_date` date DEFAULT NULL COMMENT 'Date',
  `factor_family` int(11) DEFAULT NULL COMMENT 'Family history',
  `factor_env` int(11) DEFAULT NULL COMMENT 'Enviromental factors',
  `factor_peer_pressure` int(11) DEFAULT NULL COMMENT 'Peer pressure',
  `factor_economic` int(11) DEFAULT NULL COMMENT 'Economic factors',
  `factor_remark` text DEFAULT NULL COMMENT 'Remarks',
  `age_range` int(11) DEFAULT NULL COMMENT 'Age',
  `child_attitude` int(11) DEFAULT NULL COMMENT 'Attitude of the child',
  `caregiver_attitude` int(11) DEFAULT NULL COMMENT 'Attitude of the caregiver',
  `disability_level` int(11) DEFAULT NULL COMMENT 'Remarks from field officers /Social workers/councellor',
  `age_remarks` text DEFAULT NULL COMMENT 'Remarks',
  `child_attitude_rmk` text DEFAULT NULL COMMENT 'Remarks',
  `caregiver_attitude_rmk` text DEFAULT NULL COMMENT 'Remarks',
  `disability_level_rmk` text DEFAULT NULL COMMENT 'Remarks',
  `kesho_kenya_rmk` text DEFAULT NULL COMMENT 'Kesho Kenya remarks',
  `kesho_staff_name` varchar(100) DEFAULT NULL COMMENT 'Kesho Kenya staff',
  `vetting_comm_rmk` text DEFAULT NULL COMMENT 'Vetting commitee remarks',
  `chairperson_name` varchar(100) DEFAULT NULL COMMENT 'Chairperson name',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_home_visit` */

DROP TABLE IF EXISTS `csec_home_visit`;

CREATE TABLE `csec_home_visit` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `fk_child` int(11) DEFAULT NULL,
  `home_visit_date` date DEFAULT NULL,
  `visit_no` int(11) DEFAULT NULL,
  `case_file_no` int(11) DEFAULT NULL,
  `infor_last_vist` text DEFAULT NULL,
  `life_change` text DEFAULT NULL,
  `change_effect` text DEFAULT NULL,
  `health_develop` text DEFAULT NULL,
  `psycho_health` text DEFAULT NULL,
  `education` text DEFAULT NULL,
  `safety` text DEFAULT NULL,
  `mentor_relation` text DEFAULT NULL,
  `social_wellbeing` text DEFAULT NULL,
  `caregiver_name` varchar(50) DEFAULT NULL,
  `case_worker_name` varchar(50) DEFAULT NULL,
  `case_manager_name` varchar(50) DEFAULT NULL,
  `next_visit_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_child` (`fk_child`),
  CONSTRAINT `csec_home_visit_ibfk_1` FOREIGN KEY (`fk_child`) REFERENCES `csec_child` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_income` */

DROP TABLE IF EXISTS `csec_income`;

CREATE TABLE `csec_income` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `fk_child` int(11) DEFAULT NULL,
  `child_relation` varchar(20) DEFAULT NULL,
  `job_type` varchar(20) DEFAULT NULL,
  `occupation` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_child` (`fk_child`),
  CONSTRAINT `csec_income_ibfk_1` FOREIGN KEY (`fk_child`) REFERENCES `csec_child` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_need_assessment` */

DROP TABLE IF EXISTS `csec_need_assessment`;

CREATE TABLE `csec_need_assessment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_child` int(11) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `alive_status` text DEFAULT NULL,
  `mother` text DEFAULT NULL,
  `father` text DEFAULT NULL,
  `parent_stay_together` text DEFAULT NULL,
  `mother_county` text DEFAULT NULL,
  `mother_subcounty` text DEFAULT NULL,
  `mother_loc` text DEFAULT NULL,
  `mother_sub_loc` text DEFAULT NULL,
  `mother_village` text DEFAULT NULL,
  `father_county` text DEFAULT NULL,
  `father_subcounty` text DEFAULT NULL,
  `father_loc` text DEFAULT NULL,
  `father_subloc` text DEFAULT NULL,
  `father_village` text DEFAULT NULL,
  `current_health_condition` int(11) DEFAULT NULL,
  `curr_health_cond_spec` varchar(100) DEFAULT NULL,
  `chronic_health_cond` int(11) DEFAULT NULL,
  `chhronic_health_spec` varchar(100) DEFAULT NULL,
  `current_medication` int(11) DEFAULT NULL,
  `current_medication_spec` varchar(100) DEFAULT NULL,
  `immunized` int(11) DEFAULT NULL,
  `immunized_reason` varchar(100) DEFAULT NULL,
  `allergy` int(11) DEFAULT NULL,
  `allergy_spec` varchar(100) DEFAULT NULL,
  `feed_special_needs` varchar(200) DEFAULT NULL,
  `prev_school_attended` int(11) DEFAULT NULL,
  `prev_school` varchar(200) DEFAULT NULL,
  `current_school_attend` int(11) DEFAULT NULL,
  `current_school_name` varchar(200) DEFAULT NULL,
  `current_edu_level` int(11) DEFAULT NULL,
  `current_edu_level_class` varchar(100) DEFAULT NULL,
  `child_friend_activity` text DEFAULT NULL,
  `child_friend_views` varchar(200) DEFAULT NULL,
  `child_friend_quality` varchar(200) DEFAULT NULL,
  `child_friend_age` int(11) DEFAULT NULL,
  `signs_of_violence` text DEFAULT NULL,
  `family_abuse` text DEFAULT NULL,
  `community_abuse` text DEFAULT NULL,
  `admin_office` varchar(200) DEFAULT NULL,
  `household_condition` varchar(200) DEFAULT NULL,
  `where_family_comm_live` text DEFAULT NULL,
  `community_culture_connect` varchar(200) DEFAULT NULL,
  `family_social_connect` varchar(200) DEFAULT NULL,
  `social_connect_example` text DEFAULT NULL,
  `family_close_prox` varchar(200) DEFAULT NULL,
  `family_relation_extended` text DEFAULT NULL,
  `family_relation_neighbor` text DEFAULT NULL,
  `acceptance_level_child` text DEFAULT NULL,
  `local_leader` varchar(200) DEFAULT NULL,
  `conflict_family` int(11) DEFAULT NULL,
  `conflict_family_spec` varchar(200) DEFAULT NULL,
  `mental_health_concern` int(11) DEFAULT NULL,
  `mental_health_spec` varchar(100) DEFAULT NULL,
  `family_sig_life_event` int(11) DEFAULT NULL,
  `family_sig_life_spec` text DEFAULT NULL,
  `pos_neg_events` text DEFAULT NULL,
  `adults_relationship` text DEFAULT NULL,
  `children_caregiver_relation` text DEFAULT NULL,
  `children_caregiver_confide` int(11) DEFAULT NULL,
  `children_caregiver_confide_spec` text DEFAULT NULL,
  `children_caregiver_comfort` int(11) DEFAULT NULL,
  `children_caregiver_comfort_spec` text DEFAULT NULL,
  `children_caregiver_react` int(11) DEFAULT NULL,
  `children_caregiver_react_spec` text DEFAULT NULL,
  `children_caregiver_time` int(11) DEFAULT NULL,
  `children_caregiver_time_spec` text DEFAULT NULL,
  `children_caregiver_communication` text DEFAULT NULL,
  `children_caregiver_encourage` text DEFAULT NULL,
  `children_caregiver_misbehaviour` text DEFAULT NULL,
  `children_caregiver_free` int(11) DEFAULT NULL,
  `children_caregiver_decision` int(11) DEFAULT NULL,
  `child_curr_caregiver_attach` varchar(200) DEFAULT NULL,
  `curr_caregiver_relation` varchar(200) DEFAULT NULL,
  `child_prev_caregiver_attach` varchar(200) DEFAULT NULL,
  `child_prev_caregiver_relation` varchar(200) DEFAULT NULL,
  `behaviour_change` text DEFAULT NULL,
  `daily_routine` text DEFAULT NULL,
  `independence` text DEFAULT NULL,
  `like` text DEFAULT NULL,
  `dislike` text DEFAULT NULL,
  `fear` text DEFAULT NULL,
  `skill` text DEFAULT NULL,
  `strength_resource` text DEFAULT NULL,
  `need_concern` text DEFAULT NULL,
  `aditional_observ` text DEFAULT NULL,
  `things_achieve` text DEFAULT NULL,
  `family_marriage_status` int(11) DEFAULT NULL,
  `family_reason_separation` text DEFAULT NULL,
  `family_placement_child` text DEFAULT NULL,
  `family_child_school` text DEFAULT NULL,
  `family_other_siblings_school` text DEFAULT NULL,
  `meal_per_day` text DEFAULT NULL,
  `food_variety_consumed` text DEFAULT NULL,
  `food_source` text DEFAULT NULL,
  `source_reliability` text DEFAULT NULL,
  `latrine` text DEFAULT NULL,
  `clean_water_access` text DEFAULT NULL,
  `home_environ` text DEFAULT NULL,
  `bath_arrangement` text DEFAULT NULL,
  `sanitary` text DEFAULT NULL,
  `health_service` text DEFAULT NULL,
  `medical_insurance` text DEFAULT NULL,
  `member_chronic_illness` text DEFAULT NULL,
  `which_member` text DEFAULT NULL,
  `chronic_illness_type` text DEFAULT NULL,
  `dificulty_seeing` text DEFAULT NULL,
  `difficulty_hearing` text DEFAULT NULL,
  `difficulty_walking` text DEFAULT NULL,
  `dificulty_remembering` text DEFAULT NULL,
  `dificulty_self_care` text DEFAULT NULL,
  `difficulty_communicating` int(11) DEFAULT NULL,
  `child_disability_care` int(11) DEFAULT NULL,
  `household_additional_support` int(11) DEFAULT NULL,
  `household_additional_support_spec` varchar(200) DEFAULT NULL,
  `rel_cult_health_access` int(11) DEFAULT NULL,
  `rel_cult_health_access_spec` varchar(100) DEFAULT NULL,
  `community_services` int(11) DEFAULT NULL,
  `community_services_access` int(11) DEFAULT NULL,
  `education_facilities` int(11) DEFAULT NULL,
  `school_type` int(11) DEFAULT NULL,
  `school_unique_needs` int(11) DEFAULT NULL,
  `school_unique_needs_spec` varchar(200) DEFAULT NULL,
  `school_household_attending` int(11) DEFAULT NULL,
  `school_household_capacity` int(11) DEFAULT NULL,
  `education_caregiver_interest` int(11) DEFAULT NULL,
  `economic_activity_household` int(11) DEFAULT NULL,
  `employment_type` int(11) DEFAULT NULL,
  `income_month` int(11) DEFAULT NULL,
  `fin_mat_support_outside` int(11) DEFAULT NULL,
  `fin_mat_support_out_spec` varchar(100) DEFAULT NULL,
  `assets_owned_family` varchar(200) DEFAULT NULL,
  `child_support` varchar(100) DEFAULT NULL,
  `recomendation` varchar(100) DEFAULT NULL,
  `other_infor` text DEFAULT NULL,
  `support_needed` text DEFAULT NULL,
  `other` text DEFAULT NULL,
  `case_worker_name` varchar(100) DEFAULT NULL,
  `case_manager_name` varchar(100) DEFAULT NULL,
  `signs_violence_specify` text DEFAULT NULL,
  `community_abuse_specify` text DEFAULT NULL,
  `child_exhibit` text DEFAULT NULL,
  `distance_school` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_child` (`fk_child`),
  CONSTRAINT `csec_need_assessment_ibfk_1` FOREIGN KEY (`fk_child`) REFERENCES `csec_child` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_other_sibling` */

DROP TABLE IF EXISTS `csec_other_sibling`;

CREATE TABLE `csec_other_sibling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_child` int(11) DEFAULT NULL,
  `name_sibling` varchar(200) DEFAULT NULL,
  `nickname` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `edu_empl` varchar(200) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `csec_school` */

DROP TABLE IF EXISTS `csec_school`;

CREATE TABLE `csec_school` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `school_name` varchar(200) DEFAULT NULL COMMENT 'Name of school',
  `location` varchar(200) DEFAULT NULL COMMENT 'School location',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_school_visit` */

DROP TABLE IF EXISTS `csec_school_visit`;

CREATE TABLE `csec_school_visit` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `fk_child` int(11) DEFAULT NULL,
  `visit_date` date DEFAULT NULL COMMENT 'Date of visit',
  `school_attendance` varchar(20) DEFAULT NULL COMMENT 'School attendance',
  `reg_days_no` int(11) DEFAULT NULL COMMENT 'Regular attendance no.of days',
  `irreg_days_no` int(11) DEFAULT NULL COMMENT 'Irregular attendance No.of days',
  `irreg_reasons` text DEFAULT NULL COMMENT 'irregular attendance reasons',
  `class_particip` varchar(20) DEFAULT NULL COMMENT 'Participation in class activities',
  `passive_particip_reasons` text DEFAULT NULL COMMENT 'Reason for passive participation',
  `student_dressing` text DEFAULT NULL COMMENT 'Teacher comment on student dressing',
  `academic_perfom` text DEFAULT NULL,
  `academic_perform_report` varchar(100) DEFAULT NULL,
  `extra_curr_act` varchar(100) DEFAULT NULL,
  `discipline_level` varchar(20) DEFAULT NULL,
  `discipline_why` text DEFAULT NULL,
  `outstanding_act` text DEFAULT NULL,
  `area_concern` text DEFAULT NULL,
  `follow_up` text DEFAULT NULL,
  `student_comment` text DEFAULT NULL,
  `teacher_comment` text DEFAULT NULL,
  `staff_name` varchar(200) DEFAULT NULL,
  `staff_designation` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_child` (`fk_child`),
  CONSTRAINT `csec_school_visit_ibfk_1` FOREIGN KEY (`fk_child`) REFERENCES `csec_child` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
