# Hellenic Blockchain Assossiation Website
The source code for https://hba.org.gr/
* Based on Presento - v2.0.2.
* Author @apostolos.gioulis

## Multilingual Addition
The website now is multilingual. The way this is achieved is through the following files:

**`lang/en.json`** / **`lang/gr.json`**: These files contain a list of variables, these variables are used by the JavaScript to dynamically populate the HTML depending on the language set. 

For example:
   ```json
   "intro-1": "ΛΙΓΑ ΛΟΓΙΑ" //from gr.json
   ```
Will be used to populate:
```html
<h2 data-tag="intro-1"></h2>
```

The JS that performs the loading of the text is located on `header.php`, a header file that is included on most `php` files to avoid duplication. This script calls JS located in `assets/js/translate.js` where the main implementation of the translation exists. 

The mechanism uses a cookie named `lang` where the current language is set.


**`header.php`**
```js
<script>
        function load() {  //I have added this to the onload of the body
            var lang = get_lang(); //gets the current value of the cookie
            console.log("language " + lang);
            if (lang == null) { //if language has not been set, set it to english
                document.cookie = "lang=en";
                lang = "en"
            }
            let currentLng = lang; // probably redundant
            var translate = new Translate(); //create object
            var attributeName = 'data-tag'; //the internal html of all data-tag elements will be replaces with the relevant text
            translate.init(attributeName, currentLng); //translate using the current lang
            translate.process(); //start translate
        }
    </script>
```

## TODO
[ ] Remove the free-version banner. Buy license for Presento.
[ ] Create lisence. 
