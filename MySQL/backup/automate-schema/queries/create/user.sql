CREATE TABLE `user` (
  `first_name` varchar(30) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(40),
  `password` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `city` varchar(20),
  `area` varchar(25),
  `gender` varchar(10) NOT NULL,
  constraint user_info_pk primary key (email)
);
