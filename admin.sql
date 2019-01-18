-- Table structure for table admin_user
--

DROP TABLE IF EXISTS admin_user;
CREATE TABLE admin_user (
  username varchar(32) NOT NULL,
  gender varchar(45) DEFAULT NULL,
  password varchar(256) NOT NULL,
  name varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table admin_user
--

INSERT INTO admin_user (username, gender, password, name) VALUES
('apple', 'male', '$2y$10$5R5QAN/bOSz0/ARxAzB/meUnjC9PVMHBoMbGp.O1PgXiOxQSarAZu', 'Apple TAN'),
('orange', 'female', '$2y$10$sxy4yfGsVZER6rylbaMaI.rGubMg/ituRBaJ3vY..eSRakPsS74VC', 'Orange TAN'),
('pear', 'male', '$2y$10$DpCQXba9AwA086Et7yAq.Ok9ihHy1uNvawvb3bvdTMw26nyS0JLae', 'Pear TAN');

-- Indexes for table admin_user
--
ALTER TABLE admin_user
  ADD PRIMARY KEY (username);