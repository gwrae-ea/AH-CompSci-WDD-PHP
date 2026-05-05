# Task 5: Assignment Operators

## Technical Explanation

Assignment operators are used to assign values to variables and to perform operations while assigning. They provide shortcuts for common operations, making code more concise and readable.

**Simple Assignment Operator:**
- `=` assigns the value on the right to the variable on the left

**Compound Assignment Operators** combine an operation with assignment:
- `+=` adds to the current value and assigns the result
- `-=` subtracts from the current value and assigns the result
- `*=` multiplies the current value and assigns the result
- `/=` divides the current value and assigns the result
- `%=` takes the modulus of the current value and assigns the result

These operators are shortcuts; for example, `$x += 5` is equivalent to `$x = $x + 5`.

## Analysis

### End User Requirements

1. Users can assign values to variables using the = operator
2. Users can use compound operators to modify values efficiently
3. Users understand the equivalence between compound and expanded forms
4. Users can apply assignment operators in real-world scenarios (shopping carts, scores, inventory, etc.)

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
| FR8 | Display all six assignment operators working    | Required      |
| FR9 | Show equivalence (long form vs. compound form)  | Required      |
| FR10| Demonstrate real-world use cases                | Required      |
| FR11| Apply multiple operators in sequence            | Required      |

## Design

### Key Learning Points

1. **Compound operators save typing** - `$x += 5` is clearer than `$x = $x + 5`
2. **Order matters** - Operations apply left to right, and compound operators have precedence
3. **Real-world use cases** - Totals, scores, inventory, scaling, and time calculations
4. **Type coercion** - Assignment operators work with different types (integers, floats, strings)

### Demonstration Pages

- **simple.php** - Shows basic = operator
- **add_assign.php** - Shows += with score accumulation examples
- **subtract_assign.php** - Shows -= with countdown and inventory examples
- **multiply_assign.php** - Shows *= with scaling and discount examples
- **divide_assign.php** - Shows /= with distribution and scaling examples
- **modulus_assign.php** - Shows %= with even/odd checks and time calculations
- **combined.php** - Real-world examples (shopping cart, game scores, inventory, temperature, payroll)

### Pseudocode Example

```
CREATE variable: total = 0
CREATE variable: items = [12.99, 8.50, 5.75]

FOR each item in items
  ADD item to total (total += item)
END FOR

APPLY discount (total -= 3.00)
APPLY tax (total *= 1.08)

DISPLAY total
```

## Implementation

### Server Run Command

From the project root directory, run:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 5 - Assignment Operators"
```

Then open your browser to: `http://localhost:8000/index.php`

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.

### Common Errors

1. **Confusing = (assignment) with == (comparison)**
   - ✗ Wrong: `if ($x = 5) { }`  (assigns 5 to $x, not a comparison)
   - ✓ Correct: `if ($x == 5) { }`  (compares $x with 5)

2. **Forgetting the operation**
   - ✗ Wrong: `$x =+ 5`  (assigns positive 5, not adding)
   - ✓ Correct: `$x += 5`  (adds 5 to $x)

3. **Type mismatches**
   - ✗ Problem: `$count = "10"; $count += 5;`  (may cause unexpected behavior)
   - ✓ Better: Ensure consistent types before operations

4. **Order of operations**
   - ✗ Confusing: `$x = 5; $x *= 2 + 3;`  (multiplies by result of 2+3, not by 2)
   - ✓ Clear: `$x = 5; $x *= 5;`  or use parentheses if complex

5. **Division by zero**
   - ✗ Problem: `$x /= 0;`  (causes a division by zero warning)
   - ✓ Check: `if ($divisor != 0) { $x /= $divisor; }`

### Notes

- Compound operators execute the operation and assignment atomically
- Assignment operators work from left to right (left-associative)
- Modulus (%) only works with integers; floats are converted
- String concatenation can also use `.=` (not shown in this task, but mentioned for completeness)

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
| FR8 | Display all assignment operators   | Visit each operator page; verify output matches expected results    | All outputs correct    |
| FR9 | Show equivalence (short vs. long)  | Compare compound form with expanded form on each page               | Both forms equivalent  |
| FR10| Demonstrate real-world use cases   | Visit combined.php; review shopping cart, scores, inventory examples| All examples work      |
| FR11| Apply multiple operators in sequence| Edit yourtask.php; create chain of operations; verify final result | Custom code works  |

## Evidence

To demonstrate mastery of Site 5, you should be able to:

1. ✅ Visit each demonstration page and explain what each operator does
2. ✅ Predict the output before running the code
3. ✅ Identify when to use each compound operator
4. ✅ Explain how `+=` is equivalent to `= + `
5. ✅ Write a chain of assignment operations in yourtask.php
6. ✅ Identify and fix common errors (e.g., `=+ 5` instead of `+= 5`)
7. ✅ Screenshot showing yourtask.php with your own working assignment operators

For database-related requirements (FR5-FR7), include a screenshot of your `.env` file as evidence.

---

**Ready to move to Site 6?** Once you've completed all tests above, proceed to the next lesson.
