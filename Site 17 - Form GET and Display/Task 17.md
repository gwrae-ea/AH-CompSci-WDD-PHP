# Task 17: Form GET and Data Processing

## Technical Explanation

This site focuses on building a two-page form flow using GET parameters and PHP string processing. Students will:

1. Create an HTML form on page 1 with `method="GET"`
2. Collect user input from form fields
3. Submit to page 2 via the query string
4. Receive data in PHP using `$_GET` with null coalescing
5. Process data with concatenation and string functions
6. Display raw and processed results with server-side validation

---

## Analysis

### End User Requirements

1. Users can fill out and submit an HTML form on page 1.
2. Users can see the query string in the URL after form submission.
3. Users can see raw form data displayed on page 2.
4. Users can see processed output including concatenation and string transformations.
5. Users can understand the complete flow: form → GET → PHP variables → display with validation.

### Functional Requirements

#### Advanced Higher concepts

The solution is required to:

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR1 | Multi-page form with explicit form `action`, `method`, and named inputs (`name` attributes) | Required |
| FR2 | CSS media queries with screen max-width 900px and max-width 600px triggers | Required |
| FR3 | PHP form processing (GET method with query string) | Required |
| FR4 | Session variables and management | Not required |

#### Integration

The solution is required to:

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR5 | Display HTML form with two or more named input fields | Required |
| FR6 | Implement form validation with client-side minlength/maxlength attributes | Required |
| FR7 | Process and display form output with server-side validation | Required |

#### Additional functional requirements

The solution is required to:

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR8 | Receive GET data via GET array with null coalescing on page 2 | Required |
| FR9 | Validate server-side that all fields are 2-10 characters with error messages | Required |
| FR10 | Concatenate string values and apply uppercase, lowercase, and string length functions | Required |
| FR11 | Use htmlspecialchars function to escape output and prevent HTML injection | Required |

## Design

### Key Learning Points

1. HTML form `method="GET"` passes data in the URL query string
2. Form field `name` attributes become GET parameter keys
3. Client-side validation (minlength, maxlength, required) prevents invalid submissions
4. Server-side validation ensures data meets requirements before processing
5. Null coalescing operator (`??`) provides defaults if GET parameters are missing
6. String concatenation (`.` operator) combines multiple values
7. String functions transform case and measure length
8. `htmlspecialchars()` escapes output to prevent injection attacks
9. Responsive design adapts form layouts at key breakpoints: `max-width: 900px` (tablet) and `max-width: 600px` (mobile)
10. External CSS maintains visual consistency across lesson sites

### Demonstration Pages

- `form_input.php` - HTML form on page 1 for user input
- `form_output.php` - page 2 with GET processing, validation, and output
- `yourtask.php` - practice workspace with validation checklist

### Pseudocode Example

Page 1 — form_input.php:

1. Display an HTML form with the submission method set to GET and the action pointing to form_output.php.
2. Display a text input labelled First Name with a name attribute of first_name, marked as required, with a minimum length of 2 and a maximum length of 10.
3. Display a text input labelled Last Name with a name attribute of last_name, marked as required, with a minimum length of 2 and a maximum length of 10.
4. Display a submit button labelled Submit.

Page 2 — form_output.php:

5. Read the first_name field from the query string, using an empty string as the default if it is absent.
6. Read the last_name field from the query string in the same way.
7. Check that first_name contains between 2 and 10 characters.
8. Check that last_name contains between 2 and 10 characters.
9. If either field fails the length check, display a validation error message identifying which field is invalid and stop further processing.
10. Join first_name and last_name together with a space between them to form full_name.
11. Convert full_name to all uppercase letters to produce full_name_upper.
12. Convert full_name to all lowercase letters to produce full_name_lower.
13. Count the total number of characters in full_name to produce char_count.
14. Display the raw values of first_name and last_name, escaping any special characters before output.
15. Display full_name_upper, full_name_lower, and char_count as the processed results.

## Implementation

### Pupil Task Files

Your task requires two files.

- **`yourtask_form.php`** — create this file yourself. It is the form page (page 1) that collects user input and submits it with `method="GET"` to `yourtask.php`.
- **`yourtask.php`** — already provided. It is the processing page (page 2) that reads `$_GET` values, validates them, and displays the results.

### Implementation Notes

Form field handling:
- Page 1 requires at least two `<input>` fields with distinct `name` attributes
- All fields must have `required`, `minlength="2"`, and `maxlength="10"` attributes
- Form `action` must point to the processing page (e.g., `form_output.php`)

Data processing on page 2:
- Use `$_GET['field_name'] ?? ''` to safely receive form values with defaults
- Validate server-side that each non-empty field is 2-10 characters
- Display validation error messages if any field fails
- Concatenate values using the `.` operator
- Apply `strtoupper()`, `strtolower()`, and `strlen()` for transformations
- Always wrap user input in `htmlspecialchars()` before display

Testing the form:
- Test with valid input (2-10 characters)
- Test with invalid input via browser bypass (curl command with custom length)
- Verify client-side validation prevents submission of out-of-range values
- Verify server-side validation catches bypassed submissions

## Test Plan

| Test ID | Test | Expected Result |
|--------|------|-----------------|
| FORM-1 | Load `form_input.php` | Input form displays with fields and submit button |
| FORM-2 | Fill form with text shorter than 2 characters and submit | Browser validation prevents submission |
| FORM-3 | Fill form with text longer than 10 characters and submit | Browser validation prevents submission |
| FORM-4 | Fill form with "Alice", "Smith", "Gaming", "Blue" and submit | URL shows valid query string and page 2 loads |
| FORM-5 | On page 2, inspect raw data | First Name: Alice, Last Name: Smith displayed |
| FORM-6 | On page 2, inspect processed data | Full Name in uppercase, lowercase, character count shown |
| FORM-7 | Submit form with server-side bypass (curl) with invalid length | Page 2 shows validation error message |
| FORM-8 | Run `yourtask.php` with valid form data | Task checklist shows PASS for all requirements including length validation |

## Server Run Command

From the project root directory, run:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 17 - Form GET and Display"
```

Then open your browser to:

- `http://localhost:8000/index.php`
- `http://localhost:8000/form_input.php`
- `http://localhost:8000/form_output.php`
- `http://localhost:8000/yourtask.php`

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.

<!-- FR_STANDARD_START -->

## Functional Requirements (Standard Format)

The solution is required to:

| ID | Requirement |
|---|---|
| FR1 | a website with multiple pages, one of which has form elements (action, method, and name) to collect user input using GET |
| FR2 | N/A |
| FR3 | use PHP to assign form variables and process form data to display transformed string output |
| FR4 | N/A |

### Integration

Complete the pre-populated functional requirements for integration to describe how they will be applied in your project.

The solution is required to:

| ID | Requirement |
|---|---|
| FR5 | N/A |
| FR6 | N/A |
| FR7 | N/A |

### Additional Functional Requirements

Identify between four and eight additional functional requirements, with a minimum of two related to validation of keyboard input where applicable to the site.

The solution is required to:

| ID | Requirement |
|---|---|
| FR8 | validate required keyboard text inputs are not empty |
| FR9 | validate keyboard text length for each required field |
| FR10 | escape user-provided output using htmlspecialchars before rendering |
| FR11 | display clear success/output sections for submitted values |

<!-- FR_STANDARD_END -->
