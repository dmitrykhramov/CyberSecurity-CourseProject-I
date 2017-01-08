# MovieGallery - CyberSecurity - Course Project I

##Setup Instructions

1. Download and install XAMPP for the platform you are using 
https://www.apachefriends.org/ru/download.html
(I installed for Windows version 5.6)

2. After following all instructions without any changes XAMPP will be installed to the C/xampp

3. Run the XAMPP controll panel and start Apache and MySQL.
Ports 80 and 3306 should be free. If other services or applications uses it, than turn it off.

4. Go to the localhost page in your browser. If everything is working you will see XAMPP index page.

5. Browse to the localhost/phpmyadmin. Don't set any passwords if it asks and leave username as a root. Press import button in the navigation panel at the top and select the path to the file moviegallery.sql which is in the folder with the project which you download from github. The database will be created, you will see it's name on the left panel.

6. Go to the C:\xampp\htdocs folder (path can be different depending on your system)

7. Delete everything from htdocs folder and paste all the files and directories from the downloaded project into the htdocs folder.

8. Important! Projects folders, .htaccess and index.php should be copied directly to the htdocs folder.

9. If you have done everything correct, you can browse to the localhost and there will be working website.

You can login as admin or user(username-password) or register new user:
Admin - adminadmin
User - useruser

If you will have any problems with setting up the XAMPP and project you can send me email: dmitrii.hramov@mail.ru
