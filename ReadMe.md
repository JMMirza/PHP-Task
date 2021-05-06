Hey! in this project i have created backend of banking system which is in core PHP, in this project you will find out 3 folders:
1. config: which contains all my API's which is written in core PHP.
2. Database: contain my database which is in mysql.
3. Postman: contains my postman collection and documentation of every api.

In config folder there are 9 files that I have created. There are 3 extra files i.e. database.php, login.php, operations.php. In "database.php" file i have create connection of db and in other files i have included this file.
In "login.php" file there is just an echo statement in which i have shown the user info. In "operations.php" file there is operations related to the creating a user and included in signup file.

*********************************************************************************************************************************************************************************
************************************************************************* CREATING A USER ***************************************************************************************
*********************************************************************************************************************************************************************************
I have created a file as "signup.php", in this file i have included operations.php file. In operations.php file i have checked the fields input and check user is already exist or not. So you will find 3 functions there and you will
get to know about these functions. Basically when user run the signup file the object of operation class is created and the data that is entered by the user is send to the operation file and these inputs are checked on this.
If you want to signup you have to use POST method and then you have to send First name as "first_name", Last name as "Last_name", Email as "email", and then Password as "password" these are key entries and you have to fill all fields.

Bodyform-data:

first_name: Ahmed
last_name: Ali
email: ahmed@gmail.com
password: zxcvbn

*********************************************************************************************************************************************************************************
**************************************************************************** USER LOGIN *****************************************************************************************
*********************************************************************************************************************************************************************************

I have created a file as "user_auth.php", which consist of all operations related to the user info and if the user info is correct it will head you to the other file named as "login.php" which is used to show user info.
if you want to login, you just have to use POST method and send username and password as key entries and enter their values through body form data and you will be logged in.

Bodyform-data:

username: ali@gmail.com
password: zxcvbn


*********************************************************************************************************************************************************************************
******************************************************************************* ADD FUNDS ***************************************************************************************
*********************************************************************************************************************************************************************************

I have created a file as "add_funds.php", which consist of all operations related to the add funds in the user account and if the user is signed in it will add funds in your account and head you to the other file named as "login.php"
which is used to show user info.
If you want to add funds first you have to login adnd after that use POST method to add amount in your account . You have to send amount as "amount" these are key entries and its value

Bodyform-data:

amount: 390


*********************************************************************************************************************************************************************************
******************************************************************************** FUNDS TRANSFER *********************************************************************************
*********************************************************************************************************************************************************************************

I have created a file as "funds_transfer.php", which consist of all operations related to the funds transfer and if the user is signed in and entered the correct email of reciever it will head you to the other file named
as "login.php" which is used to show user info.

If you want to transfer amount to other user you have to first login your account and using POST method you have to send Email of reciever as "email", and then Amount as "amount" these are key entries and you have to fill all fields

Bodyform-data:

email: janmuhammad@gmail.com0
amount: 20

*********************************************************************************************************************************************************************************
*************************************************************************** FORGET PASSWORD *************************************************************************************
*********************************************************************************************************************************************************************************

I have created a file as "forget_pass.php", which consist of all operations related to the forget password and if the user enter correct email it will give you new password.
if you have forgotten your password do not worry through POST method you have to send email as key entries and enter their values we will receive new password.

Bodyform-data:

email: jan@gmail.com


*********************************************************************************************************************************************************************************
**************************************************************************** LOG OUT ********************************************************************************************
*********************************************************************************************************************************************************************************

I have created a file as "logut.php", which consist of all operations related to the logout of the user and it it will destroy session and loggout the current user.

Using GET method you have to send request you will be logged out.
