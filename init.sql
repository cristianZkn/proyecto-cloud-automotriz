CREATE TABLE IF NOT EXISTS vehiculos (
    id SERIAL PRIMARY KEY,
    marca VARCHAR(50) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    anio INT NOT NULL,
    precio DECIMAL(10,2) NOT NULL
);

-- Insertar un par de autos de prueba
INSERT INTO vehiculos (marca, modelo, anio, precio) VALUES ('Toyota', 'Yaris', 2022, 12500000.00);
INSERT INTO vehiculos (marca, modelo, anio, precio) VALUES ('Suzuki', 'Swift', 2023, 10500000.00);