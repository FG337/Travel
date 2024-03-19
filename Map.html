<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Create Map Sample | Longdo Map</title>
    <style type="text/css">
        html,
        body {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            height: 100%;
        }

        #map {
            height: 100%;
            flex: 12;
        }

        #searchPlace {
            flex: 2;
            height: 100%;
            display: flex;
            flex-direction: column;
            padding: 20px;
            box-sizing: border-box;
            background-color: #f4f4f4;
            border-left: 1px solid #e0e0e0;
        }

        #search {
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            outline: none;
        }

        #search:focus {
            border-color: #3498db;
        }

        #suggest {
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-height: 200px;
            overflow-y: auto;
            padding: 4px;
            flex-direction: column;
            display: none;
            /* Add this line to hide suggest initially */
        }

        #suggest a {
            padding: 8px;
            text-decoration: none;
            color: #333;
        }

        #suggest a:hover {
            background-color: #f2f2f2;
        }

        #result {
            height: 100%;
            overflow-y: scroll;
            font-size: 16px;
        }
        
    </style>
    <script type="text/javascript" src="https://api.longdo.com/map/?key=575d09c47841056b8c630e86b127e3cb"></script>
    <script>
        var map;
        var search;
        var suggest; 
        //var result = map.location();
        //var result = map.location(longdo.LocationMode.Pointer);
        function init() {
            map = new longdo.Map({
                placeholder: document.getElementById('map')
            });

            search = document.getElementById('search');
            suggest = document.getElementById('suggest'); // Add this line to get the suggest element

            map.Search.placeholder(
                document.getElementById('result')
            );

            search.onkeyup = function (event) {
                if ((event || window.event).keyCode != 13)
                    return;
                doSearch();
            }

            search.oninput = function () {
                if (search.value.length < 3) {
                    suggest.style.display = 'none';
                    return;
                }
                else{
                    map.Search.suggest(search.value);
                }
                
            };

            map.Event.bind('suggest', function (result) {
                if (result.meta.keyword != search.value) return;

                suggest.innerHTML = '';
                for (var i = 0, item; item = result.data[i]; ++i) {
                    longdo.Util.append(suggest, 'a', {
                        innerHTML: item.d,
                        href: 'javascript:doSuggest(\'' + item.w + '\')'
                    });
                }
                suggest.style.display = 'flex';
            });

            //map.Route.add({ lon: 100, lat: 15 });
            //map.Route.add({ lon: 100.450053, lat: 13.885282 });
            //map.location(longdo.LocationMode.Geolocation);
            map.Route.search();
            map.Route.placeholder(document.getElementById('route'));
            map.Route.enableContextMenu();
            map.Route.auto(true);
            map.Search.search(KEYWORD, OPTIONS);
            map.Search.language(LANGUAGE);
        }

        function doSearch() {
            map.Search.search(search.value);
            suggest.style.display = 'none';
        }

        function doSuggest(value) {
            search.value = value;
            doSearch();
        }

    </script>
</head>

<body onload="init();">
    <div id="map"></div>
    <div id="searchPlace">
        <input id="search" placeholder="Search for a location" />
        <div id="suggest"></div>
        <div id="result"></div>
    </div>
</body>

</html>