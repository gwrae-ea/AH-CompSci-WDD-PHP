# Task 15: Database Connection Testing

## Technical Focus

This site focuses on testing PHP database connectivity using the `db_test.php` pattern:

1. Open a PDO connection with `getDatabaseConnection()`
2. Execute a simple query (`SELECT VERSION()`)
3. Capture success or failure with clear output

## End User Requirements

1. User can run a database connection test page.
2. User can see success output when credentials are correct.
3. User can see meaningful error output when connection fails.
4. User can provide testing evidence for pass/fail outcomes.

## Functional Requirements

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR1 | Reuse connection helper from root `db.php` | Required |
| FR2 | Implement try/catch connection test flow | Required |
| FR3 | Execute `SELECT VERSION()` query | Required |
| FR4 | Show success and error status output | Required |
| FR5 | Maintain Site 14 styling via external CSS | Required |

## Pseudocode Design

### Detailed Design

The page opens by loading the shared database helper file so that the connection function is available.
Two pieces of information are prepared before any connection is attempted: a status flag (set to unknown) and an empty list that will collect the results of each individual test.

The page then tries to connect to the database.
If the connection succeeds, that result is added to the list as a pass.
While still connected, the page asks the database which version of MySQL it is running and records whether that answer came back correctly.
It then asks the database for its own name and records that result too.
If all three checks came back with answers, the overall status is set to pass; if any one of them failed, the status is set to fail.

If anything goes wrong during the connection or the queries, the error is caught automatically and recorded as a fail, and the overall status is set to fail.

Once all the checks are finished, the page displays a summary banner — green for an overall pass and red for an overall fail — followed by the individual test results so the user can see exactly which checks passed and which did not.

---

### Simplified Overview

1. Include the database helper so the page knows how to connect.
2. Try to open a connection to the database.
3. If the connection works, ask the database two simple questions: "What version are you?" and "What is your name?"
4. Record whether each question got a sensible answer.
5. If anything goes wrong at any point, record the error instead.
6. Show the user either a green "all passed" banner or a red "something failed" banner.
7. List every individual result underneath so the user can see the detail.

## Test Plan

| Test ID | Test | Expected Result |
|--------|------|-----------------|
| DB-1 | Load `connection_demo.php` with valid `.env` | Success message with version |
| DB-2 | Run task workspace | PASS lines shown for connection and queries |
| DB-3 | Force an invalid DB setting | Error message shown from catch block |
| DB-4 | Compare output to expected | Expected and actual match |

## Evidence Checklist

1. Screenshot of successful connection output
2. Screenshot of MySQL version output
3. Screenshot of failed connection output (intentional failure test)
4. Brief note explaining how the failure was fixed

## Run Command

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 15 - Database Connection Testing"
```

Then open:

- `http://localhost:8000/index.php`
- `http://localhost:8000/connection_demo.php`
- `http://localhost:8000/yourtask.php`
