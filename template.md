# Program <Number> - <Title>

### Technical Explanation

<Explain what the program does, the key logic, and which technical skills are demonstrated.>

---

## Analysis

### End User Requirements

1. The user wants to be able to <requirement 1>.
2. The user wants to be able to <requirement 2>.
3. The user wants to be able to <requirement 3>.
4. The user wants to be able to <requirement 4>.

### Functional Requirements

#### Advanced Higher concepts

The solution is required to:

FR1 Have a website with multiple pages, one of which has form elements (action, method, and name) to <insert text>.

FR2 Use a media query to <insert text> that is triggered when <insert text>.

FR3 Use PHP to assign form variables and process form data to <insert text>.

FR4 Use PHP to assign and use session variables to <insert text>.

#### Integration

The solution is required to:

FR5 Have a database table to store <insert text>.

FR6 Connect to the database to execute a query to <insert text>.

FR7 Generate an interface to receive query input values and display formatted query output.

#### Additional functional requirements

Identify between four and eight additional functional requirements. A minimum of two must relate to validation of keyboard input.

The solution is required to:

FR8 <additional requirement>.

FR9 <additional requirement - keyboard validation>.

FR10 <additional requirement - keyboard validation>.

FR11 <additional requirement>.

---

## Design

### Query Design

<Describe the SQL queries used and why they are needed.>

| Query | Purpose | SQL | Parameters | Expected Result |
|---|---|---|---|---|
| <query name> | <purpose> | `<SQL statement>` | <param list or None> | <expected result> |
| <query name> | <purpose> | `<SQL statement>` | <param list or None> | <expected result> |

### English Pseudocode

1. <Step 1>
2. <Step 2>
3. <Step 3>
4. <Step 4>
5. <Step 5>

---

## Implementation

### SQA Reference Language

```text
Line 1: <SQA-RL step>                                                      [FRx]
Line 2: <SQA-RL step>                                                      [FRx]
Line 3: <SQA-RL step>                                                      [FRx]
```

The PHP implementation is in [Program <Number> - <Title>.php](./Program%20<Number>%20-%20<Title>.php).

### Run in Codespaces

From the project root, run the PHP built-in server:

```bash
/usr/bin/php -S 0.0.0.0:8000
```

Then open the forwarded port URL for port 8000 in the browser.

If your program is in a subfolder (for example, `Site 1`), set that as the web root:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 1"
```

### Stop the server

When you are finished, stop the server by pressing **Ctrl+C** in the terminal where it is running.

### Common errors

1. Port already in use (`Address already in use`).
	Stop the previous server process, or start on another port such as:

```bash
/usr/bin/php -S 0.0.0.0:8001
```

2. Database connection fails because `.env` is missing or incomplete.
	Check that `.env` exists and includes values for `DB_HOST`, `DB_PORT`, `DB_USER`, `DB_PASS`, and `DB_NAME`.

3. MySQL driver missing (`could not find driver`).
	Check PHP modules with:

```bash
/usr/bin/php -m | grep -Ei "pdo|mysql"
```

	If `pdo_mysql` is not shown, run the project setup script:

```bash
./scripts/setup_env.sh
```

### Notes

- `.env` file: Contains database credentials and is loaded by `db.php`. **Include screenshots of your .env file (redacted passwords if needed) as part of evidence for database-related tests (FR5-FR7).**
- `DBCONNECT(...)` represents your PHP database connection (for example, `new PDO(...)`). Make sure your code references the environment variables from `.env`.
- `GETENV(...)` represents reading values from environment variables after `.env` has been loaded.
- Add any program-specific notes about exception handling, validation, or data structures.

---

## Test plan

### Test Cases

| # | Functional Requirement | Test Description | Input / Conditions | Expected Output | Evidence |
|---|------------------------|------------------|--------------------|-----------------|----------|
| 1 | FR1 | <what is being tested> | <setup/input> | <expected result> | Before evidence: <capture before state>. After evidence: <capture after state>. |
| 2 | FR2 | <what is being tested> | <setup/input> | <expected result> | Before evidence: <capture before state>. After evidence: <capture after state>. |
| 3 | FR3 | <what is being tested> | <setup/input> | <expected result> | Before evidence: <capture before state>. After evidence: <capture after state>. |
| 4 | FR4 | <what is being tested> | <setup/input> | <expected result> | Before evidence: <capture before state>. After evidence: <capture after state>. |
| 5 | FR5 | <what is being tested> | <setup/input> | <expected result> | Include screenshot of `.env` file (with passwords redacted). <capture before state>. <capture after state>. |
| 6 | FR6 | <what is being tested> | <setup/input> | <expected result> | Include screenshot of `.env` file alongside code showing connection. <capture result>. |
| 7 | FR7 | <what is being tested> | <setup/input> | <expected result> | Include screenshot of `.env` file and code that references environment variables. <capture result>. |
| 8 | FR8 | <what is being tested> | <setup/input> | <expected result> | Before evidence: <capture before state>. After evidence: <capture after state>. |
| 9 | FR9 | <what is being tested> | <setup/input> | <expected result> | Before evidence: <capture before state>. After evidence: <capture after state>. |
| 10 | FR10 | <what is being tested> | <setup/input> | <expected result> | Before evidence: <capture before state>. After evidence: <capture after state>. |
| 11 | FR11 | <what is being tested> | <setup/input> | <expected result> | Before evidence: <capture before state>. After evidence: <capture after state>. |
