#!/bin/bash

shared_data_path="./shared_data"

# Check operating system
if [[ "$OSTYPE" == "msys" || "$OSTYPE" == "cygwin" ]]; then
    if [ ! -d "$shared_data_path" ]; then
        mkdir "$shared_data_path"
        echo "Folder created."
    fi
    # Grant full permissions to the folder
    chmod -R 777 "$shared_data_path"

elif [[ "$OSTYPE" == "linux-gnu" || "$OSTYPE" == "darwin"* ]]; then
    if [ ! -d "$shared_data_path" ]; then
        mkdir -p "$shared_data_path"
        chmod 777 "$shared_data_path"
        echo "Folder created with full permissions."
    fi

else
    echo "Unknown operating system"
fi

docker-compose up -d