/*
SQLyog Ultimate v10.00 Beta1
MySQL - 8.0.22 : Database - csec
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`csec` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `csec`;

/*Table structure for table `csec_beneficiary` */

DROP TABLE IF EXISTS `csec_beneficiary`;

CREATE TABLE `csec_beneficiary` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `org_id` int DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `date_intake` date DEFAULT NULL,
  `intake_quarter` varchar(50) DEFAULT NULL,
  `unique_id` varchar(50) DEFAULT NULL,
  `child_status` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `child_age` int DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `disability` varchar(5) DEFAULT NULL,
  `disability_type` int DEFAULT NULL,
  `disability_type_specify` varchar(200) DEFAULT NULL,
  `disability_support` int DEFAULT NULL,
  `county` int DEFAULT NULL,
  `subcounty` int DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `village` varchar(200) DEFAULT NULL,
  `school_status` int DEFAULT NULL,
  `school_name` varchar(200) DEFAULT NULL,
  `level_education` int DEFAULT NULL,
  `subcounty_office` varchar(100) DEFAULT NULL,
  `refer_agency` varchar(100) DEFAULT NULL,
  `type_csec` varchar(100) DEFAULT NULL,
  `type_csec_specify` varchar(200) DEFAULT NULL,
  `cause_csec` varchar(200) DEFAULT NULL,
  `cause_csec_specify` varchar(100) DEFAULT NULL,
  `activity_desc` text,
  `rescued_csec` varchar(100) DEFAULT NULL,
  `tracing_date` date DEFAULT NULL,
  `counseling` int DEFAULT NULL,
  `counseling_date` date DEFAULT NULL,
  `medical_care` int DEFAULT NULL,
  `medical_care_date` date DEFAULT NULL,
  `legal_support` int DEFAULT NULL,
  `legal_support_date` date DEFAULT NULL,
  `education_support` int DEFAULT NULL,
  `educational_support_date` date DEFAULT NULL,
  `accelerated_learning` int DEFAULT NULL,
  `vocational_training` int DEFAULT NULL,
  `vocational_training_date` date DEFAULT NULL,
  `empl_voc_training` int DEFAULT NULL,
  `empl_voc_training_date` date DEFAULT NULL,
  `provided_income` int DEFAULT NULL,
  `provided_income_date` date DEFAULT NULL,
  `parent_guard_names` varchar(200) DEFAULT NULL,
  `parent_guard_relationship` int DEFAULT NULL,
  `parent_guard_id` int DEFAULT NULL,
  `parent_guard_contacts` text,
  `parent_vital_status` int DEFAULT NULL,
  `family_counseling` int DEFAULT NULL,
  `familty_counseling_date` date DEFAULT NULL,
  `parenting_skills_training` int DEFAULT NULL,
  `family_training` int DEFAULT NULL,
  `family_training_date` date DEFAULT NULL,
  `family_income` int DEFAULT NULL,
  `family_income_date` date DEFAULT NULL,
  `main_care_arrangement` varchar(200) DEFAULT NULL,
  `main_care_specify` varchar(200) DEFAULT NULL,
  `main_care_agency` varchar(200) DEFAULT NULL,
  `main_support_provider` int DEFAULT NULL,
  `main_support_provider_specify` varchar(200) DEFAULT NULL,
  `comm_contact_person` varchar(200) DEFAULT NULL,
  `comm_contact_person_position` int DEFAULT NULL,
  `comm_contact_person_pos_specify` varchar(200) DEFAULT NULL,
  `comm_contact_person_tel` varchar(100) DEFAULT NULL,
  `risk_level` int DEFAULT NULL,
  `followup_visit` int DEFAULT NULL,
  `case_final_result` int DEFAULT NULL,
  `cause_failure` int DEFAULT NULL,
  `cause_failure_specify` varchar(200) DEFAULT NULL,
  `cause_success` int DEFAULT NULL,
  `cause_success_specify` varchar(200) DEFAULT NULL,
  `data_entry_staff` varchar(100) DEFAULT NULL,
  `data_entry_staff_designation` int DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `modified_by` int DEFAULT NULL,
  `comments` text,
  `flag_delete` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `created_by` (`created_by`),
  KEY `modified_by` (`modified_by`)
) ENGINE=InnoDB AUTO_INCREMENT=846 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_child` */

DROP TABLE IF EXISTS `csec_child`;

CREATE TABLE `csec_child` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `fk_consent` int DEFAULT NULL,
  `interview_date` date DEFAULT NULL COMMENT 'Date of Identification',
  `child_support_other` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'Is the child enlisted for support with other organisations',
  `child_support_org` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'Name of organisation',
  `child_support_service` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'Child service',
  `child_name` varchar(10) DEFAULT NULL COMMENT 'Child name',
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int DEFAULT NULL COMMENT 'Age in years',
  `disability` varchar(20) DEFAULT NULL COMMENT 'If disabled differently',
  `school_name` varchar(20) DEFAULT NULL COMMENT 'School Name',
  `child_educ_level` varchar(20) DEFAULT NULL COMMENT 'Level of Education',
  `class` varchar(10) DEFAULT NULL COMMENT 'Class/Form',
  `country` varchar(20) DEFAULT NULL COMMENT 'Country',
  `sub_county` varchar(20) DEFAULT NULL COMMENT 'Sub County',
  `location` varchar(20) DEFAULT NULL COMMENT 'Location/Village',
  `landmark` varchar(20) DEFAULT NULL COMMENT 'Nearby landmark',
  `landmark_name` varchar(20) DEFAULT NULL,
  `child_school_attendance` int DEFAULT NULL COMMENT 'Child school attendance in the last 6-12 months',
  `not_regular_reason` text COMMENT 'If not regular , give reasons',
  `meal_per_day` int DEFAULT NULL COMMENT 'Meals family have per day',
  `child_chronic_ill` varchar(5) DEFAULT NULL COMMENT 'child chronic illness',
  `child_chronic_ill_spec` varchar(50) DEFAULT NULL COMMENT 'Family member chronic illness',
  `fmember_chronic_ill` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'Family member with chronic illness',
  `fmember_chronic_ill_spec` varchar(50) DEFAULT NULL,
  `parent_alive` varchar(5) DEFAULT NULL COMMENT 'Are both parents alive',
  `who_alive` varchar(10) DEFAULT NULL,
  `stay_together` varchar(5) DEFAULT NULL,
  `fwife_number` int DEFAULT NULL COMMENT 'How many wifes does your father have',
  `child_live_with` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'Who does the child live with',
  `sibling_no` int DEFAULT NULL COMMENT 'How many siblings do you have',
  `sibling_order_9_15` int DEFAULT NULL,
  `sibling_order_16_20` int DEFAULT NULL COMMENT 'Order of siblings from oldest to youngest',
  `sibling_order_21_25` int DEFAULT NULL,
  `sibling_order_26_30` int DEFAULT NULL,
  `sibling_order_31_35` int DEFAULT NULL,
  `sibling_order_35_above` int DEFAULT NULL,
  `father_name` varchar(20) DEFAULT NULL,
  `father_contact` int DEFAULT NULL,
  `mother_name` varchar(20) DEFAULT NULL,
  `mother_contact` int DEFAULT NULL,
  `caregiver_name` varchar(20) DEFAULT NULL,
  `caregiver_contact` int DEFAULT NULL,
  `other_name` varchar(20) DEFAULT NULL,
  `other_name_contact` int DEFAULT NULL,
  `fmember_income_no` int DEFAULT NULL COMMENT 'Family members over 18 years access to income',
  `income_regularity` int DEFAULT NULL COMMENT 'Regularity of income',
  `household_indebt` int DEFAULT NULL COMMENT 'Household present indebtness to meet basic needs',
  `household_assets` int DEFAULT NULL COMMENT 'Household acess to natural resources',
  `household_tools` int DEFAULT NULL COMMENT 'Household tools and infrastructure',
  `hhold_educ_level` varchar(100) DEFAULT NULL COMMENT 'Level of education',
  `sex_exploit` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'Nature of sexual exploitaion',
  `exploit_happen_when` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'When exploitaion happened',
  `exploit_continue` varchar(20) DEFAULT NULL COMMENT 'Is it continuing',
  `exploit_month` int DEFAULT NULL,
  `exploit_year` int DEFAULT NULL,
  `exploit_reported` int DEFAULT NULL COMMENT 'Has exploitaion been reported',
  `exploit_reported_to` int DEFAULT NULL COMMENT 'Exploit reported to who',
  `exploit_rpt_to_spec` text,
  `exploit_notreported_reason` text COMMENT 'Why child didnt report case to anyone',
  `other_detail` text COMMENT 'Other details noted during interview',
  `child_init` varchar(10) DEFAULT NULL,
  `caregiver_interview_name` varchar(10) DEFAULT NULL,
  `caregiver_interview_contact` int DEFAULT NULL COMMENT 'Contact of caregiver',
  `caregiver_interview_date` date DEFAULT NULL COMMENT 'Date caregiver gave information',
  `kesho_staff_name` varchar(20) DEFAULT NULL COMMENT 'Kesho Kenya child protection staff detail',
  `kesho_staff_contact` int DEFAULT NULL COMMENT 'Kesho Kenya staff contact',
  `kesho_staff_interview_date` date DEFAULT NULL COMMENT 'Date Kesho Kenya staff gave details',
  `kesho_designation` varchar(20) DEFAULT NULL COMMENT 'Kesho Kenya staff designation',
  PRIMARY KEY (`id`),
  KEY `fk_consent` (`fk_consent`),
  CONSTRAINT `csec_child_ibfk_1` FOREIGN KEY (`fk_consent`) REFERENCES `csec_consent` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Table structure for table `csec_child_school` */

DROP TABLE IF EXISTS `csec_child_school`;

CREATE TABLE `csec_child_school` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `fk_child` int DEFAULT NULL,
  `fk_school` int DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `stud_reg_no` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_child` (`fk_child`),
  KEY `fk_school` (`fk_school`),
  CONSTRAINT `csec_child_school_ibfk_1` FOREIGN KEY (`fk_child`) REFERENCES `csec_child` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `csec_child_school_ibfk_2` FOREIGN KEY (`fk_school`) REFERENCES `csec_school` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Table structure for table `csec_child_sibling` */

DROP TABLE IF EXISTS `csec_child_sibling`;

CREATE TABLE `csec_child_sibling` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fk_child` int DEFAULT NULL,
  `s_order` int DEFAULT NULL,
  `s_name` varchar(200) DEFAULT NULL,
  `occupation` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_child` (`fk_child`),
  CONSTRAINT `csec_child_sibling_ibfk_1` FOREIGN KEY (`fk_child`) REFERENCES `csec_child` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Table structure for table `csec_consent` */

DROP TABLE IF EXISTS `csec_consent`;

CREATE TABLE `csec_consent` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `fk_eligibilty_id` int DEFAULT NULL COMMENT 'Eligibility ID',
  `consent_edu` int DEFAULT NULL COMMENT 'Education/school service',
  `consent_legal` int DEFAULT NULL COMMENT 'Legal and protective services',
  `consent_disability` int DEFAULT NULL COMMENT 'Disability specific services',
  `consent_psycho` int DEFAULT NULL COMMENT 'Psychosocial services',
  `consent_comm` int DEFAULT NULL COMMENT 'Community services',
  `consent_health` int DEFAULT NULL COMMENT 'Health/Medical services',
  `consent_livelihood` int DEFAULT NULL COMMENT 'Livelihood services',
  `consent_family` int DEFAULT NULL COMMENT 'Family members',
  `caregiver_init` varchar(10) DEFAULT NULL COMMENT 'Caregiver Initials',
  `caregiver_contact` varchar(20) DEFAULT NULL COMMENT 'Caregiver contact',
  `child_init` varchar(10) DEFAULT NULL COMMENT 'Child Initials',
  `staff_init` varchar(10) DEFAULT NULL COMMENT 'Staff Initials',
  `consent_date` date DEFAULT NULL COMMENT 'Date of consent',
  PRIMARY KEY (`id`),
  KEY `fk_eligibilty_id` (`fk_eligibilty_id`),
  CONSTRAINT `csec_consent_ibfk_1` FOREIGN KEY (`fk_eligibilty_id`) REFERENCES `csec_eligibility` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Table structure for table `csec_eligibility` */

DROP TABLE IF EXISTS `csec_eligibility`;

CREATE TABLE `csec_eligibility` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `child_code` varchar(50) DEFAULT NULL COMMENT 'Code of the child',
  `eligibility_date` date DEFAULT NULL COMMENT 'Date',
  `factor_family` int DEFAULT NULL COMMENT 'Family history',
  `factor_env` int DEFAULT NULL COMMENT 'Enviromental factors',
  `factor_peer_pressure` int DEFAULT NULL COMMENT 'Peer pressure',
  `factor_economic` int DEFAULT NULL COMMENT 'Economic factors',
  `factor_remark` text COMMENT 'Remarks',
  `age_range` int DEFAULT NULL COMMENT 'Age',
  `child_attitude` int DEFAULT NULL COMMENT 'Attitude of the child',
  `caregiver_attitude` int DEFAULT NULL COMMENT 'Attitude of the caregiver',
  `disability_level` int DEFAULT NULL COMMENT 'Remarks from field officers /Social workers/councellor',
  `age_remarks` text COMMENT 'Remarks',
  `child_attitude_rmk` text COMMENT 'Remarks',
  `caregiver_attitude_rmk` text COMMENT 'Remarks',
  `disability_level_rmk` text COMMENT 'Remarks',
  `kesho_kenya_rmk` text COMMENT 'Kesho Kenya remarks',
  `kesho_staff_name` varchar(100) DEFAULT NULL COMMENT 'Kesho Kenya staff',
  `vetting_comm_rmk` text COMMENT 'Vetting commitee remarks',
  `chairperson_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'Chairperson name',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Table structure for table `csec_followup` */

DROP TABLE IF EXISTS `csec_followup`;

CREATE TABLE `csec_followup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fk_beneficiary` int DEFAULT NULL,
  `followup_date` date DEFAULT NULL,
  `followup_outcome` int DEFAULT NULL,
  `followup_outcome_desc` text,
  PRIMARY KEY (`id`),
  KEY `fk_beneficiary` (`fk_beneficiary`),
  CONSTRAINT `csec_followup_ibfk_1` FOREIGN KEY (`fk_beneficiary`) REFERENCES `csec_beneficiary` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=635 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_home_visit` */

DROP TABLE IF EXISTS `csec_home_visit`;

CREATE TABLE `csec_home_visit` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `fk_child` int DEFAULT NULL,
  `home_visit_date` date DEFAULT NULL,
  `visit_no` int DEFAULT NULL,
  `case_file_no` int DEFAULT NULL,
  `infor_last_vist` text,
  `life_change` text,
  `change_effect` text,
  `health_develop` text,
  `psycho_health` text,
  `education` text,
  `safety` text,
  `mentor_relation` text,
  `social_wellbeing` text,
  `caregiver_name` varchar(50) DEFAULT NULL,
  `case_worker_name` varchar(50) DEFAULT NULL,
  `case_manager_name` varchar(50) DEFAULT NULL,
  `next_visit_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_child` (`fk_child`),
  CONSTRAINT `csec_home_visit_ibfk_1` FOREIGN KEY (`fk_child`) REFERENCES `csec_child` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Table structure for table `csec_income` */

DROP TABLE IF EXISTS `csec_income`;

CREATE TABLE `csec_income` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `child_relation` varchar(20) DEFAULT NULL,
  `job_type` varchar(20) DEFAULT NULL,
  `occupation` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Table structure for table `csec_lookup` */

DROP TABLE IF EXISTS `csec_lookup`;

CREATE TABLE `csec_lookup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fk_category` int DEFAULT NULL,
  `key` int DEFAULT NULL,
  `value` text,
  `_status` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_category` (`fk_category`),
  CONSTRAINT `csec_lookup_ibfk_1` FOREIGN KEY (`fk_category`) REFERENCES `csec_lookup_category` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_lookup_category` */

DROP TABLE IF EXISTS `csec_lookup_category`;

CREATE TABLE `csec_lookup_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) DEFAULT NULL,
  `field` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_need_assessment` */

DROP TABLE IF EXISTS `csec_need_assessment`;

CREATE TABLE `csec_need_assessment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fk_child` int DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `alive_status` varchar(10) DEFAULT NULL,
  `mother` varchar(100) DEFAULT NULL,
  `father` varchar(100) DEFAULT NULL,
  `parent_stay_together` varchar(10) DEFAULT NULL,
  `mother_county` varchar(100) DEFAULT NULL,
  `mother_subcounty` varchar(100) DEFAULT NULL,
  `mother_loc` varchar(100) DEFAULT NULL,
  `mother_sub_loc` varchar(100) DEFAULT NULL,
  `mother_village` varchar(100) DEFAULT NULL,
  `father_county` varchar(100) DEFAULT NULL,
  `father_subcounty` varchar(100) DEFAULT NULL,
  `father_loc` varchar(100) DEFAULT NULL,
  `father_subloc` varchar(100) DEFAULT NULL,
  `father_village` varchar(100) DEFAULT NULL,
  `other_sibling_name` varchar(100) DEFAULT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `last_known_loc` varchar(100) DEFAULT NULL,
  `edu` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `signs_of_violence` text,
  `family_abuse` text,
  `community_abuse` text,
  `admin_office` varchar(50) DEFAULT NULL,
  `household_condition` varchar(50) DEFAULT NULL,
  `where_family_comm_live` text,
  `community_culture_connect` varchar(20) DEFAULT NULL,
  `family_social_connect` varchar(20) DEFAULT NULL,
  `social_connect_example` text,
  `family_close_prox` varchar(20) DEFAULT NULL,
  `family_relation_extended` text,
  `family_relation_neighbor` text,
  `acceptance_level_child` text,
  `local_leader` varchar(20) DEFAULT NULL,
  `child_curr_caregiver_attach` varchar(50) DEFAULT NULL,
  `curr_caregiver_relation` varchar(50) DEFAULT NULL,
  `child_prev_caregiver_attach` varchar(50) DEFAULT NULL,
  `child_prev_caregiver_relation` varchar(50) DEFAULT NULL,
  `self_harm` varchar(100) DEFAULT NULL,
  `known_history_abuse` varchar(100) DEFAULT NULL,
  `inaprop_sex_behaviour` varchar(100) DEFAULT NULL,
  `drug_abuse` varchar(100) DEFAULT NULL,
  `abuse_symptom` varchar(100) DEFAULT NULL,
  `emotional_distress` varchar(100) DEFAULT NULL,
  `risk` varchar(100) DEFAULT NULL,
  `behaviour_change` varchar(100) DEFAULT NULL,
  `daily_routine` varchar(100) DEFAULT NULL,
  `independence` varchar(100) DEFAULT NULL,
  `like` varchar(100) DEFAULT NULL,
  `dislike` varchar(100) DEFAULT NULL,
  `fear` varchar(100) DEFAULT NULL,
  `skill` varchar(100) DEFAULT NULL,
  `strength_resource` varchar(100) DEFAULT NULL,
  `need_concern` varchar(100) DEFAULT NULL,
  `aditional_observ` varchar(200) DEFAULT NULL,
  `achievement` varchar(100) DEFAULT NULL,
  `meal_per_day` varchar(20) DEFAULT NULL,
  `food_variety_consumed` varchar(50) DEFAULT NULL,
  `food_source` varchar(50) DEFAULT NULL,
  `source_reliability` varchar(100) DEFAULT NULL,
  `latrine` varchar(100) DEFAULT NULL,
  `clean_water_access` varchar(100) DEFAULT NULL,
  `home_environ` varchar(100) DEFAULT NULL,
  `bath_arrangement` varchar(100) DEFAULT NULL,
  `sanitary` varchar(100) DEFAULT NULL,
  `health_service` varchar(20) DEFAULT NULL,
  `medical_insurance` varchar(20) DEFAULT NULL,
  `member_chronic_illness` varchar(20) DEFAULT NULL,
  `which_member` varchar(100) DEFAULT NULL,
  `chronic_illness_type` varchar(100) DEFAULT NULL,
  `dificulty_seeing` varchar(100) DEFAULT NULL,
  `difficulty_hearing` varchar(100) DEFAULT NULL,
  `difficulty_walking` varchar(100) DEFAULT NULL,
  `dificulty_remembering` varchar(100) DEFAULT NULL,
  `dificulty_self_care` varchar(100) DEFAULT NULL,
  `child_support` varchar(100) DEFAULT NULL,
  `recomendation` varchar(100) DEFAULT NULL,
  `other_infor` text,
  `support_needed` text,
  `other` text,
  `case_worker_name` varchar(100) DEFAULT NULL,
  `case_manager_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_child` (`fk_child`),
  CONSTRAINT `csec_need_assessment_ibfk_1` FOREIGN KEY (`fk_child`) REFERENCES `csec_child` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Table structure for table `csec_school` */

DROP TABLE IF EXISTS `csec_school`;

CREATE TABLE `csec_school` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `school_name` varchar(20) DEFAULT NULL COMMENT 'Name of school',
  `location` varchar(20) DEFAULT NULL COMMENT 'School location',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Table structure for table `csec_school_visit` */

DROP TABLE IF EXISTS `csec_school_visit`;

CREATE TABLE `csec_school_visit` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `fk_child` int DEFAULT NULL,
  `visit_date` date DEFAULT NULL COMMENT 'Date of visit',
  `school_attendance` varchar(20) DEFAULT NULL COMMENT 'School attendance',
  `reg_days_no` int DEFAULT NULL COMMENT 'Regular attendance no.of days',
  `irreg_days_no` int DEFAULT NULL COMMENT 'Irregular attendance No.of days',
  `irreg_reasons` text COMMENT 'irregular attendance reasons',
  `class_particip` varchar(20) DEFAULT NULL COMMENT 'Participation in class activities',
  `passive_particip_reasons` text COMMENT 'Reason for passive participation',
  `student_dressing` text COMMENT 'Teacher comment on student dressing',
  `academic_perfom` text,
  `academic_perform_report` varchar(100) DEFAULT NULL,
  `extra_curr_act` varchar(100) DEFAULT NULL,
  `discipline_level` varchar(20) DEFAULT NULL,
  `discipline_why` text,
  `outstanding_act` text,
  `area_concern` text,
  `follow_up` text,
  `student_comment` text,
  `teacher_comment` text,
  `staff_name` varchar(20) DEFAULT NULL,
  `staff_designation` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_child` (`fk_child`),
  CONSTRAINT `csec_school_visit_ibfk_1` FOREIGN KEY (`fk_child`) REFERENCES `csec_child` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Table structure for table `csec_sibling` */

DROP TABLE IF EXISTS `csec_sibling`;

CREATE TABLE `csec_sibling` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fk_beneficiary` int DEFAULT NULL,
  `sibling_names` varchar(500) DEFAULT NULL,
  `sibling_dob` date DEFAULT NULL,
  `sibling_school` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_beneficiary` (`fk_beneficiary`),
  CONSTRAINT `csec_sibling_ibfk_1` FOREIGN KEY (`fk_beneficiary`) REFERENCES `csec_beneficiary` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=877 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_user` */

DROP TABLE IF EXISTS `csec_user`;

CREATE TABLE `csec_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `org_id` int NOT NULL DEFAULT '1',
  `email` varchar(500) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `passwd` varchar(500) DEFAULT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `mname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `role` int NOT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
