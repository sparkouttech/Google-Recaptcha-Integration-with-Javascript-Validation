# Google-Recaptcha-Integration-with-Javascript-Validation
Google Recaptcha Integration with Validation

Initial Requirement
-------------------

1. To integrate google recaptcha, you must have gmail account.
2. Basic tech knowledge in php and javascript


Integration Steps
-----------------

Step 1: Login your gmail account

Step 2: Search "google recaptcha" in search engine and click first link that will redirect you to google recaptcha site

Step 3: Click "admin console" button in top right corner

Step 4: You can see registration form under the title "Register a new site"

Step 5: Under Label text field you can add your project name

Step 6: Select RecaptchaV2 and check "Checkbox" option

Step 7: Under "Domains" you can add your site IP. You can add n number of domains including localhost

Step 8: Check terms and services checkbox and click register

Step 9: After registration you can see "client side integration" and "server side integration"

Step 10: Click "client side integration" tab under you can see below

Paste this snippet before the closing </head> tag on your HTML template:

<script src="https://www.google.com/recaptcha/api.js"></script>

Paste this snippet at the end of the "form" where you want the reCAPTCHA widget to appear:
  
Google Recaptcha Block

Enough for frontend

For validation you can refer this files.
