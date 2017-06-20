# CW Whatever Module for Joomla

CW Whatever is whatever you want it to be. No really. This component and module do absolutely nothing in the best way possible.

It is the best way to add your own custom scripts to Joomla, using Joomla's built-in MVC template override system. Simply override the default CW Whatever component or module output in your template, and add whatever html, javascript, or php script you want to add. The sky is the limit!

Use CW Whatever for:

* Custom embedded Javascript
* Custom layouts that WYSIWYG editors can't handle
* Custom PHP scripts
* Google Analytics
* Whatever...

Features:

* Standard Joomla MVC structure
* No data to manage
* Simple architecture for injecting your own custom scripts on any page
* Whatever textarea parameter for you to use however you want in your PHP scripts
* Best of all, it does nothing, so it stays out of your way
* GPL License

## Documentation

### [CW Whatever Component](https://github.com/corywebbmedia/com_cw_whatever)

**Step 1: Create a template override**

The first thing you want to do is create a template override for the whatever component's whatever view. Here's how you do that:

1. In `/templates/{YOUR_TEMPLATE}/html`, create a folder called `com_cw_whatever`.
2. In the `com_cw_whatever` folder you just created, create a folder called `whatever`. This folder will contain your template override files.
3. In the `whatever` folder you just created, create a PHP file and name it whatever you want to name it.
4. Add your own custom script to the PHP file you created. Note that the "Whatever" parameter in the menu item is aviailable to use as `$this->whatever` in your PHP script.

**Step 2: Create a CW Whatever menu item**

1. In the Joomla administrator, create a new menu item to render your new CW Whatever script. Set the menu item type to CW Whatever > Whatever
2. In the menu item's Whatever tab, select your template override in the Script parameter.
3. [Optional] In the menu item's CW Whatever tab, you can set the Whatever parameter to whatever you want it to be.

### [CW Whatever Module](https://github.com/corywebbmedia/mod_cw_whatever)

**Step 1: Create a template override**

The first thing you want to do is create a template override for the whatever module. Here's how you do that:

1. In `/templates/{YOUR_TEMPLATE}/html`, create a folder called `mod_cw_whatever`.
2. In the `mod_cw_whatever` folder you just created, create a PHP file and name it whatever you want to name it.
3. Add your own custom script to the PHP file you created. Note that the "Whatever" parameter in the module is aviailable to use as `$whatever` in your PHP script

**Step 2: Add a CW Whatever module to any page(s) on your site**

1. In the Joomla administrator, go to Extensions > Modules and click "New" to add a new module.
2. Select the CW Whatever module type.
3. Select the layout you wish to use for the module. This will have the same name as the template override you created in step 1.
4. [Optional] You can set the Whatever parameter to whatever you want it to be.

That's all there is to it. This component and module were designed to do as little as possible and be as simple as possible to enable you to add your own custom PHP scripts.