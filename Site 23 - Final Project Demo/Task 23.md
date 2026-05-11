# Task 23 - Final Project Demo Site

## Objective
Build and demonstrate a complete mini-site that combines the core practical skills from Sites 1-22.

## What this site must demonstrate
- Form input page with multiple field types
- POST submission processing page
- Server-side input validation
- Safe output using htmlspecialchars
- Session data persistence across pages
- Arrays and loop logic to produce computed results
- Responsive CSS with media queries (plus print mode)

## Functional requirements

| ID | Requirement | Priority |
|---|---|---|
| FR1 | Multi-page form workflow with explicit form `action`, `method`, and named inputs (`name` attributes) | Required |

## Provided demo files
- index.php
- explanation.php
- registration_form.php
- registration_result.php
- dashboard.php
- yourtask.php
- style.css

## Evidence checklist
1. Show one failed form submission with validation errors.
2. Show one successful submission with computed output.
3. Show dashboard summary using session history.
4. Show responsive behavior on small screen width.
5. Show print preview behavior.
6. Explain where each loop type appears.

## Run command
```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 23 - Final Project Demo"
```

## Extension challenge
Create your own three-page mini workflow in this folder that follows the same structure and quality as the provided demo.

## Teacher marking rubric

### Pass
- Functional three-page workflow (form, POST processing page, session summary page).
- Server-side validation is present for required fields.
- Output is escaped with htmlspecialchars where user input is displayed.
- Responsive layout works on desktop and mobile.
- Student can explain where POST and session are used.

### Merit
- Validation is robust (type/range/whitelist checks, clear error feedback, old-value repopulation).
- Loop usage is purposeful (for, foreach, plus while or do...while) and correctly explained.
- Arrays are used meaningfully, including associative and multidimensional structures.
- Dashboard includes useful computed summaries (totals, averages, or grouped counts).
- Commentary clearly links implementation choices to security and usability.

### Distinction
- Code is well-structured, readable, and consistent with strong naming and flow control.
- Validation and processing logic handles edge cases reliably.
- Session workflow is complete (write, read, update, and reset/clear behavior).
- UI is polished, responsive, and print-friendly with clear information hierarchy.
- Student gives confident technical commentary that justifies design, validation, and algorithm choices.

<!-- FR_STANDARD_START -->

## Functional Requirements (Standard Format)

The solution is required to:

| ID | Requirement |
|---|---|
| FR1 | a website with multiple pages, one of which has form elements (action, method, and name) to implement an end-to-end final-project workflow |
| FR2 | a media query to provide responsive mobile and print-friendly layouts that is triggered when viewport width reaches defined breakpoints |
| FR3 | use PHP to assign form variables and process form data to validate, compute, and present project outputs |
| FR4 | use PHP to assign and use session variables to persist submission history, errors, and old values |

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
| FR8 | validate required keyboard text inputs with length constraints |
| FR9 | validate keyboard numeric/date/email inputs for format and range |
| FR10 | escape user-generated output using htmlspecialchars across result pages |
| FR11 | provide clear validation feedback and recovery flow after failed submission |

<!-- FR_STANDARD_END -->
