CREATE TABLE users (
  user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_name VARCHAR(50) NOT NULL,
  user_num INT NOT NULL,
  user_email VARCHAR(100) NOT NULL,
  user_password VARCHAR(255) NOT NULL,
  user_school VARCHAR(100) NOT NULL
);


CREATE TABLE admin (
  admin_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  admin_name VARCHAR(50) NOT NULL,
  admin_num INT NOT NULL,
  admin_email VARCHAR(100) NOT NULL,
  admin_password VARCHAR(255) NOT NULL
);



CREATE TABLE events (
  event_id INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
  event_name VARCHAR(100) NOT NULL,
  event_description VARCHAR(255) NOT NULL,
  event_date DATE NOT NULL,
  event_img VARCHAR(255) NULL,
  waktu_mulai TIME NOT NULL,
  waktu_selesai TIME NOT NULL
);
-- alter table events add column event_img varchar(255) after waktu_mulai;

CREATE TABLE register (
  register_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  register_acc BOOLEAN NOT NULL,
  register_date DATE NOT NULL,
  user_id INT NOT NULL,
  event_id INT NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(user_id),
  FOREIGN KEY (event_id) REFERENCES events(event_id)
);

CREATE TABLE questions (
question_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
event_id INT NOT NULL,
question TEXT NOT NULL,
question_answer CHAR(1) NOT NULL,
a VARCHAR(255) NULL,
b VARCHAR(255) NULL,
c VARCHAR(255) NULL,
d VARCHAR(255) NULL,
e VARCHAR(255) NULL,
FOREIGN KEY (event_id) REFERENCES events(event_id)
);

CREATE TABLE result (
result_id INT AUTO_INCREMENT PRIMARY KEY,
score DECIMAL(5,2),
grade CHAR(1),
user_id INT,
event_id INT,
FOREIGN KEY (user_id) REFERENCES users(user_id),
FOREIGN KEY (event_id) REFERENCES events(event_id)
);
