Normalisation- 
* It is database design technique that reduces data redundancy.

1st Normal Form
Rule-  
* Table should not contain any multivalued attribute.
* Data type of attribute should not change.


Rollno     Name     Course        
  1        Sam       C/C++
  2        Harsh     Java
  3        David     C/DBMS 


  1NF
1st way  
  Primary Key= Rollno + Course
Rollno    Name       Course
  1       Sam          C
  1       Sam          C++
  2       Harsh        Java
  3       David        C 
  3       David        DBMS

2nd way
Rollno   Name    Course1   Course2
  1      Sam       C         C++
  2      Harsh     Java      Null
  3      David     C         DBMS

 3rd way
  
  Rollno    Name               Rollno        Course
    1       Sam                 1             C
    2       Harsh               1             C++
    3       David               2             Java
                                3              C
                                3             DBMS  


2nd Normal Form
* A table is in 2nd Normal Form if it's in 1NF.
* 1NF + every non-key attribute depend on the entire primary key of the relation.
* No partial dependency in table. Eg- AB  AB->C  not A->C

 

Score Table
* one student can opt for more than one subject
* one subject can be opted by more than one student
                                              delete column teacher
score_id   student_id   subject_id    marks      teacher
  1           1             1          82        Mr.Java 
  2           1             2          77        Mr. C++
  3           2             1          85        Mr.Java 
  4           2             2          82        Mr. C++
  5           2             4          95        Mr.Python 

*  Primary key is score id but student_id and subject_id together makes more meaningful primary key.
* Teacher name only depends on subject_id. this is partial dependency.

subject table                                   
subject_id    subject_name     teacher                      teacher_id        teacher_name
  1              JAVA          Mr.Java                          1                Mr.Java
  2              C++           Mr.C++          OR               2                Mr.C++
  3              C#            Mr.C#                            3                Mr.C# 
  4              PYthon        Mr.Python                        4                Mr.Python   



  Third Normal Form 
 * A table should be in 2NF
 * No transitive dependency
 Transitive dependency- when one column depends upon another column which is not primary key.
 Issue- Non primary key can take null values

 If:  A → B and  B → C  
Then: A → C


scoreid      studentid     subid      marks  examname totalmarks
101             201           1        16     mid         20
102             201           2         60    final       100 


scoreid studentid     subid    marks    examid
 

   exam_id          exam_name           totalmarks
     1                 mid                 20
     2                 final              100

BCNF (Boyce code normal form)
* It should be in 3rd normal form 
* For any dependency A->B, A should be a super key(means non-prime attribute should not derive prime attribute)

student_id     subject       professor          
  101            Java         P.java 
  101             c++         P.c++ 
  102             Java        P.java2 
  103             php         P.php 
  104            Java         P.java

student_id and subject together form primary key 
student_id,subject   =>  professor
 professor           =>  subject


 Solution
 student_id    professor_id                                       
 profesr_id      professor_name     subject  






  Fourth Normal Form 
  * It should be BCNF
  * No multivalued dependency
  
  Eg- varun has 3 mobile no and 3 email id
varun    m1  e1 
varun    m1  e2
varun    m1  e3
varun    m2  e1 
varun    m2  e2
varun    m2  e3
varun    m3  e1 
varun    m3  e2
varun    m3  e3

solution 
varun    m1  e1             varun   e1                          
varun    m1  e2             varun   e2 
varun    m1  e3             varun   e3