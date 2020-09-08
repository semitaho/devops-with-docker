FROM ruby:2.6.0
RUN gem install bundler
COPY rails-example-project .

RUN apt-get update && apt-get install -y --allow-unauthenticated nodejs
RUN bundle install
RUN rails db:migrate
CMD ["rails", "s"]
