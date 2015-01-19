-- modified tables

ALTER TABLE `course` 
CHANGE COLUMN `course_name` `course_name` VARCHAR(120) NULL DEFAULT NULL ;

ALTER TABLE `course` 
CHANGE COLUMN `class_size_limit` `class_size_limit` TINYINT(3) UNSIGNED NULL DEFAULT 0 ;

ALTER TABLE `course` 
ADD COLUMN `course_type` ENUM('Comp','Rec') NOT NULL DEFAULT 'Comp' AFTER `course_desc`;

-- modified files

-- views/course.html
-- views/class.html
-- css/style.css
-- index.html
-- views/student.html
-- js/notify.min.js       (new - for notifications, for example on saving)
-- views/family.html
-- views/teacher.html
-- views/room.html
-- backend/course/saveCourse.php
-- backend/course/getCourseById.php

