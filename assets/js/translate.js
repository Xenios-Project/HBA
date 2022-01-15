function Translate() {
    //initialization
    this.init = function(attribute, lng) {
            this.attribute = attribute;
            this.lng = lng;
        }
        //translate 
    this.process = function() {
        _self = this;
        var xrhFile = new XMLHttpRequest();
        //load content data 
        xrhFile.open("GET", "/lang/" + this.lng + ".json", false);
        xrhFile.onreadystatechange = function() {
            if (xrhFile.readyState === 4) {
                if (xrhFile.status === 200 || xrhFile.status == 0) {
                    var LngObject = JSON.parse(xrhFile.responseText);
                    console.log(LngObject["name1"]);
                    var allDom = document.getElementsByTagName("*");
                    for (var i = 0; i < allDom.length; i++) {
                        var elem = allDom[i];
                        var key = elem.getAttribute(_self.attribute);

                        if (key != null) {
                            console.log(key);
                            elem.innerHTML = LngObject[key];
                        }
                    }

                }
            }
        }
        xrhFile.send();
    }
}

function get_lang() {
    var dc = document.cookie;
    var prefix = "lang" + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    } else {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
            end = dc.length;
        }
    }
    // because unescape has been deprecated, replaced with decodeURI
    //return unescape(dc.substring(begin + prefix.length, end));
    return decodeURI(dc.substring(begin + prefix.length, end));
}

function set_lang(lang) {
    document.cookie = "lang=" + lang + ";path=/"
    console.log("Swapped lang: " + lang)
}

function swap_lang() {
    currentLng = get_lang();
    console.log("Current Lang: " + currentLng);
    if (currentLng == "gr") {
        lang = "en";
        set_lang("en")
    } else {
        lang = "gr";
        set_lang("gr")
    }
    var translate = new Translate();
    var attributeName = 'data-tag';
    translate.init(attributeName, lang);
    translate.process();
}