# Task 9: Fixed Iteration (foreach)

## Technical Explanation

The `foreach` statement is used to loop through arrays. For each pass, the value of the current array element is assigned to a variable, and then PHP moves to the next element until the whole array has been processed.

This makes `foreach` ideal for lists of names, scores, products, or any other group of values stored in an array.

**Syntax:**

```php
foreach ($array as $value) {
  code to be executed;
}
```

## Analysis

### End User Requirements

1. Users can explain how a `foreach` loop works
2. Users can create and loop through an array of string values
3. Users can check whether a chosen name exists in the array
4. Users can display a suitable message when the name is found

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
| FR8 | Demonstrate the provided foreach example        | Required      |
| FR9 | Search through an array of names                | Required      |
| FR10| Display a suitable message when a name is found | Required      |

## Design

### Key Learning Points

1. `foreach` loops are designed for arrays
2. Each loop pass gives access to the next array value
3. `foreach` is a simple way to search a list of strings
4. A boolean variable can help track whether a name was found

### Demonstration Pages

- `array_values_example.php` - the lesson example traversing an array of numbers
- `name_search_example.php` - a simple array search for a name
- `yourtask.php` - the task workspace for your own solution

### Pseudocode Example

1. Store a list of names.
2. Set the target name to the name being searched for.
3. Set a found flag to false before starting the search.
4. For each name in the list, carry out steps 5 and 6.
5. Check if the current name matches the target name.
6. If it matches, display a suitable found message and set the found flag to true.
7. After all names have been checked, test whether the found flag is still false.
8. If it is still false, display a name not found message.

## Implementation

### Server Run Command

From the project root directory, run:

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 9 - Foreach Loop Statement"
```

Then open your browser to: `http://localhost:8000/index.php`

### Server Stop Command

Press **Ctrl+C** in the terminal running the PHP server.

### Common Errors

1. **Using a normal variable instead of an array**
   - ✗ Wrong: `$names = "Ben";`
   - ✓ Correct: `$names = array("Aisha", "Ben", "Chris");`

2. **Comparing the wrong values**
   - ✗ Wrong: `if ($names == $targetName)`
   - ✓ Correct: `if ($name == $targetName)`

3. **Forgetting to handle the not found case**
   - Use a variable like `$nameFound` so you can display a message when the search ends without a match

## Test Plan

| FR  | Requirement                       | Test Description                                                  | Expected Result        |
|-----|-----------------------------------|-------------------------------------------------------------------|------------------------|
| FR1 | (not required)                    | N/A                                                               | N/A                    |
| FR2 | (not required)                    | N/A                                                               | N/A                    |
| FR3 | (not required)                    | N/A                                                               | N/A                    |
| FR4 | (not required)                    | N/A                                                               | N/A                    |
| FR5 | (N/A)                             | N/A                                                               | N/A                    |
| FR6 | (N/A)                             | N/A                                                               | N/A                    |
| FR7 | (N/A)                             | N/A                                                               | N/A                    |
| FR8 | Demonstrate foreach example       | Visit array_values_example.php and verify values 1 to 5 are shown | Output is correct      |
| FR9 | Create custom array with 5+ items | Visit yourtask.php and verify your custom array is created      | Output is correct |
| FR10| Search array for target item      | Visit yourtask.php and verify search works and messages display  | Output is correct |

## Evidence

To demonstrate mastery of Site 9, you should be able to:

1. ✅ Explain how `foreach` moves through an array
2. ✅ Create your own array with 5 or more items
3. ✅ Show the target item you are searching for
4. ✅ Demonstrate messages for both found and not-found cases
5. ✅ Screenshot your task page showing the search results

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
