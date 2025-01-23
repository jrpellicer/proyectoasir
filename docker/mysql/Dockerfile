ARG mysql_version

FROM mysql:${mysql_version}

COPY create_database.sql /

# Canviar per els parametres del dockerfile
# RUN mysql -u asirweb -p'qwe_123' webasir < create_database.sql

COPY create_database.sql /docker-entrypoint-initdb.d/