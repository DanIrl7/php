# Ticket Management App

A simple ticket management application built with Twig for templating.

## Features

- Landing page with call-to-action buttons
- Authentication system (login/signup) with form validation
- Dashboard with ticket statistics
- Full CRUD functionality for ticket management
- Responsive design across all devices
- Consistent styling and layout

## Technologies Used

- PHP
- Twig templating engine
- HTML/CSS/JavaScript
- LocalStorage for data persistence

## Setup Instructions

1. Clone this repository
2. Install dependencies using Composer:
   ```bash
   composer install
   ```
3. Start a local development server (e.g., using PHP's built-in server):
   ```bash
   php -S localhost:8000 -t src
   ```
4. Open your browser to `http://localhost:8000`

## Application Structure

```
src/
├── index.php            # Main entry point
├── templates/           # Twig templates
│   ├── index.html.twig  # Landing page
│   ├── auth/            # Authentication pages
│   │   ├── login.html.twig
│   │   └── signup.html.twig
│   ├── dashboard.html.twig
│   └── tickets.html.twig
composer.json            # PHP dependencies
```

## Authentication

- Uses localStorage to simulate session management
- Session key: `ticketapp_session`
- Protected routes: `/dashboard`, `/tickets`

## Example Credentials

For testing purposes, you can use:
- Email: user@example.com
- Password: password123

## Accessibility

The application follows accessibility best practices:
- Semantic HTML structure
- Proper contrast ratios
- Focus states for interactive elements
- ARIA attributes where appropriate

## Known Issues

- Data is stored in localStorage and will be cleared when the browser cache is cleared
- No server-side validation (this is a frontend simulation)

## License

This project is open source and available under the MIT License.