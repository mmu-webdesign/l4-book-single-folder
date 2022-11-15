# RWD 7 - JavaScript

There are two pieces of JavaScript we would like you to add to your site. The first, the ‘time based message’ code uses JavaScript to modify the HTML of the page. The second, the ‘click to change’ code combines JavaScript, HTML and CSS - all 3 of the languages we have studied this year.

## Task 1 Adding the time-based message code

The [initial state of the code is available on this codepen](https://codepen.io/wilsondmmu/pen/43ef68f25d5275d02fa51d9e0298b419). Start by reading through the code in the JavaScript window and following along each line from top to bottom.

There are two ways of adding the initial code:

1. _Inline_, which adds more code, in a different language, to an already busy page, which can confuse your text editor
2. Or as a separate JavaScript file, keeping the code separate in your editor, and making it easier to add updates and debug.

### Adding the code as a separate file (recommended)

- Go to the bottom of your HTML page (JavaScript cannot be added to CSS files)
- Just before the ending `<body>` tag, create a `<script src=""></script>` tag
- Create a folder to hold your JavaScript file (usually named `js`)
- Create a new file in your text editor
- Go to the codepen above
- Copy the code in the JS box
- Paste the JS code into your new file in your text editor
- Save the code with a sensible filename and a .js file extension, e.g. `time.js`
- Go to your HTML and in the `<script src=""></script>` add the path to your file
- In this example it would look like this: `<script src="js/time.js"></script>`
- Refresh the HTML page: the code should now run.

### Adding the code inline

- Go to the bottom of your **HTML** page (JavaScript **cannot** be added to CSS files)
- Just before the ending `<body>` tag, create a `<script></script>` tag
- Go to the codepen above
- Copy the code in the JS box
- Paste this code in between the `<script>` and `</script>` tag
- Refresh the HTML page: the code should now run.

### Problems you may run into

- If you've removed or changed the code in your contact me section (e.g. changed the `<h2>` to a `<h3>`) you need to update this JavaScript to reflect your changes.
- Internet Explorer may not run the code if the HTML page is not online: Chrome and Firefox seem to be fine
- Old browsers might not run this code: if so, update your browser if possible
- Don't add this code to the `<head>` of your page, as the DOM - defined in the lecture – needs to be created before the code can work correctly
- Remember you have the console available in the web developer inspector in Chrome and Firefox to help if you are having problems - check the network tab and the console tab for errors.

### Things to do to customise the code for your site

If you’re a confident JavaScript coder, and you have time, you might think about trying some of these:

- Change the message
- Change the hours
- Think about what might happen if the site visitor is not in the same country as you. Are they getting the right information if their computer is set to a different time-zone?
- Add more message options
- Anything else you think might be of use to a site visitor: just make sure that you are _progressively enhancing_ the page, and that users without JavaScript won't be unduly penalised compared to users who do have JavaScript turned on.

## Task 2 Adding the click to change code

### Implementing the code

The code you’re implementing is [available in this CodePen](https://codepen.io/wilsondmmu/pen/mdExMwb). Begin by trying out the interaction and studying the CSS and JavaScript - the reason why this code works is that the JavaScript is adding a class to the `<html>` element which the CSS then matches.

1. Copy the `<span class="footer-switch" id="switch"></span>` and add it to your HTML. **This is important as it is the code the JavaScript is looking for to create your button.** You can place it wherever you want to (we would suggest the footer) and use the class to style it.

2. Copy the JavaScript code in the CodePen and paste it into your JavaScript file. **Until you write some CSS you won’t see anything changing.** If you open the web inspector you should see the `<html>` tag at the top of your page have the `.js-modify-page` class added or removed as you click the button.

3. If everything is working correctly you can now override your normal CSS by writing more CSS rules that start `.js-modify-page`, e.g. `.js-modify-page p { color: red; }` and these rules will only apply when the button has been clicked.

4. You can use the CSS code in the CodePen as a starting point to style the button and change something - large or small - about your site when the button is clicked. You might just change the colours of your headings, or change the typeface, or do something more complex like implement a dark mode - it’s up to you.

### Adding things to the code

- If you are confident with JavaScript you may wish to change the button text, or change the button text between 'states', or add a cookie to ‘save the page state’ between visits, or something else we haven’t thought of.
- As before, make sure that you are progressively enhancing the page, you are considering the user’s privacy, and that users without JavaScript won't be missing out on important content compared to users who do have JavaScript turned on.
