# Task 4: Comparison and Logical Operators

## Technical Explanation

Operators are symbols that help you perform operations on variables and values. Comparison operators allow you to compare two values, returning true or false. Logical operators allow you to combine multiple comparisons into complex conditions.

**Comparison Operators** evaluate whether conditions are true:
- `==` checks if values are equal
- `!=` checks if values are not equal
- `>` checks if left is greater than right
- `<` checks if left is less than right
- `>=` checks if left is greater than or equal to right
- `<=` checks if left is less than or equal to right

**Logical Operators** combine or modify conditions:
- `and` / `&&` - both conditions must be true
- `or` / `||` - at least one condition must be true
- `!` - reverses the logic (NOT)

These operators form the foundation of conditional logic in PHP (if statements, loops, validation).

## Analysis

### End User Requirements

1. Users can compare two values using comparison operators
2. Users can combine multiple comparisons using logical operators
3. Users can understand the difference between `and`/`or` and `&&`/`||`
4. Users can write conditions that evaluate correctly in real-world scenarios

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
| FR8 | Display comparison operators working correctly  | Required      |
| FR9 | Display logical operators working correctly     | Required      |
| FR10| Demonstrate combined operator expressions       | Required      |
| FR11| Test complex real-world conditional logic       | Required      |

## Design

### Key Learning Points

1. **Comparison Operators** - Use === cautiously; prefer == for basic equality
2. **Logical Operators** - `&&` has higher precedence than `||`
3. **Truth Tables** - Understand AND/OR truth tables for combinations
4. **Short-circuit Evaluation** - Logical operators stop evaluating when result is known

### Demonstration Pages

- **equality.php** - Shows == and != in action
- **relational.php** - Shows >, <, >=, <= operators
- **logical_and.php** - Shows `and` and `&&` operators
- **logical_or.php** - Shows `or` and `||` operators
- **logical_not.php** - Shows `!` operator
- **combined.php** - Real-world examples (loan eligibility, discounts, premium members)

### Pseudocode Example

```
CREATE two variables: age and income
IF age >= 18 AND income >= 40000 THEN
  DISPLAY "Loan approved"
ELSE IF age >= 18 OR income >= 50000 THEN
  DISPLAY "Consider for review"
ELSE
  DISPLAY "Loan denied"
END IF
```

## Implementation

### Server Run Command

From the project root directory, run:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 4 - Comparison and Logical Operators"
```

Then open your browser to: `http://localhost:8000/index.php`

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.

### Common Errors

1. **Confusing = (assignment) with == (comparison)**
   - ✗ Wrong: `if ($age = 18) { }`
   - ✓ Correct: `if ($age == 18) { }`

2. **Operator precedence issues**
   - ✗ Wrong: `$a || $b && $c`  (AND evaluated first)
   - ✓ Correct: `($a || $b) && $c`  (use parentheses for clarity)

3. **Type coercion confusion**
   - ✗ Comparing: `"10" == 10` (true, due to type juggling)
   - ✓ Use: `"10" === 10` (false, strict comparison)

4. **Mixing `and`/`or` with `&&`/`||`**
   - `and` and `&&` mean the same thing but have different precedence
   - Prefer `&&` for conditional logic in if statements
   - `and` is rarely used; stick to `&&` for consistency

### Notes

- All comparison operators return a boolean (true or false)
- Logical operators allow complex decision-making
- Parentheses improve code readability and remove ambiguity
- Ternary operator `?: ` can be used: `$x ? "yes" : "no"`

## Test Plan

| FR  | Requirement                        | Test Description                                                    | Expected Result        |
|-----|------------------------------------|---------------------------------------------------------------------|------------------------|
| FR1 | (not required)                     | N/A                                                                 | N/A                    |
| FR2 | (not required)                     | N/A                                                                 | N/A                    |
| FR3 | (not required)                     | N/A                                                                 | N/A                    |
| FR4 | (not required)                     | N/A                                                                 | N/A                    |
| FR5 | (N/A)                              | N/A                                                                 | N/A                    |
| FR6 | (N/A)                              | N/A                                                                 | N/A                    |
| FR7 | (N/A)                              | N/A                                                                 | N/A                    |
| FR8 | Display comparison operators       | Visit equality.php, relational.php; verify == != > < >= <= work    | All outputs correct    |
| FR9 | Display logical operators          | Visit logical_and.php, logical_or.php, logical_not.php; test results | All outputs correct    |
| FR10| Combined operator expressions      | Visit combined.php; verify complex expressions work (e.g., loan eligibility) | All scenarios work  |
| FR11| Complex real-world conditional logic| Edit yourtask.php to create your own conditions; test with different values | Custom code works  |

## Evidence

To demonstrate mastery of Site 4, you should be able to:

1. ✅ Visit each demonstration page and explain what each operator does
2. ✅ Predict the output before running the code
3. ✅ Identify when to use `&&` vs `and` (and prefer `&&`)
4. ✅ Write a complex condition using multiple operators in yourtask.php
5. ✅ Explain operator precedence and the importance of parentheses
6. ✅ Screenshot showing yourtask.php with your own working condition

For database-related requirements (FR5-FR7), include a screenshot of your `.env` file as evidence.

---

**Ready to move to Site 5?** Once you've completed all tests above, proceed to the next lesson.
