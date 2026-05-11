# End of Session Checklist

Use this at the end of every coding session.

## 1. Stop running server

In the terminal running PHP server, press:

```text
Ctrl+C
```

## 2. Review changes

```bash
cd "/workspaces/AH-CompSci-WDD-PHP"
git status --short
```

## 3. Stage files

```bash
git add -A
```

## 4. Commit with a clear message

```bash
git commit -m "Short clear summary of changes"
```

Examples:

1. `Complete Site 17 task updates`
2. `Add Site 24 workspace styling`
3. `Update lesson FR sections`

## 5. Push to GitHub

```bash
git push origin main
```

## 6. Confirm clean status

```bash
git status
```

Expected: `nothing to commit, working tree clean`

## 7. If push fails (non-fast-forward)

```bash
git pull --rebase origin main
git push origin main
```
