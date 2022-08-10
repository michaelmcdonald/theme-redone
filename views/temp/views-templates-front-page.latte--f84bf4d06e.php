<?php
// source: C:\xampp\htdocs\wrwp-starter/wp-content/themes/wr-wp-starter-theme/views/templates/front-page.latte

use Latte\Runtime as LR;

final class Templatef84bf4d06e extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo "\n";
		/* line 2 */
		$this->createTemplate(($this->global->fn->tr_view_path)('/layout/header'), $this->params, 'include')->renderToContentType('html');
		echo "\n";
		/* line 4 */
		$this->createTemplate(($this->global->fn->tr_view_path)('/partials/hero'), ['headline' => $example_headline,
			'background_dark' => true] + $this->params, 'include')->renderToContentType('html');
		echo '


<section class="sliders">
	<div 
		class="container" 
		style="margin-bottom: 100px;"
	>
		<div class="embla embla--test">
			<div class="embla__container">
';
		for ($i = 0;
		$i < 7;
		$i++) {
			echo '					<div class="embla__slide">
						<div class="embla__slide__inner">
							<div 
								class="card" 
								style="box-shadow: 0 0 0 1px blue"
							>
								Slide ';
			echo LR\Filters::escapeHtmlText($i) /* line 26 */;
			echo '
							</div>
						</div>
					</div>
';
		}
		echo '			</div>
		</div>

		<div class="embla__buttons">
			<button 
				class="embla__btn embla__btn-prev" 
				type="button" 
				aria-label="Go to previous slide"
			></button>
			<div class="embla__dots"></div>
			<button 
				class="embla__btn embla__btn-next" 
				type="button" 
				aria-label="Go to next slide"
			></button>
		</div>
	</div>



	<div>
		<div class="embla embla--test2">
			<div class="embla__container">
';
		for ($i = 0;
		$i < 7;
		$i++) {
			echo '					<div class="embla__slide">
						<div class="embla__slide__inner">
							<div 
								class="card" 
								style="box-shadow: 0 0 0 1px red"
							>
								Slide ';
			echo LR\Filters::escapeHtmlText($i) /* line 61 */;
			echo '
							</div>
						</div>
					</div>
';
		}
		echo '			</div>
		</div>

		<div class="embla__buttons">
			<button 
				class="embla__btn embla__btn-prev" 
				type="button" 
				aria-label="Go to previous slide"
			></button>
			<div class="embla__dots"></div>
			<button 
				class="embla__btn embla__btn-next" 
				type="button" 
				aria-label="Go to next slide"
			></button>
		</div>
	</div>


</section>



<section class="content">
	';
		echo LR\Filters::escapeHtmlText(the_content()) /* line 90 */;
		echo '
</section>

<div class="container">
	<h2>Flex Grid</h2>
</div>

<section>
  <div class="container">
		<div 
			class="f-row" 
			style="--i-cols: 4; --i-gap: 35;">
';
		for ($i = 0;
		$i < 12;
		$i++) {
			echo '				<div class="col" style="box-shadow: inset 0 0 0 1px red;">
					<div class="col-content">Column</div>
				</div>
';
		}
		echo '		</div>
	</div>
</section>

<section>
	<div class="container">
		<div 
			class="f-row" 
			style="--i-cols: 3; --i-gap: 15; --i-mb: 10;">
';
		for ($i = 0;
		$i < 4;
		$i++) {
			echo '				<div class="col" style="box-shadow: inset 0 0 0 1px red;">
					<div class="col-content">Column</div>
				</div>
';
		}
		echo '		</div>
	</div>
</section>

<section>
	<div class="container">
		<div 
			class="f-row" 
			style="--i-cols: 4; --i-gap: 30; --i-mb: 10;">
';
		for ($i = 0;
		$i < 6;
		$i++) {
			echo '				<div class="col" style="box-shadow: inset 0 0 0 1px red;">
					<div class="col-content">Column</div>
				</div>
';
		}
		echo '		</div>
	</div>
</section>

<section>
	<div class="container">
		<div 
			class="f-row" 
			style="--i-cols: 5; --i-gap: 15; --i-mb: 10;">
';
		for ($i = 0;
		$i < 10;
		$i++) {
			echo '				<div class="col" style="box-shadow: inset 0 0 0 1px red;">
					<div class="col-content">Column</div>
				</div>
';
		}
		echo '		</div>
	</div>
</section>

<section>
	<div class="container">
		<div 
			class="f-row" 
			style="--i-cols: 6; --i-gap: 15; --i-mb: 10;">
';
		for ($i = 0;
		$i < 8;
		$i++) {
			echo '				<div class="col" style="box-shadow: inset 0 0 0 1px red;">
					<div class="col-content">Column</div>
				</div>
';
		}
		echo '		</div>
	</div>
</section>

<section>
	<div class="container">
		<div 
			class="f-row" 
			style="--i-cols: 7; --i-gap: 15; --i-mb: 10;">
';
		for ($i = 0;
		$i < 9;
		$i++) {
			echo '				<div class="col" style="box-shadow: inset 0 0 0 1px red;">
					<div class="col-content">Column</div>
				</div>
';
		}
		echo '		</div>
	</div>
</section>

<section>
	<div class="container">
		<h2>Flex Grid - two-cols-custom</h2>
		<div 
			class="f-row two-cols-custom" 
			style="--i-gap: 40; --i-mb: 0; --i-first-col-w: 70%;">
';
		for ($i = 0;
		$i < 2;
		$i++) {
			echo '				<div class="col" style="box-shadow: inset 0 0 0 1px red;">
					<div class="col-content">Column</div>
				</div>
';
		}
		echo '		</div>
	</div>
</section>

<section>
	<div class="container">
		<h2>Flex Grid - two-cols-custom</h2>
		<div 
			class="f-row two-cols-custom" 
			style="--i-cols: 2; --i-gap: 90; --i-mb: 0; --i-first-col-w: 390px;">
';
		for ($i = 0;
		$i < 2;
		$i++) {
			echo '				<div class="col" style="box-shadow: inset 0 0 0 1px red;">
					<div class="col-content">Column</div>
				</div>
';
		}
		echo '		</div>
	</div>
</section>

<section>
	<div class="container">
		<h2>Flex Grid - no-gutter</h2>
		<div 
			class="f-row" 
			style="--i-cols: 5;"
		>
';
		for ($i = 0;
		$i < 10;
		$i++) {
			echo '				<div class="col" style="box-shadow: inset 0 0 0 1px red;">
					<div class="col-content">Column</div>
				</div>
';
		}
		echo '		</div>
	</div><!-- cont -->
</section>

<section>
	<div class="container">
		<h2>Dropdowns</h2>
';
		$dropdownItems = ['dd-item1', 'dd-item2', 'dd-item3', 'dd-item4', 'dd-item5'];
		echo '		<div class="wrap" style="display: flex;">
';
		for ($i = 0;
		$i < 3;
		$i++) {
			echo '				<div class="dropdown"
					data-replace-toggle-text="true"
					data-close-on-outside-click="true"
					';
			if ($i === 0) {
				echo 'data-transition-delay="false"';
			}
			echo '
				>
					<button
						type="button"
						class="dropdown-toggle"
					>
						<span>
							';
			echo LR\Filters::escapeHtmlText($dropdownItems[0]) /* line 243 */;
			echo '
						</span>
					</button>
					<div class="dropdown-menu">
';
			$iterations = 0;
			foreach ($dropdownItems as $key => $value) {
				echo '							<div class="dropdown-item-wrap">
								<button
									type="button"
									class="dropdown-item ';
				echo LR\Filters::escapeHtmlAttr($key == 0 ? 'active' : '') /* line 251 */;
				echo '"
									data-href="panel-';
				echo LR\Filters::escapeHtmlAttr($key) /* line 252 */;
				echo '"
								>
									';
				echo LR\Filters::escapeHtmlText($value) /* line 254 */;
				echo '
								</button>
							</div>
';
				$iterations++;
			}
			echo '					</div>
				</div>
';
		}
		echo '		</div>
	</div><!-- cont -->
</section>


<section>
	<div class="container">

		<div class="f-row" style="--i-cols: 4; --i-gap: 15">
			<div class="col" style="box-shadow: 0 0 0 1px red;">
				<div  style="padding: 20px">
					<h4>Import SVG code from theme assets synchronously example</h4>
					<br><br>
					';
		echo LR\Filters::escapeHtmlText(tr_get_media('svg-1.svg')) /* line 274 */;
		echo '

					<br><br><br>
					<h4>Get the SVG path only without outputting its code</h4>
					<br><br>
					<img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(tr_get_media_path('logo.svg'))) /* line 279 */;
		echo '" alt="yo">
				</div>
			</div>
			<div class="col" style="box-shadow: 0 0 0 1px red;">
				<div  style="padding: 20px">
					<h4>Import SVG code from theme assets asynchronously example</h4>
					<br><br>
					';
		echo LR\Filters::escapeHtmlText(tr_get_media('svg-3.svg', true)) /* line 286 */;
		echo '
				</div>
			</div>
			<div class="col" style="box-shadow: 0 0 0 1px red;">
				<div  style="padding: 20px">
					<h4>Import SVG code from uploads (media) synchronously example</h4>
					<br><br>
					';
		echo LR\Filters::escapeHtmlText(tr_get_media('http://localhost/wrwp-starter/wp-content/uploads/2021/01/svg-3.svg')) /* line 293 */;
		echo '
				</div>
			</div>

			<div class="col" style="box-shadow: 0 0 0 1px red;">
				<div  style="padding: 20px">
					<h4>Import SVG code from uploads (media) asynchronously example</h4>
					<br><br>
					';
		echo LR\Filters::escapeHtmlText(tr_get_media('http://localhost/wrwp-starter/wp-content/uploads/2021/01/svg-3.svg', true)) /* line 301 */;
		echo '
				</div>
			</div>
		</div>

	</div>
</section>


<section>
	<div class="container">

		<div class="f-row" style="--i-cols: 3; --i-gap: 30">
			<div class="col" style="box-shadow: 0 0 0 1px red;">
				<div  style="padding: 20px">
					<h4>Read image from theme assets synchronously</h4>
					<br><br>
					<h5>No ALT</h5>
					';
		echo LR\Filters::escapeHtmlText(tr_get_media('people/photo-1517299151253-d0449b733f57.jpg')) /* line 319 */;
		echo '

					<br><br>
					<h5>Don\'t Print (Only useful for debugging and showing how it will look like for some reason)</h5><br>
					';
		echo LR\Filters::escapeHtmlText(tr_get_media('people/photo-1517299151253-d0449b733f57.jpg', false, true)) /* line 323 */;
		echo '

					<br><br>
					<h5>With ALT</h5>
					';
		echo LR\Filters::escapeHtmlText(tr_get_media(['src' => 'people/photo-1517299151253-d0449b733f57.jpg', 'alt' => 'manually added alt text'])) /* line 327 */;
		echo '

					<br><br>
					<h5>With ALT and class</h5>
					';
		echo LR\Filters::escapeHtmlText(tr_get_media(['src' => 'people/photo-1517299151253-d0449b733f57.jpg', 'alt' => 'manually added alt text', 'class' => 'custom-class'])) /* line 331 */;
		echo '
				</div>
			</div>
			<div class="col" style="box-shadow: 0 0 0 1px red;">
				<div  style="padding: 20px">
					<h4>Read image from theme assets asynchronously</h4>
					<br><br>

					<h5>No ALT String</h5>
					';
		echo LR\Filters::escapeHtmlText(tr_get_media('people/photo-1517299151253-d0449b733f57.jpg', true)) /* line 340 */;
		echo '

					<h5>No ALT Array</h5>
					';
		echo LR\Filters::escapeHtmlText(tr_get_media(['src' => 'people/photo-1517299151253-d0449b733f57.jpg'], true)) /* line 343 */;
		echo '

					<h5>With manually wrritten ALT Array</h5>
					';
		echo LR\Filters::escapeHtmlText(tr_get_media(['src' => 'people/photo-1517299151253-d0449b733f57.jpg', 'alt' => 'manually added alt text'], true)) /* line 346 */;
		echo '

					<br><br>
					<h5>With ALT and class</h5>
					';
		echo LR\Filters::escapeHtmlText(tr_get_media(['src' => 'people/photo-1517299151253-d0449b733f57.jpg', 'alt' => 'manually added alt async text', 'class' => 'custom-class'], true)) /* line 350 */;
		echo '
				</div>
			</div>

			<div class="col" style="box-shadow: 0 0 0 1px red;">
				<div  style="padding: 20px">
					<h4>Read background image from theme assets asynchronously</h4>
					<br><br>
					<h5>Get only media path</h5>
					<div
						style="height: 333px; width: 100%; background-repeat: no-repeat; background-position: center; background-size: cover;"
						class="js-img-lazy jsLoading"
						data-img-src="';
		echo LR\Filters::escapeHtmlAttr(tr_get_media_path('people/photo-1517299151253-d0449b733f57.jpg')) /* line 362 */;
		echo '"
					>
					</div>
					<br><br>
					<h4>Print Image manually with path only to src</h4>
					<br><br>
					<img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(tr_get_media_path('people/photo-1517299151253-d0449b733f57.jpg'))) /* line 368 */;
		echo '">
				</div>
			</div>
		</div>

	</div>
</section>





<section>
	<div class="container">
		<h2>Buttons</h2>
';
		$btn_vars = ['brand', 'brand-outline', 'sec', 'sec-outline', 'ghost', 'ghost--brand', 'ghost--sec'];
		echo "\n";
		$iterations = 0;
		foreach ($btn_vars as $btn_var) {
			echo '		<a href="#" class="btn btn--';
			echo LR\Filters::escapeHtmlAttr($btn_var) /* line 385 */;
			echo '">Btn ';
			echo LR\Filters::escapeHtmlText($btn_var) /* line 385 */;
			echo '</a>
';
			$iterations++;
		}
		echo '	</div>
</section>



';
		/* line 391 */
		$this->createTemplate(($this->global->fn->tr_view_path)('/layout/footer'), $this->params, 'include')->renderToContentType('html');
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['key' => '247', 'value' => '247', 'btn_var' => '385'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		
	}

}