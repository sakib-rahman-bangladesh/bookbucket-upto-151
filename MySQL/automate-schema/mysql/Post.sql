--
-- Table structure for table `Post`
--
CREATE TABLE post (
  postID int(11) NOT NULL,
  description varchar(255) NOT NULL
);

--
-- Indexes for table `post`
--
ALTER TABLE post
  ADD PRIMARY KEY (postID);

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE post
  MODIFY postID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- ADD COLUMN
ALTER TABLE post
ADD COLUMN goal VARCHAR(5);

--
-- Constraints for table `post`
--
-- ALTER TABLE post
-- ADD CONSTRAINT FK1_answerHolder FOREIGN KEY(answerHolder) REFERENCES user(email);
