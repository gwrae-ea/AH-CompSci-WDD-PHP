# Task 12: Associative Array

## Technical Explanation

Associative arrays are similar to numeric arrays in functionality but differ in their index. An associative array uses string keys instead of numeric indexes, creating a strong logical association between key and value.

For example, instead of using a numeric index, you can use an employee's name as the key and their salary as the value. This makes the code more readable and maintainable.

**Important:** Never use associative array keys directly inside double quotes. Use concatenation or variable syntax outside the quotes.

## Analysis

### End User Requirements

1. Users can create an associative array with meaningful string keys
2. Users can access values using string keys
3. Users can loop through an associative array using foreach
4. Users can choose real-world scenarios for associative arrays

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
| FR8 | Demonstrate associative array example | Required      |
| FR9 | Create custom associative array with 5+ pairs | Required      |
| FR10| Access individual values by string key        | Required      |

## Design

### Key Learning Points

1. String keys provide meaningful data relationships
2. Can be created with `array()` or by manual index assignment
3. Access values using string keys in square brackets
4. `foreach` loops work with $(key => value) syntax
5. Never display associated array keys directly in double quotes

### Demonstration Pages

- `associative_array_example.php` - shows both creation methods from the lesson
- `employee_salary_example.php` - practical example with employee data
- `yourtask.php` - practice workspace with student grades

### Pseudocode Example

```
CREATE associative array with meaningful string keys
SET array["key1"] to value1
SET array["key2"] to value2

FOR EACH key => value IN array
  DISPLAY key and value
END FOR EACH

DISPLAY specific value using array["key"]
```

## Implementation

### Server Run Command

From the project root directory, run:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 12 - Associative Array"
```

Then open your browser to: `http://localhost:8000/index.php`

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.

### Common Errors

1. **Using double quotes for array access**
   - ✗ Wrong: `echo "Value is $array['key']";`
   - ✓ Correct: `echo "Value is " . $array['key'];`

2. **Using numeric indexes instead of string keys**
   - ✗ Wrong: `$data[0] = "value"`
   - ✓ Correct: `$data["name"] = "value"`

3. **Forgetting quotes around string keys**
   - ✗ Wrong: `$array[key] = "value"`
   - ✓ Correct: `$array["key"] = "value"`

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
| FR8 | Associative array example      | Visit yourtask.php and verify the example works                  | Output is correct |
| FR9 | Create custom array            | Visit yourtask.php and verify your array has 5+ key-value pairs  | Output is correct |
| FR10| Access individual values       | Visit yourtask.php and verify at least 2 individual lookups work | Output is correct |

## Evidence

To demonstrate mastery of Site 12, you should be able to:

1. ✅ Create an associative array for a real-world scenario
2. ✅ Explain why string keys are more meaningful than numeric indexes
3. ✅ Access individual values using string keys
4. ✅ Loop through all entries using foreach
5. ✅ Screenshot your task page showing your custom array working

For database-related requirements (FR5-FR7), include a screenshot of your `.env` file as evidence.
