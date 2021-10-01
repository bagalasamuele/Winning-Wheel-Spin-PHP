FROM  eu.gcr.io/box2box-cloud/python-base:latest

RUN pip3 install -U pip setuptools wheel pipenv
COPY ./Pipfile /Pipfile
COPY ./Pipfile.lock /Pipfile.lock

RUN pipenv install --system --deploy

COPY . /web
WORKDIR /web

EXPOSE 8000
