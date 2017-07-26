// table: location
// attributes: `city`, `area`
// primary key (city, area)
// INSERT INTO `location` (`city`, `area`) VALUES ('', '');

INSERT INTO `location` (`city`, `area`) VALUES ('dhaka', 'merul');
INSERT INTO `location` (`city`, `area`) VALUES ('dhaka', 'rampura');
INSERT INTO `location` (`city`, `area`) VALUES ('dhaka', 'aftabnagar');
INSERT INTO `location` (`city`, `area`) VALUES ('dhaka', 'uttora');



// table: user_info
// attributes: `name`, `email`, `password`, `city`, `area`,`contact_no` ,`gender`
// primary key (email)
// INSERT INTO `user_info` (`name`, `email`, `password`, `city`, `area`, `contact_no`, `gender`) VALUES ( 'sakib', 'a@gmail.com', '111', 'dhaka', 'merul', '01712345678', 'male');

INSERT INTO `user_info` (`name`, `email`, `password`, `city`, `area`, `contact_no`, `gender`) VALUES ( 'sakib', 'a@gmail.com', '111', 'dhaka', 'merul', '01712345678', 'male');
INSERT INTO `user_info` (`name`, `email`, `password`, `city`, `area`, `contact_no`, `gender`) VALUES ( 'sakib', 'b@gmail.com', '111', 'dhaka', 'merul', '01712345678', 'male');
INSERT INTO `user_info` (`name`, `email`, `password`, `city`, `area`, `contact_no`, `gender`) VALUES ( 'sakib', 'c@gmail.com', '111', 'dhaka', 'merul', '01712345678', 'male');
INSERT INTO `user_info` (`name`, `email`, `password`, `city`, `area`, `contact_no`, `gender`) VALUES ( 'sakib', 'd@gmail.com', '111', 'dhaka', 'merul', '01712345678', 'male');




// table: book_info
// attributes: `book_name`,`writer` ,`edition`,`category`
// primary key (book_name, writer, edition)
// INSERT INTO `book_info` (`book_name`, `writer`, `edition`, `category`) VALUES ('algorithms', 'cormen', '4th', 'cse');

INSERT INTO `book_info` (`book_name`, `writer`, `edition`, `category`) VALUES ('algorithms', 'cormen', '4th', 'cse');
INSERT INTO `book_info` (`book_name`, `writer`, `edition`, `category`) VALUES ('algorithms', 'cormen', '3rd', 'cse');
INSERT INTO `book_info` (`book_name`, `writer`, `edition`, `category`) VALUES ('algorithms', 'cormen', '2nd', 'cse');
INSERT INTO `book_info` (`book_name`, `writer`, `edition`, `category`) VALUES ('algorithms', 'cormen', '1st', 'cse');






// table: user_activity
// attributes: `email`, `book_name`, `writer`, `edition`,  `quantity`, `category`, `purpose`, `time`, `city`, `area`
// primary key (book_name, writer, edition, quantity)
// INSERT INTO `user_activity` (`email`, `book_name`, `writer`, `edition`,  `quantity`, `category`, `purpose`, `time`, `city`, `area`) VALUES ( 'a@gmail.com',  'algorithms', 'cormen', '4th', 2, 'cse', 'sell', '', 'dhaka', 'merul');

INSERT INTO `user_activity` (`email`, `book_name`, `writer`, `edition`,  `quantity`, `category`, `purpose`, `time`, `city`, `area`) VALUES ( 'a@gmail.com',  'algorithms', 'cormen', '4th', 2, 'cse', 'sell', '', 'dhaka', 'merul');
INSERT INTO `user_activity` (`email`, `book_name`, `writer`, `edition`,  `quantity`, `category`, `purpose`, `time`, `city`, `area`) VALUES ( 'a@gmail.com',  'algorithms', 'cormen', '3rd', 2, 'cse', 'sell', '', 'dhaka', 'merul');
INSERT INTO `user_activity` (`email`, `book_name`, `writer`, `edition`,  `quantity`, `category`, `purpose`, `time`, `city`, `area`) VALUES ( 'a@gmail.com',  'algorithms', 'cormen', '2nd', 2, 'cse', 'sell', '', 'dhaka', 'merul');
INSERT INTO `user_activity` (`email`, `book_name`, `writer`, `edition`,  `quantity`, `category`, `purpose`, `time`, `city`, `area`) VALUES ( 'a@gmail.com',  'algorithms', 'cormen', '1st', 2, 'cse', 'sell', '', 'dhaka', 'merul');








//Note: suggestion for inserting time data... INSERT INTO `test` (`time`, `time2`) VALUES ('2017-03-01 00:00:00', '2017-03-01');
