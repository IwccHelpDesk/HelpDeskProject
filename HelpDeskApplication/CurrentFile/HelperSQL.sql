# Formatted time
SELECT DATE_FORMAT(NOW(), "%W, %m-%d-%y, %l:%i %p") as 'Date';

# Inserting users into the Users table, 'DEFAULT' is for the autoincrement portion of the database.
INSERT INTO Users (userIndexId, userName, firstName, lastName, UserRole)
VALUES (DEFAULT, '', '', '', ''),

# Inserting setting values into the Settings table to help controll some items for future use.
INSERT INTO Settings (settingName, settingValue)
VALUES ('', '');

# Inserting users first time stamp into the database for the ReportingTable
INSERT INTO ReportingTable (userId, startTime, endTime)
SELECT userIndexId, NOW(), NULL
FROM Users 
WHERE userIndexId = 1;

#Updating the users endTime when they go to clock out or a shift
UPDATE ReportingTable
SET endTime = NOW()
WHERE userId = 1;

# Deleting the users time entries
DELETE FROM ReportingTable
WHERE userId = 1;