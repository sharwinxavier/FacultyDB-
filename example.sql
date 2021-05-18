Create database example;
use example;
CREATE TABLE IF NOT EXISTS `Faculty_Basic_Details` (
  `prof_img` varchar(10000)NOT NULL,
  `ID` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Position` varchar(15) NOT NULL,
  `Mailid` varchar(30) NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `Department` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,

  `DOB` varchar(15),
  `Reg_Adj` varchar(10),
  `Dist`  varchar(20),
  `Mob_No` varchar(15), `Email` varchar(40) ,
`Community` varchar(10) , `PAN_No` varchar(25) null, `Passport_No` varchar(25) null, `Aadhar_No` varchar(25) ,
`COE_Fac_Code` varchar (20) , `AICTE_Fac_code` varchar(20) null ,
`Marital_status` varchar(10), `Birth_place` varchar(20), `Religion` varchar(20),
`Catholic` varchar(20), `Caste` varchar(20) , `Per_Add` varchar(100) , `Com_Add` varchar(100) ,
`Lang_Known_1` varchar(100),
`Extracurricular` varchar(60),
`Father_name` varchar(100),
`Mother_name` varchar(25),`Spouse_name` varchar(25) null, `Spouse_Occupation` varchar(25) null, `Children_details` varchar (50) null,
`Blood_grp` varchar(10), `Postal_code` varchar(20) , `STD_Code` varchar(10) , `GPM` varchar(10) , `Joining_Date` date,
`Dr_deg` varchar(10), `PG_deg` varchar(20), `UG_deg` varchar(20), `Phy_Chl` varchar(10),
`AICTE_ex_mem` varchar(10),

/*Educational Qualification*/
 
  `Schl_Qual_1` varchar(60),`Schl_name_1` varchar(60),`Schl_mode_1` varchar(30),`Schl_medium_1` varchar(10),`schl_per_1` varchar(10),
  `Schl_Qual_2` varchar(60),`Schl_name_2` varchar(60),`Schl_mode_2` varchar(30),`Schl_medium_2` varchar(10),`schl_per_2` varchar(10),

  `Category_1` varchar(20) , `Deg_Name_1` varchar(20) ,
  `Specialization_1` varchar(20),`Year_of_passing_1` varchar(20),`Name_of_the_college_1` varchar(50),
  `Name_of_the_University_1` varchar(40),`Percentage_1` varchar(10),`Class_Obtained_1` varchar(20),`Clg_mode_1` varchar(20),
  `Clg_medium_1` varchar(10),
  `Category_2` varchar(20) , `Deg_Name_2` varchar(20) ,
  `Specialization_2` varchar(20),`Year_of_passing_2` varchar(20),`Name_of_the_college_2` varchar(50),
  `Name_of_the_University_2` varchar(40),`Percentage_2` varchar(10),`Class_Obtained_2` varchar(20),`Clg_mode_2` varchar(20),
  `Clg_medium_2` varchar(10),
  `Category_3` varchar(20) null, `Deg_Name_3` varchar(20) null,
  `Specialization_3` varchar(20)null,`Year_of_passing_3` varchar(20)null,`Name_of_the_college_3` varchar(50),
  `Name_of_the_University_3` varchar(40),`Percentage_3` varchar(10),`Class_Obtained_3` varchar(20),`Clg_mode_3` varchar(20),
  `Clg_medium_3` varchar(10),
  `Category_4` varchar(20) , `Deg_Name_4` varchar(20) ,
  `Specialization_4` varchar(20),`Year_of_passing_4` varchar(20),`Name_of_the_college_4` varchar(50),
  `Name_of_the_University_4` varchar(40),`Percentage_4` varchar(10),`Class_Obtained_4` varchar(20),`Clg_mode_4` varchar(20),
  `Clg_medium_4` varchar(10),
  `Category_5` varchar(20) , `Deg_Name_5` varchar(20) ,
  `Specialization_5` varchar(20),`Year_of_passing_5` varchar(20),`Name_of_the_college_5` varchar(50),
  `Name_of_the_University_5` varchar(40),`Percentage_5` varchar(10),`Class_Obtained_5` varchar(20),`Clg_mode_5` varchar(20),
  `Clg_medium_5` varchar(10),
  `Category_6` varchar(20) , `Deg_Name_6` varchar(20) ,
  `Specialization_6` varchar(20),`Year_of_passing_6` varchar(20),`Name_of_the_college_6` varchar(50),
  `Name_of_the_University_6` varchar(40),`Percentage_6` varchar(10),`Class_Obtained_6` varchar(20),`Clg_mode_6` varchar(20),
  `Clg_medium_6` varchar(10),
  `Category_7` varchar(20) , `Deg_Name_7` varchar(20) ,
  `Specialization_7` varchar(20),`Year_of_passing_7` varchar(20),`Name_of_the_college_7` varchar(50),
  `Name_of_the_University_7` varchar(40),`Percentage_7` varchar(10),`Class_Obtained_7` varchar(20),`Clg_mode_7` varchar(20),
  `Clg_medium_7` varchar(10),

  `Specialization_area` varchar(30),
 
/*Educational Qualification 1*/

  `Add_Qual` varchar(70) null, `Phd_title` varchar (70) null, `Fac_Phd_award` varchar(50) null,

/*Family details*/

`Mem_Name_1` varchar(20),`Rel_1` varchar(20), `DOB_1` date,`HEduQual_1` varchar(20),
`Emp_status_1` varchar(20),`Inc_mont_1` varchar(20) ,
`Mem_Name_2` varchar(20),`Rel_2` varchar(20), `DOB_2` date,`HEduQual_2` varchar(20),
`Emp_status_2` varchar(20),`Inc_mont_2` varchar(20) ,
`Mem_Name_3` varchar(20)null,`Rel_3` varchar(20)null, `DOB_3` date null,`HEduQual_3` varchar(20)null,
`Emp_status_3` varchar(20)null,`Inc_mont_3` varchar(20) null,
`Mem_Name_4` varchar(20)null,`Rel_4` varchar(20)null, `DOB_4` date null,`HEduQual_4` varchar(20)null,
`Emp_status_4` varchar(20)null,`Inc_mont_4` varchar(20) null,
`Mem_Name_5` varchar(20)null,`Rel_5` varchar(20)null, `DOB_5` date null,`HEduQual_5` varchar(20)null,
`Emp_status_5` varchar(20)null,`Inc_mont_5` varchar(20) null,
`Mem_Name_6` varchar(20)null,`Rel_6` varchar(20)null, `DOB_6` date null,`HEduQual_6` varchar(20)null,
`Emp_status_6` varchar(20)null,`Inc_mont_6` varchar(20) null,
`Mem_Name_7` varchar(20)null,`Rel_7` varchar(20)null, `DOB_7` date null,`HEduQual_7` varchar(20)null,
`Emp_status_7` varchar(20)null,`Inc_mont_7` varchar(20) null,
`Mem_Name_8` varchar(20)null,`Rel_8` varchar(20)null, `DOB_8` date null,`HEduQual_8` varchar(20)null,
`Emp_status_8` varchar(20)null,`Inc_mont_8` varchar(20) null,
`Mem_Name_9` varchar(20)null,`Rel_9` varchar(20)null, `DOB_9` date null,`HEduQual_9` varchar(20)null,
`Emp_status_9` varchar(20)null,`Inc_mont_9` varchar(20) null,

/*Academic  Achievements*/

`Year_1` varchar(20) null,`Ntl_paper_1` int(10) null, `Intl_paper_1` int(10) null,`Ntl_Journal_1` int(10)null,
`Intl_journal_1` int(10)null , `Ntl_con_1` int(10)null, `Intl_con_1` int(10)null,
`Year_2` varchar(20) null,`Ntl_paper_2` int(10) null, `Intl_paper_2` int(10) null, `Ntl_Journal_2` int(10)null,
`Intl_journal_2` int(10)null , `Ntl_con_2` int(10)null, `Intl_con_2` int(10)null,
`Year_3` varchar(20) null,`Ntl_paper_3` int(10)null , `Intl_paper_3` int(10)null , `Ntl_Journal_3` int(10)null,
`Intl_journal_3` int(10) null, `Ntl_con_3` int(10)null, `Intl_con_3` int(10)null,
`Year_4` varchar(20) null,`Ntl_paper_4` int(10) null, `Intl_paper_4` int(10) null, `Ntl_Journal_4` int(10)null,
`Intl_journal_4` int(10) null, `Ntl_con_4` int(10)null, `Intl_con_4` int(10)null,
`Year_5` varchar(20) null,`Ntl_paper_5` int(10) null, `Intl_paper_5` int(10) null, `Ntl_Journal_5` int(10)null,
`Intl_journal_5` int(10) null, `Ntl_con_5` int(10)null, `Intl_con_5` int(10)null,
`Year_6` varchar(20) null,`Ntl_paper_6` int(10) null, `Intl_paper_6` int(10)null , `Ntl_Journal_6` int(10)null,
`Intl_journal_6` int(10)null , `Ntl_con_6` int(10)null, `Intl_con_6` int(10)null,






 




/*Academic Experience*/

`Clg_Name_1` varchar(60),`Designation_1` varchar(25),`Joining_Date_1` date ,`Rel_Cur_Date_1` date ,
`Work_type_1` varchar(20),`Salary_drawn_1` Varchar(50),
`Clg_Name_2` varchar(60)null,`Designation_2` varchar(25)null,`Joining_Date_2` date null,`Rel_Cur_Date_2` date null,
`Work_type_2` varchar(20)null,`Salary_drawn_2` Varchar(50)null,
`Clg_Name_3` varchar(60)null,`Designation_3` varchar(25)null,`Joining_Date_3` date null,`Rel_Cur_Date_3` date null,
`Work_type_3` varchar(20)null,`Salary_drawn_3` Varchar(50)null,
`Clg_Name_4` varchar(60)null,`Designation_4` varchar(25)null,`Joining_Date_4` date null,`Rel_Cur_Date_4` date null,
`Work_type_4` varchar(20)null,`Salary_drawn_4` Varchar(50)null,
`Clg_Name_5` varchar(60)null,`Designation_5` varchar(25)null,`Joining_Date_5` date null,`Rel_Cur_Date_5` date null,
`Work_type_5` varchar(20)null,`Salary_drawn_5` Varchar(50)null,
`Clg_Name_6` varchar(60)null,`Designation_6` varchar(25)null,`Joining_Date_6` date null,`Rel_Cur_Date_6` date null,
`Work_type_6` varchar(20)null,`Salary_drawn_6` Varchar(50)null,
`Clg_Name_7` varchar(60)null,`Designation_7` varchar(25)null,`Joining_Date_7` date null,`Rel_Cur_Date_7` date null,
`Work_type_7` varchar(20)null,`Salary_drawn_7` Varchar(50)null,



`Total_work_exp` varchar(20),`books_published` varchar(20) null,`Nof_Intl_papers` varchar(20) null,
`Nof_Ntl_papers` varchar(10)null,`Nof_Intl_journals` varchar(10)null,`Nof_Ntl_journals` varchar(10)null,
`Nof_PGpro_guided` varchar(10)null,`Nof_drstu_guided` varchar(10)null,


/*Industrial Experience*/

`Org_Name_1` varchar(50)null, `DesignationIN_1` varchar(25)null,`Nature_of_work_1` varchar(25)null,`Joining_DateIN_1` date null,
`Rel_Date_1` date null,
`Org_Name_2` varchar(50)null, `DesignationIN_2` varchar(25)null,`Nature_of_work_2` varchar(25)null,`Joining_DateIN_2` date null,
`Rel_Date_2` date null,





`Research_Exp` varchar(40) null,`Patents` varchar(70)null
)ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `Faculty_Basic_Details` (`ID`, `name`, `Gender`, `Position`, `Mailid`, `Qualification`, `Department`) VALUES
('20150001', 'Dr..Juliana', 'Female', 'Professor', 'a@licet.ac.in', 'M.Tech.,Ph.D', 'ECE'),
('20150002', 'Dr..Janani', 'Female','Assistant Prof.', 'b@licet.ac.in', 'M.Tech.,Ph.D', 'CSE'),
('20150003', 'Mrs.Shobana', 'Female',  'Associate Prof.', 'c@licet.ac.in', 'M.Tech.,MS', 'IT'),
('20150004', 'Mrs.Kavitha', 'Female', 'Associate Prof.', 'd@licet.ac.in', 'M.Tech.,MS', 'EEE'),
('20150005', 'Mr.Elgin Anto', 'Male', 'Assistant Prof.', 'e@licet.ac.in', 'M.Tech.,MBA', 'Mech'),
('20150006', 'Mr.Marshal Mano', 'Male', 'Professor', 'f@licet.ac.in', 'M.Tech.,MBA', 'S&H'),
('20150007', 'Mrs.Prabha', 'Female', 'Assistant Prof.', 'g@licet.ac.in', 'M.Tech.,MBA', 'Mech'),
('20150008', 'Ms.Anitha', 'Female', 'Associate Prof.', 'h@licet.ac.in', 'M.Tech.,MBA', 'CSE'),
('20150009', 'Dr.Josephine', 'Female', 'Assistant Prof.', 'i@licet.ac.in', 'M.Tech.,MBA', 'IT'),
('20150010', 'Mr.Mike Dison', 'Male', 'Professor', 'j@licet.ac.in', 'M.Tech.,MBA', 'EEE');


ALTER TABLE `Faculty_Basic_Details`
 ADD PRIMARY KEY (`ID`);
 CREATE TABLE IF NOT EXISTS users (
  id bigint NOT NULL PRIMARY KEY AUTO_INCREMENT,
  userid bigint NOT NULL,
  username varchar(100) NOT NULL,
  password varchar(100) NOT NULL,
  date timestamp NOT NULL 
  );

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`) VALUES
(8, 'IMG-5f8954bd209a92.78214246.jpg'),
(9, 'IMG-5f8954caa02539.76436861.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;