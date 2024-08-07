#!/bin/bash

# Run Laravel migrations
php artisan migrate --force

# Execute the main container process (CMD)
exec "$@"
