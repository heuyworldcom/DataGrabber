--
-- Table structure for table `data_collection`
--

CREATE TABLE `data_collection` (
  `ID` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `SERVER` text CHARACTER SET utf8,
  `REQUEST` text CHARACTER SET utf8,
  `POST` text CHARACTER SET utf8,
  `GET` text CHARACTER SET utf8,
  `FILES` text CHARACTER SET utf8,
  `ENV` text CHARACTER SET utf8,
  `COOKIE` text CHARACTER SET utf8,
  `SESSION` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_collection`
--
ALTER TABLE `data_collection`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_collection`
--
ALTER TABLE `data_collection`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
