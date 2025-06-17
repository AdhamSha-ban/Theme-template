#!/bin/bash

# SAFETY CHECK - show what would be deleted without actually deleting
echo "=== DRY RUN ==="
find . -name "node_modules" -type d -prune -print | xargs du -sh

# Confirmation prompt
read -p "This will delete all node_modules. Continue? (y/n) " -n 1 -r
echo

if [[ $REPLY =~ ^[Yy]$ ]]
then
    # ACTUAL DELETION
    echo "Removing node_modules..."
    find . -name "node_modules" -type d -prune -exec rm -rf '{}' +
    echo "Done. Your important files are untouched."
else
    echo "Cancelled."
fi
