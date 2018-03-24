
--
-- Database: `bookbucket`
--

-- --------------------------------------------------------
-- TABLE: 1
-- CREATE: order from annonimous users
CREATE TABLE `order` (
  `book_name` varchar(40) NOT NULL,
  `author` varchar(30) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `cell_number` varchar(30) NOT NULL
);

-- INSERT: False data at order table
INSERT INTO `order` (`book_name`, `author`, `quantity`, `cell_number`) VALUES
('Python', 'Robert', '3', '01723487223'),
('Java The Complete Reference', 'Schildt', '4', '238476109234'),
('Bangladesh Studies', 'Luas Reik', '4', '0172348722389'),
('Gobesonay Hate Khori', 'Ragib Hasan', '22', '01711111111'),
('Operating System Concepts', 'Shilbert', '2', '01744444444444'),
('Economics', 'Robert Paul', '3', '01711111111'),
('Linux Server', 'Torvas', '6', '01711111111'),
('Maketing Management', 'Kotlar', '3', '01711111111'),
('Linux Introduction', 'Torvas', '10', '0177181234'),
('Cryptography and network security ', 'Atul khate', '1', '7389926929 '),
('Cyber security  ', 'Nina godbole ', '1', '7389926929 '),
('Quantitative Aptitude', 'R. S. AGGARWAL', '1', '7748846559'),
('Harry Porter', 'J.K Rowling', '12', '0168');

-- --------------------------------------------------------
-- TABLE: 2
-- CREATE: user for registration
CREATE TABLE `user` (
  `first_name` varchar(30) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `area` varchar(25) DEFAULT NULL,
  `gender` varchar(10) NOT NULL
);

-- ADD CONSTRAINT: PRIMARY KEY
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

-- INSERT: false data
INSERT INTO `user` (`first_name`, `surname`, `email`, `password`, `contact_no`, `city`, `area`, `gender`) VALUES
('user', 'user', 'user@gmail.com', '123456', '3223453', 'Dhaka', 'Dhanmondi', 'male'),
('Sakib', 'Rahman', 'sakib@gmail.com', '123456', '01722222222', 'Dhaka', 'Aftabnagar', 'male');

-- --------------------------------------------------------
-- TABLE: 3
-- CREATE: book
CREATE TABLE `book` (
  `isbn` varchar(40) NOT NULL,
  `book_name` varchar(40) NOT NULL,
  `writer` varchar(30) NOT NULL,
  `edition` varchar(10) NOT NULL,
  `category` varchar(30) NOT NULL
);

-- INSERT: false data
INSERT INTO `book` (`isbn`, `book_name`, `writer`, `edition`, `category`) VALUES
('1', 'algorithms', 'cormen', '4th', 'cse'),
('2', 'data structure', 'cormen', '4th', 'cse'),
('3', 'Java', 'Schildt', '4th', 'cse'),
('4', 'Architecture', 'Stalling', '3th', 'cse');

-- --------------------------------------------------------
-- TABLE: 4
-- CREATE: post
CREATE TABLE `post` (
  `postID` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `purpose` varchar(10)
);

-- ADD CONSTRAINT: PRIMARY KEY
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`);

-- MODIFY CONSTRAINT: AUTO_INCREMENT
ALTER TABLE `post`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

-- add COLUMN
ALTER TABLE post
ADD COLUMN price VARCHAR(5);

ALTER TABLE post
ADD COLUMN location VARCHAR(10);

ALTER TABLE post
  ADD COLUMN postTime datetime;

  -- INSERT: False data
  INSERT INTO `post` (`postID`, `description`, `purpose`, `price`, `location`, `postTime`) VALUES
  (2, 'Operating system concepts by peter. New copy price 300 tk and see rent price for 2 months.', 'rent', '50', 'Dhanmondi', '2018-03-24 09:03:39'),
  (1, 'ttttytyty ghghghgh', NULL, NULL, NULL, 'Unknown');

-- UPDATE COLUMN
-- price
-- UPDATE post SET price=1250 WHERE postID = 2;

-- location
-- UPDATE post SET location='Aftabnagar' WHERE postID = 1;

-- postTime
-- UPDATE post SET postTime='2013-05-01 00:22:35' WHERE postID = 1;
