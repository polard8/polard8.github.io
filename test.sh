#!/bin/bash

VERSION="1.0.0"

echo "This is a test"

if [ "$1" == "-v" ] || [ "$1" == "--version" ]; then
    echo "Version: $VERSION"
fi
echo "Script completed."
