# 100 Black Men Bay Area Theme

## Introduction

100 Black Men Bay Area Theme is a genesis child theme which integrates [Bootstrap](http://getbootstrap.com/). It uses Gulp to handle tasks, configuration and lint files.

## Installation Instructions

1. Upload the 100 Black Men Bay Area Theme folder via FTP to your wp-content/themes/ directory. (The Genesis parent theme needs to be in the wp-content/themes/ directory as well.)
2. Go to your WordPress dashboard and select Appearance.
3. Activate the 100 Black Men Bay Area Theme.
4. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking.

## Building from Source

1. Install [Git](https://git-scm.com/).
2. Clone the repository to your local machine.
3. Install [Node](https://nodejs.org/en/).
4. Install [Yarn](https://yarnpkg.com).
5. Install [Gulp](https://gulpjs.com/) globally.
6. Run `yarn install` or `npm install` to install dependencies through terminal/CLI program.
7. Run `git submodule init` and `git submodule update` to add [WP Bootstrap Navwalker](https://github.com/twittem/wp-bootstrap-navwalker).
8. Replace site url in line `49` of `gulpfile.js` to your local development URL(e.g. http://bootstrap.test).
9. Run `gulp` through your favorite CLI program.

## Features

1. Bootstrap 4
2. Bootstrap components
	* Comment Form
	* Search Form
	* Jumbotron
	* Navbar
3. Sass
4. Gulp
5. Footer Widgets(modified to add bootstrap column classes based on the number of widget areas)
6. Additional Widget Areas
	* Home Featured(jumbotron)

## Todos

- [ ] Integrate Genesis Theme Setup API
- [ ] Integrate Genesis Configuration API
- [ ] Integrate AMP Support
- [x] Gutenberg Support
- [x] Remove SmartMenus support or move to separate plugin
- [x] Remove TGM Plugin Activation Support
- [x] Use Git Submodule for WP Bootstrap Navwalker
- [ ] Code cleanup and bug fixes


## Notes

Use [SmartMenus for Bootstrap](https://github.com/webdevsuperfast/ra-smartmenus-bootstrap) for multi-level dropdown support.

## Short Code For Side Bar Nav

Use the plugin [Short Code In Menus](https://wordpress.org/plugins/shortcode-in-menus/) and add the following short code to include the Side Bar Navigation.
```
[side-bar-nav]
```
There are couple classes that can be used in the Geness Post & Body Class inputs found in the page editor under Genesis settings.
To aquire a narrow 70% width for text, use th class `narrow-content` in the Post Class input.
A blue transition from bottom up, inside the .site-inner container can be accomplished by adding `blue-transition-bottom` to the Body Class input.

Group Block Fix
Sometimes the media-text block is too wide and when using the `narrow-content` class, the media-text block might not render perpotionately correct. Add the following class to the media-text block to get a more centered, tighter rendering: `group-block-fix`

For GiveWP Grid Block, add the class `give` to Genesis Post Class with `narrow-content` to get a more centered look.

## HTML for front page form

```
<div id="join-us-section" class="container-fluid">
  <div class="row">
    <div class="join-us col-md-6">
      <h3 class="text-center">STAY IN TOUCH!</h3>
      <form id="subscribe-form" class="">
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="FIRST NAME">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="LAST NAME">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="formGroupExampleInput3" placeholder="EMAIL ADDRESS">
        </div>
        <button type="submit" class="btn btn-gray">SIGN ME UP!</button>
      </form>

    </div>
    <div class="col-md-6">
      <img src="/wp-content/uploads/2018/07/Photo-Collegiate-100-Pinning-Ceremony-2010-Cropped-BW-1.jpg" alt="100 blackmen bay area">
    </div>
  </div>
</div>

```
