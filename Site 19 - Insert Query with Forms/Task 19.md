# Task 19: INSERT Query with Form POST

## Technical Explanation

This site extends Site 18 by keeping the two-page POST form flow and adding database write operations. The demo inserts into Employees, and the pupil task repeats the same process for Students.

Students will:

1. Build a POST form on page 1
2. Receive POST values on page 2
3. Validate required fields and data types
4. Use a PDO prepared statement for INSERT
5. Display success, inserted ID, and errors clearly

---

## Analysis

### End User Requirements

1. Users can submit a form that creates a new database row.
2. Users can see validation feedback for invalid input.
3. Users can see confirmation when an INSERT succeeds.
4. Users can follow a demo on Employees and complete a task on Students.

### Functional Requirements

#### Advanced Higher concepts

The solution is required to:

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR1 | Multi-page form with navigation | Required |
| FR2 | CSS media queries with screen max-width 900px and max-width 600px triggers | Required |
| FR3 | PHP form processing (POST method with request body) | Required |
| FR4 | Session variables and management | Not required |

#### Integration

The solution is required to:

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR5 | Reuse database connection helper from root db.php file | Required |
| FR6 | Insert data using a prepared statement | Required |
| FR7 | Handle validation and query exceptions safely | Required |

#### Additional functional requirements

The solution is required to:

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR8 | Receive POST fields with null coalescing defaults | Required |
| FR9 | Validate required text, numeric, and date fields server-side | Required |
| FR10 | Use named placeholders in INSERT SQL | Required |
| FR11 | Show inserted ID with PDO lastInsertId() on success | Required |
| FR12 | Escape output with htmlspecialchars() | Required |

## Design

### Key Learning Points

1. POST requests move form values to page 2 in the request body.
2. INSERT writes a new row to a table.
3. Prepared statements keep SQL and data separate.
4. Validation must happen before SQL executes.
5. Errors should be shown clearly without crashing the page.
6. Reuse of db.php keeps connection code consistent.

### Demonstration Pages

- `employee_form.php` - page 1 for Employees input
- `employee_insert.php` - page 2 that validates and inserts into Employees
- `yourtask.php` - pupil task to insert into Students

### Pseudocode Example

Page 1 - employee_form.php:

1. Display a form with method POST and action employee_insert.php.
2. Include inputs for name, salary, department, position, and hireDate.
3. Submit to page 2.

Page 2 - employee_insert.php:

4. Read each form field from POST with safe defaults.
5. Validate each field (required, length, numeric, date).
6. If validation fails, show error messages and stop insert.
7. Connect to database using getDatabaseConnection().
8. Prepare INSERT query with named placeholders.
9. Execute query with posted values.
10. Display success message and inserted ID.
11. If an exception occurs, show the error banner.

## Implementation

### Specific Pupil Task

Use Students table columns:

- first_name (required)
- last_name (required)
- date_of_birth (required date)
- gender (required: Male/Female/Other)
- enrollment_date (required date)
- grade_level (required integer)
- enrollment_status (required text)
- email (optional)
- phone_number (optional)

### Suggested Students INSERT SQL

```sql
INSERT INTO Students (
  first_name,
  last_name,
  date_of_birth,
  gender,
  enrollment_date,
  grade_level,
  enrollment_status,
  email,
  phone_number
) VALUES (
  :first_name,
  :last_name,
  :date_of_birth,
  :gender,
  :enrollment_date,
  :grade_level,
  :enrollment_status,
  :email,
  :phone_number
)
```

## Test Plan

| Test ID | Test | Expected Result |
|--------|------|-----------------|
| INS-1 | Load employee_form.php | Employees form displays with all required fields |
| INS-2 | Submit valid Employees values | employee_insert.php shows success and inserted ID |
| INS-3 | Submit invalid salary/date values | Validation errors shown, no insert attempted |
| INS-4 | Break DB credentials in .env and submit | Database error banner displayed |
| INS-5 | Submit valid Students values in yourtask.php | Student row inserted and success shown |
| INS-6 | Submit invalid Students values in yourtask.php | Validation errors shown with checklist feedback |

## Server Run Command

From the project root directory, run:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 19 - Insert Query with Forms"
```

Then open your browser to:

- `http://localhost:8000/index.php`
- `http://localhost:8000/employee_form.php`
- `http://localhost:8000/employee_insert.php`
- `http://localhost:8000/yourtask.php`

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.
