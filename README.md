# Cafe HRM — Hệ thống Quản lý Nhân sự Quán Cà Phê

Ứng dụng web quản lý nhân sự dành cho chuỗi quán cà phê, xây dựng bằng Laravel 9. Hệ thống hỗ trợ quản lý nhân viên, ca làm việc, chấm công, tính lương, tuyển dụng và nội dung website.

Nhóm thực hiện: Nhóm 12
---

## Tính năng

- Quản lý nhân viên: thêm, sửa, xoá, xem danh sách
- Quản lý ca làm việc và phân công ca cho từng nhân viên
- Chấm công theo thời gian thực (check-in / check-out)
- Theo dõi và tính lương nhân viên
- Quản lý chức vụ và chi nhánh
- Quy trình tuyển dụng: nhận hồ sơ, duyệt hoặc từ chối ứng viên
- Quản lý tin tức và bài viết trên trang chủ
- Phân quyền theo vai trò: Admin, Manager, Employee
- Dashboard tổng quan hệ thống

---

## Công nghệ sử dụng

- **Backend:** Laravel 9, PHP >= 8.0.2
- **Frontend:** Blade Template, Bootstrap
- **Database:** MySQL
- **Authentication:** Laravel Session Authentication
- **Packages:** Laravel Sanctum, Guzzle HTTP

---

## Phân quyền

| Vai trò | Quyền hạn |
|---|---|
| Admin | Toàn quyền hệ thống: quản lý tài khoản, bài viết, nhân viên và tất cả các module |
| Manager | Quản lý nhân viên, duyệt hồ sơ tuyển dụng, xem lương và chấm công |
| Employee | Xem thông tin cá nhân, thực hiện check-in / check-out |

---

## Cài đặt

### Yêu cầu

- PHP >= 8.0.2
- Composer
- MySQL
- Node.js & NPM

### Các bước thực hiện

Clone repository:

```bash
git clone https://github.com/huuson1011/Cafe_HRM
cd cafe_hrm
```

Cài đặt dependencies:

```bash
composer install
```

Tạo file cấu hình môi trường:

```bash
cp .env.example .env
php artisan key:generate
```

Cấu hình database trong file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cafe_hrm
DB_USERNAME=root
DB_PASSWORD=your_password
```

Chạy migration:

```bash
php artisan migrate
```

Khởi động server:

```bash
php artisan serve
```

Truy cập tại: `http://localhost:8000`

