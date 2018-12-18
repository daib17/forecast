#!/usr/bin/env bash
#
# daib17/weather-module
#
# Integrate the weather module onto an existing anax installation.
#

# Copy config
rsync -av vendor/daib17/forecast/config ./

# Copy src
rsync -av vendor/daib17/forecast/src ./

# Copy test
rsync -av vendor/daib17/forecast/test ./

# Copy view
rsync -av vendor/daib17/forecast/view ./
