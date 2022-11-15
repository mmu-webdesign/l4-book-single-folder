# RWD 6<br />Quality assurance and finessing the details

We’ve collected some tips, advice and resources for checking your work before submission.


## TL;DR Checklist before submission

**You should have:**

-   Your template portfolio page (with limited adjustment of HTML provided)
-   High quality original text and media
-   Text grammar and spell checked
-   Media optimised for the web. [Send your image files through TinyJPG](https://tinyjpg.com/) to be completely sure
-   Metadata: **please** add a page title and a meta description which are relevant to your portfolio
-   Design: we want an attractive, appropriate use of typography, design and colour. One tip: make important things BIG. Really big - the more contrast the better. Also use more padding than you think you need!
-   We want to see a mobile first approach to CSS and media queries
-   Step by step implementation of the required CSS including flexbox for layout
-   Efficient (read minimal), organised CSS
-   Credit any lines of non-original CSS: see below under ‘Credit image and code usage’
-   Additional elements may include extended layout (for example putting your about section (text/media) into columns or rows with flexbox or floats. Placement of social media icons, perhaps a home-made icon and such to enhance your page. [See more under additional](https://55060509.webdevmmu.uk/book/rwd-book/index.php?book=1&location=7). 

## Things to do before you submit

- Validate your HTML and CSS
- Use semantic HTML wisely. Add links to external websites, remove `<br>` tags that are used to create space (CSS is much better for that), and generally show how you’ve mastered the tags we learnt in Block 1
- Check your site with multiple browsers and devices
- Accessibility audit (see links above)
- Usability: please get friends and family to test your page **on lots of devices!**
- Design - test your design using the 5 second test for designs on colleagues, friends and family - [https://fivesecondtest.com/](https://fivesecondtest.com/) - see [https://www.nngroup.com/articles/testing-visual-design/](https://www.nngroup.com/articles/testing-visual-design/)
- Are all of your images optimised for the web?
- Colour contrast - have you made the right choices with your colours?
- SEO - have you written good metadata and content with SEO in mind? See [Shaun Anderson's SEO tutorial for some good advice](https://www.hobo-web.co.uk/seo-tutorial/#page-title-element)
- **Check the size of your final zip file**: if all your images are optimised, it’s unlikely your final zip file that you upload to moodle will be over 2MB.

## Adding that final polish to your website

### Credit image and code usage

You can use images and code from other sources, as long as you have the legal right to re-use other people’s work (that’s why we recommend unsplash: [check their licencing agreement](https://unsplash.com/license) and it shows that you can use their assets with no permission).

If you do use work by other people, you should reference it in the following way:

#### In your HTML

A HTML comment with details and a link to the original source, e.g.

`<!-- CSS technique to create animation, from https://developer.mozilla.org/en-US/docs/Web/CSS/animation -->`

or

`<!-- Image from Unsplash: https://unsplash.com/photos/lL_g13pvgdY -->`

#### In your CSS

A CSS comment with details and a link to the original source, e.g.

`/* CSS technique to create animation, from https://developer.mozilla.org/en-US/docs/Web/CSS/animation */`

or

`/* Image from Unsplash: https://unsplash.com/photos/lL_g13pvgdY */`

Revalidate your code to ensure the comments haven’t made your code invalid.

**Remember** You are still responsible for optimising, testing for accessibility and usability, correctly implementing and checking code or images that you integrate into your website.


### Details in your typography

* **Steer clear of `text-align:justify`**: that is common for printed words, but online it can cause issues. Web browsers don’t hyphenate like books do, so you end up with lots of white space between words, especially at small viewport sizes.
* **Use `text-align:center` carefully** as well. Only centre small amounts of text: long amounts of centred text are difficult to read because your eye doesn’t come back to the same point every time.
* Have you modified the `line-height` for your content? A `line-height` set to 1 will probably mean lines are too close together for comfortable reading – 1.35 to 1.5 (depending on the typeface) will probably be better. You’ll probably find `line-height` set on the `body` selector in your CSS.
* Related to that: `line-height` for headings can generally be closer together than body copy, as you have less text and it’s normally bigger. You could try setting `line-height` for your headings in your CSS.
* **Why are you underlining your headings?** Underlines online are used for hyperlinks: don’t confuse people by underlining your headings. Use another visual sign that your headings are important: change the colour, size or typeface instead.
* This might seem like the smallest thing ever: but have you got typographically correct apostrophes? A ' is not an apostrophe. Compare **Bob's website** with **Bob&#8217;s website** - the second has a typographically correct apostrophe. Replace a ' in your text with `&#8217;` to create a typographically correct apostrophe.
* Check you have a sensible line length: no more than 65-70 characters per line. This can be controlled through CSS in many ways: normally by setting a width on the containing element, rather than setting a width on the `p` or other element that contains text.
* You can try creating what’s called ‘responsive (or fluid) typography’ by using a new feature in CSS called `calc`. This line of code:

```
p { font-size: calc(1rem + 2vw); }
```

will allow the font size to start at a sensible size, but then increase in relation to the width of the page. [Read more about `calc` and how it works](https://css-tricks.com/a-complete-guide-to-calc-in-css/).

### Colour guidance

* Colour contrast is measured between the background and foreground: this is particularly important for your header and paragraphs of text.
* If you have kept the underlines on your links, you don’t need to think about colour contrast between your links and your body text (so keep the underlines on your links).
* You can change the colour of hyperlink underlines separately with the `text-decoration-color` CSS property. [See how to change underline colour on MDN.com](https://developer.mozilla.org/en-US/docs/Web/CSS/text-decoration-color).

### Testing your overall design

Try taking and reviewing a full page screenshot to judge how your design changes from section to section. Does the whole site have an underlying idea and style? Are there jarring changes, or changes that don’t make sense when the site is seen as a whole?

* [Take full page screenshots on Firefox](https://support.mozilla.org/en-US/kb/take-screenshots-firefox?redirectslug=firefox-screenshots&redirectlocale=en-US)
* [Take full page screenshots on Chrome](https://www.howtogeek.com/423558/how-to-take-full-page-screenshots-in-google-chrome-without-using-an-extension/)

### Javascript issues

**Multiple JS files are fine for this submission.** Modern web development uses automated ‘build tools’ to package up a website into a fast loading set of files, including automatically joining files together. We are also OK with camelCase for JS-related files and variable names.

## Even more things to review

Everything seems OK? Have you considered:

* [Accessibility](#Accessibility)
* [Checking your CSS](#Checking-your-CSS)
* [Paragraphs](#Paragraphs)
* [Margins and padding](#Margins-and-padding)
* [CSS file order](#CSS-file-order)
* [SEO - your content](#SEO---your-content) 
* [Browser resources](#Browser-resources)
* [Live preview and mobile preview](#Live-preview-and-mobile-preview)
* [Files and folders](#Files-and-folders)
* [Check list](#Check-list)
* [Things to do ](#Things-to-do)
* [Social media *optional](#Social-media)


## Accessibility

Check the basics:

- Relevant alt text for all images
- If an image is *fluff* use a null alt [*Fluff* - images that are purely decoration and do not add anything to the content of the document]
- Colour contrast
- Accessible form (use of 'label for')
- Legibility and readability
- Logical structure
- Use of semantics

More advanced than this unit, but you could use the[ WCAG 2 checklist from WebAIM](https://webaim.org/standards/wcag/checklist). You won't understand everything, and not everything will be relevant to your site, but still worth a look.

If your site is hosted live, you can use the [WebAIM WAVE accessibility evaluation tool](http://wave.webaim.org/). Remember this is only a robot. It will get things wrong and it can't deal with subjective elements, such as how relevant is your alt text. 

## Checking your CSS
* Did you add the responsive image CSS? It should look something like this:

``` 
img { max-width: 100%; height: auto; } 
```

* Have you added the border-box model code? You can [find the border-box model code on this website](https://www.paulirish.com/2012/box-sizing-border-box-ftw/) just after the sentence that says 'I have a recommendation for your CSS going forward...'

* Do you have a line in your CSS like this?

``` 
div {max-width: 600px; margin: 0 auto; padding: 0 15px;} 
```

If so, **change it**: it should only be applying to `.container-content`, not all `div` elements.

## Paragraphs

Make sure there is some *breathing space* between paragraphs. Use `margin` or `padding` for this on paragraphs that are part of the text of your site.

We often see dark blocks of text like this (and larger):

>In another moment down went Alice after it, never once considering how in the world she was to get out again.
The rabbit-hole went straight on like a tunnel for some way, and then dipped suddenly down, so suddenly that Alice had not a moment to think about stopping herself before she found herself falling down a very deep well.

Rather than...

>In another moment down went Alice after it, never once considering how in the world she was to get out again.
>
>The rabbit-hole went straight on like a tunnel for some way, and then dipped suddenly down, so suddenly that Alice had not a moment to think about stopping herself before she found herself falling down a very deep well.

You can also target specific paragraphs with styles like `.about-me p {padding-bottom: 13px;}` 

## Margins and padding

Have you added padding to your sections? The page can look cramped if you let the sections follow immediately after each other. Try using the web developer tools to adjust padding. Start with `100px` and go up or down as you think looks best, then transfer that value back into your stylesheet.

>**Tip** - often web developers set margins to zero and adjust padding. This keeps things simpler.

Remember to keep text away from any edges: the screen, the boxes that make up your webpage, borders... text running up against borders/edges is hard to read.

## CSS file order

Your CSS file can become rather long and complicated. It's not uncommon to start adding styles at the end that overwrite earlier styles!

Derren gives you some tips on how he approaches the order of his CSS files.

1. Resets
1. Very basic styles for elements (e.g. `h1`, `h2`, `p`): nothing too opinionated though - no colours or styling
1. Then break the page up into sections and style each one, e.g.
    - All styles for header
    - All styles for page sections
    - All styles for footers

1. So that I know if I'm in the middle of the stylesheet, it'll be the CSS for the middle of the page. 
1. The last thing in the stylesheet will probably be the footer.
1. Use lots of comments in your stylesheet that break up the code and label the page sections.

## The SEO of your content

On-site SEO (Search Engine Optimisation) refers to optimizing both the content and HTML source code of a page. The content you have created will also add to the value and 'findability' of your site.

The [MOZ SEO Guide](https://moz.com/learn/seo/on-site-seo) explains:

- **In-depth**."Thin" content was one of Google Panda's specific targets; today it's more or less assumed that content must be sufficiently thorough in order to stand a good chance at ranking.
- **User-friendly**. Is the content readable? Is it organized on your site in such a way that it's easily navigable? Is it generally clean, or littered with ads and affiliate links?
- **Unique**. If not properly addressed, content duplicated from elsewhere on your site (or elsewhere on the Internet) may impact a site's ability to rank on SERPs.
- **Authoritative and trustworthy**. Does your content stand on its own as a reliable resource for information on a particular topic?
- **Aligned with user search intent**. Part of creating and optimizing for quality content is also delivering on searcher expectations. Content topics should align with the search queries for which they rank.


## Browser resources

We have introduced you to Dev Tools in the browser. Here are some further browser resources.

*   [The web developer toolbar for Firefox and Chrome](https://chrispederick.com/work/web-developer/)  

*   [Introduction to the Chrome dev tools](https://developers.google.com/web/tools/chrome-devtools/)  

*   [Firefox developer edition](https://www.mozilla.org/en-US/firefox/developer/)  

*   [Firefox developer tools](https://developer.mozilla.org/en-US/docs/Tools)  

## Live preview and mobile preview

Definitely worth a try before submission. Especially check things like tables and images work without problems on smaller screens ([Strategies for making tables work responsively](https://css-tricks.com/responsive-data-tables/)). 

## Developing your site using Replit.com

You can use the web address at the top of the page preview as a live web address - just copy it into your phone’s web browser and you should be able to see the current version of your site. [You can create a QR code of the web address](https://55060509.webdevmmu.uk/tools/make-qr-code/) if it’s hard to type into your phone.

## Local development

### Mobile view in Visual Studio Code

Try out [the Mobile View extension](marketplace.visualstudio.com/items?itemName=cirlorm.mobileview) which installs into Visual Studio Code and shows you a preview of your code on a mobile device. You’re still interacting with your page using a mouse and keyboard, which is very different to actually using a mobile phone.

### Prepros

You can use Prepros to set up a developer environment on your laptop. Prepros reloads your mobile browser automatically every time you save a file in code editor, then you can use the ‘network preview’ to show your site on as many devices as you can find.

*   [Prepros.io](https://prepros.io/)  

*   [Using live preview with Prepros](https://prepros.io/help/live-preview)

As we've already suggested, using [netlify.com](https://www.netlify.com/) to get your site live is a great way to test your site on a variety of screens.

## Files and folders

An important aspect of web development is file management. A clean, well structured site is essential.

*   [A good introduction from MDN about how to organise your work](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/Dealing_with_files).   

>We want your html page to be called **index.html** - it's always suprising how many students miss this! 

You should use and maintain the folder structure provided. If all of your files are sitting on the root of your site, there is something wrong!

Wew will be asking you to submit the `portfolio` folder, renamed with your ID and name. E.g. `22334455-wilson.zip`
 

## Social media

**Optional** 

You can add links to your professional social media accounts. This is usually done via clickable icons. Use a [site like iconmonstr](https://iconmonstr.com/) to customise and download a png file, or to embed inline code for an svg.

If you use a png, optimise the file to the largest size used on your site.

SVG is an excellent option because it is purely code (no image file needed). This means it is lightweight and flexible - it can scale to any size.

Want to know more about SVG? Read the [MDN guide to Adding vector graphics to the Web](https://developer.mozilla.org/en-US/docs/Learn/HTML/Multimedia_and_embedding/Adding_vector_graphics_to_the_Web).


