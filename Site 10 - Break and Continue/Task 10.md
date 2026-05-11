# Task 10: Break and Continue

## Technical Explanation

The `break` keyword is used to terminate a loop prematurely. As soon as PHP reaches `break`, the loop ends immediately and execution continues with the next statement after the loop.

The `continue` keyword is used to halt the current iteration of a loop, but it does not terminate the loop itself. Instead, PHP skips the remaining code in that pass and starts the next iteration.

These keywords are useful when you want more control over how a loop behaves.

## Analysis

### End User Requirements

1. Users can explain the difference between `break` and `continue`
2. Users can identify when each keyword is appropriate
3. Users can write their own loop using `break` or `continue`
4. Users can demonstrate the correct behavior of their chosen keyword

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
| FR8 | Demonstrate break and continue    | Required      |
| FR9 | Write custom loop with break or continue       | Required      |
| FR10| Show correct behavior for chosen keyword       | Required      |

## Design

### Key Learning Points

1. `break` exits the loop completely
2. `continue` skips only the current pass
3. Both keywords must be used inside loops
4. Conditional tests decide when each keyword runs

### Demonstration Pages

- `break_example.php` - the lesson example that stops when the counter reaches 3
- `continue_example.php` - the lesson example that skips the value 3 in an array
- `yourtask.php` - a workspace showing both keywords in action

### Pseudocode Example

1. Set the counter to zero.
2. While the counter is less than 10, repeat steps 3 to 6.
3. Increase the counter by 1.
4. Check if the counter equals 5.
5. If it does, stop the loop immediately without displaying anything further.
6. Otherwise, display the current counter value.
7. Store a list of values.
8. For each value in the list, carry out steps 9 and 10.
9. Check if the current value equals 4.
10. If it does, skip displaying this value and move on to the next one.
11. Otherwise, display the current value.

## Implementation

### Server Run Command

From the project root directory, run:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 10 - Break and Continue"
```

Then open your browser to: `http://localhost:8000/index.php`

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.

### Common Errors

1. **Using `break` when you only mean to skip one value**
   - `break` ends the whole loop, not just one iteration

2. **Using `continue` outside a loop**
   - `continue` only works inside loop structures

3. **Placing output after `continue` and expecting it to run**
   - Any code after `continue` in that iteration is skipped

## Test Plan

| FR  | Requirement                    | Test Description                                                     | Expected Result   |
|-----|--------------------------------|----------------------------------------------------------------------|-------------------|
| FR1 | (not required)                 | N/A                                                                  | N/A               |
| FR2 | (not required)                 | N/A                                                                  | N/A               |
| FR3 | (not required)                 | N/A                                                                  | N/A               |
| FR4 | (not required)                 | N/A                                                                  | N/A               |
| FR5 | (N/A)                          | N/A                                                                  | N/A               |
| FR6 | (N/A)                          | N/A                                                                  | N/A               |
| FR7 | (N/A)                          | N/A                                                                  | N/A               |
| FR8 | Understand both keywords           | Review both example patterns in yourtask.php explanation             | Both patterns clear |\n| FR9 | Write loop with break or continue | Visit yourtask.php and verify your loop uses your chosen keyword     | Output is correct |\n| FR10| Behavior is correct                | Verify loop behaves as expected with your chosen keyword         | Output is correct |

## Evidence

To demonstrate mastery of Site 10, you should be able to:

1. ✅ Explain the difference between `break` and `continue`
2. ✅ Explain when `break` or `continue` fits your scenario
3. ✅ Write a loop that uses your chosen keyword correctly
4. ✅ Show output that demonstrates the keyword working as intended
5. ✅ Screenshot your task page showing the loop behavior

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
