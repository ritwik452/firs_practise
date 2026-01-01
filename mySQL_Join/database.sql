CREATE DATABASE ecommerce_db;
USE ecommerce_db;

CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE,
    city VARCHAR(100)
);

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    order_date DATE,
    total_amount DECIMAL(10,2),
    FOREIGN KEY (customer_id) REFERENCES customers(id)
        ON DELETE CASCADE
);
-- ******************************** 
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(100) NOT NULL
);
-- ******************************** 
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);
-- ******************************** 
CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    qty INT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id)
        ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Dummy Data

INSERT INTO categories (category_name) VALUES
('Electronics'),
('Clothing'),
('Books'),
('Home & Kitchen'),
('Sports');

INSERT INTO products (name, category_id) VALUES
('Smartphone', 1),
('Laptop', 1),
('Headphones', 1),

('T-Shirt', 2),
('Jeans', 2),
('Jacket', 2),

('Novel - Harry Potter', 3),
('Science Textbook', 3),

('Cookware Set', 4),
('Electric Kettle', 4),

('Football', 5),
('Cricket Bat', 5);

INSERT INTO customers (name, email, city) VALUES
('Rohit Sharma', 'rohit@gmail.com', 'Mumbai'),
('Priya Verma', 'priya@gmail.com', 'Delhi'),
('Amit Singh', 'amit@gmail.com', 'Bangalore'),
('Sneha Kapoor', 'sneha@gmail.com', 'Kolkata'),
('Vikram Patel', 'vikram@gmail.com', 'Ahmedabad');

INSERT INTO orders (customer_id, order_date, total_amount) VALUES
(1, '2025-01-10', 2500.00),
(1, '2025-01-15', 1800.00),

(2, '2025-02-01', 3200.00),

(3, '2025-02-20', 1500.00),
(3, '2025-03-05', 5000.00),

(4, '2025-03-15', 700.00);


INSERT INTO order_items (order_id, product_id, qty, price) VALUES
(1, 1, 1, 2000.00),
(1, 3, 1, 500.00);
INSERT INTO order_items (order_id, product_id, qty, price) VALUES
(2, 4, 2, 900.00);
INSERT INTO order_items (order_id, product_id, qty, price) VALUES
(3, 2, 1, 3200.00);
INSERT INTO order_items (order_id, product_id, qty, price) VALUES
(4, 7, 3, 500.00);
INSERT INTO order_items (order_id, product_id, qty, price) VALUES
(5, 12, 1, 5000.00);
INSERT INTO order_items (order_id, product_id, qty, price) VALUES
(6, 11, 1, 700.00);
