# Start of Session Checklist

Use this at the beginning of every coding session.

## 1. Open workspace

1. Open your fork in GitHub Codespaces.
2. Open a terminal in the project root:

```bash
cd "/workspaces/AH-CompSci-WDD-PHP"
```

## 2. Sync latest changes

```bash
git pull --rebase origin main
```

## 3. Check environment quickly

```bash
/usr/bin/php -v
/usr/bin/php -m | grep -Ei "pdo|mysql"
```

## 4. Start development server

```bash
/usr/bin/php -S 0.0.0.0:8000
```

## 5. Open your working page

1. Open forwarded port **8000**.
2. Navigate to the current site folder/page you are working on.
3. Keep terminal open so you can stop server with `Ctrl+C` when needed.
