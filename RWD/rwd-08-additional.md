# RWD 8 - Additional

## Can I do more?

We have used a single page to introduce the concepts and techniques of mobile first, responsive web design.

Some of our more *technical* students ask what more can they do.

The usual response from many such students is to add technical complexity, usually via JavaScript. This is often not successful because these technical solutions are often implemented *for the sake of it*, and fail to enhance the user experience. In fact they often degrade the users experience and lose the student marks.

## Rule of thumb

Any further enhancements (elements beyond the brief):

1. User Experience - Must not damage the user experience, and hopefully improve it.
1. Accessibility - Must not impede accessibility and again, hopefully improve it.

We make the following suggestions for elements you might want to investigate and implement (through research and experimentation).

Complete the site as per the brief before attempting to create additional elements.

## IMPORTANT

>Please back up your site - keep a copy of the *finished* site.

>Do not remove elements created by the brief as you will be marked on these. It's obviously pointless adding something yet losing marks for the basics (because you deleted it).

## Let us know what you've added

As it won't always be easy for us to spot any additional elements to your coding when we are marking your work, please list any additions in a comment at the top of `layout.css`. Such as:

```
/* TEMPLATE STYLESHEET */

/* Additional 

1. 
2. 

*/

```

## Additional

The following are suggested areas of enhancement. None are mandatory for this assignment. We would not expect a student to implement everyone of these suggestions. 

All of these elements expand beyond the taught unit. Always talk to tutors to get support and guidance.

* [Additional HTML elements](#Additional-HTML-elements)
* [Enhanced media query](#Enhanced-media-query)
* [CSS Dark Mode ](#CSS-Dark-Mode)
* [CSS Blends ](#CSS-Blends)
* [CSS Transitions, transforms and animation](#CSS-Transitions,-transforms-and-animation)
* [CSS Grid](#CSS-Grid) 
* [CSS Variables](#CSS-variables)
* [CSS Calc function](#CSS-Calc-function)
* [Responsive menu](#Responsive-menu)
* [More flexbox](#More-flexbox)
* [Flexbox without flexbox](#Flexbox-without-flexbox)
* [CSS selectors](#CSS-selectors)
* [Form styling](#Form-styling)
* [Footer styling](#Footer-styling)
* [Styled tables](#Styled-tables)
* [Video hero](#Video-hero)
* [Original illustrations](#Original-illustrations)
* [Personal logo](#Personal-logo)
* [JavaScript](#JavaScript)
* [Responsive images](#Responsive-images)
* [Sticky navigation](#Sticky-navigation)
* [Video element](#Video-element)
* [Anything else?](#Anything-else?)

## Additional HTML elements

Good, clean mark-up of your content is always going to get your marks. Using relevant HTML such as lists and tables (remember, tabular data only), blockquotes and such show your competence if used correctly.

[Semantics, semantics, semantics](https://developer.mozilla.org/en-US/docs/Glossary/Semantics#Semantics_in_HTML).

Additional CSS can be used to style these elements in an attractive, professional manner. See below.

## Enhanced media query

Once you have implemented the media queries as required, you could consider making further adjustments. An example might be that your main heading uses a different font size on larger screen sizes. It might be the same for your picture headings and captions. Margins might change. Always think about usability. *Am I enhancing the users experience*? In this example, am I make it more legible at these different screen sizes?

Don't go overboard - changing the colour scheme from mobile to desktop. Things like this are usually pointless.

## CSS Dark Mode

Now most computer operating systems support dark mode, some browsers have been updated so they can tell your site that the computer is set to dark mode. You can use a CSS rule similar to a media query that can modify your CSS to reflect the user's interface choices. See [CSS tricks](https://css-tricks.com/dark-modes-with-css/) or [Andy Clarke’s blog post](https://stuffandnonsense.co.uk/blog/redesigning-your-product-and-website-for-dark-mode) for more information (**NB:** not all web browsers currently support this, so check you are testing this in a compatible browser)


## CSS Blends 

Investigate further use of blends to enhance your design. 


## CSS Transitions, transforms and animation

Investigate transitions, transforms (e.g. to rotate sections or text) and animation on MDN and CSS Tricks. Successful implementations are usually very subtle (not a rolling ball or animated text). Use with care.

## CSS Grid

Use of CSS Grid for part of the structure of your page is a great way to show off your advanced coding skills.

**Don't change the gallery to grid** as you will lose the marks for the flexbox. Think what other content you  could use grid to layout.

If you chose to go the whole way and restructure the site using grid, make sure you retain all the semantic structure we have provided. You should only be changing the CSS.

For everything about CSS Layout - see [Rachel Andrew's Grid by example](https://gridbyexample.com/).

Article: [Quick! What’s the Difference Between Flexbox and Grid](https://css-tricks.com/quick-whats-the-difference-between-flexbox-and-grid/)?

## CSS variables

First pioneered in SASS and other ‘transpilation’ tools (which take code written in another language and change it into valid CSS), CSS variables are a way of storing important numbers and settings for re-use. An example might be a colour you use over and over again in your stylesheet - changing this to a variable means you can change the number once and have it reflected throughout your code.

Article: [Using CSS custom properties (variables)](https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties) and there are many more on [CSS Tricks](https://css-tricks.com/) and elsewhere.

## CSS Calc function

`Calc` allows you to do mathematics in CSS. Here is an example: `height: calc(100vh - 80px);`. This allows you to mix different units and calculate changes in real time.

Article: [A Complete Guide to calc() in CSS](https://css-tricks.com/a-complete-guide-to-calc-in-css/)

## Responsive menu

The obvious solution is to replace Derren's menu with a *Hamburger* menu. Unfortunately this usually doesn't add to the UX (user experience). You now have to click twice, once to open the menu, once to select. Many of these menus need JavaScript (adds to weight of the page). They do however mean you gain screen space.

Think carefully though any solution - it needs to be as good, or an improvement (in our eyes), so check with tutors.

>If it is not your code, you must credit the source in a comment. **Don't** use code you don't understand.

## More flexbox

Flexbox can get much more complicated. Be careful not to over complicate your code for the sake of it.

Learn more about Flexbox:

- [Flexbox froggy](http://flexboxfroggy.com/)
- [Flexbox defense](http://www.flexboxdefense.com/)
- [A complete guide to Flexbox from CSS Tricks](https://css-tricks.com/snippets/css/a-guide-to-flexbox/)

## Flexbox without flexbox

We are getting into the area of supporting older browsers. You don't have to do this with your assignment, but if you're interested read MDN's article [Backwards Compatibility of Flexbox](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Backwards_Compatibility_of_Flexbox).

## CSS selectors

You can improve your CSS and make it much more efficient with careful use of selectors.  

Learn more aboput selectors:

- [CSS Diner game to learn CSS selectors](http://flukeout.github.io/)
- [CSS selectors at MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Selectors)
- [CSS selectors at CSS tricks](https://css-tricks.com/how-css-selectors-work/)

## Form styling

Further form styling beyond what has already been implemented in the tutorial. Make it look cool, inviting and easy to use (whilst keeping it accessible).


## Footer styling

Enhancing the footer styles - does it work well at all sizes? Addition of relevant professional company, social links or icons?


## Styled tables
If you have used a table in your content (perhaps a list of job titles, employers and years?), you can then use CSS to style what will otherwise be a bring table.

Read: [MDN Styling Tables](https://developer.mozilla.org/en-US/docs/Learn/CSS/Styling_boxes/Styling_tables) Subtle stripes using your tints plus use of borders can enhance the legibility. 

Check that your table works on mobile. Your table will be small so it shouldn't be a big issue. Large tables are a different matter - see the [Responsive Table roundup on CSS Tricks](https://css-tricks.com/responsive-data-table-roundup/) for some suggestions. 

## Video hero

A popular technique is to use a short, repeating, movie clip as the hero image. On a positive note, these can add to the user experience by helping to scene set or explain the page or product.

Like the large hero image they can add drastically to the weight of the page.

>[To add a Video Header follow this additional tutorial created by Derren](https://github.com/mmu-webdesign/IWD-web-term2/blob/master/rwd-week-video.md). 

## Original illustrations

If you are an artist (or artistic) you might prefer to create some illustrations for the hero image and/or the gallery (instead of or as well as photographs).

Any illustrations created must still be exported and optimised for the web.

Make sure it is clear in your commentary that these are original works by yourself.

>If you are taking this route, please discuss with tutors in class. 

## Personal logo

Further to the above, branding your page with a personal logo is another option for the creative student.


## JavaScript

If you do think you can enhance the user experience of this simple page with additional JavaScript (beyond the required elements), please discuss with tutors before going ahead.

## Responsive images

You may realise that this is a bit of a hack. 

```
img {
    max-width: 100%;
    height: auto;
  }
```

What we really want is a situation where (for example) for a small screen the browser downloads and uses a 'smaller' image and for say a desktop, the browser downloads a larger image. 

If you want to investigate ways to accomplish this start by reading about the `<picture>` - [Picture element on MDN](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/picture). And investigate the `srcset` attribute to see how this offers the browser a variety of image sizes and resolutions. See the [MDN article on Responsive images](https://developer.mozilla.org/en-US/docs/Learn/HTML/Multimedia_and_embedding/Responsive_images). 

This article from CSS Tricks provides more insight - [Responsive Images: If you’re just changing resolutions, use srcset](https://css-tricks.com/responsive-images-youre-just-changing-resolutions-use-srcset/).

## Sticky navigation

Some of you may want a 'sticky nav', a navigation bar (on desktop) that stays at the top of your screen, as the rest of the page scrolls. Derren's CodePen CodePen Home
[Fixed div at particular screen sizes](https://codepen.io/wilsondmmu/pen/VwLPpBr) offers one solution. Another is to use the `Position: sticky;` element and attribute. See Daryll Jann's [CodePen, Position sticky](https://codepen.io/darylljann/pen/PpjwPM). Do be wary of using either Absolute, Relative, Fixed Positioning. It can be a sink hole to oblivion on a responsive design!

## Video element

If you want to add an original video (you will need the file) to your gallery instead of an image you can still use the `figure` and `figcaption` elements, but replace your `img` element with the `video` element.

You will need to have at least an `.mp4` version of your video and preferably a `.webm` version.

Read about [the `<video>` HTML element on MDN](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/video) for the correct syntax and attributes.

Use a tool like [Miro Video Convertor](http://www.mirovideoconverter.com/) to create these file types.

Remember to keep any video short. When you submit this assignment your project folder can't be more than 100mb. It should be MUCH smaller! 

## Anything else?

Talk to tutors in class about any further ideas you may have for the additional development of your page.

Remember - just completing the assignment as directed to a high standard will gain you a very good, possibly excellent mark.

