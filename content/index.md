---
title: "Weather Forecast REST API Documentation"
---
Weather Forecast REST API
=========================

The Weather Forecast REST API allows you to request both forecasts and historical weather data from the past month.

IP address (week's forecast):
```text
json/forecast?ip=[ip address]&period=0
```
Latitude/Longitude (last 30 days):

```text
json/forecast?lat=[latitude]&lon=[longitude]&period=1
```

Result:

```json
{
    "latitude":37.751,
    "longitude":-97.822,
    "timezone":"America\/Chicago",
    "currently":
    {
        "time":1544290893,
        "summary":"Partly Cloudy",
        "icon":"partly-cloudy-day",
        "nearestStormDistance":3,
        "nearestStormBearing":311,
        "precipIntensity":0,
        "precipProbability":0,
        "temperature":0.48,
        "apparentTemperature":-3.3,
        "dewPoint":-6.62,
        "humidity":0.59,
        "pressure":1030.5,
        "windSpeed":3.46,
        "windGust":3.57,
        "windBearing":41,
        "cloudCover":0.42,
        "uvIndex":2,
        "visibility":16.09,
        "ozone":270.01
    }
}
```
