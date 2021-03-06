CREATE TABLE arrangement (id BIGINT AUTO_INCREMENT, number BIGINT, shape VARCHAR(255), seats BIGINT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE booking (id BIGINT AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), email VARCHAR(255), phone VARCHAR(255), seats BIGINT, arrival DATETIME, no_show TINYINT(1) DEFAULT '0', PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE company (id BIGINT AUTO_INCREMENT, name VARCHAR(255), description VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE company_to_arrangement (company_id BIGINT, table_id BIGINT, PRIMARY KEY(company_id, table_id)) ENGINE = INNODB;
