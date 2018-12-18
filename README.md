Weather Forecast Module
==================================

The Weather Forecast REST API allows you to request both forecasts and historical weather data from the past month.


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
```

The module is now active on the route `forecast/` according to the API documentation. You may try it out on the route `json/forecast` to get results in JSON format.

Optionally you may copy the API documentation.

```
rsync -av vendor/daib17/forecast/content/index.md content/forecast-api.md
```

The API documentation is now available through the route `forecast-api`.



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

Scaffold a sample Anax installation `anax-site-develop` into the directory `forecast`.

```
$ anax create forecast anax-site-develop
$ cd forecast
```

Point your webserver to `forecast/htdocs` and Anax should display a Home-page.



Dependency
------------------

This is a Anax modulen and primarly intended to be used together with the Anax framework.



License
------------------

This software carries a MIT license. See [LICENSE.txt](LICENSE.txt) for details.



```
Copyright (c) 2018 Daniel Ibanez
```
