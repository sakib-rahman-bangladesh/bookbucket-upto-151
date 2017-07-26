CREATE TABLE `location` (
  `city` varchar(20),
  `area` varchar(25),
  constraint user_info_pk primary key (city, area)
);

CREATE TABLE `user_info` (
  `name` varchar(40) NOT NULL,
  `email` varchar(40),
  `password` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `city` varchar(20),
  `area` varchar(25),
  `gender` varchar(10) NOT NULL,
  constraint user_info_pk primary key (email),
  constraint user_info_fk1 foreign key (city, area) references location(city, area)
);

CREATE TABLE `book_info` (
  `book_name` varchar(40) NOT NULL,
  `writer` varchar(30) NOT NULL,
  `edition` varchar(10) NOT NULL,
  `category` varchar(30) NOT NULL,
  constraint book_info_pk primary key (book_name, writer, edition)
);

CREATE TABLE `user_activity` (
  `email` varchar(30),

  `book_name` varchar(40),
  `writer` varchar(30),
  `edition` varchar(10),
  `quantity` int(11),

  `category` varchar(30) NOT NULL,
  `purpose` varchar(10) NOT NULL,
  `time` datetime,

  `city` varchar(20),
  `area` varchar(25),

  constraint user_activity_pk primary key (book_name, writer, edition, quantity),
  constraint user_activity_fk1 foreign key (email) references user_info(email),
  constraint user_activity_fk2 foreign key (book_name, writer, edition) references book_info(book_name, writer, edition),
  constraint user_activity_fk3 foreign key (city, area) references location(city, area)
);
