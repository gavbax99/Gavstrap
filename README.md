# Gavstrap
Personal html/css/js libraries


## WHAT
* HTML
  * PHP header/footer import
  * symantically correct
  * seo optimized
  * ecag compliant
* CSS
  * breakpoints
  * grid
  * buttons
  * "blocks*
  * dark mode
  * text standards
* JS
  * dynamic page building (like c year)

## GOALS
* php
* material ui inspired style
* as dynamic as possible


====================


### Grid

<div class="row">
    <div class="c-xl-6 x-sm-12">

* Can add gutter to cells with `gutter`
* Can add margin to rows with `margin`
* Doesn't work great with nested rows

<div class="wrapper">
	<div class="row">
		<div class="c-xl-6 c-sm-12 gutter test"></div>
		<div class="c-xl-6 c-sm-12 gutter test"></div>
		<div class="c-xl-6 c-sm-12 gutter test"></div>
		<div class="c-xl-6 c-sm-12 gutter test">
			<div class="flex-full flex-col">
				<p>buy now</p>
				<p>buy now</p>
				<p>buy now</p>
			</div>
		</div>
	</div>
</div>
