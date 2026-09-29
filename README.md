## Personal Task Manager

**Project Code:** WST21-PM-2026-SF  
**Student Name:**  MANATAD, CLAUDINE C.
**Course & Year:**  BSIT-2
**Database Used:** SQLite

### Features

- Add Task
- View Tasks
- Edit Task
- Delete Task
- Update Status

## Screenshots and Usage

The following steps show the complete task-management workflow in Personal Task Manager.

### 1. Open the mission board

![Mission board dashboard](screenshots/1.png)

1. Open the application at `/tasks` (or visit the application root, which redirects to the task board).
2. Review the dashboard summary cards for total missions, tasks in progress, and completed tasks.
3. Use the **Add a mission** panel to create a new task.

### 2. Add a mission

![Add a mission form](screenshots/2.png)

1. Enter a required **Mission title**.
2. Add an optional briefing and target date to provide more context.
3. Select the initial status: **Pending** or **Completed**.
4. Select **Deploy mission** to save the task.
5. Confirm that the new mission appears on the mission board and that the statistics update.

### 3. Manage a mission from the board

![Mission board task actions](screenshots/3.png)

1. Find the task in the **Mission board** list.
2. Select the check button to switch the task between **Pending** and **Completed**.
3. Select **EDIT** to change the mission details.
4. Select **DEL** and confirm the prompt to remove the mission permanently.

### 4. Edit mission details

![Edit mission form](screenshots/4.png)

1. Update the mission title, briefing, target date, or status.
2. Select **Save changes** to apply the updates.
3. Select **Cancel** or **BACK TO BOARD** to return without saving.
4. Verify the updated mission and statistics on the mission board.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
