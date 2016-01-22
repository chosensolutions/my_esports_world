#!/usr/bin/env bash
browser-sync start --proxy="localhost:8000" --files="public/build/app.js, public/build/app.css, public/app/js/**/*.html"