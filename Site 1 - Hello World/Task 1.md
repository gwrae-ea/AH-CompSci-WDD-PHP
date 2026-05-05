# Program 1 - Hello World

### Technical Explanation

This program introduces how PHP is embedded inside HTML. It demonstrates how `echo` outputs text to the page, how PHP syntax markers work, and how to run pages through the built-in server in Codespaces.

---

## Analysis

### End User Requirements

1. The user wants to be able to open a PHP page in the browser.
2. The user wants to be able to display "Hello, World!" using PHP.
3. The user wants to be able to add a second output line showing their name.
4. The user wants to be able to inspect page source and explain what the browser receives.

### Functional Requirements

#### Advanced Higher concepts

The solution is required to:

FR1 Have a website with multiple pages, one of which has form elements (action, method, and name) to collect learner input (not required in this task).

FR2 Use a media query to improve page layout that is triggered when the viewport width is 768px or less (not required in this task).

FR3 Use PHP to assign form variables and process form data to display a personalised message (not required in this task).

FR4 Use PHP to assign and use session variables to keep the learner name available between pages (not required in this task).

#### Integration

The solution is required to:

FR5 Have a database table to store data in later tasks (not required in this task).

FR6 Connect to the database to execute a query in later tasks (not required in this task).

FR7 Generate an interface to receive input values and display formatted output.

#### Additional functional requirements

The solution is required to:

FR8 Display "Hello, World!" using a valid PHP statement.

FR9 Validate keyboard input so the name field is not empty before processing.

FR10 Validate keyboard input so the name contains only letters and spaces.

FR11 Provide a link from `index.php` to `yourtask.php` and show output clearly on both pages.

---

## Design

### Query Design

No SQL query is required for this task.

| Query | Purpose | SQL | Parameters | Expected Result |
|---|---|---|---|---|
| N/A | No database integration in Task 1 | `N/A` | None | Page renders PHP output only |

### English Pseudocode

1. Start HTML document.
2. In body, run PHP `echo` to output "Hello, World!".
3. Add a second PHP output line with learner name message.
4. Add a link in `index.php` to `yourtask.php`.
5. Run the server and open the pages in a browser.

---

## Implementation

### SQA Reference Language

```text
Line 1: Start HTML page structure                                            [FR7]
Line 2: Output "Hello, World!" with PHP echo                                [FR8]
Line 3: Output learner name message                                           [FR8]
Line 4: Keep valid PHP syntax (tags and semicolons)                          [FR8]
Line 5: Add hyperlink from index page to task page                           [FR11]
Line 6: Run pages through the local PHP server                               [FR11]
```

The PHP implementation is in [index.php](./index.php) and [yourtask.php](./yourtask.php).

### Run in Codespaces

From the project root, run the PHP built-in server with Site 1 - Hello World as the web root:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 1 - Hello World"
```

Then open the forwarded port URL for port 8000 in the browser.

Use these paths:

1. `/index.php`
2. `/yourtask.php`

### Stop the server

When you are finished, stop the server by pressing **Ctrl+C** in the terminal where it is running.

### Common errors

1. Port already in use (`Address already in use`).

```bash
/usr/bin/php -S 0.0.0.0:8001 -t "Site 1 - Hello World"
```

2. PHP syntax error after editing tags or semicolon.

```bash
/usr/bin/php -l "Site 1 - Hello World/index.php"
/usr/bin/php -l "Site 1 - Hello World/yourtask.php"
```

3. Server started from the wrong folder.
Use the `-t "Site 1 - Hello World"` argument so the browser can find `/index.php`.

### Notes

- `echo` sends output to the browser response.
- `<?php ... ?>` marks PHP code inside HTML.
- The semicolon `;` ends a PHP statement.

---

## Test plan

### Test Cases

| # | Functional Requirement | Test Description | Input / Conditions | Expected Output | Evidence |
|---|------------------------|------------------|--------------------|-----------------|----------|
| 1 | FR1 | Not required in Task 1 | N/A | N/A | N/A |
| 2 | FR2 | Not required in Task 1 | N/A | N/A | N/A |
| 3 | FR3 | Not required in Task 1 | N/A | N/A | N/A |
| 4 | FR4 | Not required in Task 1 | N/A | N/A | N/A |
| 5 | FR5 | Verify database table exists for stored data | Check configured database schema | Required table exists with expected fields | Schema screenshot |
| 6 | FR6 | Verify database query execution | Run connection and query step | Query executes and returns expected rows | Query output screenshot |
| 7 | FR7 | Verify formatted query output interface | Enter query input values in interface | Formatted output displayed correctly | Screenshot of interface and result |
| 8 | FR8 | Display Hello World text | Open `/index.php` after starting server | "Hello, World!" shown | Screenshot of output page |
| 9 | FR9 | Validate non-empty name input | Submit empty name | Validation message shown and data not processed | Screenshot of validation message |
| 10 | FR10 | Validate name character rules | Submit invalid characters (for example `Ava123`) | Validation error shown | Screenshot of validation message |
| 11 | FR11 | Verify page navigation and output clarity | Click link on `/index.php` | Opens `/yourtask.php` and content is readable | Screenshot showing destination URL |
