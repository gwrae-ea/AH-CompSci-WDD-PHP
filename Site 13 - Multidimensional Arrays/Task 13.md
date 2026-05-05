# Task 13: Multidimensional Arrays

## Technical Explanation

Multidimensional arrays are arrays that contain other arrays as elements. The most common type is a two-dimensional (2D) array, where each element in the main array is itself an array. This creates a hierarchical structure similar to a spreadsheet with rows and columns.

Multidimensional arrays use multiple indexes to access values. For example, in a 2D array, you use two indices: one for the outer array and one for the inner array.

**Important:** Never use multidimensional array indexes directly inside double quotes. Use concatenation or variable syntax outside the quotes.

## Analysis

### End User Requirements

1. Users can create a 2D array with nested structure
2. Users can access nested values using multiple indexes
3. Users can use nested foreach loops to traverse multidimensional arrays
4. Users can choose real-world scenarios for 2D arrays

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
| FR8 | Create a 2D multidimensional array              | Required      |
| FR9 | Create custom 2D array with 3+ categories    | Required      |
| FR10| Access nested values with multiple indexes   | Required      |

## Design

### Key Learning Points

1. Multidimensional arrays nest arrays within arrays
2. Two-dimensional arrays are the most common (arrays within arrays)
3. Use multiple indexes to access nested values: $array['key1']['key2']
4. Nested foreach loops allow traversal of all levels
5. Perfect for hierarchical or grouped data (students with subjects, employees by department, etc.)

### Demonstration Pages

- `multidimensional_array_example.php` - shows product inventory organized by category
- `student_marks_example.php` - demonstrates the lesson example with student marks
- `yourtask.php` - practice workspace with employee organization by department

### Pseudocode Example

```
CREATE 2D array with departments as main keys
  SET departments['engineering'] to array of employee names and salaries
  SET departments['sales'] to array of employee names and salaries
  SET departments['operations'] to array of employee names and salaries

FOR EACH department => staff IN departments
  FOR EACH employee => salary IN staff
    DISPLAY employee and salary
  END FOR EACH
END FOR EACH

DISPLAY specific nested value using array['key1']['key2']
```

## Implementation

### Server Run Command

From the project root directory, run:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 13 - Multidimensional Arrays"
```

Then open your browser to: `http://localhost:8000/index.php`

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.

### Common Errors

1. **Using double quotes for nested array access**
   - ✗ Wrong: `echo "Value is $array['key1']['key2']";`
   - ✓ Correct: `echo "Value is " . $array['key1']['key2'];`

2. **Forgetting to quote keys at any level**
   - ✗ Wrong: `$array[key1][key2] = "value"`
   - ✓ Correct: `$array['key1']['key2'] = "value"`

3. **Incorrect nesting in nested loops**
   - ✗ Wrong: Loop variables not matching the nesting structure
   - ✓ Correct: Use nested foreach to match array nesting depth

4. **Accessing wrong levels**
   - ✗ Wrong: `$array['key1']` when trying to get nested value
   - ✓ Correct: `$array['key1']['key2']` for 2D access

## Test Plan

| FR  | Requirement                    | Test Description                                                   | Expected Result   |
|-----|--------------------------------|---------------------------------------------------------------------|-------------------|
| FR1 | (not required)                 | N/A                                                                 | N/A               |
| FR2 | (not required)                 | N/A                                                                 | N/A               |
| FR3 | (not required)                 | N/A                                                                 | N/A               |
| FR4 | (not required)                 | N/A                                                                 | N/A               |
| FR5 | (N/A)                          | N/A                                                                 | N/A               |
| FR6 | (N/A)                          | N/A                                                                 | N/A               |
| FR7 | (N/A)                          | N/A                                                                 | N/A               |
| FR8 | Create 2D array                | Visit yourtask.php and verify the example with nested loops works | Output is correct |
| FR9 | Create custom 2D array         | Visit yourtask.php and verify your array has 3+ categories       | Output is correct |
| FR10| Access nested values           | Visit yourtask.php and verify double-bracket access works        | Output is correct |

## Evidence

To demonstrate mastery of Site 13, you should be able to:

1. ✅ Create a 2D multidimensional array for a real-world scenario
2. ✅ Explain the nested structure with multiple levels
3. ✅ Access individual nested values using double brackets
4. ✅ Use nested foreach loops to display all data
5. ✅ Screenshot your task page showing your multidimensional array working

For database-related requirements (FR5-FR7), include a screenshot of your `.env` file as evidence.
