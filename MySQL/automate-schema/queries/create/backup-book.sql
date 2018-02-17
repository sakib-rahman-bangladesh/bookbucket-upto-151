CREATE TABLE `book` (
  `isbn` varchar(40) NOT NULL,
  `book_name` varchar(40) NOT NULL,
  `writer` varchar(30) NOT NULL,
  `edition` varchar(10) NOT NULL,
  `category` varchar(30) NOT NULL,
  constraint book_pk primary key (isbn)
);
