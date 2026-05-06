# Task 16: SELECT Queries with Filters and Sorting

## Technical Explanation

This site focuses on reading database data with SELECT queries and then refining the results. The demo uses Employees, but the pupil task should use Students. Students will:

1. Open a PDO connection with `getDatabaseConnection()`
2. Begin with `SELECT * FROM Students`
3. Add `WHERE`, `ORDER BY`, `AND`, `OR`, `NOT`, and `LIKE` clauses
4. Fetch rows into PHP
5. Display the result in an HTML table with error handling

---

## Analysis

### End User Requirements

1. Users can run a page that reads and displays Students records from a database.
2. Users can filter and sort Students data using multiple SELECT query features.
3. Users can see returned columns and rows displayed in a formatted HTML table.
4. Users can see clear messages for empty or error-state outputs.

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
| FR6 | Execute SELECT queries against the Students table using PDO | Required |
| FR7 | Render query results in an HTML table with error handling | Required |

#### Additional functional requirements

The solution is required to:

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR8 | Implement WHERE and ORDER BY clauses and filtering by single and multiple columns | Required |
| FR9 | Implement AND, OR, and NOT operators to combine query conditions | Required |
| FR10 | Implement LIKE operator with wildcard patterns for text search | Required |
| FR11 | Display empty-state message when result set has no rows; show error messages on query failure | Required |
| FR12 | Maintain Site 15 styling approach via external CSS file | Required |

## Design

### Key Learning Points

1. WHERE clauses filter rows based on single or multiple conditions
2. ORDER BY sorts results in ascending (ASC) or descending (DESC) order
3. AND combines conditions — rows matching all conditions are included
4. OR combines conditions — rows matching any condition are included
5. NOT inverts a condition to exclude matching rows
6. LIKE enables pattern-based text searching with wildcards (%, _)
7. HTML tables automatically build column headers from query result keys
8. Responsive design adapts table layouts at key breakpoints: `max-width: 900px` (tablet) and `max-width: 600px` (mobile)

### Demonstration Pages

- `select_all_demo.php` - shows base SELECT query and filtered examples
- `yourtask.php` - practice workspace with query challenges

### Pseudocode Example

1. Load the shared database connection helper from the project root.
2. Attempt to open a connection to the database.
3. For each required query variation, carry out steps 4 to 7.
4. Execute the current version of the SELECT query against the Students table.
5. If the query returns rows, read the column names from the first row and display them as a table header.
6. For each row returned, display all field values in a table row.
7. If no rows were returned, display a message explaining that the table is currently empty.
8. If anything went wrong at any point, catch the error and display an error banner with the details.

## Implementation

### Specific Query Tasks

Use the real column names from your Students table. If your table does not include the example column shown below, replace it with a similar field.

1. `WHERE` task: Show only students from one grade level.
	Example: `SELECT * FROM Students WHERE grade_level = 8;`
2. `ORDER BY` task: Show all students sorted by surname or enrollment date.
	Example: `SELECT * FROM Students ORDER BY last_name ASC;`
3. `AND` task: Show students who match two conditions at the same time.
	Example: `SELECT * FROM Students WHERE grade_level = 8 AND enrollment_status = 'Active';`
4. `OR` task: Show students who match either of two conditions.
	Example: `SELECT * FROM Students WHERE grade_level = 8 OR grade_level = 9;`
5. `NOT` task: Exclude one category from the results.
	Example: `SELECT * FROM Students WHERE NOT grade_level = 12;`
6. `LIKE` task: Search for students whose surname starts with or contains a pattern.
	Example: `SELECT * FROM Students WHERE last_name LIKE 'M%';`

## Pseudocode Design

### Detailed Design

The page begins by loading the shared database helper from the project root so the existing PDO connection logic can be reused.
An empty error message, a result list, and a column list are prepared before the query runs.

The page then tries to connect to the database.
If the connection succeeds, it runs a base query against the Students table and then lets the learner replace that query with filtered versions.
Each version of the query is executed in turn to test a different SQL feature: `WHERE`, `ORDER BY`, `AND`, `OR`, `NOT`, and `LIKE`.
If rows are returned, the page reads the column names from the first row and uses those keys to build the table header automatically.
It then loops through each student row and prints each field into a table cell.

If the result set is empty, the page shows a clear message explaining that the table exists but currently has no records.
If anything goes wrong during the connection or query, the exception is caught and shown as an error message so the user can diagnose the problem.

### Simplified Overview

1. Load the shared database connection helper.
2. Open a database connection.
3. Run a SELECT query against Students.
4. Change the query for each required SQL feature.
5. Store returned rows in a PHP array.
6. Build a table from the returned columns and rows.
7. If there are no rows, show an empty message.
8. If there is an error, show the error message.

## Test Plan

| Test ID | Test | Expected Result |
|--------|------|-----------------|
| EMP-1 | Load `select_all_demo.php` with valid `.env` and existing Employees table | Success banner and data table displayed |
| EMP-2 | Replace the base query with a valid `WHERE` query on Students | Filtered student rows displayed |
| EMP-3 | Replace the query with valid `ORDER BY`, `AND`, `OR`, `NOT`, and `LIKE` examples on Students | Expected filtered or sorted student rows displayed |
| EMP-4 | Load page when Employees table exists but is empty | Empty-state message displayed |
| EMP-5 | Load page with missing table or broken credentials | Error banner displayed from catch block |
| EMP-6 | Run `yourtask.php` with Students table available | Query task list and student result summary displayed |

## Server Run Command

From the project root directory, run:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 16 - Select Queries with Filters and Sorting"
```

Then open your browser to:

- `http://localhost:8000/index.php`
- `http://localhost:8000/select_all_demo.php`
- `http://localhost:8000/yourtask.php`

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.