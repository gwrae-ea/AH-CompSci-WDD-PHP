# Task 8: Conditional Iteration (do...while)

## Technical Explanation

The `do...while` statement executes a block of code at least once. After the first pass, PHP checks the condition. The loop continues while the condition remains true and stops when the condition becomes false.

This makes `do...while` useful when you want guaranteed output before checking whether more loop passes are needed.

**Syntax:**

```php
do {
  code to be executed;
} while (condition);
```

## Analysis

### End User Requirements

1. Users can explain how a `do...while` loop works
2. Users can identify why the loop runs at least once
3. Users can use a counter variable to stop a loop after a required number of values
4. Users can create a configurable times table using a `do...while` loop

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
| FR8 | Demonstrate the provided do...while example     | Required      |
| FR9 | Display a configurable times table using do...while | Required  |
| FR10| Use variables for table number and output count | Required      |

## Design

### Key Learning Points

1. `do...while` checks the condition after the first pass
2. The loop body always runs at least once
3. A counter variable is commonly used to control the number of iterations
4. Updating the counter inside the loop is essential

### Demonstration Pages

- `increment_example.php` - the lesson example with `$i`
- `times_table_example.php` - a configurable times table using `do...while`
- `yourtask.php` - the task workspace for your own solution

### Pseudocode Example

1. Set the number of values to the required count.
2. Set the times table number to the chosen value.
3. Set the counter to 1.
4. Carry out steps 5 to 7 at least once, then repeat while the counter is less than or equal to the number of values.
5. Multiply the counter by the times table number to get the result.
6. Display the counter, the times table number, and the result.
7. Increase the counter by 1.
8. End the loop once the counter exceeds the number of values.

## Implementation

### Server Run Command

From the project root directory, run:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 8 - Do While Loop Statement"
```

Then open your browser to: `http://localhost:8000/index.php`

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.

### Common Errors

1. **Forgetting to increment the counter**
   - ✗ Wrong: `do { echo $counter; } while ($counter <= $numberOfValues);`
   - ✓ Correct: `do { echo $counter; $counter++; } while ($counter <= $numberOfValues);`

2. **Using the wrong condition**
   - ✗ Wrong: `while ($counter < $numberOfValues)` when you want the full number of values including the last one
   - ✓ Correct: `while ($counter <= $numberOfValues)`

3. **Forgetting the loop runs once anyway**
   - Even if the condition is false at the start, a `do...while` loop still executes the code block once

## Test Plan

| FR  | Requirement                       | Test Description                                              | Expected Result        |
|-----|-----------------------------------|---------------------------------------------------------------|------------------------|
| FR1 | (not required)                    | N/A                                                           | N/A                    |
| FR2 | (not required)                    | N/A                                                           | N/A                    |
| FR3 | (not required)                    | N/A                                                           | N/A                    |
| FR4 | (not required)                    | N/A                                                           | N/A                    |
| FR5 | (N/A)                             | N/A                                                           | N/A                    |
| FR6 | (N/A)                             | N/A                                                           | N/A                    |
| FR7 | (N/A)                             | N/A                                                           | N/A                    |
| FR8 | Demonstrate do...while example    | Visit increment_example.php and verify final value of i     | Output is correct      |
| FR9 | Counting do...while loop          | Visit yourtask.php and verify counter increments to your limit | Output is correct |
| FR10| Counter variable works correctly   | Verify the counter increments by 1 each pass and loop runs correct times | Output is correct |

## Evidence

To demonstrate mastery of Site 8, you should be able to:

1. ✅ Explain why the `do...while` loop runs once before checking the condition
2. ✅ Show the variable that controls the loop count
3. ✅ Explain why a do...while differs from a while loop
4. ✅ Write your own `do...while` loop with a custom limit
5. ✅ Screenshot your task page showing the counting output

For database-related requirements (FR5-FR7), include a screenshot of your `.env` file as evidence.