# Task 23 - Capstone Demo Site

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
/usr/bin/php -S 0.0.0.0:8000 -t "Site 23 - Capstone Demo"
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
