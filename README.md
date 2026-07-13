# JobTrackr 🗂️

A full-stack job application tracker built with Laravel 13 and Tailwind CSS. Track every application from first submission to final offer — all in one place.

🔗 **Live Demo:** https://jobtrackr-production-4da5.up.railway.app (currently under maintenance)

Use this website instead: https://jobtracker-7cb9.onrender.com/login

---

## Features

| Feature | Description |
|---------|-------------|
| 🔐 Authentication | Register, login, logout via Laravel Breeze |
| 📋 Job Tracking | Add, edit, delete job applications |
| 🏷️ Status Badges | Applied, Interview, Offer, Rejected — color coded |
| 👤 User Ownership | Each user sees only their own applications |
| 🔌 REST API | JSON endpoints protected with Laravel Sanctum |
| 📱 Responsive | Clean UI built with Tailwind CSS v4 |
| ☁️ Deployed | Live on Railway with persistent MySQL database |

---

## Tech Stack

| Layer | Technology |
|-------|------------|
| Backend | Laravel 13 (PHP 8.3) |
| Frontend | Blade Templates, Tailwind CSS v4, Vite |
| Auth | Laravel Breeze, Laravel Sanctum |
| Database | MySQL (production), SQLite (local dev) |
| Deployment | Railway |

---

## Getting Started

### Prerequisites

- PHP 8.3+
- Composer 2.x
- Node.js & npm

### Local Setup

```bash
# 1. Clone the repository
git clone https://github.com/JOYCEWONG-2025/jobtrackr.git
cd jobtrackr

# 2. Install dependencies
composer install
npm install

# 3. Environment setup
cp .env.example .env
php artisan key:generate

# 4. Database setup (SQLite for local)
touch database/database.sqlite
php artisan migrate

# 5. Start development servers
php artisan serve       # runs on http://localhost:8000
npm run dev             # runs Vite in a separate terminal
```

---

## API Reference

All endpoints require authentication via Bearer token.

```
Authorization: Bearer {your_sanctum_token}
```

| Method | Endpoint | Description |
|--------|----------|-------------|
| `GET` | `/api/jobs` | List all jobs for authenticated user |
| `POST` | `/api/jobs` | Create a new job application |
| `GET` | `/api/jobs/{id}` | Get a specific job |
| `PUT` | `/api/jobs/{id}` | Update a job application |
| `DELETE` | `/api/jobs/{id}` | Delete a job application |

---

## Project Structure

```
jobtrackr/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── JobController.php        # Web CRUD controller
│   │       └── Api/
│   │           └── JobController.php    # REST API controller
│   └── Models/
│       ├── Job.php                      # Job model
│       └── User.php                     # User model (hasMany jobs)
├── database/
│   └── migrations/                      # Database schema
├── resources/
│   └── views/
│       └── jobs/
│           ├── index.blade.php          # Applications list
│           ├── create.blade.php         # Add application form
│           └── edit.blade.php           # Edit application form
└── routes/
    ├── web.php                          # Web routes (auth protected)
    └── api.php                          # API routes (Sanctum protected)
```

---

## Database Schema

**job_applications**

| Column | Type | Description |
|--------|------|-------------|
| `id` | integer | Primary key |
| `user_id` | integer | Foreign key to users |
| `company` | string | Company name |
| `role` | string | Job title |
| `location` | string | Job location |
| `status` | enum | applied / interview / offer / rejected |
| `job_url` | string | Link to job posting |
| `notes` | text | Personal notes |
| `applied_at` | date | Date applied |
| `follow_up_at` | date | Follow-up reminder date |
| `created_at` | timestamp | Auto-generated |
| `updated_at` | timestamp | Auto-generated |

---


**Joyce Wong**
GitHub: [@JOYCEWONG-2025](https://github.com/JOYCEWONG-2025)
