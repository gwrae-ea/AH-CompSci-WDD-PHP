# Task 20: UPDATE Query with Form POST

## Technical Explanation

This site follows Site 19 by moving from INSERT to UPDATE operations. The form submits values with POST, validates the input, then updates an existing row with a prepared statement.

The demonstration updates Employees, while the pupil task updates Students.

Students will:

1. Build a POST form that includes a row ID
2. Receive POST values on page 2
3. Validate required fields and types
4. Use a PDO prepared UPDATE statement
5. Display success, no-change, and error outcomes clearly

---

## Analysis

### End User Requirements

1. Users can submit a form to update an existing database row.
2. Users can see clear validation messages for bad input.
3. Users can see confirmation when rows are updated.
4. Users can see a no-change message when no row matched.
5. Users can apply the demo pattern from Employees to Students.

### Functional Requirements

#### Advanced Higher concepts

The solution is required to:

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR1 | Multi-page form with explicit form `action`, `method`, and named inputs (`name` attributes) | Required |
| FR2 | CSS media queries with screen max-width 900px and max-width 600px triggers | Required |
| FR3 | PHP form processing (POST method with request body) | Required |
| FR4 | Session variables and management | Not required |

#### Integration

The solution is required to:

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR5 | Reuse database connection helper from root db.php file | Required |
| FR6 | Update data using prepared statements | Required |
| FR7 | Handle validation and query exceptions safely | Required |

#### Additional functional requirements

The solution is required to:

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR8 | Receive POST fields with null coalescing defaults | Required |
| FR9 | Validate row ID and required field constraints server-side | Required |
| FR10 | Use named placeholders in UPDATE SQL | Required |
| FR11 | Use rowCount() feedback to report updated rows | Required |
| FR12 | Escape output with htmlspecialchars() | Required |

## Design

### Demonstration Pages

- `employee_form.php` - page 1 for Employees update input
- `employee_update.php` - page 2 that validates and updates Employees
- `yourtask.php` - pupil task to update Students

### Pseudocode Example

Page 1 - employee_form.php:

1. Display a form with method POST and action employee_update.php.
2. Include fields for employee ID and replacement values.
3. Submit to page 2.

Page 2 - employee_update.php:

4. Read each form field from POST with safe defaults.
5. Validate ID, numeric values, text lengths, and date format.
6. If validation fails, show errors and stop query.
7. Connect to database using getDatabaseConnection().
8. Prepare UPDATE query with named placeholders.
9. Execute query with validated values.
10. Show rowCount outcome: success or no rows updated.
11. If an exception occurs, show a database error message.

## Implementation

### Pupil Task Files

Your task requires two files.

- **`yourtask_form.php`** — create this file yourself. It is the form page (page 1) that collects the student ID and replacement values, and submits them with `method="POST"` to `yourtask.php`.
- **`yourtask.php`** — already provided. It is the processing page (page 2) that validates input and runs the UPDATE query.

### Suggested Students UPDATE SQL

```sql
UPDATE Students
SET first_name = :first_name,
    last_name = :last_name,
    grade_level = :grade_level,
    enrollment_status = :enrollment_status,
    email = :email,
    phone_number = :phone_number
WHERE student_id = :student_id
```

## Test Plan

| Test ID | Test | Expected Result |
|--------|------|-----------------|
| UPD-1 | Load employee_form.php | Update form displays with required fields |
| UPD-2 | Submit valid existing employee ID and values | employee_update.php shows rows updated |
| UPD-3 | Submit non-existent employee ID | No rows updated message shown |
| UPD-4 | Submit invalid field values | Validation errors shown, query not run |
| UPD-5 | Submit valid Students values in yourtask.php | Student row updated and success shown |
| UPD-6 | Submit unknown student_id in yourtask.php | No rows updated message shown |

## Server Run Command

From the project root directory, run:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 20 - Update Query with Forms"
```

Then open your browser to:

- `http://localhost:8000/index.php`
- `http://localhost:8000/employee_form.php`
- `http://localhost:8000/employee_update.php`
- `http://localhost:8000/yourtask.php`

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.
