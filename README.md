![Logo](public/img/brand-logo-new-3.JPG)

# Pojok Lelang

Pojok Lelang merupakan website lelang online yang memungkinkan para penggemar menawar barang untuk dikoleksi.

## Screenshots

![App Screenshot](public/img/Landing%20Page.jpg)

## Features

- Log In
- Log Out
- Register
- Pendataan Barang
- Buka dan Tutup Lelang
- Penawaran
- Generate Laporan

## Run Locally

Clone the project

```bash
  git clone https://github.com/denzfarid/Pojok-Lelang.git
```

Go to the project directory

```bash
  cd Pojok-Lelang
```

```bash
docker-compose build
docker-compose up -d
docker exec -it Pojok-Lelang bash
```

Install dependencies

```bash
  composer install
```

Copy .env.example file

```bash
  cp .env.example .env
```

Create database and connect in .env file

```bash
  DB_DATABASE=pojok_lelang
```

Run migration

```bash
  php artisan migrate --seed
```

Start the server

```bash
  php artisan key:generate
  php artisan serve
```
