CREATE TABLE medico (
  id_medico INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_medico VARCHAR(255) NULL,
  crm_medico VARCHAR(10) NULL,
  especialidade_medico VARCHAR(20) NULL,
  PRIMARY KEY(id_medico)
);

CREATE TABLE paciente (
  id_paciente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_paciente VARCHAR(255) NULL,
  cpf_paciente VARCHAR(11) NULL,
  dt_nasc_paciente DATE NULL,
  genero_paciente CHAR(1) NULL,
  fone_paciente VARCHAR(20) NULL,
  endereco_paciente VARCHAR(40) NULL,
  cidade_paciente VARCHAR(20) NULL,
  uf_paciente CHAR(2) NULL,
  PRIMARY KEY(id_paciente)
);

CREATE TABLE prontuario (
  id_prontuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  medico_id_medico INTEGER UNSIGNED NOT NULL,
  paciente_id_paciente INTEGER UNSIGNED NOT NULL,
  obs_pronturario TEXT NULL,
  data_prontuario DATETIME NULL,
  PRIMARY KEY(id_prontuario),
  INDEX prontuario_FKIndex1(paciente_id_paciente),
  INDEX prontuario_FKIndex2(medico_id_medico)
);


