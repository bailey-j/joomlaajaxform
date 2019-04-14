--DROP TABLE IF EXISTS `#__helloworld_hello`;

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
	DEFAULT CHARSET=utf8
	DEFAULT COLLATE=utf8mb4_unicode_ci;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(40) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `midname` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) 
	ENGINE=InnoDB 
	AUTO_INCREMENT=18 
	DEFAULT CHARSET=utf8 
	DEFAULT COLLATE=utf8mb4_unicode_ci;
