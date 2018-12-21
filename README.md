Weather Forecast Module
==================================

[![Build Status](https://travis-ci.com/daib17/forecast.svg?branch=master)](https://travis-ci.com/daib17/forecast/)
[![CircleCI](https://circleci.com/gh/daib17/forecast.svg?style=svg)](https://circleci.com/gh/daib17/forecast)
[![Build Status](https://scrutinizer-ci.com/g/daib17/forecast/badges/build.png?b=master)](https://scrutinizer-ci.com/g/daib17/forecast/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/daib17/forecast/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/daib17/forecast/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/daib17/forecast/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/daib17/forecast/?branch=master)


The Weather Forecast module allows you to request both forecasts and historical weather data from the past month.


Table of content
------------------------------------

* [Install as Anax module](#Install-as-Anax-module)
* [Install using scaffold postprocessing file](#Install-using-scaffold-postprocessing-file)
* [Install and setup Anax](#Install-and-setup-Anax)
* [Dependency](#Dependency)
* [License](#License)

You can also read this [documentation online](https://github.com/daib17/forecast).


Install as Anax module
------------------------------------

This is how you install the module into an existing Anax installation.

Install using composer.

```
composer require daib17/forecast
```

Copy the needed configuration and setup the forecast as a route handler for the route `forecast`.

```
rsync -av vendor/daib17/forecast/config ./
rsync -av vendor/daib17/forecast/src ./
rsync -av vendor/daib17/forecast/test ./
rsync -av vendor/daib17/forecast/view ./
```

The module is now active on the route `forecast/`. You may try it out on the route `json/forecast` to get results in JSON format.


Install using scaffold postprocessing file
------------------------------------

The module supports a postprocessing installation script, to be used with Anax scaffolding. The script executes the default installation, as outlined above.

```text
bash vendor/daib17/forecast/.anax/scaffold/postprocess.d/700_forecast.bash
```

The postprocessing script should be run after the `composer require` is done.


Install and setup Anax
------------------------------------

You need a Anax installation, before you can use this module. You can create a sample Anax installation, using the scaffolding utility [`anax-cli`](https://github.com/canax/anax-cli).

Scaffold a sample Anax installation `anax-site-develop` into the directory `weather`.

```
$ anax create weather anax-site-develop
$ cd weather
```

Point your webserver to `weather/htdocs` and Anax should display a Home-page.


Dependency
------------------

This is a Anax modulen and primarly intended to be used together with the Anax framework.


License
------------------

This software carries a MIT license. See [LICENSE.txt](LICENSE.txt) for details.



```
Copyright (c) 2018 Daniel Ibanez
```
