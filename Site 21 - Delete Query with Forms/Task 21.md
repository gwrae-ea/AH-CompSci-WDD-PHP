# Task 21: DELETE Query with Form POST

## Technical Explanation

This site follows Site 20 by moving from UPDATE to DELETE operations. The form submits an ID with POST, validates it, then removes the matching row using a prepared statement.

The demonstration deletes from Employees, while the pupil task deletes from Students.

Students will:

1. Build a POST form for an ID value
2. Receive POST values on page 2
3. Validate ID server-side
4. Use a PDO prepared DELETE statement
5. Display success, no-match, and error outcomes clearly

---

## Analysis

### End User Requirements

1. Users can submit a form to delete an existing database row.
2. Users can see validation messages for invalid IDs.
3. Users can see confirmation when rows are deleted.
4. Users can see a no-match message when no row is found.
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
| FR6 | Delete data using prepared statements | Required |
| FR7 | Handle validation and query exceptions safely | Required |

#### Additional functional requirements

The solution is required to:

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR8 | Receive POST fields with null coalescing defaults | Required |
| FR9 | Validate row ID server-side | Required |
| FR10 | Use named placeholders in DELETE SQL | Required |
| FR11 | Use rowCount() feedback to report deleted rows | Required |
| FR12 | Escape output with htmlspecialchars() | Required |

## Design

### Demonstration Pages

- `employee_form.php` - page 1 for Employees delete input
- `employee_delete.php` - page 2 that validates and deletes Employees
- `yourtask.php` - pupil task to delete Students

## Implementation

### Pupil Task Files

Your task requires two files.

- **`yourtask_form.php`** — create this file yourself. It is the form page (page 1) that collects the student ID and submits it with `method="POST"` to `yourtask.php`.
- **`yourtask.php`** — already provided. It is the processing page (page 2) that validates the ID and runs the DELETE query.

### Suggested Students DELETE SQL

```sql
DELETE FROM Students
WHERE student_id = :student_id
```

## Test Plan

| Test ID | Test | Expected Result |
|--------|------|-----------------|
| DEL-1 | Load employee_form.php | Delete form displays with required ID field |
| DEL-2 | Submit valid existing employee ID | employee_delete.php shows rows deleted |
| DEL-3 | Submit non-existent employee ID | No rows deleted message shown |
| DEL-4 | Submit invalid ID value | Validation errors shown, query not run |
| DEL-5 | Submit valid student_id in yourtask.php | Student row deleted and success shown |
| DEL-6 | Submit unknown student_id in yourtask.php | No rows deleted message shown |

## Server Run Command

From the project root directory, run:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 21 - Delete Query with Forms"
```

Then open your browser to:

- `http://localhost:8000/index.php`
- `http://localhost:8000/employee_form.php`
- `http://localhost:8000/employee_delete.php`
- `http://localhost:8000/yourtask.php`

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.
