# Task 22 - Session Variables

## Objective
Use PHP sessions to persist values across multiple pages without passing values through GET or POST.

## Required outcomes
1. Create a form page that stores at least two values in `$_SESSION`.
2. Create a second page that reads and displays those session values.
3. Track visit count in session and show it increasing on reload.
4. Provide a control to clear/destroy the session.
5. Use `htmlspecialchars()` for displayed values.

## Run command
```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 22 - Session Variables"
```

## Evidence checklist
- Screenshot of stored session values.
- Screenshot of visit counter increasing.
- Screenshot after session destroy showing values are cleared.
