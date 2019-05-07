Generic login:
    - User will enter in their school username.
    - The username will be checked to make sure they are in the database.
    - If they are in the database, it will check the role and send the user to the admin side or the student side.
    - It will also check if that user has logged in already or not.
    - If the user is an Admin then it will send that user to the admin side.

Student side:
    - Once the user is pass the generic login they will be prompted to login or logout.
    - If the user has already logged in then only the logout button should be clickable.
    - If the user has yet to login then the clock in button should be the only clickable button.
    - In either case of colcking in and out, A span element should be filled with thetime that the user clocks in and out to show the time they clocked in and out.
    - In either case, an email should be sent to christie that the user has logged in and has logged out.


Admin side:
    - The Admin will be prompted to enter a password that will grant them access to admin controls.
    - If the password is incorrect then there should be an alert that the password is wrong and should be allowed to retry the password.

