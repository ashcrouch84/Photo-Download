This file is the download site for photos uploaded for the Magicial Christmas Adventure.
The code is written in php code and therefore you have to edit it with a text editor such as notepad or notepad++

The user (coming to Photos22.php or whatever you rename the file too) only has to enter a reference number and the php code will cycle search a 
predefined folder on a server (- see details further down on setting this up) and display which pictures it can find with that reference number.

The code also ensures the length of the digits is 5 currently although I believe this will have to change as FMX orders are closing to 6 digits. 
Please see below to change this.


To change the file to search
Go to line 340 - You will see a variable called $directory. You need to change the folder name inside the quotation marks. It will need an ! at the end.
eg. $directory = "myPictureFolder/";


To change length of digits
Go to line 348. 
Update this line of code to represent the amount of digits the search should be "if ($searchlength < 5 )"
