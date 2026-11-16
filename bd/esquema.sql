DROP TABLE IF EXISTS utilizadores;

CREATE TABLE utilizadores (
  id            INTEGER PRIMARY KEY AUTOINCREMENT,
  nome          TEXT    NOT NULL,
  email         TEXT    NOT NULL UNIQUE,
  palavra_passe TEXT    NOT NULL,
  tipo_conta    TEXT    NOT NULL CHECK (tipo_conta IN ('estudante', 'senhorio')),
  criado_em     TEXT    NOT NULL DEFAULT (datetime('now'))
);