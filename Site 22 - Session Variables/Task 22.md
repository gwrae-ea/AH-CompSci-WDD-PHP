# Task 22 - Session Variables

## Objective
Use PHP sessions to persist values across multiple pages without passing values through GET or POST.

## Required outcomes
1. Create a form page that stores at least two values in `$_SESSION`.
2. Create a second page that reads and displays those session values.
3. Track visit count in session and show it increasing on reload.
4. Provide a control to clear/destroy the session.
5. Use `htmlspecialchars()` for displayed values.

## Run command
```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 22 - Session Variables"
```

## Evidence checklist
- Screenshot of stored session values.
- Screenshot of visit counter increasing.
- Screenshot after session destroy showing values are cleared.

<!-- FR_STANDARD_START -->

## Functional Requirements (Standard Format)

The solution is required to:

| ID | Requirement |
|---|---|
| FR1 | N/A |
| FR2 | N/A |
| FR3 | N/A |
| FR4 | use PHP to assign and use session variables to persist values across multiple pages and clear them when required |

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
| FR8 | display session values consistently across separate pages |
| FR9 | validate keyboard input before writing values to session storage |
| FR10 | destroy session data and verify values are no longer available |
| FR11 | handle missing session data with clear user-facing fallback messaging |

<!-- FR_STANDARD_END -->
