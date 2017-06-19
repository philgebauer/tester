## Typography
All typography should be in the `Poppins, sans-serif` font. Standard font sizes and weights are set in the `_typography.scss` file. If you need to include these sizes in other places, you can use the following as an example:

```scss
.mycooltextdiv {
	@extend %h3; // Inherits all of the styles applied to the <h3> tag.
	// Any other properites you'd like to add or override from the @extend
}
```

## Buttons
I have reduced the need to create custom buttons for each place on the site. Instead we'll use a single style button (pill). Here's how to use it when you need a button.

### Example Markup
The markup is similarly structured to Bootstrap buttons.

##### Sizes

###### Small `btn-sm`
```html
<a href="#" class="btn-sm btn-purple">My Button</a>
<button class="btn-sm btn-purple">My Button</button>
```

###### Medium `btn-md`
```html
<a href="#" class="btn-md btn-purple">My Button</a>
<button class="btn-md btn-purple">My Button</button>
```

###### Large `btn-lg`
```html
<a href="#" class="btn-lg btn-purple">My Button</a>
<button class="btn-lg btn-purple">My Button</button>
```

#### Effects

##### Arrow `btn-arrow`
An arrow will appear on hover to the right side of the text.

```html
<a href="#" class="btn-md btn-purple btn-arrow">My Button</a>
<button class="btn-md btn-purple btn-ghost btn-arrow"></button>
```

##### Ghost `btn-ghost`
There is a ghost effect with a transparent background and colored border/text.

```html
<a href="#" class="btn-lg btn-purple btn-ghost">My Button</a>
<button class="btn-md btn-purple btn-ghost">My Button</button>
```

#### Colors `btn-{color}`
The button library supports the following standard colors. Need additional colors? Add them in the `$btn-colors` map in the `sass/_variables.scss` file.
  - purple - `$c-purple`
  - orange - `$c-orange`
  - teal - `$c-teal`
  - green - `$c-green`
  - black - `$c-black`
  - lavender - `$c-lavender`
  - grey - `$c-grey`
  - red - #FF0063