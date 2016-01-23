#!/usr/bin/env bash
cd ..
browser-sync start --proxy="localhost:8000" --files="public/build/*, public/app/js/**/*.html, app/**/*.php"