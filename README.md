# BeCode PHP Hackers Poulette (tidjee-dev)

## Description

This repository contains my `Hackers Poulette` project made during my Junior Web Dev training @BeCode.

## Stack Used

- **Docker**: To simplify development and deployment.
- **PHP**: For backend programming.
- **MySQL**: As the database server.
- **PHPMyAdmin**: To manage databases visually.
- **Adminer**: As an alternative database management tool.
- **Apache**: As the web server.

### Composer Dependencies

- **rakit/validation**: For form validation.

## Prerequisites

- Docker installed on your machine. [Download Docker](https://www.docker.com/get-started)
- Basic understanding of PHP and MySQL (helpful but not mandatory).

## Getting Started

1. **Clone the Repository**:

   ```bash
   git clone https://github.com/tidjee-dev/bcd-hackers_poulette.git
   cd bcd-hackers_poulette
   ```

2. **Run Docker Containers**:

   ```bash
   docker compose up -d
   ```

3. **Access the Application**:

   - Open your browser and navigate to:
     - [http://localhost](http://localhost) for the application.
     - [http://localhost:8081](http://localhost:8081) for PHPMyAdmin.
     - [http://localhost:8082](http://localhost:8082) for Adminer.

4. **Stop Docker Containers**:

   ```bash
   docker compose down
   ```
