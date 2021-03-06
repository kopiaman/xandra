=== Billplz for WooCommerce ===
Contributors: wanzulnet
Tags: billplz,paymentgateway,fpx,malaysia
Tested up to: 4.6
Stable tag: 3.9
Donate link: https://www.billplz.com/hpojtffm3
Requires at least: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Accept Internet Banking Payment by using Billplz. 

== Description ==
Install this plugin to accept payment using Billplz (Maybank2u, CIMB Clicks, Bank Islam, FPX). 

For Installation Instruction, please refer to:
[How to Install](http://bit.ly/1SwkWJL)

== Upgrade Notice == 
Upgrading from version 3.8 to earlier version will cause SMS and Email notification are reset to No Notification.

== Screenshots ==
* Will available soon

== Changelog ==

= 3.9 =
* NEW: Auto Delete Invoice when order are cancelled
* NEW: Custom error message
* NEW: Callback security check. Check the callback signal authenticity
* IMPROVED: Better callback notes for manual verification
* REMOVED: Automatically created collection id
* CHANGED: Option to disable Prevent Duplicating Bills are removed. This feature is enabled by default
* Some minor changes

= 3.8 =
* Update Post Meta only save Billplz Payment URL
* NEW: Auto Submit Feature

= 3.7 =
* NEW: Collection ID will automatically generated if user incorrectly input the value
* NEW: Prevent bills created over and over again for the same order

= 3.6 =
* NEW: API Key & Collection ID will be validated instantly after setting it up
* Immediate reduce stock option has been removed due to stock is not restored after expiry
* Message recommending user to use WooCommerce Cart Stock Reducer are displayed

= 3.5 =
* Added new option for immediate reduce stock.

= 3.4 =
* Small bugfix

= 3.3 =

* Recheck the payment status for handling callback signal

= 3.2 =
* License: GPLv3

= 3.1 =
* Security: Minor security issue

= 3.0 =
* Using Billplz API V3

= 1.10 =
* New Features: Staging Mode
* Garbage file for no callback method is now automatically removed
* Fixed conflicting issue with GravityForms Billplz Plugin

= 1.9 =
* New Features: If you are having problem with payment response, tick No Callback Method
* Improvement: Mobile number are checked twice. No more error if customer input "-" in their number
* Improvement: If the user entering their home number (e.g.: 04xxxx), then the number will be skipped
* Improvement: Only 1 payment response are given. No more response from ReturnURL

= 1.8 =
* Product stock reduce 2x times error. This bug has been fixed for this release

= 1.7 =
* Added Product Description on Billplz payment page
* Callback terms are used instead of Billplz.com for callback

= 1.6 =
* Merchant ID String has changed to API Secret Key. 
* New Payment Logo, By Akhi Joe. Thanks to Akhi Joe!

= 1.5 =
* Added Updates Capability

= 1.1 =
* Added compatibility for PHP 5.3

= 1.0 =
1. Initial Release

== Installation ==

For Installation Instruction, please refer to:
[How to Install](http://bit.ly/1SwkWJL)

== Frequently Asked Questions ==

= Where can I get Collection ID? =

You can the Collection ID at your Billplz Billing. Login to http://www.billplz.com


= Troubleshooting =

If you get infinite loop or JSON-like error:
1. Ensure the correct API Key and Collection ID has been set up
2. Contact us at sales@wanzul-hosting.com

== Links ==
[Wanzul Hosting](http://wanzul-hosting.com/) is the most reliable, cheap, recommended by the most web master around the world.

== Thanks ==
Special thanks to Akhie Joe for designing the button/banner and all donators! Thank You so much!