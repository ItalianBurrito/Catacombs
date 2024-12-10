# Use the official MySQL image as a base
FROM mysql:8.0

#Add the database schema
ADD /schema.sql/ /docker-entrypoint-initdb.d/

# Expose port 3306 to allow connections to the database
EXPOSE 3306

# Start the MySQL server when the container is run
CMD ["mysqld"]
