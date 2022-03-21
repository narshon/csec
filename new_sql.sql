/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.11-MariaDB : Database - csec
*********************************************************************
*/

SET FOREIGN_KEY_CHECKS=0;

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

/*Table structure for table `csec_school` */

CREATE TABLE `csec_school` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `school_name` varchar(20) DEFAULT NULL COMMENT 'Name of school',
  `location` varchar(20) DEFAULT NULL COMMENT 'School location',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `csec_child_school` */

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `csec_child_sibling` */

CREATE TABLE `csec_child_sibling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_child` int(11) DEFAULT NULL,
  `s_order` int(11) DEFAULT NULL,
  `s_name` varchar(200) DEFAULT NULL,
  `occupation` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_child` (`fk_child`),
  CONSTRAINT `csec_child_sibling_ibfk_1` FOREIGN KEY (`fk_child`) REFERENCES `csec_child` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



/*Table structure for table `csec_home_visit` */

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_income` */

CREATE TABLE `csec_income` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Record ID',
  `child_relation` varchar(20) DEFAULT NULL,
  `job_type` varchar(20) DEFAULT NULL,
  `occupation` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `csec_need_assessment` */

CREATE TABLE `csec_need_assessment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_child` int(11) DEFAULT NULL,
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
  `admin_office` varchar(50) DEFAULT NULL,
  `household_condition` varchar(50) DEFAULT NULL,
  `where_family_comm_live` text DEFAULT NULL,
  `community_culture_connect` varchar(20) DEFAULT NULL,
  `family_social_connect` varchar(20) DEFAULT NULL,
  `social_connect_example` text DEFAULT NULL,
  `family_close_prox` varchar(20) DEFAULT NULL,
  `family_relation_extended` text DEFAULT NULL,
  `family_relation_neighbor` text DEFAULT NULL,
  `acceptance_level_child` text DEFAULT NULL,
  `local_leader` varchar(20) DEFAULT NULL,
  `conflict_family` int(11) DEFAULT NULL,
  `conflict_family_spec` varchar(200) DEFAULT NULL,
  `mental_health_concern` int(11) DEFAULT NULL,
  `mental_health_spec` varchar(100) DEFAULT NULL,
  `family_sig_life_event` int(11) DEFAULT NULL,
  `family_sig_life_spec` varchar(100) DEFAULT NULL,
  `pos_neg_events` varchar(200) DEFAULT NULL,
  `adults_relationship` varchar(200) DEFAULT NULL,
  `children_caregiver_relation` varchar(200) DEFAULT NULL,
  `children_caregiver_confide` int(11) DEFAULT NULL,
  `children_caregiver_confide_spec` varchar(100) DEFAULT NULL,
  `children_caregiver_comfort` int(11) DEFAULT NULL,
  `children_caregiver_comfort_spec` varchar(100) DEFAULT NULL,
  `children_caregiver_react` int(11) DEFAULT NULL,
  `children_caregiver_react_spec` varchar(100) DEFAULT NULL,
  `children_caregiver_time` int(11) DEFAULT NULL,
  `children_caregiver_time_spec` varchar(100) DEFAULT NULL,
  `children_caregiver_communication` varchar(200) DEFAULT NULL,
  `children_caregiver_encourage` varchar(200) DEFAULT NULL,
  `children_caregiver_misbehaviour` varchar(200) DEFAULT NULL,
  `children_caregiver_free` int(11) DEFAULT NULL,
  `children_caregiver_decision` int(11) DEFAULT NULL,
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
  `things_achieve` varchar(100) DEFAULT NULL,
  `family_marriage_status` int(11) DEFAULT NULL,
  `family_reason_separation` varchar(200) DEFAULT NULL,
  `family_placement_child` varchar(200) DEFAULT NULL,
  `family_child_school` varchar(200) DEFAULT NULL,
  `family_other_siblings_school` varchar(200) DEFAULT NULL,
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
  PRIMARY KEY (`id`),
  KEY `fk_child` (`fk_child`),
  CONSTRAINT `csec_need_assessment_ibfk_1` FOREIGN KEY (`fk_child`) REFERENCES `csec_child` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Table structure for table `csec_other_sibling` */

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



/*Table structure for table `csec_school_visit` */

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
  `staff_name` varchar(20) DEFAULT NULL,
  `staff_designation` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_child` (`fk_child`),
  CONSTRAINT `csec_school_visit_ibfk_1` FOREIGN KEY (`fk_child`) REFERENCES `csec_child` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

SET FOREIGN_KEY_CHECKS=1;
