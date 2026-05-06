# Task 14: Media Queries in External CSS

## Technical Focus

This task focuses entirely on media queries in an external stylesheet, using:

- `@media screen`
- `@media print`
- `max-width`

No other media query conditions are required for this site.

## End User Requirements

1. User can view the page in desktop layout.
2. User can view adapted layouts at lower screen widths.
3. User can open print preview and see print-specific formatting.
4. User can confirm that print-hidden content is removed.

## Functional Requirements

| FR  | Requirement | Status |
|-----|-------------|--------|
| FR1 | External CSS file linked on all Site 14 pages | Required |
| FR2 | Media query for screen with max-width 900px rule used | Required |
| FR3 | Media query for screen with max-width 600px rule used | Required |
| FR4 | Media query for print rule used | Required |
| FR5 | Content marked no-print hidden in print view | Required |

## Design Notation for Media Query Application

Use the notation below when planning and justifying your CSS decisions.

### Notation Legend

- `S0` = Base screen style (no media query)
- `S1` = `@media screen and (max-width: 900px)`
- `S2` = `@media screen and (max-width: 600px)`
- `P1` = `@media print`

### Breakpoint Intent Map

| Code | Trigger | Layout Intent | Typical Rule Targets |
|------|---------|---------------|----------------------|
| S0 | Default screen | Desktop-first layout | `main`, `.grid`, `.card`, colors |
| S1 | Screen <= 900px | Tablet adaptation | `.grid` columns, spacing |
| S2 | Screen <= 600px | Mobile adaptation | `.grid` to 1 column, tighter padding |
| P1 | Print output | Ink-friendly print layout | `body`, `header`, `.no-print`, links |

### Rule Notation Examples

- `S0.grid = 3col`
- `S1.grid = 2col`
- `S2.grid = 1col`
- `P1.no-print = hidden`
- `P1.colors = black-on-white`

### Design Trace Table

Use this table to connect your implementation to your design intent.

| Selector | S0 | S1 | S2 | P1 |
|----------|----|----|----|----|
| `.grid` | 3 columns | 2 columns | 1 column | keep readable |
| `.card` | standard padding | unchanged or slightly reduced | reduced padding | simple border and white background |
| `.no-print` | visible | visible | visible | hidden |
| `header` | colored banner | same structure | reduced padding | black text, no color fill |

## Implementation Checklist

1. Add media query rules in `style.css`.
2. Confirm responsive grid changes at each max-width breakpoint.
3. Confirm print styling removes decorative backgrounds.
4. Confirm `.no-print` elements are not visible in print preview.

## Test Plan

| Test ID | Test | Expected Result |
|--------|------|-----------------|
| MQ-1 | Open demo page at large width | 3-column layout |
| MQ-2 | Reduce width to <=900px | 2-column layout |
| MQ-3 | Reduce width to <=600px | 1-column layout |
| MQ-4 | Open print preview | Black text, simplified style |
| MQ-5 | Print preview checks `.no-print` | `.no-print` content hidden |

## Run Command

```bash
/usr/bin/php -S 0.0.0.0:8000 -t "Site 14 - Media Queries and External CSS"
```

Then open `http://localhost:8000/index.php`.
