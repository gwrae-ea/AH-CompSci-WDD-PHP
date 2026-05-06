# Task 6: Iteration Constructs

## Technical Explanation

Loops are used to repeat a block of code. PHP supports four main loop types:

- `for` repeats code a fixed number of times
- `while` repeats code while a condition remains true
- `do...while` runs the code once, then repeats while a condition remains true
- `foreach` repeats code for each item in an array

PHP also provides loop control keywords:

- `break` stops a loop immediately
- `continue` skips the current pass and moves to the next one

For this lesson, the main task is a fixed iteration problem, so the `for` loop is the best fit.

## Analysis

### End User Requirements

1. Users can explain the purpose of each PHP loop type
2. Users can choose the correct loop for a given problem
3. Users can use `break` and `continue` to control loop behaviour
4. Users can write their own `for` loop for a times table of their choice

### Functional Requirements (FR Model)

| FR  | Requirement                                      | Status        |
|-----|--------------------------------------------------|---------------|
| FR1 | Multi-page form with navigation                 | Not required  |
| FR2 | CSS media queries for responsive design         | Not required  |
| FR3 | PHP form processing (POST/GET)                  | Not required  |
| FR4 | Session variables and management                | Not required  |
| FR5 | Database table creation and schema              | N/A           |
| FR6 | Database connection and credentials             | N/A           |
| FR7 | Database query interface (select/insert/update) | N/A           |
| FR8 | Demonstrate all four loop types                 | Required      |
| FR9 | Demonstrate break and continue keywords         | Required      |
| FR10| Write a custom for loop for any times table    | Required      |

## Design

### Key Learning Points

1. `for` loops are ideal for fixed iteration counts
2. `while` loops depend on a condition checked before each pass
3. `do...while` loops always execute once
4. `foreach` loops make array traversal simple
5. `break` exits a loop and `continue` skips one iteration

### Demonstration Pages

- `for_loop.php` - fixed iteration with a counter and a times table example
- `while_loop.php` - condition-controlled repetition
- `do_while.php` - repetition that always runs once
- `foreach_loop.php` - iterating through arrays
- `break_continue.php` - controlling loop execution
- `yourtask.php` - complete the times table task

### Pseudocode Example

1. Set the counter to 1.
2. While the counter is less than or equal to 20, repeat steps 3 to 5.
3. Multiply the counter by 5 to get the result.
4. Display the counter, the multiplication sign, 5, the equals sign, and the result.
5. Increase the counter by 1.
6. End the loop once the counter exceeds 20.

## Implementation

### Server Run Command

From the project root directory, run:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 6 - Iteration Constructs"
```

Then open your browser to: `http://localhost:8000/index.php`

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.

### Common Errors

1. **Forgetting to update the counter**
   - ✗ Wrong: `while ($count <= 20) { echo $count; }`
   - ✓ Correct: `while ($count <= 20) { echo $count; $count++; }`

2. **Using the wrong loop type**
   - ✗ Using `while` for a known fixed count without a clear reason
   - ✓ Using `for` when you know the loop should run 20 times

3. **Incorrect multiplication output**
   - ✗ Wrong: `echo $multiplier + " x 5 = " + $result;`
   - ✓ Correct: `echo "$multiplier x 5 = $result";`

4. **Confusing `break` and `continue`**
   - `break` exits the whole loop
   - `continue` skips only the current pass

## Test Plan

| FR  | Requirement                       | Test Description                                              | Expected Result     |
|-----|-----------------------------------|---------------------------------------------------------------|---------------------|
| FR1 | (not required)                    | N/A                                                           | N/A                 |
| FR2 | (not required)                    | N/A                                                           | N/A                 |
| FR3 | (not required)                    | N/A                                                           | N/A                 |
| FR4 | (not required)                    | N/A                                                           | N/A                 |
| FR5 | (N/A)                             | N/A                                                           | N/A                 |
| FR6 | (N/A)                             | N/A                                                           | N/A                 |
| FR7 | (N/A)                             | N/A                                                           | N/A                 |
| FR8 | Demonstrate all four loop types   | Visit each demo page and verify the correct loop behaviour    | All outputs correct |
| FR9 | Demonstrate break and continue| Visit break_continue.php and verify both behaviours           | Output matches rules|
| FR10| Write custom for loop             | Visit yourtask.php and verify a times table for chosen table and range | Output is correct   |

## Evidence

To demonstrate mastery of Site 6, you should be able to:

1. ✅ Explain when to use `for`, `while`, `do...while`, and `foreach`
2. ✅ Show the difference between `break` and `continue`
3. ✅ Predict the output of each loop page before loading it
4. ✅ Write your own `for` loop for a times table you choose
5. ✅ Screenshot the page displaying your custom times table output

For database-related requirements (FR5-FR7), include a screenshot of your `.env` file as evidence.