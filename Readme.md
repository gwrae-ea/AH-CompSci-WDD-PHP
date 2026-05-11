# Course Setup Guide (Fork + Environment)

Use this file for first-time setup.

## 1. Fork the repository

1. Open the class repository on GitHub.
2. Click **Fork**.
3. Open your fork.

## 2. Open in Codespaces

1. In your fork, click **Code**.
2. Open the **Codespaces** tab.
3. Click **Create codespace on main**.

## 3. Install required extensions

Install these in the Codespace:

1. PHP Intelephense
2. SQLTools
3. PDF Viewer (if your class resources use PDF files)

## 4. Set up the project environment

From the project root:

```bash
./scripts/setup_env.sh
```

## 5. Verify PHP and MySQL modules

```bash
/usr/bin/php -v
/usr/bin/php -m | grep -Ei "pdo|mysql"
```

Expected: output includes `pdo_mysql`.

## 6. Create your `.env` file

```bash
cp .env.example .env
```

Then add your real values:

```env
DB_HOST=your-host-name
DB_PORT=3306
DB_USER=your-username
DB_PASS=your-password
DB_NAME=your-database-name
```

## 7. Test database connection

```bash
/usr/bin/php db_test.php
```

## 8. Start local PHP server

```bash
/usr/bin/php -S 0.0.0.0:8000
```

Open the forwarded port 8000 URL in Codespaces.
