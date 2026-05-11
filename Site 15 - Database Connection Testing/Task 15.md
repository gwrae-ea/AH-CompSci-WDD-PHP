# Task 15: Database Connection Testing

## Technical Explanation

This site focuses on testing PHP database connectivity using the `db_test.php` pattern.

1. Open a PDO connection with `getDatabaseConnection()`
2. Execute a simple query (`SELECT VERSION()`)
3. Capture success or failure with clear output
4. Display results in a formatted output page with error handling

---

## Analysis

### End User Requirements

1. Users can run a database connection test page to verify credentials.
2. Users can see success output when database credentials are correct.
3. Users can see meaningful error messages when the connection fails.
4. Users can understand the try/catch pattern for error handling in PHP.

### Functional Requirements

#### Advanced Higher concepts

The solution is required to:

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR1 | Multi-page form with navigation | Not required |
| FR2 | CSS media queries with screen max-width 900px and max-width 600px triggers | Required |
| FR3 | PHP form processing (POST/GET) | Not required |
| FR4 | Session variables and management | Not required |

#### Integration

The solution is required to:

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR5 | Reuse database connection helper from root db.php file | Required |
| FR6 | Execute database queries using PDO with try/catch error handling | Required |
| FR7 | Display formatted query results with success/error state output | Required |

#### Additional functional requirements

The solution is required to:

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR8 | Execute SELECT VERSION() query to test database connectivity | Required |
| FR9 | Query the database name to verify connection scope | Required |
| FR10 | Validate server-side errors and display meaningful error messages | Required |
| FR11 | Maintain Site 14 styling approach via external CSS file | Required |

## Design

### Key Learning Points

1. PDO connections are reusable across page loads via a helper function
2. Try/catch blocks provide graceful error handling for database operations
3. Query results can be validated and displayed with clear status messages
4. Database version and metadata queries help verify connection health
5. Responsive design adapts layouts at key breakpoints: `max-width: 900px` (tablet) and `max-width: 600px` (mobile)
6. External CSS styling maintains visual consistency across lesson sites

### Demonstration Pages

- `connection_demo.php` - shows successful connection and query execution
- `yourtask.php` - practice workspace for testing database connectivity

### Pseudocode Example

1. Load the shared database connection helper so that the connection function is available.
2. Prepare an overall status flag set to unknown and an empty list to collect individual test results.
3. Attempt to open a connection to the database.
4. If the connection succeeds, record it as a pass in the results list.
5. Ask the database for its version number and record whether a valid answer was returned.
6. Ask the database for its own name and record the result.
7. If all three checks returned answers, set the overall status to pass.
8. If any check failed, set the overall status to fail.
9. If anything went wrong at any point, catch the error, record it as a fail, and set the overall status to fail.
10. Display a green banner if the overall status is pass, or a red banner if it is fail.
11. Display each individual test result so the user can see exactly which checks passed and which did not.

## Implementation

### Pseudocode Design

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

## Server Run Command

From the project root directory, run:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 15 - Database Connection Testing"
```

Then open your browser to:

- `http://localhost:8000/index.php`
- `http://localhost:8000/connection_demo.php`
- `http://localhost:8000/yourtask.php`

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.

<!-- FR_STANDARD_START -->

## Functional Requirements (Standard Format)

The solution is required to:

| ID | Requirement |
|---|---|
| FR1 | N/A |
| FR2 | N/A |
| FR3 | N/A |
| FR4 | N/A |

### Integration

Complete the pre-populated functional requirements for integration to describe how they will be applied in your project.

The solution is required to:

| ID | Requirement |
|---|---|
| FR5 | N/A |
| FR6 | connect to the database to execute a test query (such as SELECT VERSION()) and confirm connectivity |
| FR7 | generate an interface to display formatted connection and test-query output |

### Additional Functional Requirements

Identify between four and eight additional functional requirements, with a minimum of two related to validation of keyboard input where applicable to the site.

The solution is required to:

| ID | Requirement |
|---|---|
| FR8 | N/A |
| FR9 | N/A |
| FR10 | N/A |
| FR11 | N/A |

<!-- FR_STANDARD_END -->
