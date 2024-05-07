
CREATE DATABASE IF NOT EXISTS team_data;

USE team_data;

CREATE TABLE IF NOT EXISTS students (
    student_ID INT PRIMARY KEY,
    First_Name VARCHAR(50),
    Age INT CHECK (Age > 0),
    CGPA DECIMAL(3, 2) CHECK (CGPA >= 0 AND CGPA <= 4)
    
);

INSERT INTO students VALUES
(22010216, 'Mohamed Okasha', 20, 4.0),
(22010180, 'Fouad Ramzy', 20, 4.0),
(22010145, 'Abd Elrahman Hossam', 20, 4.0),
(22010346, 'Salma Fahmy', 20, 4.0),
(22010334, 'Rahma Ramadan',20, 4.0);
