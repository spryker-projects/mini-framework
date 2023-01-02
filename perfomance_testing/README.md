# Spryker performance testing environment
This is a PoC to Spryker performance test environment to demonstrate [K6](https://k6.io/) usage.

## Local environment

The local environment built on the top of the docker and uses docker-compose to run containers. 
The PoC environment was tested on Linux host only, but it can be used on other platforms too of course.

> To run PoC docker and docker-compose is required!

### Configuration

Configuration file can be found in the root directory of the project as a .env file. The default values are now commited for simplicity, and not needed modifying (maybe the K6_HOSTENV if You would like to use e.g. local url as testing target).

#### Start application

To start the application simply run the following command in the project directory:

```bash
docker-compose up -d k6
```

The tests started to run immediately after the container created. To check the results run `docker-compose logs k6`, or run tests again the command below.

#### Run  tests

To run tests call the following command:

```bash
docker-compose run k6
```

#### Stop application
```bash
docker-compose stop k6

# or if you want to remove the containers
docker-compose down
```

### NewRelic usage

NewRelic is also integrated by the use of NewRelic statsd module container, and autmatically started with k6  to push testing environment statistics to report there. 

To use Your NewRelic account set _ACCOUNT_ID_, _API_KEY_ and _LICENCE_KEY_ environment variables in the .env file.

#### Application monitoring integration

To monitor the application further integration needs to be done. 

##### Backend
On the backend side a NewRelic PHP agent needed. It already configured on the CoreCommerce test machine, so it can be used immediately.

##### Frontend
On the frontend side we can add more detailed statistics by the usage of the NewRelic Browser agent. If You would like to use that too add NewRelic Browser agent javascript code to the demo application html head part which can be found here: https://docs.newrelic.com/docs/browser/browser-monitoring/installation/install-browser-monitoring-agent/#enable

---
## Tests

Tests are written by [K6 Framework](https://k6.io/).
The PoC contains only two basic test, one for the main page, and one for the catalog search. Tests can be run on 'local' and 'testing' hosts (default use local). The base test target url can be set in the _/services/b2c.json_ file. The catalog search terms random selected from a CSV feed file (_/data/feed.csv_).

Temporary I used https://www.de.b2c.demo-spryker.com/ as a demo shop environment which is quite slow and _http_req_duration test validation fails because of that. CoreCommerce spaceship's testing environment will be available to run this PoC, so the baseUrl needs to be updated to their testing environment url.
 
```
Otherwise if needed to use the host machine 'localhost' ip, set url to http://host.docker.internal appended with the port number.
```

Tests running configured to 1 iteration with 5 virtual users and to validate the results uses [thresholds](https://k6.io/docs/using-k6/thresholds/). The requirement is to maximum 0.01% can be failed of the requests, and the 95% of requests loadtime must be lower than 200ms. This configuration can be found in _/options/default.json_ file.

For more details about testing visit K6 documentation: https://k6.io/docs 