JusticeDesk - Multi-User Chat (PHP + MySQL) + AI Assistant Mockup
--------------------------------------------------

What's inside:
- init_db.sql          -> SQL to create database, tables and sample users
- db.php               -> Database connection
- register.php         -> User & Lawyer registration (simple)
- login.php            -> Login page (sets session)
- logout.php           -> Logout
- chat.php             -> Main chat UI (sidebar with users/lawyers + chat window)
- get_users.php        -> Returns list of users/lawyers for sidebar
- send_message.php     -> Insert message into DB
- get_messages.php     -> Fetch conversation between session user and selected user
- ai_chat.php          -> AI legal assistant mockup (place to integrate OpenAI)
- .htaccess (optional) -> Basic restful redirect (not required)

How to use:
1. Place folder in your Apache htdocs (e.g., XAMPP: htdocs/justicedesk_multi_ai)
2. Import init_db.sql into MySQL (phpMyAdmin or CLI)
3. Update db.php with your DB credentials
4. Open in browser: http://localhost/justicedesk_multi_ai/login.php
5. Login with sample users (see init_db.sql) or register new accounts.

Notes:
- This uses polling (AJAX setInterval) to mimic near-real-time chat.
- ai_chat.php currently returns a canned response. Replace with OpenAI API call as needed.
