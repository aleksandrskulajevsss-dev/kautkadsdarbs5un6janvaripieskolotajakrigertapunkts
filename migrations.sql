CREATE DATABASE IF NOT EXISTS blog
CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE blog;

CREATE TABLE IF NOT EXISTS posts (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    content VARCHAR(5200) NOT NULL
);

INSERT INTO posts (content) VALUES
('Lieldienas nāk'),
('Otrais bloga ieraksts');
