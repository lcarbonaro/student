<?php
require_once 'includes/rb.db.inc.php';

/* set up Smith family
$family = R::dispense('family');
$family->last_name = 'Smith';
$family->first_name = 'Mario';
$family->address_line_1 = '123 Main Street';
$family->address_line_2 = 'Apt. 5432';
$family->city = 'Brampton';
$family->postal_code = 'L6S 2J4';
$family->phone_number_1 = '(905) 123-4567';
$family->phone_number_2 = '(416) 147-2528';
$family->phone_number_3 = '';
$family->payment_method_id = '1';
$family->email_address_1 = 'bla@bla.com';
$family->email_address_2 = 'bla2@bla.com';
R::store($family);
*/

/* set up students in the Smith family
$family = R::findOne('family',' last_name=? ', ['Smith']);
echo('<pre>');
print_r($family);

$student = R::findOne('student',' last_name=? ', ['Doe']);
$student->active = true;
R::store($student);
echo('<pre>');
print_r($student);

$family->ownStudentList[] = $student;
R::store($family);
*/

/* set up two classes for Jazz course
$course = R::findOne('course',' course_name=? ', ['Jazz']);
$course->active = true;
R::store($course);

$class = R::dispense('class');
$class->day_of_week = 'Wed';
$class->time_of_day = '07:30 PM';
$class->start_date = '2014-07-16';
$class->end_date = '2014-09-24';
R::store($class);

$course->ownClassList[] = $class;
R::store($course);

$class = R::dispense('class');
$class->day_of_week = 'Sat';
$class->time_of_day = '10:30 AM';
$class->start_date = '2014-07-12';
$class->end_date = '2014-09-27';
R::store($class);

$course->ownClassList[] = $class;
R::store($course);
*/

/* set up one class for Ballroom course
$course = R::findOne('course',' course_name=? ', ['Ballroom']);
$course->active = true;

$class = R::dispense('class');
$class->day_of_week = 'Sat';
$class->time_of_day = '06:30 PM';
$class->start_date = '2014-07-05';
$class->end_date = '2014-09-20';
R::store($class);

$course->ownClassList[] = $class;
R::store($course);
*/

/* set up teacher for Jazz class(es)
$t = R::findOne('teacher',' last_name=? ', ['Swinger']);
$t->active = true;
R::store($t);

$course = R::findOne('course',' course_name=? ', ['Jazz']);

$classes = R::findAll('class',' course_id=? ', [$course->id]);

foreach ($classes as $class) {
    $class->teacher = $t;
    R::store($class);
}
*/

/* set up teacher for Ballroom class(es)
$t = R::findOne('teacher',' last_name=? ', ['Ball']);
$t->active = true;
R::store($t);

$course = R::findOne('course',' course_name=? ', ['Ballroom']);

$classes = R::findAll('class',' course_id=? ', [$course->id]);

foreach ($classes as $class) {
    $class->teacher = $t;
    R::store($class);
}
*/

/* set up rooms for classes
$r1 = R::dispense('room');
$r1->room_name = 'Room 1';
$r1->room_desc = 'The big room';
R::store($r1);

$r2 = R::dispense('room');
$r2->room_name = 'Room 2';
$r2->room_desc = 'The small room';
R::store($r2);

$course = R::findOne('course',' course_name=? ', ['Ballroom']);
$classes = R::findAll('class',' course_id=? ', [$course->id]);
foreach ($classes as $class) {
    $class->room = $r1;
    R::store($class);
}

$course = R::findOne('course',' course_name=? ', ['Jazz']);
$classes = R::findAll('class',' course_id=? ', [$course->id]);
foreach ($classes as $class) {
    $class->room = $r2;
    R::store($class);
}
*/

/* list classes (and teacher and room) for a course */
/*
$course = R::findOne('course',' course_name=? ', array('Ballroom'));
$classes = $course->ownClassList;
foreach ($classes as $class) {
    echo($class->day_of_week.' with '.$class->teacher->last_name.' at '.$class->time_of_day.' in '.$class->room->room_name.'<br/>');
}
*/

/* list kids in a family */
/*
$f = R::findOne('family',' first_name=? and last_name=? ', array('Mario','Smith')); // or: R::load( 'family', 1 ); 
$kids = $f->ownStudentList;
foreach ($kids as $s) {
    echo($s->first_name.' '.$s->last_name.'<br/>');
}
*/

// assign students to classes, and vice-versa
/*
$class = R::findOne('class',' course_id=? and day_of_week=? ', array(2,'Wed'));  // Jazz class on Wednesdays
$student = R::load('student',1);  // Joseph Smith
$student->sharedClassList[] = $class;
R::store($student);
$class = R::findOne('class',' course_id=? and day_of_week=? ', array(4,'Sat'));  // Ballroom class on Sat
$s1 = R::load('student',1);  // Joseph Smith
$s2 = R::load('student',2);  // Jane Doe
$class->sharedStudentList[] = $s1;
$class->sharedStudentList[] = $s2;
R::store($class);
*/

// list students by class
/*
$class = R::findOne('class',' course_id=? and day_of_week=? ', array(4,'Sat'));  // Ballroom class on Sat
echo($class->course->course_name.'<br/>');
$students = $class->sharedStudentList;
foreach ($students as $s) {
    echo($s->first_name.'<br/>');
}
echo('<br/>');
$class = R::findOne('class',' course_id=? and day_of_week=? ', array(2,'Wed'));  // Jazz class on Wednesdays
$students = $class->sharedStudentList;
echo($class->course->course_name.'<br/>');
foreach ($students as $s) {
    echo($s->first_name.'<br/>');
}
echo('<br/>');
echo('<br/>');
// list classes by student
$s1 = R::load('student',1);  // Joseph Smith
$classes = $s1->sharedClassList;
echo($s1->first_name.' '.$s1->last_name.'<br/>');
foreach ($classes as $c) {    
    echo($c->course->course_name.'<br/>');
}
$s1 = R::load('student',2);  // Jane
$classes = $s1->sharedClassList;
echo($s1->first_name.' '.$s1->last_name.'<br/>');
foreach ($classes as $c) {    
    echo($c->course->course_name.'<br/>');
}
*/


/*
$pm = R::dispense('paymethod');
$pm->method_name='Credit Card';
R::store($pm);
$pm = R::dispense('paymethod');
$pm->method_name='Debit Card';
R::store($pm);
$pm = R::dispense('paymethod');
$pm->method_name='Cash';
R::store($pm);
$pm = R::dispense('paymethod');
$pm->method_name='Cheque';
R::store($pm);
*/


// add registration date field
/*
$s1 = R::load('student',1);  // Joseph Smith
$s1->registration_date = '2014-07-20';
$s1->date_of_birth = '2010-01-12';
R::store($s1);
$s2 = R::load('student',2);  // Jane Doe
$s2->registration_date = '2014-07-20';
$s2->date_of_birth = '2001-12-21';
R::store($s2);
*/

// list class(es) by teacher
$t = R::load('teacher',4);
echo('<br/>'.$t->first_name.' '.$t->last_name.' teaches:<br/>');
$c = $t->ownClassList;
foreach($c as $ct) {
    echo($ct->course->course_name.' on '.$ct->day_of_week.' at '.$ct->time_of_day.'<br/>');
}
$t = R::load('teacher',3);
echo('<br/>'.$t->first_name.' '.$t->last_name.' teaches:<br/>');
$c = $t->ownClassList;
foreach($c as $ct) {
    echo($ct->course->course_name.' on '.$ct->day_of_week.' at '.$ct->time_of_day.'<br/>');
}

/*
$student = R::load('student',4);
$student->active = true;
$student->registration_date='2014-07-24';
$student->date_of_birth='2007-07-07';
R::store($student);
$family = R::load('family',2);
$family->ownStudentList[] = $student;
R::store($family);
*/

// list student(s) by family
$f = R::load('family',1);
echo('<br/>FamilyContact:'.$f->first_name.' '.$f->last_name.'::<br/>');
$ss = $f->ownStudentList;
foreach($ss as $s) {
    echo($s->first_name.' '.$s->last_name.' dob '.$s->date_of_birth.' reg '.$s->registration_date.'<br/>');    
}
$f = R::load('family',2);
echo('<br/>FamilyContact:'.$f->first_name.' '.$f->last_name.'::<br/>');
$ss = $f->ownStudentList;
foreach($ss as $s) {
    echo($s->first_name.' '.$s->last_name.' dob '.$s->date_of_birth.' reg '.$s->registration_date.'<br/>');    
}