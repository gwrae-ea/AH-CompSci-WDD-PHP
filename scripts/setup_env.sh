#!/usr/bin/env bash
set -euo pipefail

echo "Installing PHP and MySQL extension packages..."
sudo apt update
sudo apt install -y php8.3-cli php-mysql composer

echo
echo "Environment ready."
echo "Use /usr/bin/php for MySQL work in this Codespace."
echo "Example: /usr/bin/php db_test.php"
echo "Composer is installed for convenience, but there is no composer.json dependency file in this repo."
echo
echo "Next steps:"
echo "1. Copy .env.example to .env"
echo "2. Fill in your database credentials"
echo "3. Run /usr/bin/php db_test.php"
