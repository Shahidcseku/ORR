1.	 Introduction:
1.1.	Purpose of the document
This document is the definitive specification of the user requirements for web application to be developed under the Software Engineering Project “Online Result and Registration System for Universities”.
This document is intended to be read by
a.	All responsible for the management of the development and members of the Developer Unit.
b.	Users, user representatives, and other interested parties and in Educational Institutions.
c.	Contractors and supervisors who undertake all or parts of the development.

1.2.	Overview
Online Result & Registration System is to simplify the work of student registration & result preparation process. It will also help to prepare some formal documents like Grade Sheet, Remuneration on question preparation and answer sheet examination, question moderation etc.
This is a project capable of managing multiple disciplines of multiple universities.

1.3.	References
1.3.1.	Applicable Documents

SL	Title	Author(s)	Date
01	Sample Database SQL file
Version 3.0 	Sarfaraz Newaz
Shahidul Islam
Swajan Golder	Jan, 2017
02	Examination Bills Form	Controller of the examination, KU	Sept,  2017
03	Statement on Remuneration	CSE Discipline, KU	Sept, 2017

1.3.2.	Reference Documents

SL	Title	Author(s)	Date
01	Online Result & Registration System Project (Language: C#)	Shahidul Islam
Swajan Golder
Sudipto Das
W. Shuvo	Jan, 2017

2.	 Functional Requirements

2.1.	User
•	 Mark entry to assigned session
•	 Registration
•	Login
•	Profile maintenance
•	Change password
2.2.	Student
•	Term registration
•	Course registration
•	Registration status
•	See previous registered terms courses
•	See result after published
•	Download Grade sheet
2.3.	Teacher
•	Mark entry to his courses
•	Download remuneration && other reports
•	Course registration approve by course coordinator
•	Course registration approve by head

2.4.	Moderator
•	 Mark entry to assigned session
•	 Prepare reports

2.5.	Admin
SL	Function	C	R	U	D	A	T
1.		University										
2.		Department										
3.		Assign Dept.										
4.		Degree										
5.		Session											
6.		Year										
7.		Term										
8.		Course										
9.		Section											
10.		Term offer											
11.		Syllabus										
12.		Course offer											
13.		Assign teacher										
14.		Marks										
15.		Mark Section									
16.		Attendance									
17.		Role											
18.		Role Grant								
19.		Phone										
20.		User												
21.		Course Registration											
22.		Moderator											
23.		Examination bill									
24.		Statement on remuneration									
25.								
26.								
[C=create, R=read, U=update, D=delete, A=approve, T=terminate]

3.	Constraints

3.1.	Registration:
•	 Student must register credit amount between term syllabus limit (Ex. 15-25)
•	 Retake course must take first
•	 Can’t register a course without passing its prerequisite course
•	 Thesis should be continued & different form other courses
•	 Terms must register sequentially (Ex. 1-1, 1-2)
•	 Course can be registered before the term is locked or taken down

•	 Initialize retake courses marks automatically with course registration
•	 Course registration must approve through 2 steps (Generally Course coordinator & Head)
3.2.	Marks Entry:
•	 A course teacher can entry his own course marks.
•	 Tabulator is allowed to mark entry within an assigned session or term
•	 Previous C.A. marks remain if student do not apply for Re-Assessment
•	 Continued thesis mark will be denoted by ‘x’ (means continued) hence will not count in TGPA calculation
•	 Thesis will count in YGPA along with its previous part
•	 Retake/ Re-Retake courses will be degraded to one grade lower
•	
3.3.	Result:
•	Students can see & Download only their own marks
•	 Teacher can see marks of his own courses
•	 Course Coordinator is allowed to see that particular term marks
•	 Head, Moderator/ Tabulator can see & modify marks before finalized
3.4.	Users:
•	 Head is generally the admin of his department
•	 Users will not activate unless admin approve
•	 Association with an university is mandatory for Students and Teachers but not for Admin, Moderator or Tabulator
•	 User can change general profile page but special information’s can’t be changed. For example Student Id, Department can’t be changed. In that case user must have to resubmit profile to be approved by that particular department administrator
