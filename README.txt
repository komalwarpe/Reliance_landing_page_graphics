PIIDM GRAPHIC DESIGN LANDING PAGE
=================================

STACK
-----
PHP + MySQL + HTML/CSS/JavaScript
Designed for XAMPP / cPanel PHP hosting.

FOLDER
------
index.php
config.php
book_now.php
download_syllabus.php
success.php
database.sql
css/style.css
js/script.js
assets/graphic-design-syllabus.pdf

XAMPP SETUP
-----------
1. Install/start Apache and MySQL in XAMPP.
2. Copy the "piidm_graphic_design_landing_page" folder into:
   C:\xampp\htdocs\
3. Open phpMyAdmin:
   http://localhost/phpmyadmin
4. Import database.sql.
5. Open config.php and confirm:
   database = piidm_leads
   user = root
   password = ''
6. Visit:
   http://localhost/piidm_graphic_design_landing_page/

FORM FLOW
---------
BOOK NOW:
- Saves name, email, phone and "Book Now" into the leads table.
- Redirects to success.php.

DOWNLOAD SYLLABUS:
- Opens the syllabus modal.
- Saves name, email, phone and "Download Syllabus" into the leads table.
- After successful database insert, the PDF is downloaded automatically.

IMPORTANT BEFORE LIVE HOSTING
-----------------------------
- Change database credentials in config.php.
- Replace assets/graphic-design-syllabus.pdf with the official syllabus PDF.
- Replace placeholder social links (#) with real URLs.
- Replace the text logo with the official institute logo if required.
- Use HTTPS on the live domain.
- Consider adding CAPTCHA/rate limiting to public lead forms.
