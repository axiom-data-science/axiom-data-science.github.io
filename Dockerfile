FROM ruby:2.4-slim-stretch

RUN apt-get update \
    && apt-get -y install build-essential \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/

WORKDIR /srv/jekyll

RUN useradd --system --home-dir=/srv/jekyll jekyll \
  && chown -R jekyll:jekyll /srv/jekyll

USER jekyll

RUN gem install bundler -v 2.3.26

COPY Gemfile .

RUN bundle install

COPY . .

EXPOSE 4000

CMD ["bundle", "exec", "jekyll", "serve"]
