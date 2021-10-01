#!/bin/sh

set -o errexit
set -o nounset
set -o xtrace

export $(grep -v '^#' .env | xargs)
python manage.py migrate
python manage.py collectstatic --no-input
gunicorn -c ./deployment/test/gunicorn.conf.py backend.wsgi:application
