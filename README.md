# Grafana Tempo OpenTracing Example

This is a simple example of how to use Grafana Tempo with OpenTracing in a simple Symfony app.

Most of the Docker Compose setup is taken from <https://github.com/grafana/tempo/tree/main/example/docker-compose>.

## Requirements

* Docker
* Local PHP >=8.1
* Symfony-CLI
* Composer

## How To Start

* Clone this repo
* Run `composer install`
* Run `docker compose up -d`
* Run `symfony serve`
* Open [`http://localhost:8000`](http://localhost:8000) in your browser to access the [Symfony app](./src/Controller/HelloAction.php).
  * Open [`http://localhost:8000/slow`](http://localhost:8000/slow) in your browser to access [a time-consuming endpoint](./src/Controller/SlowAction.php).
* Open [`http://localhost:3000`](http://localhost:3000) in your browser to access Grafana.
  * If you want to jump directly to the Tempo explore tab, follow [this link][tempo-explore]

[tempo-explore]: http://localhost:3000/explore?orgId=1&left=%7B%22datasource%22:%22tempo%22,%22queries%22:%5B%7B%22refId%22:%22A%22,%22datasource%22:%7B%22type%22:%22tempo%22,%22uid%22:%22tempo%22%7D,%22queryType%22:%22nativeSearch%22,%22serviceName%22:%22website%22%7D%5D,%22range%22:%7B%22from%22:%22now-1h%22,%22to%22:%22now%22%7D%7D
