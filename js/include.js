/*
 * @file include.js
 * @author  Valery Samovich
 * @created December 2014
 *
 * Make header, navigation, and footer files to include multiple html pages.
 */

$(function () {
    $("#header").load("html/header.html");
    $("#footer").load("html/footer.html");
    $("#navigation").load("html/navigation.html");
});