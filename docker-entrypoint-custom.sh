#!/bin/bash
set -e

# Fix Apache MPM conflict - disable event and worker, keep only prefork
if [ -f /etc/apache2/mods-enabled/mpm_event.load ]; then
    rm -f /etc/apache2/mods-enabled/mpm_event.load
    rm -f /etc/apache2/mods-enabled/mpm_event.conf
fi

if [ -f /etc/apache2/mods-enabled/mpm_worker.load ]; then
    rm -f /etc/apache2/mods-enabled/mpm_worker.load
    rm -f /etc/apache2/mods-enabled/mpm_worker.conf
fi

# Ensure prefork is enabled
if [ ! -f /etc/apache2/mods-enabled/mpm_prefork.load ]; then
    ln -sf /etc/apache2/mods-available/mpm_prefork.load /etc/apache2/mods-enabled/
    ln -sf /etc/apache2/mods-available/mpm_prefork.conf /etc/apache2/mods-enabled/
fi

# Run the original WordPress entrypoint
exec docker-entrypoint.sh "$@"
