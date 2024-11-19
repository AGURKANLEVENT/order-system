# order-system
Laravel tabanlı bir Sipariş Yönetim Sistemi. Müşteri, ürün ve sipariş yönetimi için API uç noktaları sağlar. Bu proje, temel CRUD işlemlerini ve ilişkisel veritabanı yönetimini içerir.
## İçindekiler

- Kurulum
- Yapılandırma
- Veritabanı Ayarları
- Uygulamayı Çalıştırma
- API Uç Noktaları
- Örnek Veriler
- Lisans

## Kurulum

1. Depoyu klonlayın:
    ```bash
    git clone https://github.com/kullaniciadi/siparis-yonetim-sistemi.git
    cd siparis-yonetim-sistemi
    ```

2. Bağımlılıkları yükleyin:
    ```bash
    composer install
    ```

## Yapılandırma

1. `.env.example` dosyasını `.env` olarak kopyalayın:
    ```bash
    cp .env.example .env
    ```

2. `.env` dosyasını veritabanı bilgileriyle güncelleyin:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=order_db
    DB_USERNAME=root
    DB_PASSWORD=sifre
    ```

3. Uygulama anahtarını oluşturun:
    ```bash
    php artisan key:generate
    ```

## Veritabanı Ayarları

1. Veritabanı migrasyonlarını çalıştırın:
    ```bash
    php artisan migrate
    ```

2. Örnek verilerle veritabanını doldurun:
    ```bash
    php artisan db:seed
    ```

## Uygulamayı Çalıştırma

1. Geliştirme sunucusunu başlatın:
    ```bash
    php artisan serve
    ```

2. Uygulama `http://localhost:8000` adresinde kullanılabilir olacaktır.

## API Uç Noktaları

### Yeni Sipariş Oluşturma

- **URL:** `/api/orders`
- **Metot:** `POST`
- **İstek Gövdesi:**
    ```json
    {
        "customer_id": 1,
        "product_id": 2,
        "address": "İstanbul, Kadıköy",
        "price": 8000
    }
    ```
- **Yanıt:**
    ```json
    {
        "id": 1,
        "customer_id": 1,
        "product_id": 2,
        "address": "İstanbul, Kadıköy",
        "price": 8000,
        "created_at": "2024-11-18T20:00:00.000000Z",
        "updated_at": "2024-11-18T20:00:00.000000Z"
    }
    ```

### Tüm Siparişleri Getirme

- **URL:** `/api/orders`
- **Metot:** `GET`
- **Yanıt:**
    ```json
    [
        {
            "order_id": 1,
            "customer_name": "Ahmet",
            "customer_surname": "Yılmaz",
            "product_name": "Akıllı Telefon",
            "product_price": 8000,
            "address": "İstanbul, Kadıköy",
            "order_price": 8000,
            "created_at": "2024-11-18T20:00:00.000000Z"
        },
        ...
    ]
    ```

## Örnek Veriler

### Müşteriler
- Ahmet Yılmaz
- Gurkan Levent
- Velı Celık

### Ürünler
- Laptop: 15000 TL, 10 adet
- Akıllı Telefon: 8000 TL, 25 adet
- Tablet: 5000 TL, 15 adet
- Akıllı Saat: 2000 TL, 30 adet
- Bluetooth Kulaklık: 500 TL, 50 adet

## Lisans

Bu proje MIT Lisansı ile lisanslanmıştır. Detaylar için LICENSE dosyasına bakın.
