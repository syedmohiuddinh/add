Internet Programming Lab Project:

Instructor: Dr.R.Shriram

Project Members: arif

Title: website for "Bilal and hari Blood donors"

Instructions to run project:

1.Download xampp php development environment. 
  (link: https://www.apachefriends.org/index.html)

2.Ensure that the MySql and Apache server are installed during xampp setup.

3.Open up htdocs in the xampp installation directory in you hard drive and
  copy all the files provided in the Gitub project.

4.Make sure to create the subdirectories as mentioned in the file names, and 
  place the necessary files within those subdirectories (img,imgthumb,inc,css)

5.Open up the xampp control panel and start the Apache server and Mysql.

6.You can configure the default browser for xampp by using the config. button
  in the control panel.

7.Type localhost/phpmyadmin in the url bar of your browser. This will open
  up your mysql database.

8.Create a db 'blood'. Create the tables, 'register', 'feedback'

9.Create the following columns in 'register': id, fName,contact,blood, city, hospital,gender, profession.

10.Enter the following records into 'register':

1	Bilal		0672736672		O+		chennai      royapettah male	student		
2	hari	        2829328389		b+		palani        Kaveyri	male    student			
3	razzak		9023238838	        O+		ooty	      Appolo    male    student		
4	arshad   	7237t62672		O+		chennai       GH    	male    student		
5	harish		3273873278		AB+		ooty	      Kaveyri	male    student		
6	abdullah	7327827837		AB-	        chennai	     royapettah male	student		
7	parvez		0287836367		O+		palani	      Appolo	male    student	
8	tanveer		3892787738		B-		ooty         royapettah male	student		
9	aravind		3223273823	        AB+	        ooty         royapettah male	student			
10	gautham 	8239923893		AB-		palani 	      Appolo	male    student		
11	Dinesh		2323223322		B-		palani	      Kaveyri	male    student		
12	Jaffer  	7287827278	        O+	        palani	     royapettah male	student	


11.The 'feedback' table has the columns: id,Name,Email,Message.

12.Fill the table with the details of the articles you wish to display and their corresponding link.

13.New rows can be inserted using the insert query or the insert button included in phpmyadmin.

14.In order to get the email function working, the following changes need to be made:

15.Open the php.ini file find [mail function] and change

	SMTP=smtp.gmail.com
	smtp_port=587
	sendmail_from = my-gmail-id@gmail.com
	sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"

16.Now Open C:\xampp\sendmail\sendmail.ini. Replace all the existing code in sendmail.ini with following code

	[sendmail]

	smtp_server=smtp.gmail.com
	smtp_port=587
	error_logfile=error.log
	debug_logfile=debug.log
	auth_username=my-gmail-id@gmail.com
	auth_password=my-gmail-password
	force_sender=my-gmail-id@gmail.com

17.Typing localhost/index.php should now open up the completed project.

18.All code is commented annotated for easier understanding.

Note: Internet connection is required for jquery functions to operate.

credits: Copyright ? 2015 Arif Productions!