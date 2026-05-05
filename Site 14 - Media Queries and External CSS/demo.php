<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo - Site 14</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Responsive Demo</h1>
    <p>Resize the browser and use print preview to see media query behavior.</p>
  </header>

  <main>
    <div class="grid">
      <article class="card"><h3>Card 1</h3><p>Three columns on large screens.</p></article>
      <article class="card"><h3>Card 2</h3><p>Two columns at max-width 900px.</p></article>
      <article class="card"><h3>Card 3</h3><p>One column at max-width 600px.</p></article>
      <article class="card"><h3>Card 4</h3><p>Print view removes no-print content.</p></article>
      <article class="card"><h3>Card 5</h3><p>Text and spacing are simplified for print.</p></article>
      <article class="card"><h3>Card 6</h3><p>All rules are in external CSS only.</p></article>
    </div>

    <p class="no-print">This line should disappear in print mode.</p>

    <p><a href="index.php">Back to Site 14 index</a></p>
  </main>
</body>
</html>
