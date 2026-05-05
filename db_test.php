<?php

declare(strict_types=1);

require __DIR__ . '/db.php';

try {
    $pdo = getDatabaseConnection();
    $version = $pdo->query('SELECT VERSION() AS version')->fetch();

    echo "Database connection successful" . PHP_EOL;
    echo 'MySQL version: ' . ($version['version'] ?? 'Unknown') . PHP_EOL;
} catch (Throwable $exception) {
    fwrite(STDERR, 'Connection failed: ' . $exception->getMessage() . PHP_EOL);
    exit(1);
}
