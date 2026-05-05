# Task 11: Numeric Array

## Technical Explanation

Numeric arrays can store numbers, strings, and other values, but their indexes are represented by numbers. By default, the first index is `0`, then `1`, `2`, and so on.

You can create a numeric array using the `array()` function or by assigning values directly to numbered indexes.

This lesson focuses on creating a one-dimensional array of integers, finding the total using a running total, and calculating the average.

## Analysis

### End User Requirements

1. Users can create a numeric array with multiple values
2. Users can calculate totals and averages using loops
3. Users can use array functions like `count()`, `sum()`, `max()`, `min()`
4. Users can work with statistics on numeric data

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
| FR8 | Demonstrate numeric array creation              | Required      |
| FR9 | Create custom numeric array with statistics | Required      |
| FR10| Calculate minimum and maximum values         | Required      |

## Design

### Key Learning Points

1. Numeric arrays use numbered indexes starting from `0`
2. Arrays can be created with `array()` or by manual index assignment
3. A running total variable adds each value one at a time
4. The average is the total divided by the number of elements
5. Assigning to index `13` creates that index and leaves gaps if earlier indexes do not exist

### Demonstration Pages

- `numeric_array_example.php` - shows both ways of creating numeric arrays
- `totals_average_example.php` - totals an array and calculates its average
- `yourtask.php` - the task workspace with the index 13 experiment

### Pseudocode Example

```
SET numbers to an array of 10 integers
SET total to 0

FOR EACH value IN numbers
  total = total + value
END FOR EACH

SET average to total / number of elements
DISPLAY total
DISPLAY average

SET numbers[13] to 99
DISPLAY the indexes and values in the array
```

## Implementation

### Server Run Command

From the project root directory, run:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 11 - Numeric Array"
```

Then open your browser to: `http://localhost:8000/index.php`

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.

### Common Errors

1. **Forgetting to initialize the running total**
   - ✗ Wrong: using `$total += $value;` before `$total` is set
   - ✓ Correct: `$total = 0;` before the loop starts

2. **Dividing by the wrong count for the average**
   - ✓ Use `count($numbers)` to get the number of elements in the array

3. **Assuming PHP fills every missing index automatically**
   - Assigning `$numbers[13] = 99;` creates index `13`, but does not fill indexes `10`, `11`, and `12`

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
| FR8 | Numeric array creation         | Visit numeric_array_example.php and verify both creation methods work | Output is correct |
| FR9 | Create custom array with stats | Visit yourtask.php and verify your array displays with totals and averages | Output is correct |
| FR10| Calculate min/max              | Visit yourtask.php and verify maximum and minimum are displayed        | Output is correct |

## Evidence

To demonstrate mastery of Site 11, you should be able to:

1. ✅ Create a numeric array with multiple values
2. ✅ Explain how to calculate totals using a loop
3. ✅ Explain how to calculate averages
4. ✅ Use `max()` and `min()` functions on arrays
5. ✅ Screenshot your task page showing all statistics

For database-related requirements (FR5-FR7), include a screenshot of your `.env` file as evidence.
