DROP TABLE IF EXISTS `#__helloworld_hello`;

-- --------------------------------------------------------

--
-- Table structure for table `#__helloworld_hello`
--

CREATE TABLE `#__helloworld_hello` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `detail` varchar(255) NOT NULL
) 
	ENGINE=InnoDB 
	DEFAULT CHARSET=utf8;

--
-- Dumping data for table `#__helloworld_hello`
--

INSERT INTO `#__helloworld_hello` (`id`, `name`, `detail`) VALUES
(1, 'YATE Form', 'Youth and Adults Training for Employment');

--
-- Indexes for table `#__helloworld_hello`
--
ALTER TABLE `#__helloworld_hello`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `#__helloworld_hello`
--
ALTER TABLE `#__helloworld_hello`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

-- --------------------------------------------------------

--
-- Table structure for table `#__helloworld_submission`
--

DROP TABLE IF EXISTS `#__helloworld_submission`;
CREATE TABLE IF NOT EXISTS `#__helloworld_submission` (
  `id` int(11) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `midname` varchar(40) NOT NULL,
  `address` varchar(45) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(8) NOT NULL,
  `nid` varchar(12) NOT NULL,
  `otherid` varchar(12) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `homenum` varchar(16) NOT NULL,
  `mobilenum` varchar(16) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mother` varchar(60) NOT NULL,
  `father` varchar(60) NOT NULL,
  `guardian` varchar(60) NOT NULL,
  `addressnok` varchar(45) NOT NULL,
  `nokhomenum` varchar(16) NOT NULL,
  `nokmobnum` varchar(16) NOT NULL,
  `nokemail` varchar(40) NOT NULL,
  `educlevel` varchar(20) NOT NULL,
  `numccslc` int(3) NOT NULL,
  `numcsec` int(3) NOT NULL,
  `empstatus` varchar(20) NOT NULL,
  `unemptime` varchar(20) NOT NULL,
  `challenges` varchar(50) NOT NULL,
  `childyesno` varchar(5) NOT NULL,
  `childnum` varchar(15) NOT NULL,
  `childage` varchar(16) NOT NULL,
  `programchoice` varchar(60) NOT NULL,
  `publicassist` varchar(5) NOT NULL,
  `otherinstitute` varchar(30) NOT NULL,
  `otherprogramme` varchar(40) NOT NULL,
  `date` date DEFAULT NULL
) 
	ENGINE=InnoDB 
	DEFAULT CHARSET=utf8;
	
ALTER TABLE `#__helloworld_submission`
  ADD PRIMARY KEY (`id`);
  
  
-- AUTO_INCREMENT for table `#__helloworld_submission`
--
ALTER TABLE `#__helloworld_submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
