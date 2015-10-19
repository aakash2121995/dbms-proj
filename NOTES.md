# Directory Structure:

<A id="JUST HIDDEN" value="Use `Alt + 195` for `├` and `Alt + 196` for `─` and `Alt + 179` for `│` and `Alt + 192` for `└`"></a>

```
/source
├─ MySQL
│  ├─CreateDBScript.sql
│  └─maindb.mwb
│
├─ Web Site
│  └─ ...
├─ web-ashhar
│  ├─ assets                # This is where you keep 3rd party stuff (bootstrap, css and js files)
│  │  ├─ bootstrap          # Don't disturb the directory structure of 3rd party stuff
│  │  │  ├─ css
│  │  │  ├─ fonts
│  │  │  └─ js
│  │  │
│  │  ├─ css                # Other css files that don't come in a bundle
│  │  │  └─ ...
│  │  │
│  │  ├─ js                 # Other js files that don't come in a bundle
│  │  │  └─ ... 
│  │  └─ ...
│  │
│  ├─ config
│  │  ├─ _connect.php       # Handles connection with the database
│  │  └─ _session.php       # Manages SESSION for users
│  │
│  ├─ img                   # Home to the product images and other image assets for the website
│  │  ├─ product category
│  │  │  ├─ image1
│  │  │  └─ ...
│  │  └─ other assets       # Assets like images for scroll bars, site logos and other similar things
│  │
│  ├─ include               # PHP files that will be included in other files
│  │  ├─ _login.php         # _filename.php are files that mainly serve as helper functions and don't deal with presentation
│  │  ├─ login.php          # filename.php are reusable parts of a webpage (the html head section, navigation bar, sidebars and footers)
│  │  └─ ...
│  │
│  ├─ favicon.png           # The favicon for the website
│  ├─ home.php              # The homepage for the website
│  └─ ...
...
```