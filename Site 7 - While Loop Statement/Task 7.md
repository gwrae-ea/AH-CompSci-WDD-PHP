# Task 7: Conditional Iteration (while)

## Technical Explanation

The `while` statement executes a block of code if and as long as a test expression is true. PHP checks the condition before each pass through the loop. If the condition becomes false, the loop stops.

This makes `while` useful for conditional iteration, where the code should continue running until a counter or changing value reaches a limit.

**Syntax:**

```php
while (condition) {
  code to be executed;
}
```

## Analysis

### End User Requirements

1. Users can explain how a `while` loop works
2. Users can identify the condition that controls the loop
3. Users can write a countdown using a `while` loop
4. Users can use a decrementing counter in a while loop condition

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
| FR8 | Demonstrate the provided while-loop example     | Required      |
| FR9 | Write a custom countdown while loop             | Required      |
| FR10| Use a decrementing counter variable             | Required      |

## Design

### Key Learning Points

1. `while` checks the condition before each pass
2. The loop stops when the condition becomes false
3. A counter variable is commonly used to control the number of iterations
4. Updating the counter inside the loop is essential

### Demonstration Pages

- `decrement_example.php` - the lesson example with `$i` and `$num`
- `times_table_example.php` - a configurable times table using `while`
- `yourtask.php` - the task workspace for your own solution

### Pseudocode Example

1. Set the number of values to the required count.
2. Set the times table number to the chosen value.
3. Set the counter to 1.
4. While the counter is less than or equal to the number of values, repeat steps 5 to 7.
5. Multiply the counter by the times table number to get the result.
6. Display the counter, the times table number, and the result.
7. Increase the counter by 1.
8. End the loop once the counter exceeds the number of values.

## Implementation

### Server Run Command

From the project root directory, run:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 7 - While Loop Statement"
```

Then open your browser to: `http://localhost:8000/index.php`

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.

### Common Errors

1. **Forgetting to increment the counter**
   - ✗ Wrong: `while ($counter <= $numberOfValues) { echo $counter; }`
   - ✓ Correct: `while ($counter <= $numberOfValues) { echo $counter; $counter++; }`

2. **Using the wrong loop condition**
   - ✗ Wrong: `while ($counter < $numberOfValues)` when you want the full number of values including the last one
   - ✓ Correct: `while ($counter <= $numberOfValues)`

3. **Not setting the controlling variables at the start**
   - ✗ Wrong: changing the times table value randomly inside the loop
   - ✓ Correct: set `$numberOfValues` and `$timesTable` before the loop starts

## Test Plan

| FR  | Requirement                       | Test Description                                                 | Expected Result     |
|-----|-----------------------------------|------------------------------------------------------------------|---------------------|
| FR1 | (not required)                    | N/A                                                              | N/A                 |
| FR2 | (not required)                    | N/A                                                              | N/A                 |
| FR3 | (not required)                    | N/A                                                              | N/A                 |
| FR4 | (not required)                    | N/A                                                              | N/A                 |
| FR5 | (N/A)                             | N/A                                                              | N/A                 |
| FR6 | (N/A)                             | N/A                                                              | N/A                 |
| FR7 | (N/A)                             | N/A                                                              | N/A                 |
| FR8 | Demonstrate while-loop example    | Visit decrement_example.php and verify final values of i and num | Output is correct |
| FR9 | Countdown while loop              | Visit yourtask.php and verify countdown from your chosen number to 1 | Output is correct |
| FR10| Counter variable works correctly   | Verify the counter decrements by 1 each pass and controls the loop | Output is correct |

## Evidence

To demonstrate mastery of Site 7, you should be able to:

1. ✅ Explain how the `while` loop countdown works
2. ✅ Show the variable that controls the countdown
3. ✅ Explain the condition that causes the loop to stop when counter reaches 0
4. ✅ Write your own `while` loop with a custom starting number
5. ✅ Screenshot your task page showing the countdown output

For database-related requirements (FR5-FR7), include a screenshot of your `.env` file as evidence.

<!-- FR_STANDARD_START -->

## Functional Requirements (Standard Format)

The solution is required to:

| ID | Requirement |
|---|---|
| FR1 | N/A |
| FR2 | N/A |
| FR3 | N/A |
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
| FR8 | N/A |
| FR9 | N/A |
| FR10 | N/A |
| FR11 | N/A |

<!-- FR_STANDARD_END -->
