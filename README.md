perch-fieldtype-icon
====================

Perch field type for selection and display of FontAwesome icons. Using this
filed type, the user can select an icon from FontAwesome icons (version 4.1.0)
having a simple preview in the admin interface. The ouput of the field is
the bare icon name, to be used as a css class name, prefixed with `fa-`.


Installation and usage
---

1. Copy `/perch/addons/filedtypes/icon` inside you Perch field types directory.
2. Optionally copy and edit `/perch/templates/content/icon.html` in your Perch
   templates, or use it as reference.


Updating
---

You can update the available icons list running the script:

    /perch/addons/filedtypes/icon/options.php

which requires the `yaml` extension from PECL to be installed and active.
The script expects to find a yaml-encoded list of icon at the url:

   https://raw.githubusercontent.com/FortAwesome/Font-Awesome/master/src/icons.yml

If this changes you can edit it in the file or redefine it by defininf the PHP
constant `FA_ICONS_SRC`.


Roadmap
---

- Add rendered html output
- Add different icon collections available 

