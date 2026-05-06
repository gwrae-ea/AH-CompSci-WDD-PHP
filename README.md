# AH CompSci WDD PHP - Student Starter Guide (Codespaces)

Use this guide at the start of a learning topic to set up your own PHP + MySQL workspace in GitHub Codespaces.

## 1. Create your own copy on GitHub

1. Open this repository on GitHub.
2. Click **Fork** to create your own copy.
3. Open your forked repository.

## 2. Open your fork in Codespaces

1. In your fork, click **Code**.
2. Select the **Codespaces** tab.
3. Click **Create codespace on main**.
4. Wait for the codespace to start and open in the browser.

Wait for the Codespaces window to fully load before continuing.

## 3. Install useful VS Code extensions

Install these extensions inside Codespaces:

1. **PHP Intelephense** (better PHP code hints and error checking)
2. **SQLTools** (optional, useful for inspecting databases)
3. **PDF Viewer** (if your class materials include PDF booklets)

## 4. Run the environment setup script

From the project root, run:

```bash
./scripts/setup_env.sh
```

This installs the required packages for PHP + MySQL work in Codespaces.

## 5. Check PHP and MySQL support

In the terminal, run:

```bash
/usr/bin/php -v
/usr/bin/php -m | grep -Ei "pdo|mysql"
```

You should see `pdo_mysql` in the output.

## 6. Create your `.env` file

Database code reads credentials from a `.env` file in the project root.

Start by copying the template:

```bash
cp .env.example .env
```

Then update `.env` with your real values:

```env
# Comments starting with # are allowed in .env files
DB_HOST=your-host-name
DB_PORT=3306
DB_USER=your-username
DB_PASS=your-password
DB_NAME=your-database-name
```

Ask your teacher for the correct values if you are using a shared school database.

**Note:** Your `.env` file (with passwords redacted if needed) should be included as part of evidence when demonstrating database connection code, so reviewers can see how credentials are configured.

## 7. Check `.gitignore`

Your `.gitignore` should include at least:

```gitignore
.env
vendor/
```

This keeps secrets and downloaded dependencies out of git.

## 8. Add PHP dependencies (if your class uses Composer)

If your project includes `composer.json`, run:

```bash
composer install
```

## 9. Test your setup

This repository includes `db.php` and `db_test.php` as a starter connection example.

Run:

```bash
/usr/bin/php db_test.php
```

If setup is correct, you should see a successful connection message and the MySQL server version.

## 10. Run your PHP pages locally in Codespaces

From the project root, start PHP's built-in web server:

```bash
/usr/bin/php -S 0.0.0.0:8000
```

Then open the forwarded port URL in your browser to view your pages.

## 11. Daily workflow in Codespaces

1. Open Codespaces.
2. Pull latest changes from your fork.
3. Start the local server with `/usr/bin/php -S 0.0.0.0:8000` when needed.
4. Commit and push your work regularly.

## 12. Lesson tasks

- Site 1 task sheet: [Site 1 - Hello World/Task 1.md](Site%201%20-%20Hello%20World/Task%201.md)
- Site 2 task sheet: [Site 2 - Comments and Syntax/Task 2.md](Site%202%20-%20Comments%20and%20Syntax/Task%202.md)
- Site 3 task sheet: [Site 3 - Variables and Data Types/Task 3.md](Site%203%20-%20Variables%20and%20Data%20Types/Task%203.md)
- Site 4 task sheet: [Site 4 - Comparison and Logical Operators/Task 4.md](Site%204%20-%20Comparison%20and%20Logical%20Operators/Task%204.md)
- Site 5 task sheet: [Site 5 - Assignment Operators/Task 5.md](Site%205%20-%20Assignment%20Operators/Task%205.md)
- Site 6 task sheet: [Site 6 - Iteration Constructs/Task 6.md](Site%206%20-%20Iteration%20Constructs/Task%206.md)
- Site 7 task sheet: [Site 7 - While Loop Statement/Task 7.md](Site%207%20-%20While%20Loop%20Statement/Task%207.md)
- Site 8 task sheet: [Site 8 - Do While Loop Statement/Task 8.md](Site%208%20-%20Do%20While%20Loop%20Statement/Task%208.md)
- Site 9 task sheet: [Site 9 - Foreach Loop Statement/Task 9.md](Site%209%20-%20Foreach%20Loop%20Statement/Task%209.md)
- Site 10 task sheet: [Site 10 - Break and Continue/Task 10.md](Site%2010%20-%20Break%20and%20Continue/Task%2010.md)
- Site 11 task sheet: [Site 11 - Numeric Array/Task 11.md](Site%2011%20-%20Numeric%20Array/Task%2011.md)
- Site 12 task sheet: [Site 12 - Associative Array/Task 12.md](Site%2012%20-%20Associative%20Array/Task%2012.md)
- Site 13 task sheet: [Site 13 - Multidimensional Arrays/Task 13.md](Site%2013%20-%20Multidimensional%20Arrays/Task%2013.md)
- Site 14 task sheet: [Site 14 - Media Queries and External CSS/Task 14.md](Site%2014%20-%20Media%20Queries%20and%20External%20CSS/Task%2014.md)
- Site 15 task sheet: [Site 15 - Database Connection Testing/Task 15.md](Site%2015%20-%20Database%20Connection%20Testing/Task%2015.md)
- Site 16 task sheet: [Site 16 - Select Queries with Filters and Sorting/Task 16.md](Site%2016%20-%20Select%20Queries%20with%20Filters%20and%20Sorting/Task%2016.md)
- Site 17 task sheet: [Site 17 - Form GET and Display/Task 17.md](Site%2017%20-%20Form%20GET%20and%20Display/Task%2017.md)
- Site 18 task sheet: [Site 18 - Form POST and Display/Task 18.md](Site%2018%20-%20Form%20POST%20and%20Display/Task%2018.md)