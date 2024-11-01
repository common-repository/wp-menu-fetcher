=== WordPress-Menu-Fetcher Plugin ===
Contributors: sooraj
Donate link: https://github.com/csooraj
Tags: wordpressmenu, WP-REST-APIMenus, WP-REST-API V2, WP-REST-API V2 Menus
Requires at least: 4.0
Tested up to: 4.5
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WordPress-Menu-Fetcher creates a new endpoint for retrieving all the details of menus by extending the wordpress rest api v2.

== Description ==

Retrieve all the details of menus by hitting this endpoint

http://yourdomain/wp-json/wp-menu-fetcher/v1/get-all-menu

You will get the response as below

{
   "menuTypes":[
      "Footer",
      "Home Menu",
      "Side Bar"
   ],
   "menuItems":[
      {
         "Footer":[
            {
               "title":"Facebook",
               "link":"http://www.facebook.com",
               "object_id":"65",
               "object":"custom",
               "type":"custom"
            },
            {
               "title":"twitter",
               "link":"http://www.twitter.com",
               "object_id":"66",
               "object":"custom",
               "type":"custom"
            },
            {
               "title":"Google Plus",
               "link":"http://www.googleplus.com",
               "object_id":"67",
               "object":"custom",
               "type":"custom"
            },
            {
               "title":"linkedin",
               "link":"http://www.linkedin.com",
               "object_id":"68",
               "object":"custom",
               "type":"custom"
            }
         ]
      },
      {
         "Home Menu":[
            {
               "title":"Home",
               "link":"http://www.wpengine.dev/",
               "object_id":"14",
               "object":"page",
               "type":"post_type"
            },
            {
               "title":"News",
               "link":"http://www.wpengine.dev/news/",
               "object_id":"22",
               "object":"page",
               "type":"post_type"
            },
            {
               "title":"About Us",
               "link":"http://www.wpengine.dev/about-us/",
               "object_id":"18",
               "object":"page",
               "type":"post_type"
            },
            {
               "title":"Facebook",
               "link":"http://www.facebook.com",
               "object_id":"58",
               "object":"custom",
               "type":"custom"
            },
            {
               "title":"Twitter",
               "link":"http://www.twitter.com",
               "object_id":"59",
               "object":"custom",
               "type":"custom"
            }
         ]
      },
      {
         "Side Bar":[
            {
               "title":"Getting Started",
               "link":"http://www.wpengine.dev/2017/05/17/getting-started/",
               "object_id":"32",
               "object":"post",
               "type":"post_type"
            },
            {
               "title":"WP REST API Part 1: Creating a Mobile App with WP-API and React Native",
               "link":"http://www.wpengine.dev/2017/05/17/wp-rest-api-part-1-creating-a-mobile-app-with-wp-api-and-react-native/",
               "object_id":"30",
               "object":"post",
               "type":"post_type"
            },
            {
               "title":"Build native mobile apps using WordPress and React Native",
               "link":"http://www.wpengine.dev/2017/05/17/build-native-mobile-apps-using-wordpress-and-react-native/",
               "object_id":"25",
               "object":"post",
               "type":"post_type"
            }
         ]
      }
   ]
}

This section describes how to install the plugin and get it working.
1. First you need to download and install the plugin WP REST API (WP API) plugin from WordPress dashboard.
2. After that install the WordPress-Menu-Fetcher Plugin and activate it.
3. Just hit the endpoint http://yourdomain/wp-json/wp-menu-fetcher/v1/get-all-menu you will get the response.



== Frequently Asked Questions ==

Is this an official extension of WP API?

This is a custom extension build on the top of WP API.

= What about support? =

Create a support ticket at WordPress forum and I will take care of any issue.

== Screenshots ==
1. Json response from endpoint

== Changelog ==
 Version 1.0

== Upgrade Notice ==
 Version 1.0
