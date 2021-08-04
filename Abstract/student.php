<h3>Student</h3>
<form method="POST">
    <p>Surname: <input type="text", name="stSurname"></p>
    <p>Course: <input type="number", name="course"></p>
    <p>GradeBook: <input type="number", name="stGradeBook"></p>
    <input type="submit", value="Accept">
    <input type="button" onclick="history.go(-1);" value="Back to the Menu">
</form>
<?php
if(isset($_POST['stSurname']) && $_POST['course'] && $_POST['stGradeBook'])
{
    $stSurname=htmlentities($_POST['stSurname']);
    $course=htmlentities($_POST['course']);
    $stGradeBook=htmlentities($_POST['stGradeBook']);
    if(preg_match('/^[A-Za-z]*$/', $stSurname) && is_numeric($course) && is_numeric($stGradeBook))
    {
        abstract class Person
        {
            public $stSurname;
            public $stGradeBook;

            function __construct($stSurname, $stGradeBook)
            {
                $this->stSurname = $stSurname;
                $this->stGradeBook = $stGradeBook;
            }
            function print(){}
        }
        class Student extends Person
        {
            public $course;
            function __construct($stSurname, $stGradeBook, $course)
            {
                parent::__construct($stSurname, $stGradeBook);
                $this->course=$course;
            }
            function print()
            {
                parent::print(); // TODO: Change the autogenerated stub
                echo "Student - $this->stSurname, Course - $this->course, Gradebook - $this->stGradeBook</br>";
            }
        }
        $student = new Student ($stSurname, $stGradeBook, $course);
        $student->print();
    }
    else
    {
        echo "wrong symbols, pls try again";
    }
}
