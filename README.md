README

Requirements:
  - Laravel 8
  - owen-it/laravel-auditing" : 13

Audit Viewer is used to review and analyze audit trail.

1)Install via composer:
  - composer require sunshift/laravel-audit-viewer

2)Add Service Provider to config/app.php in providers section
  - Sunshift\Audits\AuditsViewerProvider::class,
 
3)Go to http://myapp/audits-viewer
