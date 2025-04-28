CREATE DATABASE IF NOT EXISTS medicalisation;

USE medicalisation;

CREATE TABLE IF NOT EXISTS demandes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  evenement VARCHAR(255),
  date_evenement DATE,
  lieu VARCHAR(255),
  type_evenement VARCHAR(255),
  heure_debut TIME,
  heure_fin TIME,
  participants INT,
  public_cible VARCHAR(255),
  organisateur VARCHAR(255),
  responsable VARCHAR(255),
  telephone VARCHAR(20),
  email VARCHAR(255),
  dispositif VARCHAR(255),
  nombre_personnels INT,
  materiel_specifique TEXT,
  conditions_accueil TEXT,
  risques TEXT,
  historique TEXT,
  informations_complementaires TEXT,
  date_limite DATE,
  date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
