-- init_db.sql
CREATE DATABASE IF NOT EXISTS justicedesk;
USE justicedesk;

-- users table
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  role ENUM('user','lawyer') NOT NULL DEFAULT 'user'
);

-- messages table
CREATE TABLE IF NOT EXISTS messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  sender_id INT NOT NULL,
  receiver_id INT NOT NULL,
  message TEXT NOT NULL,
  timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (sender_id) REFERENCES users(id) ON DELETE CASCADE,
  FOREIGN KEY (receiver_id) REFERENCES users(id) ON DELETE CASCADE
);

-- sample users (password = password123)
INSERT INTO users (name, email, password, role) VALUES
('Test User', 'user1@example.com', '$2y$10$u1G1fU7o3hQeYbSxgq5mieH0YhxHkM0r6aQeGz7bQq1h8gD8yZr2G', 'user'),
('Test User2', 'user2@example.com', '$2y$10$u1G1fU7o3hQeYbSxgq5mieH0YhxHkM0r6aQeGz7bQq1h8gD8yZr2G', 'user'),
('Adv. Priya Sharma', 'lawyer1@example.com', '$2y$10$u1G1fU7o3hQeYbSxgq5mieH0YhxHkM0r6aQeGz7bQq1h8gD8yZr2G', 'lawyer');

-- Note: the sample hashed password above corresponds to "password123" using PHP's password_hash with default algo.
