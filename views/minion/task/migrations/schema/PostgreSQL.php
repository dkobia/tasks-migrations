CREATE TABLE "<?php echo $table_name; ?>" (
  "timestamp" character varying(14) NOT NULL,
  "description" character varying(100) NOT NULL,
  "group" character varying(100) NOT NULL,
  "applied" smallint DEFAULT 0,
  CONSTRAINT migrations_pkey PRIMARY KEY("timestamp", "group")
)
WITHOUT OIDS;
DROP INDEX IF EXISTS "MIGRATION_ID" CASCADE;
CREATE UNIQUE INDEX "MIGRATION_ID" ON "<?php echo $table_name; ?>" ("timestamp", "description");