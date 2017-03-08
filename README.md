# php-mysql-scripts

All php scripts are for validating some dynamically entered user input. 
Some of these scripts cover important php concepts like authenticating user profile as well as loggin into the system with only a valid id and password.
Starting and destroying sessions and so on.
Thank you


#########################################################################################################################
#########################################################################################################################
Script named -   form, form2, form3, form4, form5, form6 are assocaited with the following instructions or criteria.



/*
Write a program that takes a postal code from a form and uses a regular expression to determine if it is a valid postal code. When the submit button is pressed, have your program determine if the postal code is valid. A valid postal code has the following format

X9X9X9

where X is any upper or lower case alphabetic character, and 9 is a digit from 0 to 9. If the code is not valid, your program should repopulate the field and print an error message next to the input field. If the code is valid, your program should print out the postal code and a message that it is valid, but not reprint the form. Note there are no spaces allowed, or leading or trailing blanks, so this is a fairly restrictive regular expression.
Modify the last program so that a valid postal code can optionally have a space in the middle X9X 9X9. Note that there is exactly one space in the middle.
Modify the last program so that a valid postal code can optionally have leading and trailing blanks.
Modify the previous program so that it validates a Seneca Subject code. Codes have the following format:

XXX999X
XXX999XX
XXX999XXX

where X is an uppercase alphabetic character, and 9 is a digit from 0-9. Leading and trailing blanks are allowed.
Modify the previous program to validate a telephone number in the form 999-999-9999 where the dashes are required and 9 is a numeric character. Leading and trailing blanks are allowed.
Modify the last program so that the phone number can be in any of these forms (but only these forms!):

999-999-9999 
999 999 9999 
999 999-9999
9999999999
999 9999999
(999) 999-9999
(999) 999 9999 

Where there is an embedded blank between digits, there may be zero or more embedded blanks, and all valid forms may have leading and trailing blanks. 
*/

#########################################################################################################################
#########################################################################################################################


File named deadlanguges is a text file used as a input
phpexer.php is the script that perform the following instructions using the deadlanguage file and mysql database.

/*
Using the text file Dead Languages

Write a script that will:

Pull the file into the script as a require function
Open the file for editing
Count the number of instances of the match " wh* " before editing with a regular expression 
Store the value in a MySQL table called editing and field called preedit
Using a Regular expression, change every instance in the file of a charcter string inside round brackets to "*wh*"
Record the number of instances changed in the same MySQL table in a field called postedit
Using fseek and ftell, change the same string from character string "wha" to "which" at character 782 to the end of the file
Record the number of instances changed in the MySQL table in a field called selection
Save the changed file from the seek and tell point in a new file

*/

#########################################################################################################################
#########################################################################################################################
