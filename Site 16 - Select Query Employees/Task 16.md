# Task 16: SELECT Queries with Filters and Sorting

## Technical Focus

This site focuses on reading employee data with SELECT queries and then refining the results:

1. Open a PDO connection with `getDatabaseConnection()`
2. Begin with `SELECT * FROM Employees`
3. Add `WHERE`, `ORDER BY`, `AND`, `OR`, `NOT`, and `LIKE`
4. Fetch rows into PHP
5. Display the result in an HTML table

## End User Requirements

1. User can run a page that reads Employees records.
2. User can filter and sort Employees data with specific SELECT tasks.
3. User can see returned columns and rows in a table.
4. User can see a clear message if the table is empty.
5. User can see a meaningful error if the query fails.

## Functional Requirements

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR1 | Reuse connection helper from root `db.php` | Required |
| FR2 | Start with `SELECT * FROM Employees` | Required |
| FR3 | Define tasks using `WHERE`, `ORDER BY`, `AND`, `OR`, `NOT`, and `LIKE` | Required |
| FR4 | Fetch rows with PDO | Required |
| FR5 | Render results in an HTML table | Required |
| FR6 | Show empty-state and error-state output | Required |
| FR7 | Maintain Site 15 styling approach via external CSS | Required |

## Specific Query Tasks

Use the real column names from your Employees table. If your table does not include the example column shown below, replace it with a similar field.

1. `WHERE` task: Show only employees from one department.
	Example: `SELECT * FROM Employees WHERE department = 'Sales';`
2. `ORDER BY` task: Show all employees sorted by surname or employee ID.
	Example: `SELECT * FROM Employees ORDER BY last_name ASC;`
3. `AND` task: Show employees who match two conditions at the same time.
	Example: `SELECT * FROM Employees WHERE department = 'Sales' AND status = 'Active';`
4. `OR` task: Show employees who match either of two conditions.
	Example: `SELECT * FROM Employees WHERE department = 'Sales' OR department = 'Marketing';`
5. `NOT` task: Exclude one category from the results.
	Example: `SELECT * FROM Employees WHERE NOT status = 'Inactive';`
6. `LIKE` task: Search for employees whose name starts with or contains a pattern.
	Example: `SELECT * FROM Employees WHERE last_name LIKE 'Sm%';`

## Pseudocode Design

### Detailed Design

The page begins by loading the shared database helper from the project root so the existing PDO connection logic can be reused.
An empty error message, a result list, and a column list are prepared before the query runs.

The page then tries to connect to the database.
If the connection succeeds, it runs a base query against the Employees table and then lets the learner replace that query with filtered versions.
Each version of the query is executed in turn to test a different SQL feature: `WHERE`, `ORDER BY`, `AND`, `OR`, `NOT`, and `LIKE`.
If rows are returned, the page reads the column names from the first row and uses those keys to build the table header automatically.
It then loops through each employee row and prints each field into a table cell.

If the result set is empty, the page shows a clear message explaining that the table exists but currently has no records.
If anything goes wrong during the connection or query, the exception is caught and shown as an error message so the user can diagnose the problem.

### Simplified Overview

1. Load the shared database connection helper.
2. Open a database connection.
3. Run a SELECT query against Employees.
4. Change the query for each required SQL feature.
5. Store returned rows in a PHP array.
6. Build a table from the returned columns and rows.
7. If there are no rows, show an empty message.
8. If there is an error, show the error message.

## Test Plan

| Test ID | Test | Expected Result |
|--------|------|-----------------|
| EMP-1 | Load `select_all_demo.php` with valid `.env` and existing Employees table | Success banner and data table displayed |
| EMP-2 | Replace the base query with a valid `WHERE` query | Filtered rows displayed |
| EMP-3 | Replace the query with valid `ORDER BY`, `AND`, `OR`, `NOT`, and `LIKE` examples | Expected filtered or sorted rows displayed |
| EMP-4 | Load page when Employees table exists but is empty | Empty-state message displayed |
| EMP-5 | Load page with missing table or broken credentials | Error banner displayed from catch block |
| EMP-6 | Run `yourtask.php` | Query task list and result summary displayed |

## Evidence Checklist

1. Screenshot of the full Employees table output
2. Screenshot of one successful filtered query using `WHERE`
3. Screenshot of one successful sorted query using `ORDER BY`
4. Screenshot of one successful query using `AND`, `OR`, `NOT`, or `LIKE`
5. Screenshot of the empty-state or error-state output
6. Brief note explaining which columns were used in each query

## Run Command

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 16 - Select Query Employees"
```

Then open:

- `http://localhost:8000/index.php`
- `http://localhost:8000/select_all_demo.php`
- `http://localhost:8000/yourtask.php`