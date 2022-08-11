(function () {
        var items = {
            English: 'en',
            Dutch: 'nl',
            Ukrainian: 'uk',
            Arabic: 'ar',
            Italian: 'it',
            Chinese: 'zh',
            Polish: 'pl',
            Danish: 'da',
            Hungarian: 'hu',
            Russian: 'ru',
            French: 'fr',
            Spanish: 'es',
            Romanian: 'ro',
            Greek: 'el',
            Swedish: 'sv',
            Turkish: 'tr',
            Indonesian: 'id',
            Portuguese: 'pt',
            Hebrew: 'he',
            German: 'de',
            Malay: 'ms',
            Norwegian: 'no',
            Farsi: 'fa',
        };
        var currentLocale = $('html').attr('lang');

        var currentLocaleName = Object.keys(items).find(function (key) {
            return items[key] === currentLocale;
        });

        $('.dropdown-title').text(currentLocaleName);

        $('.dropdown-menu-content')
            .append(Object.keys(items).sort().map(function (item) {
                return $('<li>').text(item);
            }))
            .click(function (e) {
                var nextLocaleName = e.target.innerText;
                if (nextLocaleName === currentLocaleName) {
                    e.stopPropagation();
                } else {
                    document.cookie = 'locale=' + items[nextLocaleName] + ';path=/';
                    location.reload(true);
                }

            });

        $([].find.call($('.dropdown-menu li'), function (item) {
            return item.innerText === currentLocaleName;
        })).addClass('active');

        function insertParam(key, value) {
            key = encodeURIComponent(key);
            value = encodeURIComponent(value);

            var kvp = document.location.search.substr(1).split('&');
            if (kvp == '') {
                document.location.search = '?' + key + '=' + value;
            }
            else {

                var i = kvp.length;
                var x;
                while (i--) {
                    x = kvp[i].split('=');

                    if (x[0] === key) {
                        x[1] = value;
                        kvp[i] = x.join('=');
                        break;
                    }
                }

                if (i < 0) {
                    kvp[kvp.length] = [key, value].join('=');
                }

                //this will reload the page, it's likely better to store this until finished
                document.location.search = kvp.join('&');
            }
        }
})();
