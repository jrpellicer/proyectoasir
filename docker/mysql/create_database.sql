-- Create the cars table
CREATE TABLE IF NOT EXISTS cars (
    license_plate VARCHAR(20) PRIMARY KEY,
    model VARCHAR(100),
    brand VARCHAR(100),
    color VARCHAR(7),
    mileage INT,
    manufacture_date DATE
);

-- Insert 20 car records with random data
INSERT INTO cars (license_plate, model, brand, color, mileage, manufacture_date) VALUES
    ('ABC1234', 'Model S', 'Tesla', '#FF5733', 15000, '2020-06-15'),
    ('XYZ5678', 'Mustang GT', 'Ford', '#4C4C4C', 30000, '2019-03-10'),
    ('QWE4321', 'Civic', 'Honda', '#1F77B4', 50000, '2018-07-22'),
    ('JKL9876', 'Corolla', 'Toyota', '#FF0000', 25000, '2021-05-30'),
    ('MNO1234', 'Model 3', 'Tesla', '#000000', 18000, '2021-01-10'),
    ('PQR5678', 'Challenger', 'Dodge', '#FFC300', 40000, '2017-08-15'),
    ('STU4321', 'A4', 'Audi', '#8B4513', 22000, '2020-02-25'),
    ('VWX9876', 'X5', 'BMW', '#FFD700', 35000, '2019-11-05'),
    ('YZA1234', 'F-150', 'Ford', '#D3D3D3', 27000, '2020-12-13'),
    ('BCD5678', 'Accord', 'Honda', '#90EE90', 60000, '2016-09-17'),
    ('EFG4321', 'Cayenne', 'Porsche', '#FF4500', 22000, '2021-03-10'),
    ('HIJ9876', 'WRX', 'Subaru', '#A52A2A', 45000, '2018-04-22'),
    ('KLM1234', 'Camry', 'Toyota', '#800080', 32000, '2020-06-08'),
    ('NOP5678', 'Sierra', 'Chevrolet', '#0000FF', 15000, '2021-07-11'),
    ('QRS4321', 'Ram 1500', 'Dodge', '#008000', 38000, '2019-10-04'),
    ('TUV9876', 'A6', 'Audi', '#000080', 29000, '2018-01-15'),
    ('WXY1234', 'M3', 'BMW', '#C71585', 26000, '2020-08-20'),
    ('ZAB5678', 'X6', 'BMW', '#F4A460', 21000, '2021-02-05'),
    ('CDE4321', 'Fusion', 'Ford', '#FF6347', 40000, '2017-12-30'),
    ('FGH9876', 'Outback', 'Subaru', '#2E8B57', 30000, '2019-09-18');



-- -- Crear la base de datos
-- CREATE DATABASE IF NOT EXISTS webasir;

-- -- Usar la base de datos creada
-- USE webasir;

-- -- Crear la tabla de clientes
-- CREATE TABLE IF NOT EXISTS clientes (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     razon_social VARCHAR(100),
--     descripcion VARCHAR(255),
--     email VARCHAR(100),
--     telefono VARCHAR(15)
-- );

-- -- Insertar 10 registros de clientes con datos aleatorios
-- INSERT INTO clientes (razon_social, descripcion, email, telefono) VALUES
--     ('ByteTech Solutions', 'Proveedor de servicios de TI', 'info@bytetechsolutions.com', '123-456-7890'),
--     ('CyberNet Innovations', 'Desarrollo de software especializado', 'info@cybernetinnovations.com', '456-789-0123'),
--     ('DataForge Systems', 'Sistemas de gestión de datos', 'info@dataforge.com', '789-012-3456'),
--     ('EagleEye Technologies', 'Soluciones de seguridad cibernética', 'info@eagleeyetech.com', '012-345-6789'),
--     ('FusionSoft Solutions', 'Desarrollo web y móvil', 'info@fusionsolutions.com', '345-678-9012'),
--     ('GeekGenius Enterprises', 'Soporte técnico y consultoría', 'info@geekgenius.com', '678-901-2345'),
--     ('InnovaCode Labs', 'Innovación en desarrollo de software', 'info@innovacode.com', '901-234-5678'),
--     ('NexTech Systems', 'Tecnologías emergentes y soluciones', 'info@nextechsys.com', '234-567-8901'),
--     ('QuantumTech Solutions', 'Sistemas informáticos cuánticos', 'info@quantumtech.com', '567-890-1234'),
--     ('TechSavvy Solutions', 'Servicios de consultoría en TI', 'info@techsavvy.com', '890-123-4567');
